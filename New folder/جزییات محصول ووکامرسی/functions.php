<?php
/**
 * Hodcode Theme Functions
 *
 * Theme setup, enqueue, helpers, and WooCommerce custom UI.
 */

defined('ABSPATH') || exit; // جلوگیری از دسترسی مستقیم

// ---------------------- Theme Setup ----------------------
if (!function_exists('mytheme_setup')) {
    function mytheme_setup() {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('custom-logo');

        // Woo support + gallery features
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');

        add_theme_support('woocommerce', array(
            'thumbnail_image_width' => 350,
            'single_image_width'    => 500,
        ));

        register_nav_menus([
            'Header' => 'Header Menu',
        ]);
    }
}
add_action('after_setup_theme', 'mytheme_setup');

// ---------------------- Social Media Customizer ----------------------
add_action('customize_register', function ($wp_customize) {
    $wp_customize->add_section('hodcode_social_links', [
        'title'    => __('Social Media Links', 'hodcode'),
        'priority' => 30,
    ]);

    foreach (['facebook', 'twitter', 'linkedin'] as $social) {
        $wp_customize->add_setting("hodcode_{$social}", [
            'default'           => '',
            'transport'         => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control("hodcode_{$social}", [
            'label'   => ucfirst($social) . ' URL',
            'section' => 'hodcode_social_links',
            'type'    => 'url',
        ]);
    }
});

// ---------------------- Enqueue Styles & Scripts ----------------------
if (!function_exists('hodcode_enqueue_styles')) {
    function hodcode_enqueue_styles() {
        wp_enqueue_style('hodcode-style', get_stylesheet_uri());
        wp_enqueue_style('hodcode-webfont', get_template_directory_uri() . '/assets/fontiran.css');

        wp_enqueue_script(
            'tailwind',
            'https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4',
            [],
            null,
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'hodcode_enqueue_styles');

// // ---------------------- Enqueue Styles & Scripts ----------------------
// if (!function_exists('hodcode_enqueue_styles')) {
//     function hodcode_enqueue_styles() {
//         wp_enqueue_style('hodcode-style', get_stylesheet_uri());
//         wp_enqueue_style('hodcode-webfont', get_template_directory_uri() . '/assets/fontiran.css');

//         // 1. تغییر در نحوه لود Tailwind CDN (محل قرارگیری)
//         // این کار تضمین می کند که Tailwind در هد یا ابتدای صفحه لود شود، نه در فوتر
//         wp_enqueue_script(
//             'tailwind',
//             'https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4',
//             [],
//             null,
//             false // <--- این باید false باشد (لود در هد)، یا حذف شود
//         );

//         // 2. لود اسکریپت رفرش Tailwind
//         wp_enqueue_script(
//             'tailwind-refresh', 
//             get_template_directory_uri() . '/js/tailwind-refresh.js', 
//             ['jquery'], // نیازی به 'tailwind' به عنوان وابستگی نیست اگر در هد لود شود
//             filemtime(get_template_directory() . '/js/tailwind-refresh.js'), 
//             true // لود در فوتر
//         );
//     }
// }
// add_action('wp_enqueue_scripts', 'hodcode_enqueue_styles');

// ---------------------- Helpers ----------------------
function toPersianNumerals($input) {
    $english = ['0','1','2','3','4','5','6','7','8','9'];
    $persian = ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'];
    return str_replace($english, $persian, (string) $input);
}

// ---------------------- WooCommerce Base Tweaks ----------------------
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open');
remove_action('woocommerce_after_shop_loop_item',  'woocommerce_template_loop_product_link_close');
add_filter('woocommerce_enqueue_styles', '__return_false');

// حذف دقیق پیش‌فرض‌های صفحه محصول (نه remove_all)
add_action('wp', function () {
    if (!is_product()) return;

    // قبل از خلاصه
    remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);

    // داخل خلاصه
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);

    // بعد از خلاصه (فقط موارد پیش‌فرض ووکامرس)
    remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
    remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
    remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
}, 20);

// ---------------------- Related Products (as function) ----------------------
if (!function_exists('hodcode_render_related_aside')) {
    function hodcode_render_related_aside() {
        if (!is_product()) return;
        global $product;

        $related_ids = wc_get_related_products($product->get_id(), 3);

        if (!empty($related_ids)) : ?>
            <aside class="w-full lg:w-64 mt-6 lg:mt-0">
                <div class="bg-white rounded-xl shadow-sm p-3">
                    <h2 class="text-base font-bold mb-3">محصولات مشابه</h2>
                    <?php foreach ($related_ids as $index => $related_id) :
                        $related_product = wc_get_product($related_id); ?>
                        <div class="flex items-center gap-3 p-2">
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url($related_id, 'thumbnail')); ?>"
                                 class="w-14 h-14 object-cover rounded"
                                 alt="<?php echo esc_attr($related_product->get_name()); ?>">
                            <p class="text-sm text-gray-700"><?php echo esc_html($related_product->get_name()); ?></p>
                        </div>
                        <?php if ($index < count($related_ids) - 1) : ?>
                            <hr class="border-gray-100">
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </aside>
        <?php endif;
    }
}

// ---------------------- Single Product: Custom Layout ----------------------
add_action('woocommerce_single_product_summary', function () {
    if (!is_product()) return;
    global $product; ?>

    <div class="w-full max-w-6xl mx-auto flex flex-col lg:flex-row gap-7">

        <!-- ستون اصلی -->
        <div class="flex-1">
            <div class="w-full bg-white rounded-xl shadow-sm overflow-hidden">

                <!-- تصویر محصول -->
                <div class="flex justify-center bg-gray-100 p-6">
                    <?php echo $product->get_image('large', [
                        'class' => 'max-w-[360px] w-auto bg-gray-100 h-auto object-contain rounded'
                    ]); ?>
                </div>

                <!-- عنوان و قیمت -->
                <div class="flex flex-wrap justify-between items-center gap-3 px-4 py-3">
                    <h1 class="text-lg font-bold"><?php the_title(); ?></h1>
                    <div class="flex items-center gap-2">
                        <?php if ($product->is_on_sale() && $product->get_regular_price()) : ?>
                            <span class="bg-red-600 text-white text-xs px-2 py-1 rounded-md">
                                <?php
                                $off = round(100 * ($product->get_regular_price() - $product->get_sale_price()) / $product->get_regular_price());
                                echo toPersianNumerals($off) . '%';
                                ?>
                            </span>
                            <span class="text-gray-400 line-through text-sm">
                                <?php echo wc_price($product->get_regular_price()); ?>
                            </span>
                        <?php endif; ?>
                        <span class="text-lg font-bold text-red-600">
                            <?php echo wc_price($product->get_price()); ?>
                        </span>
                    </div>
                </div>

                <!-- توضیحات محصول -->
                <div class="px-4 pb-4 text-gray-700 text-sm leading-relaxed">
                    <?php the_content(); ?>
                </div>

                <!-- دکمه افزودن به سبد -->
                <div class="px-4 pb-6">
                    <?php woocommerce_template_single_add_to_cart() ;?>
                </div>

                <!-- ویژگی‌ها -->
                <?php
                $attributes = $product->get_attributes();
                if (!empty($attributes)) : ?>
                    <div class="bg-white px-4 pb-4">
                        <h2 class="font-bold text-base mb-2">ویژگی‌ها</h2>
                        <ul class="list-disc list-inside text-gray-700 space-y-1 text-sm">
                            <?php
                            foreach ($attributes as $attribute) {
                                if ($attribute->get_variation()) continue;
                                $label  = wc_attribute_label($attribute->get_name());
                                $values = wc_get_product_terms($product->get_id(), $attribute->get_name(), ['fields' => 'names']);
                                if (!empty($values)) {
                                    echo '<li>' . esc_html($label . ': ' . implode('، ', $values)) . '</li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                <?php endif; ?>

            </div>
        </div>

        <!-- ستون کناری: محصولات مشابه -->
        <div class="lg:w-64">
            <?php hodcode_render_related_aside(); ?>
        </div>

    </div>
<?php
}, 5);