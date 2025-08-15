<?php
// تابع چاپ هدر
function render_header($title) {
    echo <<<HTML
    <!DOCTYPE html>
    <html lang="fa" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{$title}</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="icon" type="image/png" href="HodeCode 2 - logo.png">
    </head>
    <body class="bg-slate-100 font-sans">
    <header class="bg-white shadow-sm">
        <div class="container mx-auto flex justify-between items-center p-4">
            <nav class="flex gap-6 text-gray-700">
                <img src="image/HodeCode 2 - logo.png" alt="لوگو" class="w-10 h-10 object-contain">
                <a href="index2.php" class="hover:text-orange-500">خانه</a>
                <a href="#" class="hover:text-orange-500">محصولات</a>
                <a href="#" class="hover:text-orange-500">ارتباط با ما</a>
            </nav>
        </div>
    </header>
HTML;
}

// تابع لیست‌ساز سفارشی
function add_custom_list($items, $classes = "list-disc list-inside text-gray-700 space-y-1") {
    echo '<ul class="'.$classes.'">';
    foreach ($items as $item) {
        echo "<li>{$item}</li>";
    }
    echo '</ul>';
}

// تابع چاپ محصولات مشابه
function render_similar_products($products) {
    echo '<aside class="w-full rounded lg:w-1/4">';
    echo '<div class="bg-white rounded-xl items-center shadow-sm p-3">';
    echo '<h2 class="text-lg font-bold mb-4">محصولات مشابه</h2>';
    foreach ($products as $index => $p) {
        echo '<div class="flex flex-row items-center gap-4 p-2">';
        echo '<img src="'.$p["image"].'" class="w-16 h-16 object-cover rounded" alt="">';
        echo '<p class="text-sm text-gray-700">'.$p["name"].'</p>';
        echo '</div>';
        if ($index < count($products) - 1) {
            echo '<hr class="border-gray-200">';
        }
    }
    echo '</div>';
    echo '</aside>';
}


// تابع چاپ محصول اصلی
function render_product($product) {
    echo '<section class="w-full lg:w-3/4 rounded order-1 lg:order-2">';
    echo '<div class=" w-full bg-white rounded-t-xl shadow-sm">';
    echo '<div class="flex justify-center bg-gray-300 rounded-t-xl mb-4">';
    echo '<img src="'.$product["image"].'" alt="'.$product["name"].'" class="max-w-[500px] rounded-t-xl">';
    echo '</div>';
    echo '<div class="flex flex-wrap justify-between items-center gap-4 p-3 mb-4">';
    echo '<h1 class="text-xl font-bold">'.$product["name"].'</h1>';
    echo '<div class="flex items-center gap-2">';
    echo '<span class="text-gray-400 line-through">'.$product["old_price"].'</span>';
    echo '<span class="text-lg font-bold text-red-600">'.$product["price"].'</span>';
    echo '</div>';
    echo '</div>';    
    echo '<p class="text-gray-700 p-4 text-justify leading-relaxed mb-4">'.$product["description"].'</p>';
    echo '<div class="p-4 ">';       
    echo '<button class="bg-blue-500 text-white px-4 flex color-white gap-3 py-3 rounded hover:bg-blue-600">';
    echo '<img src="image/shopping-cart.png" class="w-5 h-5 inline">';
    echo 'افزودن به سبد';
    echo '</button>';
    echo '</div>';
    
    // ویژگی‌ها
    echo '<div class="bg-white mt-6 p-4 rounded shadow-sm">';
    echo '<h2 class="font-bold text-lg mb-2">ویژگی‌ها</h2>';
    add_custom_list($product["features"]);
    echo '</div>';
    echo '</div>';
    
    echo '</section>';
}

// تابع فوتر
function render_footer() {
    echo <<<HTML
    <footer class="bg-white text-center p-4 mt-6">
        <p class="text-black text-sm">© کلیه حقوق این سایت محفوظ است.</p>
    </footer>
    </body>
    </html>
HTML;
}

// ---------------------- داده‌ها ----------------------
$product = [
    "name" => "دوربین دیجیتال کانن مدل EOS 250D",
    "old_price" => "29,470,000",
    "price" => "27,399,000 تومان",
    "image" => "image/—Pngtree—there is a camera with_15408466.png",
    "description" => "دوربین کانن 2500 E05 یک دوربین همه کاره است که هم در عکاسی و هم در فیلمبرداری خوب عمل می کند. این دوربین  دارای حسگر APS-C CMOS با رزولوشن 24٫20 مگاپیکسلی است که از پردازشگر 8 DIGIC بهره می برد که می تواند با کیفیت 4K  فیلمبرداری کند. بازه 150 این دوربین بین 100 تا 25600 است که به شما امکان عکاسی در شرایط نوری مختلف را می دهد.  جسگر این دوربین دارای فوکوس خودکار Dual Pixel CMOS AF است و از تشخیص فازی برای فوکوس دقیق تر و مربع تر هم  در زمان عکاسی و هم در زمان فیلمبرداری در حالت Live View بهره می برد اما زمانی که از منظره یاب استفاده می کنید تا نقطه  با سیستم تشخیص قاری برای فوکوس کردن به شما کمک میکنند که از دقت و سرعت بالایی برخوردار هستند. ",
    "features" => ["نوع حسگر: CMOS", "قطع حسگر: APS-C"]
];

$similar_products = [
    ["name" => "دوربین دیجیتال کانن مدل AX600", "image" => "image/—Pngtree—there is a camera with_15408466.png"],
    ["name" => "دوربین دیجیتال کانن مدل AX602", "image" => "image/—Pngtree—there is a camera with_15408466.png"],
    ["name" => "دوربین دیجیتال کانن مدل AX603", "image" => "image/—Pngtree—there is a camera with_15408466.png"],
];

// ---------------------- اجرای صفحه ----------------------
render_header($product["name"]);

echo '<main class="container mx-auto p-4 flex flex-col lg:flex-row gap-6">';
render_similar_products($similar_products);
render_product($product);
echo '</main>';

render_footer();
?>
