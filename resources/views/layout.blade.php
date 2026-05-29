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
</head>

<body class="wrapper">

    <header class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-8">
                <div class="flex items-center gap-3">
                    <img src="/images/digix-tech-logo1.png" alt="Digix Tech" class="h-10 w-auto">
                    <div class="flex flex-col">
                        <a href="{{ route('home') }}" class="text-xl font-bold text-slate-900 tracking-tight">Digix<span
                                class="text-amber-600">Tech</span></a>
                        <a href="{{ route('home') }}" class="text-xs font-bold text-blue-900 tracking-tight">TI<span
                                class="text-gray-600 ms-1">Solutions</span></a>
                    </div>
                </div>
                <nav class="hidden md:flex space-x-6 text-sm font-medium text-gray-600">
                    <a href="{{ route('home') }}" class="hover:text-amber-600 transition">หน้าแรก</a>
                    <a href="{{ route('catalog') }}" class="hover:text-amber-600 transition">แคตตาล็อก</a>
                    <a href="{{ route('services') }}" class="hover:text-amber-600 transition">บริการของเรา</a>
                    <a href="{{ route('portfolio') }}" class="hover:text-amber-600 transition">ผลงาน</a>
                    <a href="{{ route('about') }}" class="hover:text-amber-600 transition">เกี่ยวกับเรา</a>
                    <a href="{{ route('contact') }}" class="hover:text-amber-600 transition">ติดต่อเรา</a>
                </nav>
            </div>
            <div class="flex items-center space-x-4">
                <button id="mobile-menu-button" aria-controls="mobile-nav" aria-expanded="false"
                    class="md:hidden inline-flex items-center justify-center rounded-lg p-2 text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-amber-500">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <button
                    class="bg-amber-600 hover:bg-amber-700 text-white text-xs font-semibold px-4 py-2 rounded-lg transition">ใบเสนอราคา</button>
            </div>
        </div>
        <nav id="mobile-nav" class="hidden md:hidden bg-white border-t border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 space-y-2">
                <a href="{{ route('home') }}" class="block text-sm font-medium text-gray-700 hover:text-amber-600">หน้าแรก</a>
                <a href="{{ route('catalog') }}" class="block text-sm font-medium text-gray-700 hover:text-amber-600">แคตตาล็อก</a>
                <a href="{{ route('services') }}" class="block text-sm font-medium text-gray-700 hover:text-amber-600">บริการของเรา</a>
                <a href="{{ route('portfolio') }}" class="block text-sm font-medium text-gray-700 hover:text-amber-600">ผลงาน</a>
                <a href="{{ route('about') }}" class="block text-sm font-medium text-gray-700 hover:text-amber-600">เกี่ยวกับเรา</a>
                <a href="{{ route('contact') }}" class="block text-sm font-medium text-gray-700 hover:text-amber-600">ติดต่อเรา</a>
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
                    ผู้นำเข้าและจัดจำหน่ายสินค้าอิเล็กทรอนิกส์ราคาส่งระดับมืออาชีพ มั่นใจด้วยระบบจัดการที่ทันสมัย</p>
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
                    <li><a href="{{ route('catalog') }}" class="hover:text-white">แคตตาล็อก</a></li>
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
                    <i class="fa-solid fa-clock mr-2"></i> จันทร์-ศุกร์ 09:00-18:00 น.
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

    <!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 80,
    });

    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileNav = document.getElementById('mobile-nav');
    if (mobileMenuButton && mobileNav) {
        mobileMenuButton.addEventListener('click', () => {
            const isOpen = !mobileNav.classList.contains('hidden');
            mobileNav.classList.toggle('hidden');
            mobileMenuButton.setAttribute('aria-expanded', String(!isOpen));
        });
    }
</script>
</body>
</html>
