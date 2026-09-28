<section class="shark-hero">

    {{-- Animated Tech Background --}}
    <div class="tech-bg">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    {{-- Glow Effects --}}
    <div class="shark-glow glow-1"></div>
    <div class="shark-glow glow-2"></div>
    <div class="shark-glow glow-3"></div>

    <div class="container">

        <div class="row align-items-center gy-5">

            {{-- =========================
                 CONTENT
            ========================== --}}
            <div class="col-lg-6 order-2 order-lg-1">

                <div class="shark-hero-content">

                    {{-- Badge --}}
                    <div class="shark-badge">
                        <span class="pulse-dot"></span>

                        <span>
                            كل إكسسوارات موبايلك في مكان واحد
                        </span>
                    </div>

                    {{-- Title --}}
                    <h1>
                        كل احتياجات
                        <span>موبايلك</span>
                        مع    شرق  استور
                    </h1>

                    {{-- Description --}}
                    <p class="shark-hero-description">
                        اكتشف تشكيلة مميزة من إكسسوارات الموبايلات
                        من شواحن وكابلات وسماعات وجرابات وواقيات شاشة
                        بجودة عالية وأسعار مناسبة.
                    </p>

                    {{-- Buttons --}}
                    <div class="shark-hero-buttons">

                        {{-- Products --}}
                        <a href="{{ route('shop.index') }}"
                           class="shark-hero-btn primary-btn">

                            <i class="bi bi-phone-fill"></i>

                            تصفح المنتجات

                        </a>


                        {{-- WhatsApp --}}
                        @if(!empty($settings?->whatsapp))

                            @php
                                $whatsapp = preg_replace(
                                    '/[^0-9]/',
                                    '',
                                    $settings->whatsapp
                                );

                                if (str_starts_with($whatsapp, '01')) {
                                    $whatsapp = '20' . substr($whatsapp, 1);
                                }
                            @endphp

                            <a
                                href="https://wa.me/{{ $whatsapp }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="shark-hero-btn whatsapp-btn"
                            >

                                <i class="bi bi-whatsapp"></i>

                                تواصل معنا

                            </a>

                        @else

                            <a
                                href="{{ route('contact') }}"
                                class="shark-hero-btn whatsapp-btn"
                            >

                                <i class="bi bi-chat-dots-fill"></i>

                                تواصل معنا

                            </a>

                        @endif

                    </div>


                    {{-- Features --}}
                    <div class="shark-hero-features">

                        <div class="shark-feature">

                            <i class="bi bi-patch-check-fill"></i>

                            <span>
                                جودة مضمونة
                            </span>

                        </div>


                        <div class="shark-feature">

                            <i class="bi bi-tags-fill"></i>

                            <span>
                                أسعار مناسبة
                            </span>

                        </div>


                        <div class="shark-feature">

                            <i class="bi bi-truck"></i>

                            <span>
                                توصيل سريع
                            </span>

                        </div>

                    </div>

                </div>

            </div>


            {{-- =========================
                 MOBILE SCENE
            ========================== --}}
            <div class="col-lg-6 order-1 order-lg-2">

                <div class="mobile-scene">

                    {{-- Orbit --}}
                    <div class="mobile-orbit orbit-one"></div>
                    <div class="mobile-orbit orbit-two"></div>


                    {{-- Smartphone --}}
                    <div class="smartphone">

                        <div class="phone-frame">

                            <div class="phone-screen">

                                {{-- Status Bar --}}
                                <div class="screen-top">

                                    <span class="signal">
                                        <i class="bi bi-wifi"></i>
                                    </span>

                                    <span class="time">
                                        9:41
                                    </span>

                                    <span class="battery">
                                        <i class="bi bi-battery-full"></i>
                                    </span>

                                </div>


                                {{-- Logo --}}
                                <div class="screen-logo">

                                    <i class="bi bi-phone-fill"></i>

                                </div>


                                <div class="screen-title">
                                       شرق  استور
                                </div>


                                <div class="screen-subtitle">
                                    إكسسوارات موبايلات
                                </div>


                                {{-- Icons --}}
                                <div class="screen-icons">

                                    <span>
                                        <i class="bi bi-headphones"></i>
                                    </span>

                                    <span>
                                        <i class="bi bi-usb-plug-fill"></i>
                                    </span>

                                    <span>
                                        <i class="bi bi-phone"></i>
                                    </span>

                                </div>

                            </div>


                            {{-- Phone Speaker --}}
                            <div class="phone-speaker"></div>

                            {{-- Camera --}}
                            <div class="phone-camera"></div>

                            {{-- Buttons --}}
                            <div class="phone-button button-one"></div>
                            <div class="phone-button button-two"></div>

                        </div>

                    </div>


                    {{-- Charging Cable --}}
                    <div class="charging-cable">

                        <div class="cable-head">

                            <div class="cable-port"></div>

                        </div>

                        <div class="cable-wire"></div>

                    </div>


                    {{-- Floating Products --}}

                    <div class="floating-product product-one">
                        <i class="bi bi-headphones"></i>
                    </div>

                    <div class="floating-product product-two">
                        <i class="bi bi-lightning-charge-fill"></i>
                    </div>

                    <div class="floating-product product-three">
                        <i class="bi bi-usb-plug-fill"></i>
                    </div>

                    <div class="floating-product product-four">
                        <i class="bi bi-phone"></i>
                    </div>


                    {{-- Floating Circles --}}
                    <div class="tech-circle circle-one"></div>
                    <div class="tech-circle circle-two"></div>
                    <div class="tech-circle circle-three"></div>


                    {{-- Particles --}}
                    <div class="tech-particle particle-one"></div>
                    <div class="tech-particle particle-two"></div>
                    <div class="tech-particle particle-three"></div>
                    <div class="tech-particle particle-four"></div>


                    {{-- Store Card --}}
                    <div class="store-card">

                        <div class="store-icon">
                            <i class="bi bi-bag-fill"></i>
                        </div>

                        <div>

                            <strong>
                                   شرق  استور
                            </strong>

                            <small>
                                إكسسوارات موبايلات
                            </small>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Scroll --}}
    <div class="hero-scroll">

        <span>
            اكتشف منتجاتنا
        </span>

        <i class="bi bi-chevron-down"></i>

    </div>

