<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="icon" type="image/png" href="HodeCode 2 - logo.png">
<style>
    @media (max-width: 900px) {
        .products-container {
     grid-template-columns: repeat(2, 1fr);
     max-width: 600px;
     }
    }

    @media (max-width: 600px) {
        .products-container {
        grid-template-columns: 1fr; 
        padding: 10px;}
    }


    body {
    margin: 0;
    font-family: "Tahoma", sans-seri;
    background: #d4d4d438;
    }
    header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 9px 24px;
    border-bottom: 1px solid #ddd;
    background-color: #fff;
    }
    .nav-bar {
    display: flex;
    align-items: center;
    gap: 30px;
    }
    .logo {
    display: flex;
    align-items: center;
    cursor: pointer;
    }
    .logo img {
    height: 32px;
    margin-left: 8px;
    }
    nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
    padding: 0;
    margin: 0;
    }
    nav ul li {
    font-size: 16px;
    }
    nav ul li a {
    text-decoration: none;
    color: #222;
    transition: color 0.3s ease;
    }
    nav ul li a:hover {
    color: #ff5722;
    }

    .cart-contact {
    display: flex;
    align-items: center;
    gap: 35px;
    }
    .contact-link {
    font-size: 14px;
    color: #555;
    text-decoration: none;
    cursor: pointer;
    transition: color 0.3s ease;
    }
    .contact-link:hover {
    color: #ff5722;
    }
    .cart-link {
    cursor: pointer;
    }
    .cart-link svg {
    width: 24px;
    height: 24px;
    fill: #555;
    transition: fill 0.3s ease;
    }
    .cart-link:hover svg {
    fill: #ff5722;
    }

    .cart-contact span:hover {
    color: #ff5722;
    }

    .category-bar {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
    margin: 30px 0;
    }
    .category-btn {
    padding: 10px 20px;
    border: none;
    background-color: white;
    border-radius: 25px;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.3s ease;
    }
    .category-btn:hover {
        background-color: #ff5722;
        color: white;
    }
    .category-btn.active {
    background-color: #ff5722;
    color: white;
    }

    .products-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    max-width: 900px;
    margin: 30px auto;
    padding: 20px;
    }

    .box {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
    max-width: 300px;
    display: flex;
    flex-direction: column;
    max-width: 100%;
    }
    .box img {
        width: 100%;
        height: auto;
        object-fit: cover;
        display: block;
    }
    .box-content {
    padding: 15px;
    }
    .camera-name {
    font-weight: bold;
    margin: 10px 0 5px 0;
    font-size: 16px;
    text-align: center;
    }
    .discount-price {
    color: #d35400;
    font-weight: bold;
    font-size: 16px;
    display: flex;
    justify-content: center;
    align-items: baseline;
    gap: 5px;
    }
    .price {
    color: #555;
    font-size: 14px;
    text-decoration: line-through;
    }
    .button-group {
    display: flex;
    gap: 10px;
    margin-top: 10px;
    justify-content: center;
    }
    .button {
    background-color: #d35400;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s ease;
    text-decoration: none;
    display: inline-block;
    text-align: center;
    }
    .button1 {
    background-color: #dbdbdb !important;
    border: none;
    color: #000000 !important;
    }
    .button2 {
    background-color: #d35400 !important;
    color: white !important;
    }
    .button:hover {
    background-color: #e67e22;
    }
    .button1:hover {
    background-color: #e67e22 !important;
    color: white !important;
    }
    .footer {
  display: flex;
  justify-content:center;
  align-items: center;
  gap: 20px;
  padding: 5px;
  background-color: #fff;
  border-top: 1px solid #ddd;
  margin-top: 40px;
  position: relative;
    }

    .footer-logo {
  width: 40px;
  margin-top: 10px;
  position: absolute;
  right: 24px;
    }


    @media (max-width: 768px) {
    header {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }
    .nav-bar, .cart-contact {
        width: 100%;
        justify-content: space-between;
    }
    nav ul {
        gap: 10px;
    }
    
    .category-bar {
        gap: 5px;
    }
    .category-btn {
        padding: 8px 15px;
        font-size: 13px;
    }
    
    .footer {
        flex-direction: column;
        gap: 10px;
        text-align: center;
        padding-top: 50px;
    }
    .footer-logo {
        position: static;
        margin-bottom: -30px;
    }
    }
</style>

