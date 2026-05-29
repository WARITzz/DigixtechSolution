@extends('layout')
@section('title', 'บริการของเรา')
@section('content')
    <section class="max-w-7xl mx-auto px-4 py-16">
        <h1 class="text-3xl font-bold text-slate-900 mb-6">บริการของเรา</h1>
        <p class="text-gray-600 leading-relaxed mb-8">
            เรามีบริการที่ครอบคลุมทุกความต้องการของลูกค้า ตั้งแต่การให้คำปรึกษา การออกแบบโซลูชัน ไปจนถึงการติดตั้งและบำรุงรักษา
            ทีมงานมืออาชีพของเราพร้อมที่จะช่วยคุณเลือกสินค้าที่เหมาะสมที่สุดสำหรับธุรกิจของคุณ
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div data-aos="zoom-in" data-aos-delay="150" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1200&q=80" alt="Hardware Layer" class="w-full h-40 object-cover rounded-md mb-4">
                <h2 class="text-xl font-semibold text-slate-900 mb-4">Hardware Layer (IoT Devices)</h2>
                <p class="text-gray-600 leading-relaxed">อุปกรณ์ IoT ที่เสถียรและเชื่อถือได้สำหรับการเชื่อมต่อและรวบรวมข้อมูลแบบเรียลไทม์ พร้อมการสนับสนุนเทคนิคอย่างครบถ้วน</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="300" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1200&q=80" alt="Soudaphone Platform" class="w-full h-40 object-cover rounded-md mb-4">
                <h2 class="text-xl font-semibold text-slate-900 mb-4">Software Layer (Soudaphone Platform)</h2>
                <p class="text-gray-600 leading-relaxed">แพลตฟอร์มซอฟต์แวร์ที่ทำงานได้เต็มรูปแบบ เพื่อจัดการและบูรณาการข้อมูลจากอุปกรณ์ IoT ต่างๆ อย่างเป็นระบบ</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="450" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=1200&q=80" alt="Analytics & AI" class="w-full h-40 object-cover rounded-md mb-4">
                <h2 class="text-xl font-semibold text-slate-900 mb-4">Analytics & AI Layer</h2>
                <p class="text-gray-600 leading-relaxed">เทคโนโลยี AI และการวิเคราะห์ข้อมูลขั้นสูง เพื่อให้ได้ข้อมูลเชิงลึกและการตัดสินใจที่แม่นยำยิ่งขึ้นสำหรับธุรกิจของคุณ</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="600" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981d?auto=format&fit=crop&w=1200&q=80" alt="Software Development" class="w-full h-40 object-cover rounded-md mb-4">
                <h2 class="text-xl font-semibold text-slate-900 mb-4">Software Development Services</h2>
                <p class="text-gray-600 leading-relaxed">บริการพัฒนาซอฟต์แวร์ที่ปรับให้เหมาะกับความต้องการของคุณ ด้วยทีมนักพัฒนาที่มีความสามารถและประสบการณ์สูง</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="750" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=1200&q=80" alt="Cloud & Data Center" class="w-full h-40 object-cover rounded-md mb-4">
                <h2 class="text-xl font-semibold text-slate-900 mb-4">Cloud, IT & Data Center Service</h2>
                <p class="text-gray-600 leading-relaxed">บริการคลาวด์และศูนย์ข้อมูลระดับองค์กร ที่ปรับขนาดได้ มีความปลอดภัย และประสิทธิภาพสูงสำหรับธุรกิจของคุณ</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="900" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80" alt="Consulting" class="w-full h-40 object-cover rounded-md mb-4">
                <h2 class="text-xl font-semibold text-slate-900 mb-4">ให้คำปรึกษา</h2>
                <p class="text-gray-600 leading-relaxed">ทีมผู้เชี่ยวชาญของเราพร้อมให้คำปรึกษาเกี่ยวกับการเลือกโซลูชันและบริการที่เหมาะสมกับความต้องการของคุณ</p>
            </div>

            <!-- Additional requested services -->
            <div data-aos="zoom-in" data-aos-delay="1050" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=1200&q=80" alt="Barrier Systems" class="w-full h-40 object-cover rounded-md mb-4">
                <h2 class="text-xl font-semibold text-slate-900 mb-4">Barrier Systems</h2>
                <p class="text-gray-600 leading-relaxed">ระบบไม้กั้นอัตโนมัติสำหรับการควบคุมการเข้า-ออก รองรับการเชื่อมต่อกับระบบบัตรและเซ็นเซอร์ต่างๆ</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="1200" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                <img src="https://images.unsplash.com/photo-1518186287598-0c1a69f6c1aa?auto=format&fit=crop&w=1200&q=80" alt="ALPR Systems" class="w-full h-40 object-cover rounded-md mb-4">
                <h2 class="text-xl font-semibold text-slate-900 mb-4">ALPR Systems</h2>
                <p class="text-gray-600 leading-relaxed">ระบบอ่านป้ายทะเบียนอัตโนมัติ (ANPR/ALPR) สำหรับการบันทึกและตรวจสอบยานพาหนะแบบเรียลไทม์</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="1350" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                <img src="https://images.unsplash.com/photo-1514809811521-1b3bf31d5ac7?auto=format&fit=crop&w=1200&q=80" alt="CCTV" class="w-full h-40 object-cover rounded-md mb-4">
                <h2 class="text-xl font-semibold text-slate-900 mb-4">CCTV & Video Surveillance</h2>
                <p class="text-gray-600 leading-relaxed">ออกแบบและติดตั้งกล้องวงจรปิด พร้อมระบบบันทึกและวิเคราะห์วิดีโอสำหรับความปลอดภัยและการตรวจสอบ</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="1500" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                <img src="https://images.unsplash.com/photo-1487058792275-0ad4aaf24ca7?auto=format&fit=crop&w=1200&q=80" alt="Infrastructure" class="w-full h-40 object-cover rounded-md mb-4">
                <h2 class="text-xl font-semibold text-slate-900 mb-4">Infrastructure</h2>
                <p class="text-gray-600 leading-relaxed">การวางโครงสร้างพื้นฐาน IT ทั้งฮาร์ดแวร์และเครือข่าย เพื่อรองรับการขยายตัวของธุรกิจอย่างมั่นคง</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="1650" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                <img src="https://images.unsplash.com/photo-1517430816045-df4b7de11d1b?auto=format&fit=crop&w=1200&q=80" alt="Data Center" class="w-full h-40 object-cover rounded-md mb-4">
                <h2 class="text-xl font-semibold text-slate-900 mb-4">Data Center Services</h2>
                <p class="text-gray-600 leading-relaxed">บริการออกแบบ ติดตั้ง และดูแลศูนย์ข้อมูลระดับองค์กร รวมถึงโซลูชันสำรองข้อมูลและความต่อเนื่องทางธุรกิจ</p>
            </div>
            <div data-aos="zoom-in" data-aos-delay="1800" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                <img src="https://images.unsplash.com/photo-1510511459019-5dda7724fd87?auto=format&fit=crop&w=1200&q=80" alt="Network Topology" class="w-full h-40 object-cover rounded-md mb-4">
                <h2 class="text-xl font-semibold text-slate-900 mb-4">Network Topology & Design</h2>
                <p class="text-gray-600 leading-relaxed">วิเคราะห์และออกแบบโทโพโลยีเครือข่ายที่เหมาะสมกับโครงงานของคุณ ทั้ง LAN, WAN และระบบ Wi-Fi</p>
            </div>
        </div>
    </section>
</section>
@endsection