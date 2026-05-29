@extends('layout')
@section('title', 'เกี่ยวกับเรา')  
@section('content')
    <section class="max-w-7xl mx-auto px-4 py-16">
        <div class="text-center mb-16 space-y-4">
            <h2 class="text-headline-lg text-on-surface">
                เกี่ยวกับเรา
            </h2>
            <p class="text-body-md text-on-surface-variant">
                บริการออกแบบและพัฒนา Software & Hardware Solution แบบครบวงจร รับออกแบบและพัฒนาตามความต้องการ ใส่ใจทุกขั้นตอน บริการด้วยใจ โดยผู้มีประสบการณ์
            </p>
        </div>
        <div class="flex flex-col md:flex-row gap-gutter">
            <div data-aos="fade-up" data-aos-delay="150" class="w-full md:w-1/2 bg-gradient-to-br from-slate-900 to-slate-800 p-10 rounded-2xl text-white space-y-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4 text-amber-400">วิสัยทัศน์ของเรา</h3>
                    <p class="text-gray-300 leading-relaxed border-l-4 border-amber-500 pl-4">
                        มุ่งมั่นเป็นผู้นำด้านโซลูชันดิจิทัลครบวงจรในประเทศ ผสานระบบโลจิสติกส์ ความปลอดภัย ระบบองค์กร และโครงสร้างพื้นฐานคลาวด์ตามมาตรฐานสากล
                    </p>
                </div>
                
                <div>
                    <h3 class="text-2xl font-bold mb-6 text-amber-400">พันธกิจของเรา</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-6 h-6 bg-amber-500 rounded-full flex items-center justify-center mt-0.5">
                                <i class="fa-solid fa-check text-white text-sm"></i>
                            </div>
                            <span class="text-gray-200">ส่งมอบโซลูชัน IT คุณภาพสูงและนวัตกรรมล้ำสมัย</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-6 h-6 bg-amber-500 rounded-full flex items-center justify-center mt-0.5">
                                <i class="fa-solid fa-check text-white text-sm"></i>
                            </div>
                            <span class="text-gray-200">สนับสนุนการเปลี่ยนผ่านสู่ดิจิทัลขององค์กรลูกค้า</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-6 h-6 bg-amber-500 rounded-full flex items-center justify-center mt-0.5">
                                <i class="fa-solid fa-check text-white text-sm"></i>
                            </div>
                            <span class="text-gray-200">พัฒนาบุคลากรทุกระดับอย่างต่อเนื่อง</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-6 h-6 bg-amber-500 rounded-full flex items-center justify-center mt-0.5">
                                <i class="fa-solid fa-check text-white text-sm"></i>
                            </div>
                            <span class="text-gray-200">ส่งเสริมการใช้เทคโนโลยีอย่างรับผิดชอบต่อสิ่งแวดล้อมและสังคม เพื่อการเติบโตอย่างยั่งยืนร่วมกัน</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="w-full md:w-1/2 bg-surface-container-lowest p-10 rounded-2xl border border-outline-variant shadow-sm">
                <h3 class="text-2xl font-bold mb-4 text-slate-900">Why Digix Tech</h3>
                <p class="text-slate-600 leading-relaxed mb-6">
                    ทีมผู้เชี่ยวชาญของเรารวมทั้งวิศวกรฮาร์ดแวร์และนักพัฒนาซอฟต์แวร์ที่มีประสบการณ์ มุ่งมั่นสร้างโซลูชันที่ตอบโจทย์ความต้องการของลูกค้าในทุกระดับธุรกิจ
                </p>
                <ul class="space-y-4 text-slate-600">
                    <li class="flex items-start gap-3">
                        <span class="mt-1 text-amber-500"><i class="fa-solid fa-circle-check"></i></span>
                        <span>ออกแบบระบบโดยคำนึงถึงการใช้งานจริงและการเติบโตในอนาคต</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1 text-amber-500"><i class="fa-solid fa-circle-check"></i></span>
                        <span>พัฒนาต่อยอดด้วยเทคโนโลยี AI, IoT และ Cloud อย่างครบวงจร</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1 text-amber-500"><i class="fa-solid fa-circle-check"></i></span>
                        <span>ดูแลตั้งแต่การติดตั้ง จนถึงการบำรุงรักษาหลังส่งมอบ</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection