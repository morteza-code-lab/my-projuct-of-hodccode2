<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>contact-us</title>
 <!-- <link rel="stylesheet" href="./style-contact .css"> -->
 <link rel="icon" type="image/png" href="HodeCode 2 - logo.png">
 <style>
        body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
        font-family: 'Tahoma', sans-seri;
        background-color: #f5f5f5;
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


    .main-content {
        flex-grow: 1; 
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 50px 20px;
    }

    .main-content h1 {
        font-size: 36px;
        color: #333;
        margin-bottom: 10px;
    }

    .main-content p {
        color: #666;
        font-size: 16px;
        margin-bottom: 30px;
    }

    .contact-form {
        background-color: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 500px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .contact-form label {
        display: block;
        font-weight: bold;
        margin-bottom: 8px;
        color: #555;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 14px;
        font-family: inherit;
        resize: none;
    }

    .contact-form textarea {
        height: 120px;
    }

    .contact-form button {
        width: 100%;
        padding: 15px;
        background-color: #5d98d2; 
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .contact-form button:hover {
        background-color: #4a80b8;
    }


    footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 50px;
        background-color: #ffffff; 
        border-top: 1px solid #ddd;
        margin-top: auto; 
    }


    .footer-logo {
        width: 40px; 
        margin: 0;
        position: static;
    }

    .footer p {
        margin: 0;
        color: #666;
        font-size: 14px;
    }

    .footer img {
        height: 30px;
    }

    /* .footer-social { */
        /* display: flex; */
        /* gap: 15px; */
    /* } */

    /* .footer-social a { */
        /* color: #aaa; */
    /* } */
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
            <a href="./contact-us .html" class="contact-link"> ارتباط با ما</a>
            <a href="#" class="cart-link">
                <svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2S15.9 22 17 22s2-.9 2-2-.9-2-2-2zM7.16 13.26l.03-.12.9-3.18h7.45c.67 0 1.27-.4 1.5-1.02l2.7-7.53-1.95-.7-2.35 6.54H9.12l-.9-3.18-4-1v1h2.02l1.32 4.68-2.3 5.65H19v-2H7.16z"/></svg>
            </a>
        </div>
    </header>

 <div class="main-content">
<h1>ارتباط با ما</h1>
<p>در صورت داشتن سوال یا بروز مشکل در سایت از طریق فرم زیر با ما در ارتباط باشید.</p>
<form class="contact-form">
<div class="form-group">
<label for="name">نام</label>
<input type="text" id="name" placeholder="نام خود را وارد نمایید" required>
 </div>
<div class="form-group">
<label for="email">ایمیل</label>
<input type="email" id="email" placeholder="ایمیل خود را وارد نمایید" required>
</div>
<div class="form-group">
<label for="message">متن پیام</label>
<textarea id="message" placeholder="متن مورد نظر را وارد نمایید"></textarea>
</div>
<button type="submit">ارسال پیام</button>
</form>
</div>

<footer>
    <div class="footer-left">
    <img src="./HodeCode 2 - logo.png" alt="لوگو" class="footer-logo">
    </div>
    <div class="footer-center">
    <p>© تمامی حقوق این سایت برای هدکد محفوظ است</p>
    </div>
    <div class="footer-right">
    </div>
    </footer>
</body>
</html>