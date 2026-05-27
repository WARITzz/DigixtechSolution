<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    @vite(['resources/css/layout.css'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="~/js/tailwind-config.js" asp-append-version="true"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="wrapper">

    <header class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-8">
                <div class="flex flex-col">
                    <a href="#" class="text-xl font-bold text-slate-900 tracking-tight">Digix<span
                            class="text-blue-600">Tech</span></a>
                    <a href="#" class="text-xs font-bold text-danger-900 tracking-tight">TI<span
                            class="text-gray-600 ms-1">Solutions</span></a>
                </div>
                <nav class="hidden md:flex space-x-6 text-sm font-medium text-gray-600">
                    <a href="#" class="hover:text-blue-600 transition">หน้าแรก</a>
                    <a href="#" class="hover:text-blue-600 transition">แคตตาล็อก</a>
                    <a href="#" class="hover:text-blue-600 transition">ผลงาน</a>
                    <a href="#" class="hover:text-blue-600 transition">เกี่ยวกับเรา</a>
                    <a href="#" class="hover:text-blue-600 transition">ติดต่อเรา</a>
                </nav>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative hidden sm:block">
                    <input type="text" placeholder="ค้นหาสินค้า..."
                        class="w-60 pl-9 pr-4 py-1.5 bg-gray-100 border border-transparent rounded-lg text-sm focus:outline-none focus:bg-white focus:border-blue-500 transition">
                    <i class="fa solid fa-magnifying-glass absolute left-3 top-2.5 text-gray-400 text-xs"></i>
                </div>
                {{-- <button class="text-gray-500 hover:text-blue-600 transition relative">
                <i class="fa-regular fa-bell text-lg"></i>
            </button>
            <button class="text-gray-500 hover:text-blue-600 transition">
                <i class="fa-regular fa-user text-lg"></i>
            </button> --}}
                <button
                    class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold px-4 py-2 rounded-lg transition">ใบเสนอราคา</button>
            </div>
        </div>
    </header>


    <main role="main" class="pb-3">
        @yield('content')
    </main>


    <footer class="bg-slate-950 text-gray-400 text-xs py-12 px-4 border-t border-gray-900">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <div>
                <h3 class="text-white font-bold text-sm mb-3">Digix<span class="text-blue-600 ms-1">Tech</span></h3>
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
                    <li><a asp-action="index" asp-controller="Home" class="hover:text-white">หน้าแรก</a></li>
                    <li><a asp-action="index" asp-controller="Catalog" class="hover:text-white">รายการสินค้า</a></li>
                    <li><a href="#" class="hover:text-white">บริการของเรา</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-white font-bold mb-3">บริการลูกค้า</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-white">ติดต่อฝ่ายสนับสนุน</a></li>
                    <li><a href="#" class="hover:text-white">นโยบายการรับประกันสินค้า</a></li>
                    <li><a href="#" class="hover:text-white">การจัดส่งสินค้า</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-white font-bold mb-3">ที่อยู่บริษัท</h3>
                <p class="text-gray-500 leading-relaxed">48/7 ม.3 ถนนเด็จ ต.มีชัย อ.เมือง จ.หนองคาย 43000
                <br><i class="fa-solid fa-phone mt-2 mr-1"></i> 02-123-4567</p>
                <i class="fa-solid fa-envelope mr-1"></i> info@digixtechsolution.com</p>
            </div>
        </div>
        <div
            class="max-w-7xl mx-auto border-t border-slate-900 pt-6 flex flex-col sm:flex-row justify-between text-gray-600">
            <p>© 2026 Digix<span class="text-blue-600 ms-1">Tech</span> All rights reserved. Professional B2B
                Electronics Wholesale.</p>
            <div class="flex space-x-4 mt-2 sm:mt-0">
                <a href="#" class="hover:text-gray-400">Privacy Policy</a>
                <a href="#" class="hover:text-gray-400">Terms of Service</a>
            </div>
        </div>
    </footer>
</body>

</html>