</section>


<style>

/* =========================================================
   SHARK STORE HERO
   CYAN / SKY BLUE PREMIUM THEME
========================================================= */

.shark-hero {

    position: relative;

    min-height: 720px;

    overflow: hidden;

    display: flex;

    align-items: center;

    direction: rtl;

    color: #ffffff;

    background:

        radial-gradient(
            circle at 78% 20%,
            rgba(255,255,255,.38),
            transparent 28%
        ),

        radial-gradient(
            circle at 15% 75%,
            rgba(255,255,255,.18),
            transparent 32%
        ),

        radial-gradient(
            circle at 55% 50%,
            rgba(0,188,212,.35),
            transparent 40%
        ),

        linear-gradient(
            135deg,
            #08cde8 0%,
            #00b8d4 42%,
            #0097b2 72%,
            #007c91 100%
        );

}


/* =========================================================
   GRID
========================================================= */

.shark-hero::before {

    content: "";

    position: absolute;

    inset: 0;

    background-image:

        linear-gradient(
            rgba(255,255,255,.10) 1px,
            transparent 1px
        ),

        linear-gradient(
            90deg,
            rgba(255,255,255,.10) 1px,
            transparent 1px
        );

    background-size: 55px 55px;

    mask-image:

        linear-gradient(
            to bottom,
            transparent,
            black 25%,
            black 75%,
            transparent
        );

    opacity: .45;

    pointer-events: none;

}


/* =========================================================
   GLOW
========================================================= */

.shark-glow {

    position: absolute;

    width: 500px;

    height: 500px;

    border-radius: 50%;

    filter: blur(110px);

    pointer-events: none;

}


.glow-1 {

    background: rgba(255,255,255,.55);

    top: -180px;

    right: 18%;

}


.glow-2 {

    background: rgba(120,245,255,.30);

    bottom: -220px;

    left: 8%;

}


.glow-3 {

    background: rgba(0,255,255,.22);

    top: 30%;

    left: 45%;

}


/* =========================================================
   CONTENT
========================================================= */

.shark-hero-content {

    position: relative;

    z-index: 10;

    padding: 40px 0;

}


/* =========================================================
   BADGE
========================================================= */

