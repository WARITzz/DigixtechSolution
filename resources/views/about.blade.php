@extends('layout')
@section('title', 'เกี่ยวกับเรา')  
@section('content')
    <section class="max-w-7xl mx-auto px-4 py-16">
        <div class="text-center mb-16 space-y-4">
            <h2 class="text-headline-lg text-on-surface">
                เกี่ยวกับเรา
            </h2>
            <p class="text-body-md text-on-surface-variant">
                DigixTech คือผู้นำเข้าและจัดจำหน่ายสินค้าอิเล็กทรอนิกส์ราคาส่งระดับมืออาชีพ เรามุ่งมั่นที่จะนำเสนอสินค้าคุณภาพสูงในราคาที่แข่งขันได้ พร้อมบริการที่เป็นเลิศเพื่อความพึงพอใจสูงสุดของลูกค้า
            </p>
        </div>
        <div class="flex flex-col md:flex-row gap-gutter">
            <div class="w-full md:w-1/2 bg-on-primary-fixed p-10 rounded-2xl text-white space-y-8">
                <h3 class="text-headline-md font-bold">พันธกิจของเรา</h3>
                <p class="text-primary-fixed-dim">
                    เรามุ่งมั่นที่จะเป็นพันธมิตรที่เชื่อถือได้สำหรับธุรกิจต่างๆ โดยการนำเสนอสินค้าที่มีคุณภาพสูงในราคาที่เหมาะสม พร้อมบริการที่รวดเร็วและเป็นมืออาชีพ เพื่อช่วยให้ลูกค้าของเราประสบความสำเร็จในธุรกิจของพวกเขา
                </p>
                <h3 class="text-headline-md font-bold">วิสัยทัศน์ของเรา</h3>
                <p class="text-primary-fixed-dim">
                    เราตั้งเป้าที่จะเป็นผู้นำในตลาดสินค้าอิเล็กทรอนิกส์ราคาส่ง ด้วยการขยายเครือข่ายการจัดจำหน่ายและเพิ่มความหลากหลายของสินค้า เพื่อให้ลูกค้าของเราสามารถเข้าถึงสินค้าที่ดีที่สุดได้อย่างง่ายดายและรวดเร็ว
                </p>
            </div>
            <div class="w-full md:w-1/2 bg-surface-container-lowest p-10 rounded-2xl border border-outline-variant shadow-sm">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDldDjvyvsLF07n81mjw69Ooj0rDFRUuWaWwf88JFif14NP07ROuaOkMp_g8aqi-r9VT4T6gPwwjj-_Y6RscPGkty0hikONOXbJKOdE6Iez902aADVenY_br5t97lUwDFZzvb1ZvYHQAweP_bt8hdtwi2vIrkjI9eiVQD8afqIlx_RKgpEl6mBy-oczCKD4x5Q2wUiU4jvxriGEcvlNj4cuepdgY5hPyQCR43P3botyig9wD6YSl7rJ0z08GVMoK0knJ3lM3hDyQZ9J"
                    alt="ภาพเกี่ยวกับเรา" class="w-full h-auto rounded-lg object-cover">
                {{-- <button
                    class="absolute top-4 right-4 bg-white/80 hover:bg-white text-gray-800 text-xs font-semibold px-3 py-1 rounded-lg transition">ดูรายละเอียด</button> --}}
            </div>
        </div>
    </section>
@endsection