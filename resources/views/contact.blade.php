@extends('layout')
@section('title', 'ติดต่อเรา')
@section('content')
    <section class="max-w-7xl mx-auto px-4 py-16">
        <div class="text-center mb-16 space-y-4">
            <h2 class="text-headline-lg text-on-surface">
                ติดต่อเรา
            </h2>
            <p class="text-body-md text-on-surface-variant">
                เราพร้อมยินดีให้คำปรึกษาและเสนอแนวทางแก้ไขที่เหมาะสมสำหรับธุรกิจของคุณ
            </p>
        </div>
        <div class="flex flex-col md:flex-row gap-gutter">
            <!-- Info Column -->
            <div class="w-full md:w-1/3 bg-on-primary-fixed p-10 rounded-2xl text-white space-y-8">
                <h3 class="text-headline-md font-bold">ข้อมูลติดต่อ</h3>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <span class="material-symbols-outlined text-secondary-fixed">location_on</span>
                        <p class="text-primary-fixed-dim">
                            เลขที่ 123/456 ชั้น 20 อาคารเอ็มไพร์ ทาวเวอร์ ถนนสาทรใต้
                            แขวงยานนาวา เขตสาทร กรุงเทพฯ 10120
                        </p>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="material-symbols-outlined text-secondary-fixed">call</span>
                        <p class="text-primary-fixed-dim">02-123-4567, 081-999-8888</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="material-symbols-outlined text-secondary-fixed">mail</span>
                        <p class="text-primary-fixed-dim">
                            contact@digixtech.com
                        </p>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="material-symbols-outlined text-secondary-fixed">schedule</span>
                        <p class="text-primary-fixed-dim">
                            จันทร์ - ศุกร์: 09.00 - 18.00 น.
                        </p>
                    </div>
                </div>
                <div
                    class="rounded-xl overflow-hidden h-48 mt-8 border border-white/10 grayscale hover:grayscale-0 transition-all duration-500">
                    <img class="w-full h-full object-cover" data-location="Bangkok"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDldDjvyvsLF07n81mjw69Ooj0rDFRUuWaWwf88JFif14NP07ROuaOkMp_g8aqi-r9VT4T6gPwwjj-_Y6RscPGkty0hikONOXbJKOdE6Iez902aADVenY_br5t97lUwDFZzvb1ZvYHQAweP_bt8hdtwi2vIrkjI9eiVQD8afqIlx_RKgpEl6mBy-oczCKD4x5Q2wUiU4jvxriGEcvlNj4cuepdgY5hPyQCR43P3botyig9wD6YSl7rJ0z08GVMoK0knJ3lM3hDyQZ9J" />
                </div>
            </div>
            <!-- Form Column -->
            <div
                class="w-full md:w-2/3 bg-surface-container-lowest p-10 rounded-2xl border border-outline-variant shadow-sm">
                <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-label-md text-on-surface">ชื่อ-นามสกุล</label>
                        <input
                            class="w-full bg-surface border border-outline-variant rounded-lg p-3 focus:border-secondary focus:ring-1 focus:ring-secondary transition-all outline-none"
                            placeholder="ระบุชื่อของคุณ" type="text" />
                    </div>
                    <div class="space-y-2">
                        <label class="text-label-md text-on-surface">อีเมลติดต่อ</label>
                        <input
                            class="w-full bg-surface border border-outline-variant rounded-lg p-3 focus:border-secondary focus:ring-1 focus:ring-secondary transition-all outline-none"
                            placeholder="example@company.com" type="email" />
                    </div>
                    <div class="space-y-2">
                        <label class="text-label-md text-on-surface">เบอร์โทรศัพท์</label>
                        <input
                            class="w-full bg-surface border border-outline-variant rounded-lg p-3 focus:border-secondary focus:ring-1 focus:ring-secondary transition-all outline-none"
                            placeholder="08x-xxx-xxxx" type="tel" />
                    </div>
                    <div class="space-y-2">
                        <label class="text-label-md text-on-surface">บริการที่สนใจ</label>
                        <select
                            class="w-full bg-surface border border-outline-variant rounded-lg p-3 focus:border-secondary focus:ring-1 focus:ring-secondary transition-all outline-none">
                            <option>เลือกบริการที่ต้องการปรึกษา</option>
                            <option>Global Sourcing</option>
                            <option>Wholesale Ordering</option>
                            <option>Supply Chain Solutions</option>
                        </select>
                    </div>
                    <div class="space-y-2 md:col-span-2">
                        <label class="text-label-md text-on-surface">ข้อความเพิ่มเติม</label>
                        <textarea
                            class="w-full bg-surface border border-outline-variant rounded-lg p-3 focus:border-secondary focus:ring-1 focus:ring-secondary transition-all outline-none"
                            placeholder="ระบุรายละเอียดความต้องการของคุณ" rows="4"></textarea>
                    </div>
                    <div class="md:col-span-2 pt-4">
                        <button
                            class="w-full bg-error text-on-error py-4 rounded-lg font-bold hover:bg-opacity-90 active:scale-95 transition-all"
                            type="submit">
                            ส่งข้อความถึงเรา
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
