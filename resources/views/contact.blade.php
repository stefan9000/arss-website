<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARSS</title>

    <!-- Proxima Nova Font -->
    <link rel="stylesheet" href="https://use.typekit.net/nfg4hsc.css">
    <link rel="stylesheet" id="fontawesome_style" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <nav class="mainNav">
        <div class="mainNavTop">
            <img class="headerLogo" src="./assets/images/logoHeader.png" alt="Header Logo ARSS">
            <span class="menuHolder">
                <i class="fas fa-bars"></i>
            </span>
            <ul class="mainNavList">
                <li><a  href="/">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">How it work</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a class="active" href="/contact">Contact</a></li>
            </ul>
        </div>

        <!--
        <ul class="subNavList">
            <li><a href="#">House</a></li>
            <li><a href="#">Apartment</a></li>
            <li><a href="#">Industrial</a></li>
            <li><a href="#">Combination</a></li>
            <li><a href="#">Smart</a></li>
        </ul>
        -->
    </nav>
    <main class="contactMain">
        <div class="container">
            <div class="mainInfo">
                <h2>Contact us</h2>
                <div class="infoRow">
                    <img src="/assets/images/formPin.png" alt="">
                    <h4>Bulevar cara Konstantina,
                        <span>rd 80, 18000, Niš</span>
                    </h4>
                </div>
                <div class="infoRow">
                    <img src="/assets/images/formEnvelope.png" alt="">
                    <h4>Email us
                        <span>info@arss.solutions</span>
                    </h4>
                </div>
            </div>
            <div class="formHolder">
                <h2>Get in touch</h2>
                <p>Feel free to drop us a line bellow.</p>

                <form method="POST">
                    @csrf
                    <input type="text" placeholder="Your Name" name="name" required>
                    <input type="email" placeholder="Your Email" name="email" required>
                    <textarea placeholder="Your message here..." id="" rows="5" name="message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>

        @if (session()->has('contact_success'))
            <div class="message">
                <h3>Form submited successfully!</h3>
                <h3>One of our agents will contact you soon.</h3>
            </div>
        @endif
    </main>
</body>
