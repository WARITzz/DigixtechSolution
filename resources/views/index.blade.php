@extends('layout')
@section('title', 'หน้าแรก')
@section('content')
    <section class="relative bg-slate-900 text-white py-24 px-4 overflow-hidden">
        <div
            class="absolute inset-0 opacity-40 bg-[url('/images/digix-tech-logo.png')] bg-cover bg-center">
        </div>
         <!-- dark overlay -->
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative max-w-4xl mx-auto text-center z-10">
            <div data-aos="fade-down" class="mb-6">
                {{-- <img src="/images/digix-tech-logo.png" alt="Digix Tech" class="h-16 mx-auto mb-4" style="filter: drop-shadow(0 0 10px rgba(251, 191, 36, 0.5));"> --}}
            </div>
            <h1  data-aos="fade-up" class="text-3xl sm:text-5xl font-bold mb-4 leading-tight">
                ออกแบบและพัฒนาโซลูชัน IT ครบวงจร<br>ทั้ง Hardware, Software และ AI</h1>
            <p  data-aos="fade-up" data-aos-delay="150" class="text-gray-400 text-sm sm:text-base mb-8 max-w-2xl mx-auto">เราช่วยธุรกิจ SME บริษัท ร้านค้าออนไลน์ และโปรเจกต์ AI สร้างระบบที่ตอบโจทย์จริง พร้อมบริการด้วยใจ
                ให้คำปรึกษาและประเมินราคาฟรี</p>
            <div data-aos="zoom-in" data-aos-delay="300" class="flex justify-center space-x-4">
                <a href="{{ route('catalog') }}"
                    class="bg-amber-500 hover:bg-amber-600 text-white font-medium px-6 py-2.5 rounded-md transition">ดูแคตตาล็อกสินค้า</a>
                <a href="{{ route('contact') }}"
                    class="border border-amber-400 hover:bg-amber-500/20 text-white font-medium px-6 py-2.5 rounded-md transition">ติดต่อขอคำปรึกษาฟรี</a>
            </div>
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-4 py-16">
        <h2 class="text-center text-xl font-bold text-gray-900 mb-2">บริการโซลูชันไอทีครบวงจร สำหรับธุรกิจทุกขนาด</h2>
        <p class="text-center text-gray-500 text-xs mb-10">เราให้บริการตั้งแต่การวางแผน จัดหา ติดตั้ง จนถึงดูแลหลังการใช้งาน เพื่อให้ระบบของคุณใช้งานได้จริงและเติบโตได้อย่างมั่นคง</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div data-aos="zoom-in" data-aos-delay="700" class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex items-start space-x-4 card-hover">
                <div class="p-3 bg-amber-50 text-amber-600 rounded-lg"><i class="fa-solid fa-earth-americas text-xl"></i></div>
                <div>
                    <h3 class="font-bold mb-1 text-sm">จัดหาอุปกรณ์มาตรฐาน</h3>
                    <p class="text-xs text-gray-500">จัดหาอุปกรณ์ IT, IoT และเครือข่ายจากแบรนด์ชั้นนำ พร้อมการรองรับการใช้งานระยะยาว</p>
                </div>
            </div>
            <div data-aos="zoom-in" data-aos-delay="700" class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex items-start space-x-4 card-hover">
                <div class="p-3 bg-blue-50 text-blue-500 rounded-lg"><i class="fa-solid fa-tags text-xl"></i></div>
                <div>
                    <h3 class="font-bold mb-1 text-sm">ราคาเหมาะสมและโปร่งใส</h3>
                    <p class="text-xs text-gray-500">เสนอราคาอย่างตรงไปตรงมา พร้อมคำแนะนำเพื่อให้คุณได้โซลูชันที่คุ้มค่าที่สุด</p>
                </div>
            </div>
            <div data-aos="zoom-in" data-aos-delay="700" class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex items-start space-x-4 card-hover">
                <div class="p-3 bg-cyan-50 text-cyan-500 rounded-lg"><i class="fa-solid fa-check text-xl"></i></div>
                <div>
                    <h3 class="font-bold mb-1 text-sm">การันตีคุณภาพงาน</h3>
                    <p class="text-xs text-gray-500">ทุกโปรเจกต์ผ่านกระบวนการตรวจสอบและทดสอบอย่างละเอียดก่อนส่งมอบ</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gradient-to-br from-slate-900 to-slate-800 text-white max-w-7xl mx-auto px-4 py-16 rounded-xl">
        <h2 class="text-center text-xl font-bold mb-4">บริการออกแบบและพัฒนา Software & Hardware Solution แบบครบวงจร</h2>
        <p class="text-center text-sm mb-6">รับออกแบบและพัฒนาตามความต้องการ ใส่ใจทุกขั้นตอน บริการด้วยใจโดยผู้มีประสบการณ์ พร้อมให้คำปรึกษาและประเมินราคาฟรี</p>
        <div class="max-w-4xl mx-auto grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10 text-sm">
            <div>
                <ul class="space-y-2">
                    <li>• ธุรกิจ SME</li>
                    <li>• บริษัท</li>
                    <li>• ร้านค้าออนไลน์</li>
                    <li>• AI นับสินค้าในโรงงานอุตสาหกรรม</li>
                </ul>
            </div>
            <div>
                <ul class="space-y-2">
                    <li>• AI อ่านป้ายทะเบียนรถ</li>
                    <li>• บุคคลทั่วไปที่มีไอเดียโปรเจกต์ที่สนใจ</li>
                    <li>• ERP</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-4 py-16">
        <div class="text-center mb-8">
            <h3 class="text-lg font-semibold text-gray-900 mb-2">บริการของเรา</h3>
            <p class="text-xs text-gray-500">โซลูชันครบวงจรทั้งฮาร์ดแวร์ ซอฟต์แวร์ และคลาวด์สำหรับธุรกิจยุคดิจิทัล</p>
            <a href="{{ route('contact') }}" class="inline-block mt-4 bg-amber-500 hover:bg-amber-600 text-white font-medium px-6 py-3 rounded-md transition">ติดต่อขอคำปรึกษาฟรี</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div data-aos="zoom-in" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                <h3 class="text-xl font-semibold text-slate-900 mb-4">Hardware Layer (IoT Devices)</h3>
                <p class="text-gray-600 leading-relaxed text-sm">อุปกรณ์ IoT ที่เชื่อมต่อได้ดี รองรับการใช้งานจริงและเก็บข้อมูลได้แม่นยำสำหรับระบบอัจฉริยะ</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="150" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                <h3 class="text-xl font-semibold text-slate-900 mb-4">Software Layer (Soudaphone Platform)</h3>
                <p class="text-gray-600 leading-relaxed text-sm">แพลตฟอร์มซอฟต์แวร์ที่ออกแบบมาเพื่อบริหารจัดการข้อมูลและกระบวนการทำงานอย่างครบวงจร</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="300" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                <h3 class="text-xl font-semibold text-slate-900 mb-4">Analytics & AI Layer</h3>
                <p class="text-gray-600 leading-relaxed text-sm">วิเคราะห์ข้อมูลเชิงลึกด้วย AI เพื่อช่วยให้คุณตัดสินใจได้เร็วขึ้นและแม่นยำขึ้น</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="450" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                <h3 class="text-xl font-semibold text-slate-900 mb-4">Software Development Services</h3>
                <p class="text-gray-600 leading-relaxed text-sm">พัฒนาซอฟต์แวร์เฉพาะทางทั้งระบบ เขียนโปรแกรมตามสเปค พร้อมทดสอบและดูแลหลังส่งมอบ</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="600" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                <h3 class="text-xl font-semibold text-slate-900 mb-4">Cloud, IT & Data Center Service</h3>
                <p class="text-gray-600 leading-relaxed text-sm">บริการคลาวด์และศูนย์ข้อมูลที่ปลอดภัย ปรับขนาดได้ และรองรับการใช้งานระดับองค์กร</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="750" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                <h3 class="text-xl font-semibold text-slate-900 mb-4">Consulting & Support</h3>
                <p class="text-gray-600 leading-relaxed text-sm">ให้คำปรึกษาเชิงเทคนิคและธุรกิจ พร้อมติดตั้งและดูแลระบบอย่างมืออาชีพ</p>
            </div>
        </div>
    </section>
    <section class="bg-gradient-to-br from-slate-50 to-gray-100 py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-lg font-bold mb-8 text-gray-900">โซลูชันที่เราเชี่ยวชาญ</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Card 1: Modern Infrastructure -->
                <div data-aos="zoom-in" class="relative rounded-xl overflow-hidden h-48 group cursor-pointer card-hover">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&amp;w=600"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent p-4 flex flex-col justify-end">
                        <span
                            class="text-[10px] bg-blue-600 w-max px-2 py-0.5 rounded font-bold uppercase tracking-wider mb-1">Infrastructure</span>
                        <h3 class="font-bold text-sm">Smart Industrial IT</h3>
                    </div>
                </div>

                <!-- Card 2: Enterprise Solutions -->
                <div data-aos="zoom-in" data-aos-delay="150" class="relative rounded-xl overflow-hidden h-48 group cursor-pointer card-hover">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&amp;w=600"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent p-4 flex flex-col justify-end">
                        <span
                            class="text-[10px] bg-indigo-600 w-max px-2 py-0.5 rounded font-bold uppercase tracking-wider mb-1">Enterprise</span>
                        <h3 class="font-bold text-sm">Corporate IT Solution</h3>
                    </div>
                </div>

                <!-- Card 3: Digital Commerce -->
                <div data-aos="zoom-in" data-aos-delay="300" class="relative rounded-xl overflow-hidden h-48 group cursor-pointer card-hover">
                    <img src="https://images.unsplash.com/photo-1542744094-3a31f103e35f?q=80&amp;w=600"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent p-4 flex flex-col justify-end">
                        <span
                            class="text-[10px] bg-teal-600 w-max px-2 py-0.5 rounded font-bold uppercase tracking-wider mb-1">Digital
                            Commerce</span>
                        <h3 class="font-bold text-sm">Modern Retail Tech</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-4 py-16 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-xl font-bold mb-4">Digix Tech พาร์ทเนอร์ด้านไอทีที่ตอบโจทย์ธุรกิจคุณ</h2>
            <p class="text-xs text-gray-500 mb-6 leading-relaxed">
                เราคือผู้เชี่ยวชาญด้านการนำเข้าและจัดจำหน่ายโซลูชันไอทีและอุปกรณ์อิเล็กทรอนิกส์ครบวงจร
                มุ่งมั่นนำเสนอเทคโนโลยีที่ทันสมัยเพื่อยกระดับประสิทธิภาพองค์กร
                ด้วยทีมงานวิศวกรมืออาชีพที่พร้อมเป็นที่ปรึกษาและจัดหาอุปกรณ์ที่ใช่ เพื่อทุกความต้องการทางธุรกิจของคุณ</p>
            <div class="grid grid-cols-3 gap-4 text-center">
                <div class="bg-gray-100 p-4 rounded-lg animate-float">
                    <div class="font-bold text-lg text-blue-600"><i class="fas fa-users-cog"></i></div>
                    <div class="text-[10px] text-gray-500">ทีมงานผู้เชี่ยวชาญ</div>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg animate-float" data-aos="fade-up" data-aos-delay="200">
                    <div class="font-bold text-lg text-blue-600"><i class="fas fa-shipping-fast"></i></div>
                    <div class="text-[10px] text-gray-500">บริการรวดเร็วทันใจ</div>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg animate-float" data-aos="fade-up" data-aos-delay="400">
                    <div class="font-bold text-lg text-blue-600"><i class="fas fa-headset"></i></div>
                    <div class="text-[10px] text-gray-500">ตอบโจทย์ครบวงจร</div>
                </div>
            </div>
        </div>
        <div>
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&amp;w=800"
                class="rounded-xl shadow-md w-full object-cover h-64 " data-aos="fade-up" data-aos-delay="600">
        </div>
    </section>
@endsection