</head>
<body>
    <header>
        <div class="nav-bar">
            <div class="logo" onclick="location.href='#'">
                <img src="./HodeCode 2 - logo.png" alt="لوگو">
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">خانه</a></li>
                    <li><a href="products.html">محصولات</a></li>
                    <li><a href="shop.html">فروشگاه</a></li>
                </ul>
            </nav>
        </div>
        <div class="cart-contact">
            <a href="./contact.php" class="contact-link"> ارتباط با ما</a>
            <a href="#" class="cart-link">
                <svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2S15.9 22 17 22s2-.9 2-2-.9-2-2-2zM7.16 13.26l.03-.12.9-3.18h7.45c.67 0 1.27-.4 1.5-1.02l2.7-7.53-1.95-.7-2.35 6.54H9.12l-.9-3.18-4-1v1h2.02l1.32 4.68-2.3 5.65H19v-2H7.16z"/></svg>
            </a>
        </div>
    </header>
<main>
    <div class="category-bar">
        <button class="category-btn active">همه محصولات</button>
        <button class="category-btn">هدفون</button>
        <button class="category-btn">دوربین دیجیتال</button>
        <button class="category-btn">کنسول بازی</button>
        <button class="category-btn">لوازم گرافیکی</button>
    </div>

    <div class="products-container">
        <div class="box">
            <img src="./—Pngtree—there is a camera with_15408466.png" alt="دوربین">
            <div class="box-content">
                <h3 class="camera-name">دوربین دیجیتال آکسون مدل Ax6062</h3>
                <h5 class="discount-price">
                    27,399,000 <del class="price">28,440,000</del>
                </h5>
                <div class="button-group">
                    <a href="./details.php" class="button button1">مشاهده جزییات</a>
                    <a href="#" class="button button2">افزودن به سبد</a>
                </div>
            </div>
        </div>
        <div class="box">
            <img src="./—Pngtree—there is a camera with_15408466.png" alt="دوربین">
            <div class="box-content">
                <h3 class="camera-name">دوربین دیجیتال آکسون مدل Ax6062</h3>
                <h5 class="discount-price">
                    27,399,000 <del class="price">28,440,000</del>
                </h5>
                <div class="button-group">
                    <a href="./details.php" class="button button1">مشاهده جزییات</a>
                    <a href="#" class="button button2">افزودن به سبد</a>
                </div>
            </div>
        </div>
        <div class="box">
            <img src="./—Pngtree—there is a camera with_15408466.png" alt="دوربین">
            <div class="box-content">
                <h3 class="camera-name">دوربین دیجیتال آکسون مدل Ax6062</h3>
                <h5 class="discount-price">
                    27,399,000 <del class="price">28,440,000</del>
                </h5>
                <div class="button-group">
                    <a href="./details.php" class="button button1">مشاهده جزییات</a>
                    <a href="#" class="button button2">افزودن به سبد</a>
                </div>
            </div>
        </div>
        
        <div class="box">
            <img src="./—Pngtree—there is a camera with_15408466.png" alt="دوربین">
            <div class="box-content">
                <h3 class="camera-name">دوربین دیجیتال آکسون مدل Ax6062</h3>
                <h5 class="discount-price">
                    27,399,000 <del class="price">28,440,000</del>
                </h5>
                <div class="button-group">
                    <a href="./details.php" class="button button1">مشاهده جزییات</a>
                    <a href="#" class="button button2">افزودن به سبد</a>
                </div>
            </div>
        </div>
        <div class="box">
            <img src="./—Pngtree—there is a camera with_15408466.png" alt="دوربین">
            <div class="box-content">
                <h3 class="camera-name">دوربین دیجیتال آکسون مدل Ax6062</h3>
                <h5 class="discount-price">
                    27,399,000 <del class="price">28,440,000</del>
                </h5>
                <div class="button-group">
                    <a href="./details.php" class="button button1">مشاهده جزییات</a>
                    <a href="#" class="button button2">افزودن به سبد</a>
                </div>
            </div>
        </div>
        <div class="box">
            <img src="./—Pngtree—there is a camera with_15408466.png" alt="دوربین">
            <div class="box-content">
                <h3 class="camera-name">دوربین دیجیتال آکسون مدل Ax6062</h3>
                <h5 class="discount-price">
                    27,399,000 <del class="price">28,440,000</del>
                </h5>
                <div class="button-group">
                    <a href="./details.php" class="button button1">مشاهده جزییات</a>
                    <a href="#" class="button button2">افزودن به سبد</a>
                </div>
            </div>
        </div>
    </div>

</main>
    

    <footer class="footer">
      <img src="./HodeCode 2 - logo.png" alt="لوگو" class="footer-logo">
      <p>© تمامی حقوق این سایت برای هدکد محفوظ است</p>
  </footer>
</body>
</html>