.shark-badge {

    display: inline-flex;

    align-items: center;

    gap: 10px;

    padding: 10px 18px;

    border: 1px solid rgba(255,255,255,.45);

    background: rgba(255,255,255,.14);

    border-radius: 50px;

    color: #ffffff;

    font-size: 14px;

    margin-bottom: 25px;

    backdrop-filter: blur(12px);

    box-shadow:
        0 8px 30px rgba(0,0,0,.08);

}


.pulse-dot {

    width: 9px;

    height: 9px;

    border-radius: 50%;

    background: #ffffff;

    box-shadow:

        0 0 12px #ffffff,

        0 0 25px rgba(255,255,255,.8);

    animation: pulseDot 1.5s infinite;

}


@keyframes pulseDot {

    0%,
    100% {

        transform: scale(1);

        opacity: 1;

    }

    50% {

        transform: scale(1.5);

        opacity: .5;

    }

}


/* =========================================================
   TITLE
========================================================= */

.shark-hero-content h1 {

    font-size: clamp(42px, 5vw, 72px);

    line-height: 1.15;

    font-weight: 900;

    margin: 0 0 25px;

    letter-spacing: -2px;

    color: #ffffff;

    text-shadow:

        0 5px 25px rgba(0,70,90,.18);

}


.shark-hero-content h1 span {

    display: block;

    color: #ffffff;

    text-shadow:

        0 0 20px rgba(255,255,255,.40),

        0 0 50px rgba(255,255,255,.20);

}


/* =========================================================
   DESCRIPTION
========================================================= */

.shark-hero-description {

    max-width: 620px;

    color: rgba(255,255,255,.90);

    font-size: 18px;

    line-height: 2;

    margin-bottom: 30px;

}


/* =========================================================
   BUTTONS
========================================================= */

.shark-hero-buttons {

    display: flex;

    gap: 14px;

    flex-wrap: wrap;

}


.shark-hero-btn {

    min-width: 175px;

    padding: 15px 25px;

    border-radius: 14px;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 10px;

    text-decoration: none;

    font-weight: 700;

    transition: .35s ease;

}


/* =========================================================
   PRIMARY BUTTON
========================================================= */

.primary-btn {

    background:

        linear-gradient(
            135deg,
            #ffffff,
            #e9fdff
        );

    color: #008ca5;

    box-shadow:

        0 12px 35px
        rgba(0,60,80,.20);

}


.primary-btn:hover {

    transform: translateY(-4px);

    color: #00788e;

    background: #ffffff;

    box-shadow:

        0 18px 45px
        rgba(0,60,80,.28);

}


.primary-btn i {

    color: #00aeca;

}


/* =========================================================
   CONTACT BUTTON
========================================================= */

.whatsapp-btn {

    background: rgba(255,255,255,.12);

    border: 1px solid rgba(255,255,255,.40);

    color: #ffffff;

    backdrop-filter: blur(12px);

}


.whatsapp-btn:hover {

    transform: translateY(-4px);

    color: #ffffff;

    background: rgba(255,255,255,.20);

    border-color: rgba(255,255,255,.65);

}


.whatsapp-btn i {

    color: #ffffff;

}


/* =========================================================
   FEATURES
========================================================= */

.shark-hero-features {

    display: flex;

    flex-wrap: wrap;

    gap: 25px;

    margin-top: 35px;

}


.shark-feature {

    display: flex;

    align-items: center;

    gap: 9px;

    color: rgba(255,255,255,.92);

    font-size: 14px;

}


.shark-feature i {

    color: #ffffff;

    font-size: 18px;

    filter:

        drop-shadow(
            0 0 8px
            rgba(255,255,255,.65)
        );

}


/* =========================================================
   MOBILE SCENE
========================================================= */

.mobile-scene {

    position: relative;

    height: 620px;

    width: 100%;

    display: flex;

    justify-content: center;

    align-items: center;

}


/* =========================================================
   ORBITS
========================================================= */

.mobile-orbit {

    position: absolute;

    border:

        1px solid
        rgba(255,255,255,.35);

    border-radius: 50%;

    animation:

        rotateOrbit
        18s
        linear
        infinite;

    box-shadow:

        0 0 20px
        rgba(255,255,255,.08);

}


.orbit-one {

    width: 570px;

    height: 570px;

}


.orbit-two {

    width: 440px;

    height: 440px;

    animation-duration: 13s;

    animation-direction: reverse;

}


@keyframes rotateOrbit {

    from {

        transform: rotate(0deg);

    }

    to {

        transform: rotate(360deg);

    }

}


