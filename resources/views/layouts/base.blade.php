<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BANTU INDONESIAKU</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    </head>
<body>
    <header class="navbar">
        <div class="logo">
            <a href="/"><img src="assets/Bantu Indonesiaku1.png" alt="Logo"></a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/project">PROJECT</a></li>
                <li><a href="/index">DONORS</a></li>
                <li><a href="/about">ABOUT</a></li>
                <li><a href="/login">LOGIN</a></li>
            </ul>
        </div>
    </header>
          
    @yield('content')
    <footer>
        <footer class="footer">
            <div class="footer-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fab fa-instagram"></i>
                        <a href="https://www.instagram.com/charity_org/" target="_blank">@charity_org</a>
                    </div>
                    <div class="contact-item">
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:info@charity.org">info@charity.org</a>
                    </div>
                    <div class="contact-item">
                        <i class="fa fa-phone"></i>
                        <p>+1 (123) 456-7890</p>
                    </div>
                </div>
            </div>
        </footer>
            @yield('footer')
        </footer>
</body>

</html>