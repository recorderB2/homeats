<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/84fa22bc8b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('css/normalize.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>
        @yield('title')
    </title>
</head>
<body>
    <header id="header">
        <i class="fa-solid fa-bars" id="bars"></i>
        <a href="{{route('homeats')}}">
            <img src="images/All/logo.png" alt="Logo" class="logo">
        </a>
    </header>



    <nav id="nav">
        <a href="{{route('homeats')}}">
            <img src="images/All/logo.png" alt="Logo" class="logo">
        </a>
        <div class="col list">
            <a href="/discover">
                Discover Homeats
            </a>
            <a href="/help">
                Need help?
            </a>
            <a href="/idk">
                Become Our Business Partner
            </a>
        </div>
        <div class="col download">
            <p>
                Download Now
            </p>
            <a href="/google">
                <img src="images/All/google play.png" alt="Goole Play Link">
            </a>
            <a href="apple">
                <img src="images/All/app store.svg" alt="App Store Link">
            </a>
        </div>
        <div class="social">
            <a href="/facebook">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="/instagram">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="/twitter">
                <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="/whatsapp">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
            <a href="/youtube">
                <i class="fa-brands fa-youtube"></i>
            </a>
            <a href="/linkedin">
                <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="/tiktok">
                <i class="fa-brands fa-tiktok"></i>
            </a>
            <a href="/pinterest">
                <i class="fa-brands fa-pinterest"></i>
            </a>  
        </div>
    </nav>
    <div class="nav-close" id="nav-close"></div>



    {{ $slot }}



    <footer>
        <div class="list">
            <p>
                Discover Homeats
            </p>
            <a href="/about">
                About Us
            </a>
            <a href="/impact">
                Homeats Impact
            </a>
            <a href="/leadership">
                Leadership Team
            </a>
            <a href="/contact">
                Contact Us
            </a>
        </div>
        <div class="list">
            <p>
                Need help ?
            </p>
            <a href="/faq">
                FAQ
            </a>
            <a href="/personal-data">
                Protection of Personal Data
            </a>
            <a href="/privacy">
                Privacy Policy
            </a>
            <a href="/terms">
                Terms & Conditions
            </a>
            <a href="/cookie">
                Cookie Policy            
            </a>
        </div>
        <div class="list">
            <p>
                Become A Partner
            </p>
            <a href="/vendor">
                Become a Homeats Vendor
            </a>
            <a href="/dietitian">
                Become a Homeats Dietitian
            </a>
            <a href="/driver">
                Become a Homeats Driver 
            </a>
            <a href="/charity">
                Become a Homeats Charity
            </a>
            <a href="/host">
                Become a Homeats Host           
            </a>
        </div>
        <div class="col download">
            <p>
                Download Now
            </p>
            <a href="/google">
                <img src="images/All/google play.png" alt="Goole Play Link">
            </a>
            <a href="apple">
                <img src="images/All/app store.svg" alt="App Store Link">
            </a>
        </div>
        <div>
            <div class="social">
                <a href="/facebook">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="/instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="/twitter">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="/whatsapp">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a href="/youtube">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href="/linkedin">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="/tiktok">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
                <a href="/pinterest">
                    <i class="fa-brands fa-pinterest"></i>
                </a>  
            </div>
        </div>
        <div class="copy-right">
            ©&nbspHOMEATS&nbspCopyright.&nbsp<wbr>All&nbsprights&nbspreserved.
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>