/* =========================================================
   SMARTPHONE
========================================================= */

.smartphone {

    position: absolute;

    width: 235px;

    height: 430px;

    top: 90px;

    left: 50%;

    transform:

        translateX(-50%)
        rotate(-8deg);

    z-index: 5;

    filter:

        drop-shadow(
            0 35px 45px
            rgba(0,55,70,.35)
        );

}


.phone-frame {

    position: relative;

    width: 100%;

    height: 100%;

    border-radius: 38px;

    padding: 10px;

    background:

        linear-gradient(
            145deg,
            #f8feff,
            #a8edf7,
            #087e94
        );

    border:

        2px solid
        rgba(255,255,255,.65);

    box-shadow:

        inset
        0 0 20px
        rgba(255,255,255,.25),

        0 0 45px
        rgba(0,255,255,.25);

}


/* =========================================================
   PHONE SCREEN
========================================================= */

.phone-screen {

    position: relative;

    width: 100%;

    height: 100%;

    border-radius: 29px;

    overflow: hidden;

    background:

        radial-gradient(
            circle at 50% 25%,
            rgba(0,229,255,.38),
            transparent 35%
        ),

        linear-gradient(
            160deg,
            #007c91,
            #004f61
        );

    display: flex;

    flex-direction: column;

    align-items: center;

    padding-top: 28px;

}


.phone-screen::before {

    content: "";

    position: absolute;

    inset: 0;

    background:

        linear-gradient(
            135deg,
            rgba(255,255,255,.18),
            transparent 35%
        );

}


/* =========================================================
   SCREEN TOP
========================================================= */

.screen-top {

    position: relative;

    z-index: 2;

    width: 85%;

    display: flex;

    justify-content: space-between;

    align-items: center;

    font-size: 9px;

    color: rgba(255,255,255,.90);

}


/* =========================================================
   SCREEN LOGO
========================================================= */

.screen-logo {

    position: relative;

    z-index: 2;

    width: 68px;

    height: 68px;

    margin-top: 75px;

    border-radius: 20px;

    display: flex;

    align-items: center;

    justify-content: center;

    background:

        linear-gradient(
            135deg,
            #ffffff,
            #d8fbff
        );

    box-shadow:

        0 15px 40px
        rgba(0,0,0,.18),

        0 0 35px
        rgba(255,255,255,.25);

}


.screen-logo i {

    font-size: 30px;

    color: #00a8c1;

}


/* =========================================================
   SCREEN TITLE
========================================================= */

.screen-title {

    position: relative;

    z-index: 2;

    margin-top: 18px;

    font-size: 22px;

    font-weight: 900;

    color: #ffffff;

}


.screen-subtitle {

    position: relative;

    z-index: 2;

    margin-top: 5px;

    font-size: 10px;

    color: #d8fbff;

}


/* =========================================================
   SCREEN ICONS
========================================================= */

.screen-icons {

    position: relative;

    z-index: 2;

    display: flex;

    gap: 10px;

    margin-top: 30px;

}


.screen-icons span {

    width: 38px;

    height: 38px;

    border-radius: 12px;

    display: flex;

    align-items: center;

    justify-content: center;

    background: rgba(255,255,255,.13);

    border:

        1px solid
        rgba(255,255,255,.25);

    color: #ffffff;

    box-shadow:

        0 5px 20px
        rgba(0,0,0,.10);

}


/* =========================================================
   PHONE DETAILS
========================================================= */

.phone-speaker {

    position: absolute;

    width: 65px;

    height: 7px;

    background: #00596b;

    border-radius: 10px;

    top: 17px;

    left: 50%;

    transform: translateX(-50%);

    z-index: 10;

}


.phone-camera {

    position: absolute;

    width: 8px;

    height: 8px;

    border-radius: 50%;

    background: #00596b;

    top: 17px;

    right: 65px;

    z-index: 10;

}


.phone-button {

    position: absolute;

    width: 4px;

    background: #8de8f3;

    border-radius: 5px;

    right: -4px;

}


.button-one {

    height: 55px;

    top: 125px;

}


.button-two {

    height: 35px;

    top: 195px;

}


/* =========================================================
   CHARGING CABLE
========================================================= */

.charging-cable {

    position: absolute;

    bottom: 105px;

    right: 80px;

    width: 180px;

    height: 130px;

    z-index: 3;

}


