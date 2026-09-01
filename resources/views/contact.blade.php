@extends('layout')
@section('title', 'ติดต่อเรา')
@section('content')
    <section class="max-w-7xl mx-auto px-4 py-16">
        <div class="text-center mb-16 space-y-4">
            <h2 data-i18n="contact_title" class="text-headline-lg text-on-surface">
                ติดต่อเรา
            </h2>
            <p data-i18n="contact_intro" class="text-body-md text-on-surface-variant">
                เราพร้อมยินดีให้คำปรึกษาและเสนอแนวทางแก้ไขที่เหมาะสมสำหรับธุรกิจของคุณ
            </p>
        </div>
        <div class="flex flex-col md:flex-row gap-gutter">
            <!-- Info Column -->
            <div class="w-full md:w-2/5 bg-on-primary-fixed p-10 rounded-2xl text-white space-y-8">
                <h3 data-i18n="contact_info_title" class="text-headline-md font-bold">ข้อมูลติดต่อ</h3>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <i class="fa-solid fa-map-location-dot text-secondary-fixed text-lg"></i>
                        <p data-i18n="contact_address" class="text-primary-fixed-dim">
                            148/7 ม.3 ถนนเสด็จ ต.มีชัย อ.เมือง<br>จ.หนองคาย 43000
                        </p>
                    </div>
                    <div class="flex items-center gap-4">
                        <i class="fa-solid fa-phone text-secondary-fixed text-lg"></i>
                        <p class="text-primary-fixed-dim">02-123-4567</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <i class="fa-solid fa-envelope text-secondary-fixed text-lg"></i>
                        <p class="text-primary-fixed-dim">
                            info@digixtechsolution.com
                        </p>
                    </div>
                    <div class="flex items-center gap-4">
                        <i class="fa-solid fa-clock text-secondary-fixed text-lg"></i>
                        <p data-i18n="contact_hours" class="text-primary-fixed-dim">
                            จันทร์ - เสาร์: 09.00 - 17.00 น.
                        </p>
                    </div>
                </div>
                <div
                    class="rounded-xl overflow-hidden h-64 mt-8 border border-white/10 hover:shadow-lg transition-all duration-500">
                    <iframe class="w-full h-full"
                        src="https://maps.google.com/maps?q=17.869405578393813,102.72921595465375&z=17&output=embed"
                        allowfullscreen="" loading="lazy" scrolling="yes"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <p data-i18n="contact_map_caption" class="mt-3 text-xs text-white/80">ตำแหน่งบริษัท Digix Tech</p>
                <p class="mt-2">
                    <a href="https://www.google.com/maps/search/?api=1&query=17.869405578393813,102.72921595465375"
                        target="_blank" rel="noopener noreferrer" data-i18n="contact_map_link"
                        class="text-amber-400 hover:underline">
                        เปิดใน Google Maps
                    </a>
                </p>
            </div>
            <!-- Form Column -->
            <div
                class="w-full md:w-2/3 bg-surface-container-lowest p-10 rounded-2xl border border-outline-variant shadow-sm">
                <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label data-i18n="contact_lbl_name" class="text-label-md text-on-surface">ชื่อ-นามสกุล</label>
                        <input data-i18n="contact_ph_name" data-i18n-attr="placeholder"
                            class="w-full bg-surface border border-outline-variant rounded-lg p-3 focus:border-secondary focus:ring-1 focus:ring-secondary transition-all outline-none"
                            placeholder="ระบุชื่อของคุณ" type="text" />
                    </div>
                    <div class="space-y-2">
                        <label data-i18n="contact_lbl_email" class="text-label-md text-on-surface">อีเมลติดต่อ</label>
                        <input data-i18n="contact_ph_email" data-i18n-attr="placeholder"
                            class="w-full bg-surface border border-outline-variant rounded-lg p-3 focus:border-secondary focus:ring-1 focus:ring-secondary transition-all outline-none"
                            placeholder="example@company.com" type="email" />
                    </div>
                    <div class="space-y-2">
                        <label data-i18n="contact_lbl_phone" class="text-label-md text-on-surface">เบอร์โทรศัพท์</label>
                        <input data-i18n="contact_ph_phone" data-i18n-attr="placeholder"
                            class="w-full bg-surface border border-outline-variant rounded-lg p-3 focus:border-secondary focus:ring-1 focus:ring-secondary transition-all outline-none"
                            placeholder="08x-xxx-xxxx" type="tel" />
                    </div>
                    <div class="space-y-2">
                        <label data-i18n="contact_lbl_service" class="text-label-md text-on-surface">บริการที่สนใจ</label>
                        <select
                            class="w-full bg-surface border border-outline-variant rounded-lg p-3 focus:border-secondary focus:ring-1 focus:ring-secondary transition-all outline-none">
                            <option data-i18n="contact_opt_default">เลือกบริการที่ต้องการปรึกษา</option>
                            <option data-i18n="contact_opt_1">Global Sourcing</option>
                            <option data-i18n="contact_opt_2">Wholesale Ordering</option>
                            <option data-i18n="contact_opt_3">Supply Chain Solutions</option>
                        </select>
                    </div>
                    <div class="space-y-2 md:col-span-2">
                        <label data-i18n="contact_lbl_message"
                            class="text-label-md text-on-surface">ข้อความเพิ่มเติม</label>
                        <textarea data-i18n="contact_ph_message" data-i18n-attr="placeholder"
                            class="w-full bg-surface border border-outline-variant rounded-lg p-3 focus:border-secondary focus:ring-1 focus:ring-secondary transition-all outline-none"
                            placeholder="ระบุรายละเอียดความต้องการของคุณ" rows="4"></textarea>
                    </div>
                    <div class="md:col-span-2 pt-4">
                        <button data-i18n="contact_btn_submit"
                            class="w-full bg-amber-500 hover:bg-amber-600 text-white py-4 rounded-lg font-bold active:scale-95 transition-all"
                            type="submit">
                            ส่งข้อความถึงเรา
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
