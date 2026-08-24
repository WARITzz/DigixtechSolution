<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="icon" href="/images/digix-tech-logo1.png" type="image/png">
    @vite(['resources/css/layout.css', 'resources/js/tailwind-config.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        .site-header {
            border-bottom-color: rgba(148, 163, 184, .2);
            background: linear-gradient(110deg, rgba(15, 23, 42, .88), rgba(30, 41, 59, .78));
            box-shadow: 0 8px 24px rgba(15, 23, 42, .08);
            transition: background .35s ease, box-shadow .35s ease, border-color .35s ease;
        }

        .site-header.is-scrolled {
            border-bottom-color: rgba(180, 83, 9, .5);
            background: linear-gradient(110deg, rgba(2, 6, 23, .97), rgba(30, 41, 59, .97));
            box-shadow: 0 12px 32px rgba(15, 23, 42, .3);
        }

        .header-inner,
        .brand-mark,
        .brand-image {
            transition: height .35s ease, width .35s ease, transform .35s ease;
        }

        .site-header.is-scrolled .header-inner {
            height: 3.75rem;
        }

        .site-header.is-scrolled .brand-mark {
            height: 2.5rem;
            width: 2.5rem;
        }

        .site-header.is-scrolled .brand-image {
            height: 2rem;
        }

        @supports (backdrop-filter: blur(12px)) {
            .site-header.is-scrolled {
                backdrop-filter: blur(12px);
            }
        }

        .back-to-top {
            opacity: 0;
            pointer-events: none;
            transform: translateY(12px);
            transition: opacity .3s ease, transform .3s ease, background-color .2s ease;
        }

        .back-to-top.is-visible {
            opacity: 1;
            pointer-events: auto;
            transform: translateY(0);
        }
    </style>
</head>

<body class="wrapper">

    <header id="site-header" class="site-header relative sticky top-0 z-50 text-white">
        <div class="header-inner mx-auto flex h-[4.5rem] max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-8">
                <div class="flex items-center gap-3">
                    <div class="brand-mark flex h-12 w-12 items-center justify-center rounded-2xl border border-amber-400/40 bg-white p-1 shadow-md shadow-amber-500/10">
                        <img src="/images/digix-tech-logo1.png" alt="Digix Tech" class="brand-image h-10 w-auto">
                    </div>
                    <div class="flex flex-col">
                        <a href="{{ route('home') }}" class="text-xl font-bold tracking-tight text-white">Digix<span
                                class="text-amber-400">Tech</span></a>
                        <a href="{{ route('home') }}" class="text-xs font-bold tracking-tight text-slate-300">IT<span
                                class="ms-1 text-amber-300">Solutions</span></a>
                    </div>
                </div>
                <nav class="hidden items-center gap-1 rounded-2xl border border-slate-700/80 bg-slate-900/70 p-1 shadow-inner shadow-white/[0.03] md:flex text-sm font-medium text-slate-300">
                    <a href="{{ route('home') }}" class="rounded-xl px-3 py-2 transition {{ request()->routeIs('home') ? 'bg-amber-500 text-slate-950 shadow-md' : 'hover:bg-slate-800 hover:text-amber-300' }}">หน้าแรก</a>
                    {{-- <a href="{{ route('catalog') }}" class="rounded-xl px-3 py-2 transition {{ request()->routeIs('catalog') ? 'bg-amber-500 text-slate-950 shadow-md' : 'hover:bg-slate-800 hover:text-amber-300' }}">แคตตาล็อก</a> --}}
                    <a href="{{ route('services') }}" class="rounded-xl px-3 py-2 transition {{ request()->routeIs('services') ? 'bg-amber-500 text-slate-950 shadow-md' : 'hover:bg-slate-800 hover:text-amber-300' }}">บริการของเรา</a>
                    <a href="{{ route('portfolio') }}" class="rounded-xl px-3 py-2 transition {{ request()->routeIs('portfolio') ? 'bg-amber-500 text-slate-950 shadow-md' : 'hover:bg-slate-800 hover:text-amber-300' }}">ผลงาน</a>
                    <a href="{{ route('about') }}" class="rounded-xl px-3 py-2 transition {{ request()->routeIs('about') ? 'bg-amber-500 text-slate-950 shadow-md' : 'hover:bg-slate-800 hover:text-amber-300' }}">เกี่ยวกับเรา</a>
                    <a href="{{ route('contact') }}" class="rounded-xl px-3 py-2 transition {{ request()->routeIs('contact') ? 'bg-amber-500 text-slate-950 shadow-md' : 'hover:bg-slate-800 hover:text-amber-300' }}">ติดต่อเรา</a>
                </nav>
            </div>
            <div class="flex items-center gap-3 sm:gap-4">
                <button id="mobile-menu-button" aria-controls="mobile-nav" aria-expanded="false"
                    class="inline-flex items-center justify-center rounded-xl border border-slate-700 p-2 text-slate-200 transition hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-amber-500 md:hidden">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <button
                    class="inline-flex items-center gap-2 rounded-xl bg-amber-500 px-4 py-2.5 text-xs font-bold text-slate-950 shadow-md shadow-amber-500/20 transition hover:-translate-y-0.5 hover:bg-amber-400">ใบเสนอราคา <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i></button>
            </div>
        </div>
        <nav id="mobile-nav" class="hidden border-t border-slate-700 bg-slate-900 md:hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 space-y-2">
                <a href="{{ route('home') }}" class="block rounded-xl px-3 py-2 text-sm font-medium {{ request()->routeIs('home') ? 'bg-amber-500 text-slate-950' : 'text-slate-200 hover:bg-slate-800 hover:text-amber-300' }}">หน้าแรก</a>
                <a href="{{ route('catalog') }}" class="block rounded-xl px-3 py-2 text-sm font-medium {{ request()->routeIs('catalog') ? 'bg-amber-500 text-slate-950' : 'text-slate-200 hover:bg-slate-800 hover:text-amber-300' }}">แคตตาล็อก</a>
                <a href="{{ route('services') }}" class="block rounded-xl px-3 py-2 text-sm font-medium {{ request()->routeIs('services') ? 'bg-amber-500 text-slate-950' : 'text-slate-200 hover:bg-slate-800 hover:text-amber-300' }}">บริการของเรา</a>
                <a href="{{ route('portfolio') }}" class="block rounded-xl px-3 py-2 text-sm font-medium {{ request()->routeIs('portfolio') ? 'bg-amber-500 text-slate-950' : 'text-slate-200 hover:bg-slate-800 hover:text-amber-300' }}">ผลงาน</a>
                <a href="{{ route('about') }}" class="block rounded-xl px-3 py-2 text-sm font-medium {{ request()->routeIs('about') ? 'bg-amber-500 text-slate-950' : 'text-slate-200 hover:bg-slate-800 hover:text-amber-300' }}">เกี่ยวกับเรา</a>
                <a href="{{ route('contact') }}" class="block rounded-xl px-3 py-2 text-sm font-medium {{ request()->routeIs('contact') ? 'bg-amber-500 text-slate-950' : 'text-slate-200 hover:bg-slate-800 hover:text-amber-300' }}">ติดต่อเรา</a>
            </div>
        </nav>
    </header>


    <main role="main" class="pb-3">
        @yield('content')
    </main>


    <footer class="bg-slate-950 text-gray-400 text-xs py-12 px-4 border-t border-gray-900">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <div>
                <h3 class="text-white font-bold text-sm mb-3">Digix<span class="text-amber-600 ms-1">Tech</span></h3>
                <p class="text-gray-500 leading-relaxed mb-4">
                    ผู้ให้บริการโซลูชันแบบครบวงจรที่ผสานจุดแข็งของเทคโนโลยี IT และการขนส่งสินค้าระหว่างประเทศเข้าด้วยกัน มุ่งเน้นการทำ Digital Transformation ให้กับคู่ค้าด้วยระบบ Software Management ที่ทันสมัย พร้อมระบบความปลอดภัยอัจฉริยะ และบริการ Shipping ข้ามพรมแดนที่มีประสิทธิภาพสูงสุดในภูมิภาค</p>
                <div class="flex space-x-3 text-base">
                    <a href="#" class="hover:text-white"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="hover:text-white"><i class="fa-brands fa-line"></i></a>
                    <a href="#" class="hover:text-white"><i class="fa-regular fa-envelope"></i></a>
                </div>
            </div>
            <div>
                <h3 class="text-white font-bold mb-3">ผังไซต์</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="hover:text-white">หน้าแรก</a></li>
                    {{-- <li><a href="{{ route('catalog') }}" class="hover:text-white">แคตตาล็อก</a></li> --}}
                    <li><a href="{{ route('services') }}" class="hover:text-white">บริการของเรา</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-white font-bold mb-3">บริการลูกค้า</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('contact') }}" class="hover:text-white">ติดต่อฝ่ายสนับสนุน</a></li>
                    <li><a href="{{ route('warranty') }}" class="hover:text-white">นโยบายการรับประกันสินค้า</a></li>
                    <li><a href="{{ route('shipping') }}" class="hover:text-white">การจัดส่งสินค้า</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-white font-bold mb-3">ที่อยู่บริษัท</h3>
                <p class="text-gray-500 leading-relaxed">
                    148/7 ม.3 ถนนเสด็จ ต.มีชัย อ.เมือง จ.หนองคาย 43000<br>
                    <i class="fa-solid fa-phone mt-3 mr-2"></i> 02-123-4567<br>
                    <i class="fa-solid fa-envelope mr-2"></i> info@digixtechsolution.com<br>
                    <i class="fa-solid fa-clock mr-2"></i> จันทร์-เสาร์ 09:00-17:00 น.
                </p>
            </div>
        </div>
        <div
            class="max-w-7xl mx-auto border-t border-slate-900 pt-6 flex flex-col sm:flex-row justify-between text-gray-600">
            <p>© 2026 Digix<span class="text-amber-600 ms-1">Tech</span> All rights reserved. Professional B2B
                Electronics Wholesale.</p>
            <div class="flex space-x-4 mt-2 sm:mt-0">
                <a href="{{ route('privacy') }}" class="hover:text-gray-400">Privacy Policy</a>
                <a href="{{ route('terms') }}" class="hover:text-gray-400">Terms of Service</a>
            </div>
        </div>
    </footer>

    <button id="back-to-top" type="button" aria-label="เลื่อนกลับด้านบน" title="เลื่อนกลับด้านบน"
        class="back-to-top fixed bottom-6 right-6 z-40 inline-flex h-12 w-12 items-center justify-center rounded-full bg-amber-500 text-slate-950 shadow-lg shadow-amber-500/25 hover:bg-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-300 focus:ring-offset-2 focus:ring-offset-slate-950">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <div id="cookie-banner" class="hidden fixed inset-x-3 bottom-4 z-50 rounded-3xl border border-amber-400/50 bg-amber-500/95 p-4 shadow-[0_32px_80px_-40px_rgba(251,191,36,0.9)] text-slate-950 max-w-4xl mx-auto sm:inset-x-auto sm:left-1/2 sm:-translate-x-1/2 sm:w-[calc(100%-2rem)] lg:w-[720px]">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div class="flex gap-3">
                <span class="mt-1 inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-slate-950 text-amber-300 text-lg">
                    <i class="fa-solid fa-cookie-bite"></i>
                </span>
                <div class="space-y-1 text-sm leading-6 font-semibold">
                    <p class="text-slate-950">เว็บไซต์นี้ใช้คุกกี้เพื่อปรับปรุงการใช้งานของคุณ</p>
                    <p class="text-slate-950/80 text-xs sm:text-sm">การใช้งานต่อถือว่ายอมรับนโยบายคุกกี้ของเรา</p>
                </div>
            </div>
            <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                <button id="cookie-accept" class="inline-flex items-center justify-center rounded-full bg-slate-950 px-5 py-2.5 text-sm font-semibold text-amber-300 transition duration-150 hover:bg-slate-900 focus:outline-none focus:ring-2 focus:ring-slate-800">
                    ยอมรับคุกกี้
                </button>
                <button id="cookie-close" class="inline-flex items-center justify-center rounded-full border border-slate-950 bg-white/10 px-5 py-2.5 text-sm font-semibold text-slate-950 transition duration-150 hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-slate-950">
                    ปิด
                </button>
            </div>
        </div>
    </div>

    <!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    function setCookie(name, value, days) {
        const expires = new Date();
        expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
        const cookieValue = `${name}=${encodeURIComponent(value)};expires=${expires.toUTCString()};path=/;SameSite=Lax`;
        try {
            document.cookie = cookieValue;
        } catch (e) {
            // Cookie write blocked by browser/privacy mode
        }

        try {
            localStorage.setItem(name, value);
        } catch (e) {
            // localStorage unavailable in some privacy modes
        }
    }

    function getCookie(name) {
        const nameEQ = `${name}=`;
        const cookies = document.cookie.split(';');
        for (let i = 0; i < cookies.length; i++) {
            let c = cookies[i].trim();
            if (c.indexOf(nameEQ) === 0) {
                return decodeURIComponent(c.substring(nameEQ.length));
            }
        }

        try {
            return localStorage.getItem(name);
        } catch (e) {
            return null;
        }
    }

    function hideCookieBanner() {
        const banner = document.getElementById('cookie-banner');
        if (banner) {
            banner.classList.add('hidden');
        }
    }

    function acceptCookies() {
        setCookie('digixtech_cookie_consent', 'accepted', 365);
        hideCookieBanner();
    }

    document.addEventListener('DOMContentLoaded', () => {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 80,
        });

        const siteHeader = document.getElementById('site-header');
        if (siteHeader) {
            const updateHeaderState = () => {
                siteHeader.classList.toggle('is-scrolled', window.scrollY > 24);
            };

            updateHeaderState();
            window.addEventListener('scroll', updateHeaderState, { passive: true });
        }

        const backToTop = document.getElementById('back-to-top');
        if (backToTop) {
            const updateBackToTopState = () => {
                backToTop.classList.toggle('is-visible', window.scrollY > 320);
            };

            updateBackToTopState();
            window.addEventListener('scroll', updateBackToTopState, { passive: true });
            backToTop.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }

        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileNav = document.getElementById('mobile-nav');
        if (mobileMenuButton && mobileNav) {
            mobileMenuButton.addEventListener('click', () => {
                const isOpen = !mobileNav.classList.contains('hidden');
                mobileNav.classList.toggle('hidden');
                mobileMenuButton.setAttribute('aria-expanded', String(!isOpen));
            });
        }

        const cookieBanner = document.getElementById('cookie-banner');
        const cookieAccept = document.getElementById('cookie-accept');
        const cookieClose = document.getElementById('cookie-close');

        if (getCookie('digixtech_cookie_consent') !== 'accepted') {
            if (cookieBanner) {
                cookieBanner.classList.remove('hidden');
            }
        }

        if (cookieAccept) {
            cookieAccept.addEventListener('click', acceptCookies);
        }

        if (cookieClose) {
            cookieClose.addEventListener('click', hideCookieBanner);
        }
    });
</script>
</body>
</html>