.cable-head {

    position: absolute;

    width: 38px;

    height: 20px;

    right: 0;

    top: 0;

    border-radius: 5px;

    background:

        linear-gradient(
            180deg,
            #ffffff,
            #8ceaf4
        );

    transform: rotate(-20deg);

    box-shadow:

        0 5px 15px
        rgba(0,60,80,.20);

}


.cable-port {

    position: absolute;

    width: 16px;

    height: 7px;

    right: -12px;

    top: 7px;

    border-radius: 2px;

    background: #d9fbff;

}


.cable-wire {

    position: absolute;

    width: 150px;

    height: 100px;

    border:

        5px solid
        rgba(255,255,255,.75);

    border-top: 0;

    border-left: 0;

    border-radius:

        0
        0
        100px
        0;

    right: 10px;

    top: 12px;

    opacity: .9;

}


/* =========================================================
   FLOATING PRODUCTS
========================================================= */

.floating-product {

    position: absolute;

    width: 60px;

    height: 60px;

    border-radius: 18px;

    display: flex;

    align-items: center;

    justify-content: center;

    background:

        rgba(255,255,255,.16);

    border:

        1px solid
        rgba(255,255,255,.45);

    backdrop-filter: blur(14px);

    color: #ffffff;

    font-size: 23px;

    box-shadow:

        0 15px 35px
        rgba(0,60,80,.20),

        0 0 25px
        rgba(255,255,255,.10);

    animation:

        floatingProduct
        4s
        ease-in-out
        infinite;

    z-index: 8;

}


.product-one {

    top: 100px;

    right: 35px;

}


.product-two {

    top: 275px;

    right: -10px;

    animation-delay: 1s;

}


.product-three {

    bottom: 130px;

    left: 25px;

    animation-delay: 2s;

}


.product-four {

    top: 55px;

    left: 70px;

    animation-delay: 1.5s;

}


@keyframes floatingProduct {

    0%,
    100% {

        transform:
            translateY(0)
            rotate(0deg);

    }

    50% {

        transform:
            translateY(-18px)
            rotate(5deg);

    }

}


/* =========================================================
   TECH CIRCLES
========================================================= */

.tech-circle {

    position: absolute;

    border-radius: 50%;

    border:

        1px solid
        rgba(255,255,255,.55);

    animation:

        circleFloat
        5s
        ease-in-out
        infinite;

    box-shadow:

        0 0 15px
        rgba(255,255,255,.20);

}


.circle-one {

    width: 18px;

    height: 18px;

    top: 150px;

    right: 140px;

}


.circle-two {

    width: 12px;

    height: 12px;

    bottom: 180px;

    right: 100px;

    animation-delay: 1s;

}


.circle-three {

    width: 24px;

    height: 24px;

    bottom: 120px;

    left: 120px;

    animation-delay: 2s;

}


@keyframes circleFloat {

    0%,
    100% {

        transform: translateY(0);

        opacity: .5;

    }

    50% {

        transform: translateY(-15px);

        opacity: 1;

    }

}


/* =========================================================
   PARTICLES
========================================================= */

.tech-particle {

    position: absolute;

    width: 5px;

    height: 5px;

    border-radius: 50%;

    background: #ffffff;

    box-shadow:

        0 0 15px
        #ffffff;

    animation:

        particleFloat
        4s
        infinite
        ease-in-out;

}


.particle-one {

    top: 130px;

    left: 170px;

}


.particle-two {

    top: 330px;

    right: 100px;

    animation-delay: 1s;

}


.particle-three {

    bottom: 160px;

    left: 190px;

    animation-delay: 2s;

}


.particle-four {

    bottom: 260px;

    right: 180px;

    animation-delay: 3s;

}


@keyframes particleFloat {

    0%,
    100% {

        transform:
            translateY(0)
            scale(1);

        opacity: .4;

    }

    50% {

        transform:
            translateY(-20px)
            scale(1.4);

        opacity: 1;

    }

}


/* =========================================================
   STORE CARD
========================================================= */

.store-card {

    position: absolute;

    bottom: 25px;

    right: 15px;

    z-index: 10;

    display: flex;

    align-items: center;

    gap: 12px;

    padding: 12px 18px;

    border-radius: 18px;

    background:

        rgba(0,75,90,.72);

    border:

        1px solid
        rgba(255,255,255,.35);

    backdrop-filter: blur(18px);

    box-shadow:

        0 20px 50px
        rgba(0,50,70,.25);

    animation:

        storeFloat
        5s
        ease-in-out
        infinite;

}


