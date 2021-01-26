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
                <li><a class="active" href="/">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">How it work</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="/contact">Contact</a></li>
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
    <main id="root">
        <header class="header">
            @include('partialsWelcome.svgElements')
            <nav id="headerNav" class="headerNav">
                <ul>
                    <li :class="{active: activeSectionIs(4)}" @click="switchSection(4);">
                        <img src="./assets/images/water_1.svg" alt="Water">
                        <h3>Water</h3>
                    </li>
                    <li :class="{active: activeSectionIs(5)}" @click="switchSection(5);">
                        <img src="./assets/images/thermal_1.svg" alt="Thermal Energy">
                        <h3>Thermal Energy</h3>
                    </li>
                    <li :class="{active: activeSectionIs(6)}" @click="switchSection(6);">
                        <img src="./assets/images/gas_1.svg" alt="Gas">
                        <h3>Gas</h3>
                    </li>
                    <li :class="{active: activeSectionIs(7)}" @click="switchSection(7);">
                        <img src="./assets/images/electric_1.svg" alt="Water">
                        <h3>Electricity</h3>
                    </li>
                    <li :class="{active: activeSectionIs(0)}" @click="switchSection(0);">
                        <img src="./assets/images/systemsIco_1.svg" alt="Smart Systems">
                        <h3>Smart Systems</h3>
                    </li>
                    <li :class="{active: activeSectionIs(1)}" @click="switchSection(1);">
                        <img src="./assets/images/wastewater_1.svg" alt="Waste Water Treatment">
                        <h3>Waste Water Treatment</h3>
                    </li>
                    <li :class="{active: activeSectionIs(2)}" @click="switchSection(2);">
                        <img src="./assets/images/billingIco_1.svg" alt="Billing Service">
                        <h3>Billing Service</h3>
                    </li>
                    <li :class="{active: activeSectionIs(3)}" @click="switchSection(3);">
                        <img src="./assets/images/freseIco_1.svg" alt="Frese">
                        <h3>Frese</h3>
                    </li>
                </ul>
            </nav>
        </header>

        <div>
            @yield('content')
        </div>
    </main>
    <section class="contact">
        <div class="inner">
            <div class="info">
                <img src="/assets/images/pin.png" alt="Email">
                <h3>
                    <span>Bulevar cara Konstantina,</span>
                    <span>rd 80, 18000, Niš</span>
                </h3>
            </div>
            <div class="info">
                <img src="/assets/images/email.png" alt="Email">
                <h3><span>Email us</span>
                info@arss.solutions</h3>
            </div>
        </div>
    </section>
    <footer>
        <div class="inner">
            <h2>Copyright ©2019 | Arss d.o.o.</h2>
            <div class="socialIcon">
                <a href="#">
                    <img draggable="false" src="/assets/images/fb.png" alt="Facebook Icon">
                </a>
                <a href="#">
                    <img draggable="false" src="/assets/images/tw.png" alt="Twitter Icon">
                </a>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script type="text/javascript">
        const app = new Vue({
            el: '#root',
            data: {
                activeSection: 4,
                activeImage: 0,
                stickyNavBarY: 0
            },
            methods: {
                switchSection(section) {
                    this.activeSection = section;
                },
                activeSectionIs(section) {
                    return this.activeSection == section;
                },
                switchImage(image) {
                    this.activeImage = image;
                },
                activeImageIs(image) {
                    return this.activeImage == image;
                },
                handleWindowScrolling() {
                    let navbar = document.querySelector('#headerNav');
                    let svg = document.querySelector('#citySVG');
                    if (!this.stickyNavBarY) {
                        this.stickyNavBarY = navbar.offsetTop;
                    }

                    if (window.pageYOffset > this.stickyNavBarY) {
                        navbar.classList.add("sticky");
                        svg.style.display = "none";
                    } else {
                        navbar.classList.remove("sticky");
                        svg.style.display = "block";
                    }
                }
            },
            created() {
                window.addEventListener('scroll', this.handleWindowScrolling);
            }
        });
    </script>
</body>
</html>
