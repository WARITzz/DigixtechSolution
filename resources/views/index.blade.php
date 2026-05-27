@extends('layout')
@section('title', 'หน้าแรก')
@section('content')
    <section class="relative bg-slate-900 text-white py-24 px-4 overflow-hidden">
    <div class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&amp;w=2000')] bg-cover bg-center"></div>
    <div class="relative max-w-4xl mx-auto text-center z-10">
        <h1 class="text-3xl sm:text-5xl font-bold mb-4 leading-tight">ยกระดับธุรกิจของคุณด้วยนวัตกรรม<br>อิเล็กทรอนิกส์ระดับโลก</h1>
        <p class="text-gray-400 text-sm sm:text-base mb-8 max-w-2xl mx-auto">เราคือผู้นำเข้าและจัดจำหน่ายอุปกรณ์ไอที อุปกรณ์เครือข่าย และเซิร์ฟเวอร์ สำหรับองค์กร มั่นใจด้วยมาตรฐานระดับสากล</p>
        <div class="flex justify-center space-x-4">
            <a href="#" class="bg-red-600 hover:bg-red-700 text-white font-medium px-6 py-2.5 rounded-md transition">ดูแคตตาล็อกสินค้า</a>
            {{-- <button class="border border-white hover:bg-white/10 text-white font-medium px-6 py-2.5 rounded-md transition">เรียนรู้เพิ่มเติม</button> --}}
        </div>
    </div>
</section>
<section class="max-w-7xl mx-auto px-4 py-16">
    <h2 class="text-center text-xl font-bold text-gray-900 mb-2">บริการครบวงจรด้านเทคโนโลยี</h2>
    <p class="text-center text-gray-500 text-xs mb-10">ในฐานะพันธมิตรที่ไว้วางใจได้ เราพร้อมช่วยเหลือคุณในทุกขั้นตอน</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex items-start space-x-4">
            <div class="p-3 bg-red-50 text-red-500 rounded-lg"><i class="fa-solid fa-earth-americas text-xl"></i></div>
            <div>
                <h3 class="font-bold mb-1 text-sm">Global Sourcing</h3>
                <p class="text-xs text-gray-500">จัดหาอุปกรณ์อิเล็กทรอนิกส์จากทั่วทุกมุมโลก</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex items-start space-x-4">
            <div class="p-3 bg-blue-50 text-blue-500 rounded-lg"><i class="fa-solid fa-tags text-xl"></i></div>
            <div>
                <h3 class="font-bold mb-1 text-sm">Wholesale Pricing</h3>
                <p class="text-xs text-gray-500">ราคาส่งตรงจากโรงงานสำหรับสั่งซื้อจำนวนมาก</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex items-start space-x-4">
            <div class="p-3 bg-cyan-50 text-cyan-500 rounded-lg"><i class="fa-solid fa-check text-xl"></i></div>
            <div>
                <h3 class="font-bold mb-1 text-sm">Quality Assurance</h3>
                <p class="text-xs text-gray-500">ตรวจสอบคุณภาพ (QC) ทุกชิ้นส่วนก่อนส่งมอบ</p>
            </div>
        </div>
    </div>
</section>
<section class="bg-slate-900 text-white py-16 px-4">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-lg font-bold mb-8">โซลูชันที่เราเชี่ยวชาญ</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Card 1: Modern Infrastructure -->
            <div class="relative rounded-xl overflow-hidden h-48 group cursor-pointer" onclick="showPage('catalog')">
                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&amp;w=600" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent p-4 flex flex-col justify-end">
                    <span class="text-[10px] bg-blue-600 w-max px-2 py-0.5 rounded font-bold uppercase tracking-wider mb-1">Infrastructure</span>
                    <h3 class="font-bold text-sm">Smart Industrial IT</h3>
                </div>
            </div>

            <!-- Card 2: Enterprise Solutions -->
            <div class="relative rounded-xl overflow-hidden h-48 group cursor-pointer" onclick="showPage('product')">
                <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&amp;w=600" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent p-4 flex flex-col justify-end">
                    <span class="text-[10px] bg-indigo-600 w-max px-2 py-0.5 rounded font-bold uppercase tracking-wider mb-1">Enterprise</span>
                    <h3 class="font-bold text-sm">Corporate IT Solution</h3>
                </div>
            </div>

            <!-- Card 3: Digital Commerce -->
            <div class="relative rounded-xl overflow-hidden h-48 group cursor-pointer" onclick="showPage('catalog')">
                <img src="https://images.unsplash.com/photo-1542744094-3a31f103e35f?q=80&amp;w=600" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent p-4 flex flex-col justify-end">
                    <span class="text-[10px] bg-teal-600 w-max px-2 py-0.5 rounded font-bold uppercase tracking-wider mb-1">Digital Commerce</span>
                    <h3 class="font-bold text-sm">Modern Retail Tech</h3>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="max-w-7xl mx-auto px-4 py-16 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
    <div>
        <h2 class="text-xl font-bold mb-4">Digix Tech พาร์ทเนอร์ด้านไอทีที่ตอบโจทย์ธุรกิจคุณ</h2>
        <p class="text-xs text-gray-500 mb-6 leading-relaxed">เราคือผู้เชี่ยวชาญด้านการนำเข้าและจัดจำหน่ายโซลูชันไอทีและอุปกรณ์อิเล็กทรอนิกส์ครบวงจร มุ่งมั่นนำเสนอเทคโนโลยีที่ทันสมัยเพื่อยกระดับประสิทธิภาพองค์กร ด้วยทีมงานวิศวกรมืออาชีพที่พร้อมเป็นที่ปรึกษาและจัดหาอุปกรณ์ที่ใช่ เพื่อทุกความต้องการทางธุรกิจของคุณ</p>
        <div class="grid grid-cols-3 gap-4 text-center">
            <div class="bg-gray-100 p-4 rounded-lg"><div class="font-bold text-lg text-blue-600"><i class="fas fa-users-cog"></i></div><div class="text-[10px] text-gray-500">ทีมงานผู้เชี่ยวชาญ</div></div>
            <div class="bg-gray-100 p-4 rounded-lg"><div class="font-bold text-lg text-blue-600"><i class="fas fa-shipping-fast"></i></div><div class="text-[10px] text-gray-500">บริการรวดเร็วทันใจ</div></div>
            <div class="bg-gray-100 p-4 rounded-lg"><div class="font-bold text-lg text-blue-600"><i class="fas fa-headset"></i></div><div class="text-[10px] text-gray-500">ตอบโจทย์ครบวงจร</div></div>
        </div>
    </div>
    <div>
        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&amp;w=800" class="rounded-xl shadow-md w-full object-cover h-64">
    </div>
</section>
@endsection