.store-icon {

    width: 42px;

    height: 42px;

    border-radius: 50%;

    display: flex;

    align-items: center;

    justify-content: center;

    background:

        linear-gradient(
            135deg,
            #ffffff,
            #d9fbff
        );

    box-shadow:

        0 0 25px
        rgba(255,255,255,.25);

}


.store-icon i {

    font-size: 20px;

    color: #00a5bd;

}


.store-card strong {

    display: block;

    font-size: 16px;

    color: #ffffff;

}


.store-card small {

    display: block;

    color: #c9f9ff;

    font-size: 11px;

    margin-top: 3px;

}


@keyframes storeFloat {

    0%,
    100% {

        transform: translateY(0);

    }

    50% {

        transform: translateY(-10px);

    }

}


/* =========================================================
   SCROLL
========================================================= */

.hero-scroll {

    position: absolute;

    bottom: 25px;

    left: 50%;

    transform: translateX(-50%);

    z-index: 10;

    display: flex;

    flex-direction: column;

    align-items: center;

    gap: 6px;

    color: rgba(255,255,255,.75);

    font-size: 12px;

    animation:

        scrollDown
        2s
        infinite;

}


.hero-scroll i {

    color: #ffffff;

}


@keyframes scrollDown {

    0%,
    100% {

        transform:
            translate(-50%,0);

    }

    50% {

        transform:
            translate(-50%,8px);

    }

}


/* =========================================================
   TECH BACKGROUND PARTICLES
========================================================= */

.tech-bg {

    position: absolute;

    inset: 0;

    overflow: hidden;

    pointer-events: none;

}


.tech-bg span {

    position: absolute;

    width: 3px;

    height: 3px;

    border-radius: 50%;

    background: #ffffff;

    box-shadow:

        0 0 12px
        rgba(255,255,255,.9);

    animation:

        techParticleMove
        linear
        infinite;

}


.tech-bg span:nth-child(1) {
    left: 10%;
    animation-duration: 8s;
}

.tech-bg span:nth-child(2) {
    left: 22%;
    animation-duration: 11s;
    animation-delay: 2s;
}

.tech-bg span:nth-child(3) {
    left: 35%;
    animation-duration: 7s;
    animation-delay: 1s;
}

.tech-bg span:nth-child(4) {
    left: 50%;
    animation-duration: 12s;
}

.tech-bg span:nth-child(5) {
    left: 65%;
    animation-duration: 9s;
    animation-delay: 3s;
}

.tech-bg span:nth-child(6) {
    left: 78%;
    animation-duration: 10s;
}

.tech-bg span:nth-child(7) {
    left: 88%;
    animation-duration: 7s;
    animation-delay: 2s;
}

.tech-bg span:nth-child(8) {
    left: 95%;
    animation-duration: 13s;
}


@keyframes techParticleMove {

    0% {

        transform:
            translateY(750px)
            scale(.4);

        opacity: 0;

    }

    20% {

        opacity: 1;

    }

    80% {

        opacity: .8;

    }

    100% {

        transform:
            translateY(-100px)
            scale(1.4);

        opacity: 0;

    }

}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .shark-hero {

        min-height: auto;

        padding: 80px 0 100px;

    }


    .shark-hero-content {

        text-align: center;

    }


    .shark-badge {

        justify-content: center;

    }


    .shark-hero-description {

        margin-left: auto;

        margin-right: auto;

    }


    .shark-hero-buttons {

        justify-content: center;

    }


    .shark-hero-features {

        justify-content: center;

    }


    .mobile-scene {

        height: 500px;

        transform: scale(.9);

    }

}


@media (max-width: 576px) {

    .shark-hero {

        padding: 55px 0 80px;

    }


    .shark-hero-content h1 {

        font-size: 42px;

    }


    .shark-hero-description {

        font-size: 15px;

        line-height: 1.9;

    }


    .shark-hero-buttons {

        flex-direction: column;

    }


    .shark-hero-btn {

        width: 100%;

    }


    .mobile-scene {

        height: 430px;

        transform: scale(.68);

        transform-origin: center top;

        margin-bottom: -70px;

    }


    .hero-scroll {

        display: none;

    }

}

</style>