@extends('layout')
@section('title', 'หน้าแรก')
@section('content')
    <section class="relative min-h-[560px] overflow-hidden bg-slate-950 px-4 py-24 text-white sm:py-32">
        <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=85&amp;w=2000"
            alt="คลังสินค้าและโลจิสติกส์ของ DigixTech" class="absolute inset-0 h-full w-full object-cover opacity-35">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-950/95 via-slate-900/75 to-amber-950/75"></div>
        <div
            class="absolute inset-0 opacity-20 [background-image:linear-gradient(rgba(255,255,255,.12)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.12)_1px,transparent_1px)] [background-size:42px_42px]">
        </div>
        <div
            class="pointer-events-none absolute left-1/4 top-12 h-40 w-40 rounded-full bg-sky-300/30 blur-3xl animate-[floatGlow_9s_ease-in-out_infinite]">
        </div>
        <div
            class="pointer-events-none absolute right-1/4 top-24 h-56 w-56 rounded-full bg-blue-300/25 blur-3xl animate-[floatGlow_12s_ease-in-out_infinite_reverse]">
        </div>
        <div class="relative mx-auto max-w-6xl text-center z-10">
            <div data-aos="fade-down" class="mb-7">
                <span
                    class="inline-flex items-center gap-2 rounded-full border border-amber-300/50 bg-amber-400/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.25em] text-amber-200">Business
                    Plan 2026</span>
            </div>
            <h1 data-aos="fade-up" class="text-5xl font-black tracking-tight text-white sm:text-8xl">DigixTech<span
                    class="text-amber-400">.</span></h1>
            <p data-aos="fade-up" data-aos-delay="150"
                class="mx-auto mt-6 max-w-3xl text-xl leading-relaxed text-amber-100 sm:text-3xl">Connecting Borders,
                Empowering Businesses with Integrated Digital &amp; Logistics Solutions</p>
            {{-- <div data-aos="zoom-in" data-aos-delay="300"
                class="mx-auto mt-12 flex max-w-4xl flex-col items-center gap-6 rounded-[2rem] bg-gradient-to-r from-sky-400 via-blue-500 to-blue-600 p-6 text-white shadow-xl sm:flex-row sm:justify-between sm:px-10">
                <span class="rounded-xl border border-white/60 px-6 py-4 text-2xl font-black sm:text-4xl">BUSINESS PLAN
                    2026</span>
                <span class="text-lg font-semibold sm:text-2xl">DigixTech</span>
            </div> --}}
        </div>
    </section>
    {{-- <!-- Hero Section -->
    <header id="about" class="relative pt-36 pb-20 md:pt-48 md:pb-32 overflow-hidden bg-gradient-glow z-10">
        <div class="max-w-7xl mx-auto px-6 relative">
            <div class="max-w-3xl">
                <div class="reveal-on-scroll inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-gold-500/10 border border-gold-500/30 text-gold-400 text-sm font-medium mb-6">
                    <i data-lucide="sparkles" class="w-4 h-4"></i> Business Plan 2026
                </div>
                <h1 class="reveal-on-scroll text-4xl md:text-6xl font-extrabold text-white leading-tight mb-6" style="transition-delay: 0.1s;">
                    Connecting Borders, Empowering Businesses with <span class="text-gradient-gold">Integrated Digital & Logistics Solutions</span>
                </h1>
                <p class="reveal-on-scroll text-lg text-slate-400 leading-relaxed mb-8" style="transition-delay: 0.2s;">
                    <strong class="text-slate-200">DigixTech</strong> คือผู้ให้บริการโซลูชันแบบครบวงจรที่ผสานจุดแข็งของเทคโนโลยี IT และการขนส่งสินค้าระหว่างประเทศเข้าด้วยกัน มุ่งเน้นการทำ Digital Transformation ให้กับคู่ค้าด้วยระบบ Software Management ที่ทันสมัย พร้อมระบบความปลอดภัยอัจฉริยะ และบริการ Shipping ข้ามพรมแดนที่มีประสิทธิภาพสูงสุดในภูมิภาค
                </p>
                <div class="reveal-on-scroll flex flex-wrap gap-4" style="transition-delay: 0.3s;">
                    <a href="#services" class="px-6 py-3.5 rounded-xl bg-gradient-gold text-slate-950 font-bold shadow-lg shadow-gold-500/20 hover:brightness-110 transition hover:scale-105">ดูบริการของเรา</a>
                    <a href="#contact" class="px-6 py-3.5 rounded-xl glass-card border-gold-500/40 text-gold-300 font-bold hover:bg-gold-500/10 transition hover:scale-105">ติดต่อขอคำปรึกษาฟรี</a>
                </div>
            </div>
        </div>
    </header> --}}
    <section class="mx-auto grid max-w-6xl gap-10 px-4 py-20 lg:grid-cols-[1.15fr_0.85fr] lg:items-center">
        <div>
            <p class="mb-3 text-sm font-bold uppercase tracking-widest text-sky-500">Executive Summary</p>
            <h2 class="text-3xl font-black text-blue-700 sm:text-5xl">เติบโตด้วยระบบที่เชื่อมต่อกัน</h2>
            <ul class="mt-8 space-y-5 text-lg leading-relaxed text-slate-700">
                <li class="flex gap-3"><span class="text-sky-500">●</span><span><strong>DigixTech</strong>
                        ผู้ให้บริการโซลูชันแบบครบวงจรที่ผสานจุดแข็งของเทคโนโลยี IT
                        และการขนส่งสินค้าระหว่างประเทศเข้าด้วยกัน</span></li>
                <li class="flex gap-3"><span class="text-sky-500">●</span><span>ในปี 2026 มุ่งเน้นการทำ <strong>Digital
                            Transformation</strong> ให้กับคู่ค้าด้วยระบบ Software Management ที่ทันสมัย</span></li>
                <li class="flex gap-3"><span class="text-sky-500">●</span><span>ยกระดับความปลอดภัยด้วยระบบอัจฉริยะ และบริการ
                        <strong>Shipping ข้ามพรมแดน</strong> ที่มีประสิทธิภาพสูงสุดในภูมิภาค</span></li>
            </ul>
        </div>
        <div class="relative">
            <div class="absolute -inset-3 rounded-[2rem] bg-gradient-to-br from-amber-300/40 to-slate-400/30 blur-xl"></div>
            <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?q=80&amp;w=900" alt="ทีมงานวางแผนธุรกิจ"
                class="relative h-80 w-full rounded-[2rem] object-cover shadow-2xl grayscale-[15%]">
        </div>
    </section>
    <section class="bg-gradient-to-b from-white to-sky-100 px-4 py-16">
        <div class="mx-auto max-w-6xl">
            <div class="mb-10 text-center">
                <p class="text-sm font-bold uppercase tracking-widest text-sky-500">Vision &amp; Mission</p>
                <h2 class="mt-2 text-3xl font-black text-blue-700 sm:text-5xl">วิสัยทัศน์และพันธกิจ</h2>
            </div>
            <div class="grid gap-6 lg:grid-cols-2">
                <div class="rounded-3xl bg-gradient-to-r from-sky-400 to-blue-500 p-8 text-white shadow-lg">
                    <p class="text-2xl font-black">Vision (วิสัยทัศน์)</p>
                    <p class="mt-5 text-xl font-semibold leading-relaxed">
                        “เป็นผู้นำระดับภูมิภาคในการส่งมอบนวัตกรรมดิจิทัลและโลจิสติกส์แบบบูรณาการ
                        เพื่อการเติบโตที่ยั่งยืนของพันธมิตรทางธุรกิจ”</p>
                </div>
                <div class="rounded-3xl bg-blue-800 p-8 text-white shadow-lg">
                    <p class="text-2xl font-black">Mission (พันธกิจ)</p>
                    <ul class="mt-5 space-y-3 text-lg leading-relaxed">
                        <li>• พัฒนา Software คุณภาพสูง (HRM, ERP, POS)</li>
                        <li>• ให้บริการ Shipping ข้ามแดนที่รวดเร็วและตรวจสอบได้</li>
                        <li>• ยกระดับความปลอดภัยด้วยระบบ CCTV AI อัจฉริยะ</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="mx-auto max-w-6xl px-4 py-20">
        <div class="mb-10 text-center">
            <p class="text-sm font-bold uppercase tracking-widest text-sky-500">Software Portfolio</p>
            <h2 class="mt-2 text-3xl font-black text-blue-700 sm:text-5xl">ระบบที่ขับเคลื่อนธุรกิจ</h2>
        </div>
        <div data-reveal-group class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
            <div class="glow-card rounded-3xl bg-blue-800 p-7 text-white shadow-lg"><i
                    class="fa-solid fa-users text-3xl text-sky-300"></i>
                <h3 class="mt-5 text-2xl font-bold">HRM System</h3>
                <p class="mt-3 leading-relaxed">บริหารจัดการบุคลากร ข้อมูลพนักงาน และเงินเดือน</p>
            </div>
            <div class="glow-card rounded-3xl bg-sky-500 p-7 text-white shadow-lg"><i
                    class="fa-solid fa-calendar-check text-3xl"></i>
                <h3 class="mt-5 text-2xl font-bold">Smart Check-in</h3>
                <p class="mt-3 leading-relaxed">ระบบลงทะเบียนและเข้างานอัตโนมัติด้วยเทคโนโลยีล้ำสมัย</p>
            </div>
            <div class="glow-card rounded-3xl bg-cyan-400 p-7 text-white shadow-lg"><i
                    class="fa-solid fa-cash-register text-3xl"></i>
                <h3 class="mt-5 text-2xl font-bold">POS System</h3>
                <p class="mt-3 leading-relaxed">ระบบบริหารจัดการจุดขายและควบคุมสต็อกสินค้าอย่างแม่นยำ</p>
            </div>
            <div class="glow-card rounded-3xl bg-sky-200 p-7 text-blue-900 shadow-lg"><i
                    class="fa-solid fa-network-wired text-3xl"></i>
                <h3 class="mt-5 text-2xl font-bold">ERP Solution</h3>
                <p class="mt-3 leading-relaxed">เชื่อมโยงทุกแผนกธุรกิจให้เป็นหนึ่งเดียว บริหารทรัพยากรครบวงจร</p>
            </div>
        </div>
    </section>
    <section class="bg-white px-4 py-16">
        <div class="mx-auto grid max-w-6xl gap-10 lg:grid-cols-2 lg:items-center"><img
                src="https://images.unsplash.com/photo-1494412651409-8963ce7935a7?q=80&amp;w=900"
                alt="ตู้คอนเทนเนอร์และการขนส่งสินค้า" class="h-80 w-full rounded-3xl object-cover shadow-lg">
            <div>
                <p class="text-sm font-bold uppercase tracking-widest text-sky-500">Shipping &amp; Security</p>
                <h2 class="mt-2 text-3xl font-black text-blue-700 sm:text-5xl">ส่งต่อความมั่นใจทุกเส้นทาง</h2>
                <div class="mt-8 space-y-7">
                    <div class="flex gap-5"><i class="fa-solid fa-ship mt-1 text-4xl text-blue-700"></i>
                        <div>
                            <h3 class="text-xl font-bold text-sky-500">Cross-Border Shipping</h3>
                            <p class="mt-2 leading-relaxed text-slate-600">บริการขนส่งสินค้าข้ามพรมแดนแบบครบวงจร พร้อมระบบ
                                Tracking อัจฉริยะ และการจัดการเอกสารศุลกากรแบบไร้รอยต่อ</p>
                        </div>
                    </div>
                    <div class="flex gap-5"><i class="fa-solid fa-shield-halved mt-1 text-4xl text-emerald-500"></i>
                        <div>
                            <h3 class="text-xl font-bold text-sky-500">CCTV &amp; Safety Systems</h3>
                            <p class="mt-2 leading-relaxed text-slate-600">ติดตั้งระบบรักษาความปลอดภัยขั้นสูง ด้วยกล้อง CCTV
                                คุณภาพระดับพรีเมียม และวิเคราะห์ข้อมูลอัจฉริยะผ่านเทคโนโลยี AI</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mx-auto max-w-6xl px-4 py-16">
        <div class="mb-10 text-center">
            <p class="text-sm font-bold uppercase tracking-widest text-sky-500">Strategic Pillars</p>
            <h2 class="mt-2 text-3xl font-black text-blue-700 sm:text-5xl">สามเสาหลักสู่การเติบโต</h2>
        </div>
        <div data-reveal-group class="grid gap-6 md:grid-cols-3">
            <div class="glow-card rounded-3xl border-t-8 border-blue-700 bg-white p-7 shadow-md"><i
                    class="fa-solid fa-microchip text-3xl text-blue-600"></i>
                <h3 class="mt-5 text-xl font-bold">Tech Advancement</h3>
                <p class="mt-3 text-slate-600">อัปเกรดซอฟต์แวร์ทุกตัวสู่ระบบ Cloud-Native อย่างเต็มรูปแบบ
                    และรองรับการประมวลผลขั้นสูงด้วย AI</p>
            </div>
            <div class="glow-card rounded-3xl border-t-8 border-sky-500 bg-white p-7 shadow-md"><i
                    class="fa-solid fa-handshake text-3xl text-sky-500"></i>
                <h3 class="mt-5 text-xl font-bold">Partner Ecosystem</h3>
                <p class="mt-3 text-slate-600">สร้างเครือข่ายพันธมิตร Shipping ในสปป.ลาว เมียนมา และกัมพูชา
                    เพื่อขยายฐานการบริการสู่ระดับภูมิภาค</p>
            </div>
            <div class="glow-card rounded-3xl border-t-8 border-emerald-500 bg-white p-7 shadow-md"><i
                    class="fa-solid fa-video text-3xl text-emerald-500"></i>
                <h3 class="mt-5 text-xl font-bold">Security Excellence</h3>
                <p class="mt-3 text-slate-600">ตั้งเป้าเป็นเบอร์หนึ่งด้านการให้บริการและติดตั้งระบบ Security
                    ครบวงจรสำหรับนิคมอุตสาหกรรม</p>
            </div>
        </div>
    </section>
    <section class="bg-gradient-to-br from-blue-900 to-sky-700 px-4 py-16 text-white">
        <div class="mx-auto max-w-6xl">
            <div class="mb-10 text-center">
                <p class="text-sm font-bold uppercase tracking-widest text-sky-200">SWOT Analysis 2026</p>
                <h2 class="mt-2 text-3xl font-black sm:text-5xl">มองรอบด้าน วางแผนอย่างมั่นใจ</h2>
            </div>
            <div class="grid gap-5 md:grid-cols-3">
                <div class="rounded-3xl bg-white/10 p-7">
                    <h3 class="text-xl font-bold text-sky-200">Strengths</h3>
                    <p class="mt-5 leading-relaxed">มีบริการครบวงจรทั้งด้าน IT และ Logistics (One-Stop Service)
                        ตอบโจทย์ทุกความต้องการของลูกค้า</p>
                </div>
                <div class="rounded-3xl bg-white/10 p-7">
                    <h3 class="text-xl font-bold text-sky-200">Weaknesses</h3>
                    <p class="mt-5 leading-relaxed">กลุ่มผลิตภัณฑ์มีความหลากหลายสูง
                        ต้องใช้ทีมงานผู้เชี่ยวชาญเฉพาะด้านจำนวนมากในการดูแลและพัฒนา</p>
                </div>
                <div class="rounded-3xl bg-white/10 p-7">
                    <h3 class="text-xl font-bold text-sky-200">Opportunities</h3>
                    <p class="mt-5 leading-relaxed">การขยายตัวอย่างรวดเร็วของตลาด E-commerce
                        และนโยบายการค้าเสรีภูมิภาคอาเซียน (AEC)</p>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="mx-auto max-w-6xl px-4 py-16">
        <div class="mb-10">
            <p class="text-sm font-bold uppercase tracking-widest text-sky-500">Investment &amp; Growth</p>
            <h2 class="mt-2 text-3xl font-black text-blue-700 sm:text-5xl">งบลงทุนและเป้าหมายรายได้</h2>
        </div>
        <div class="grid gap-8 lg:grid-cols-2">
            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-md">
                <h3 class="mb-5 text-xl font-bold text-blue-700">Budget Allocation 2026</h3>
                <div class="overflow-x-auto">
                    <table class="modern-table w-full text-left text-sm">
                        <thead class="bg-blue-800 text-white">
                            <tr>
                                <th class="p-3">หมวดหมู่</th>
                                <th class="p-3">ประเภท</th>
                                <th class="p-3">Priority</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="p-3">R&amp;D Software Development</td>
                                <td class="p-3 font-bold text-indigo-600">CAPEX</td>
                                <td class="p-3 font-bold text-red-600">High</td>
                            </tr>
                            <tr class="border-b bg-slate-50">
                                <td class="p-3">Marketing &amp; Branding</td>
                                <td class="p-3 font-bold text-orange-600">OPEX</td>
                                <td class="p-3 font-bold text-orange-600">Medium</td>
                            </tr>
                            <tr class="border-b">
                                <td class="p-3">Logistics Infrastructure</td>
                                <td class="p-3 font-bold text-indigo-600">CAPEX</td>
                                <td class="p-3 font-bold text-red-600">High</td>
                            </tr>
                            <tr class="bg-slate-50">
                                <td class="p-3">Operations &amp; Salaries</td>
                                <td class="p-3 font-bold text-orange-600">OPEX</td>
                                <td class="p-3 font-bold text-red-600">High</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="glow-card rounded-3xl bg-gradient-to-br from-sky-100 to-blue-100 p-8 shadow-md">
                <h3 class="text-xl font-bold text-blue-700">Revenue Forecast 2026 (THB)</h3>
                <div class="mt-8 grid items-center gap-8 sm:grid-cols-[180px_1fr]">
                    <div class="donut-chart" aria-label="Revenue forecast donut chart">
                        <div class="donut-chart__label"><strong><span data-counter="280">0</span>M</strong><span>Total
                                Target</span></div>
                    </div>
                    <div class="space-y-4 text-slate-700">
                        <div class="flex items-center justify-between gap-4 border-b border-blue-200 pb-3"><span><i
                                    class="mr-2 inline-block h-3 w-3 rounded-full bg-blue-600"></i>Shipping</span><strong>105M
                                (37.5%)</strong></div>
                        <div class="flex items-center justify-between gap-4 border-b border-blue-200 pb-3"><span><i
                                    class="mr-2 inline-block h-3 w-3 rounded-full bg-emerald-500"></i>Software
                                SaaS</span><strong>72M (25.7%)</strong></div>
                        <div class="flex items-center justify-between gap-4 border-b border-blue-200 pb-3"><span><i
                                    class="mr-2 inline-block h-3 w-3 rounded-full bg-orange-400"></i>CCTV &amp;
                                Security</span><strong>58M (20.7%)</strong></div>
                        <div class="flex items-center justify-between gap-4"><span><i
                                    class="mr-2 inline-block h-3 w-3 rounded-full bg-violet-500"></i>IT
                                Services</span><strong>45M (16.1%)</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- <section class="bg-white px-4 py-16">
        <div class="mx-auto max-w-6xl">
            <div class="mb-10 text-center">
                <p class="text-sm font-bold uppercase tracking-widest text-sky-500">Implementation Roadmap 2026</p>
                <h2 class="mt-2 text-3xl font-black text-blue-700 sm:text-5xl">แผนการลงมือทำ</h2>
            </div>
            <div data-reveal-group class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-2xl border-t-4 border-blue-600 bg-slate-50 p-6">
                    <div class="flex items-center justify-between">
                        <p class="font-bold text-blue-600">Q1</p><span class="status-badge">In Progress</span>
                    </div>
                    <h3 class="mt-2 text-xl font-bold">Infrastructure</h3>
                    <p class="mt-3 text-sm text-slate-600">อัปเกรดระบบ Server ให้ทันสมัย และเปิดตัว UI ดีไซน์ใหม่ของ
                        Software ทั้งหมด</p>
                </div>
                <div class="rounded-2xl border-t-4 border-blue-600 bg-slate-50 p-6">
                    <div class="flex items-center justify-between">
                        <p class="font-bold text-blue-600">Q2</p><span class="status-badge">In Progress</span>
                    </div>
                    <h3 class="mt-2 text-xl font-bold">Expansion</h3>
                    <p class="mt-3 text-sm text-slate-600">เปิดสาขาตัวแทนในต่างประเทศ พร้อมจัดแคมเปญกระตุ้นยอด Shipping
                        ครบวงจร</p>
                </div>
                <div class="rounded-2xl border-t-4 border-blue-600 bg-slate-50 p-6">
                    <div class="flex items-center justify-between">
                        <p class="font-bold text-blue-600">Q3</p><span class="status-badge">In Progress</span>
                    </div>
                    <h3 class="mt-2 text-xl font-bold">Optimization</h3>
                    <p class="mt-3 text-sm text-slate-600">นำระบบ AI เข้ามาใช้จริงในงาน Security
                        และประมวลผลข้อมูลเส้นทางการขนส่ง</p>
                </div>
                <div class="rounded-2xl border-t-4 border-blue-600 bg-slate-50 p-6">
                    <div class="flex items-center justify-between">
                        <p class="font-bold text-blue-600">Q4</p><span class="status-badge">In Progress</span>
                    </div>
                    <h3 class="mt-2 text-xl font-bold">Market Leader</h3>
                    <p class="mt-3 text-sm text-slate-600">ประเมินผลกำไรสุทธิ และเร่งขยายพอร์ตโฟลิโอเจาะกลุ่มตลาด
                        Enterprise ขนาดใหญ่</p>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="mx-auto max-w-6xl px-4 py-16">
        <div class="mb-10 text-center">
            <p class="text-sm font-bold uppercase tracking-widest text-sky-500">Organization Structure</p>
            <h2 class="mt-2 text-3xl font-black text-blue-700 sm:text-5xl">โครงสร้างองค์กร</h2>
        </div>
        <div class="mx-auto max-w-xl rounded-3xl bg-blue-800 p-7 text-center text-white shadow-lg">
            <h3 class="text-2xl font-bold">Board of Directors</h3>
            <p class="mt-2 text-sky-200">CEO / Management</p>
        </div>
        <div class="mx-auto mt-10 grid max-w-5xl gap-6 md:grid-cols-2">
            <div class="rounded-3xl border-t-8 border-blue-600 bg-white p-8 text-center shadow-md"><i
                    class="fa-solid fa-laptop-code text-3xl text-blue-600"></i>
                <h3 class="mt-4 text-2xl font-bold">IT &amp; Development</h3>
                <p class="mt-3 text-slate-600">Software Engineers, UI/UX Designers, QA Team, Technical Support</p>
            </div>
            <div class="rounded-3xl border-t-8 border-emerald-500 bg-white p-8 text-center shadow-md"><i
                    class="fa-solid fa-truck text-3xl text-emerald-500"></i>
                <h3 class="mt-4 text-2xl font-bold">Logistics &amp; Shipping</h3>
                <p class="mt-3 text-slate-600">Supply Chain Managers, Custom Officers, Operations Team</p>
            </div>
        </div>
    </section>
    {{-- <section class="bg-gradient-to-br from-sky-100 to-blue-200 px-4 py-16">
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="text-5xl font-black text-blue-700 sm:text-7xl">THANK YOU</h2>
            <div
                class="mt-8 rounded-full bg-gradient-to-r from-sky-400 to-blue-600 px-6 py-5 text-2xl font-semibold text-white shadow-lg sm:text-4xl">
                DigixTech</div>
            <div class="mt-12 text-left">
                <h3 class="text-2xl font-bold text-blue-900">Contact Us</h3>
                <div class="mt-4 grid gap-3 text-lg text-slate-700 sm:grid-cols-2">
                    <p><i class="fa-solid fa-envelope mr-3 text-cyan-500"></i>info@soudaphone.com</p>
                    <p><i class="fa-brands fa-facebook mr-3 text-cyan-500"></i>Soudaphone Technology</p>
                    <p><i class="fa-solid fa-globe mr-3 text-cyan-500"></i>https://soudaphone.com</p>
                    <p><i class="fa-solid fa-phone mr-3 text-cyan-500"></i>020 58515202</p>
                </div>
            </div>
        </div>
    </section> --}}

    <div class="hidden">
        <h2 class="text-center text-xl font-bold text-gray-900 mb-2">บริการโซลูชันไอทีครบวงจร สำหรับธุรกิจทุกขนาด</h2>
        <p class="text-center text-gray-500 text-xs mb-10">เราให้บริการตั้งแต่การวางแผน จัดหา ติดตั้ง
            จนถึงดูแลหลังการใช้งาน เพื่อให้ระบบของคุณใช้งานได้จริงและเติบโตได้อย่างมั่นคง</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div data-aos="zoom-in" data-aos-delay="700"
                class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex items-start space-x-4 card-hover">
                <div class="p-3 bg-amber-50 text-amber-600 rounded-lg"><i class="fa-solid fa-earth-americas text-xl"></i>
                </div>
                <div>
                    <h3 class="font-bold mb-1 text-sm">จัดหาอุปกรณ์มาตรฐาน</h3>
                    <p class="text-xs text-gray-500">จัดหาอุปกรณ์ IT, IoT และเครือข่ายจากแบรนด์ชั้นนำ
                        พร้อมการรองรับการใช้งานระยะยาว</p>
                </div>
            </div>
            <div data-aos="zoom-in" data-aos-delay="700"
                class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex items-start space-x-4 card-hover">
                <div class="p-3 bg-blue-50 text-blue-500 rounded-lg"><i class="fa-solid fa-tags text-xl"></i></div>
                <div>
                    <h3 class="font-bold mb-1 text-sm">ราคาเหมาะสมและโปร่งใส</h3>
                    <p class="text-xs text-gray-500">เสนอราคาอย่างตรงไปตรงมา
                        พร้อมคำแนะนำเพื่อให้คุณได้โซลูชันที่คุ้มค่าที่สุด</p>
                </div>
            </div>
            <div data-aos="zoom-in" data-aos-delay="700"
                class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex items-start space-x-4 card-hover">
                <div class="p-3 bg-cyan-50 text-cyan-500 rounded-lg"><i class="fa-solid fa-check text-xl"></i></div>
                <div>
                    <h3 class="font-bold mb-1 text-sm">การันตีคุณภาพงาน</h3>
                    <p class="text-xs text-gray-500">ทุกโปรเจกต์ผ่านกระบวนการตรวจสอบและทดสอบอย่างละเอียดก่อนส่งมอบ</p>
                </div>
            </div>
        </div>
        </section>
        <section class="bg-gradient-to-br from-slate-900 to-slate-800 text-white max-w-7xl mx-auto px-4 py-16 rounded-xl">
            <h2 class="text-center text-xl font-bold mb-4">บริการออกแบบและพัฒนา Software & Hardware Solution แบบครบวงจร
            </h2>
            <p class="text-center text-sm mb-6">รับออกแบบและพัฒนาตามความต้องการ ใส่ใจทุกขั้นตอน
                บริการด้วยใจโดยผู้มีประสบการณ์ พร้อมให้คำปรึกษาและประเมินราคาฟรี</p>
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
                <a href="{{ route('contact') }}"
                    class="inline-block mt-4 bg-amber-500 hover:bg-amber-600 text-white font-medium px-6 py-3 rounded-md transition">ติดต่อขอคำปรึกษาฟรี</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div data-aos="zoom-in" class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                    <h3 class="text-xl font-semibold text-slate-900 mb-4">Hardware Layer (IoT Devices)</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">อุปกรณ์ IoT ที่เชื่อมต่อได้ดี
                        รองรับการใช้งานจริงและเก็บข้อมูลได้แม่นยำสำหรับระบบอัจฉริยะ</p>
                </div>
                <div data-aos="zoom-in" data-aos-delay="150"
                    class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                    <h3 class="text-xl font-semibold text-slate-900 mb-4">Software Layer (Soudaphone Platform)</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        แพลตฟอร์มซอฟต์แวร์ที่ออกแบบมาเพื่อบริหารจัดการข้อมูลและกระบวนการทำงานอย่างครบวงจร</p>
                </div>
                <div data-aos="zoom-in" data-aos-delay="300"
                    class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                    <h3 class="text-xl font-semibold text-slate-900 mb-4">Analytics & AI Layer</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">วิเคราะห์ข้อมูลเชิงลึกด้วย AI
                        เพื่อช่วยให้คุณตัดสินใจได้เร็วขึ้นและแม่นยำขึ้น</p>
                </div>
                <div data-aos="zoom-in" data-aos-delay="450"
                    class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                    <h3 class="text-xl font-semibold text-slate-900 mb-4">Software Development Services</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">พัฒนาซอฟต์แวร์เฉพาะทางทั้งระบบ เขียนโปรแกรมตามสเปค
                        พร้อมทดสอบและดูแลหลังส่งมอบ</p>
                </div>
                <div data-aos="zoom-in" data-aos-delay="600"
                    class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                    <h3 class="text-xl font-semibold text-slate-900 mb-4">Cloud, IT & Data Center Service</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">บริการคลาวด์และศูนย์ข้อมูลที่ปลอดภัย ปรับขนาดได้
                        และรองรับการใช้งานระดับองค์กร</p>
                </div>
                <div data-aos="zoom-in" data-aos-delay="750"
                    class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
                    <h3 class="text-xl font-semibold text-slate-900 mb-4">Consulting & Support</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">ให้คำปรึกษาเชิงเทคนิคและธุรกิจ
                        พร้อมติดตั้งและดูแลระบบอย่างมืออาชีพ</p>
                </div>
            </div>
        </section>
        <section class="bg-gradient-to-br from-slate-50 to-gray-100 py-16 px-4">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-lg font-bold mb-8 text-gray-900">โซลูชันที่เราเชี่ยวชาญ</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <!-- Card 1: Modern Infrastructure -->
                    <div data-aos="zoom-in"
                        class="relative rounded-xl overflow-hidden h-48 group cursor-pointer card-hover">
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
                    <div data-aos="zoom-in" data-aos-delay="150"
                        class="relative rounded-xl overflow-hidden h-48 group cursor-pointer card-hover">
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
                    <div data-aos="zoom-in" data-aos-delay="300"
                        class="relative rounded-xl overflow-hidden h-48 group cursor-pointer card-hover">
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
                    ด้วยทีมงานวิศวกรมืออาชีพที่พร้อมเป็นที่ปรึกษาและจัดหาอุปกรณ์ที่ใช่ เพื่อทุกความต้องการทางธุรกิจของคุณ
                </p>
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
    </div>

    <style>
        @keyframes floatGlow {

            0%,
            100% {
                transform: translate3d(0, 0, 0) scale(1);
                opacity: .55;
            }

            50% {
                transform: translate3d(24px, -18px, 0) scale(1.12);
                opacity: .9;
            }
        }

        .scroll-reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity .7s ease, transform .7s cubic-bezier(.2, .8, .2, 1);
        }

        .scroll-reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .glow-card {
            transition: transform .35s ease, box-shadow .35s ease;
        }

        .glow-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 40px rgba(168, 93, 42, .22);
        }

        .donut-chart {
            position: relative;
            display: grid;
            width: 180px;
            height: 180px;
            place-items: center;
            border-radius: 9999px;
            background: conic-gradient(#2563eb 0 37.5%, #10b981 37.5% 63.2%, #fb923c 63.2% 83.9%, #8b5cf6 83.9% 100%);
            box-shadow: 0 12px 28px rgba(37, 99, 235, .18);
        }

        .donut-chart::before {
            width: 116px;
            height: 116px;
            content: '';
            border-radius: inherit;
            background: #eff6ff;
        }

        .donut-chart__label {
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #1e3a8a;
        }

        .donut-chart__label strong {
            font-size: 1.85rem;
            line-height: 1;
        }

        .donut-chart__label span:last-child {
            margin-top: .35rem;
            font-size: .7rem;
            color: #475569;
        }

        .status-badge {
            border-radius: 9999px;
            background: #dbeafe;
            padding: .25rem .55rem;
            color: #1d4ed8;
            font-size: .65rem;
            font-weight: 700;
            white-space: nowrap;
        }

        /* DigixTech logo palette: brushed silver, charcoal and copper. */
        main .text-blue-700,
        main .text-blue-800,
        main .text-blue-900 {
            color: #374151 !important;
        }

        main .text-sky-500,
        main .text-blue-500 {
            color: #a85d2a !important;
        }

        main .text-sky-200,
        main .text-sky-300 {
            color: #e5e7eb !important;
        }

        main .bg-blue-800 {
            background-color: #374151 !important;
        }

        main .bg-sky-500 {
            background-color: #b87333 !important;
        }

        main .bg-cyan-400 {
            background-color: #c98a55 !important;
        }

        main .bg-sky-200 {
            background-color: #d1d5db !important;
        }

        main .border-blue-700,
        main .border-blue-600 {
            border-color: #b87333 !important;
        }

        main .border-sky-500 {
            border-color: #9ca3af !important;
        }

        main .bg-gradient-to-r.from-sky-400.via-blue-500.to-blue-600 {
            background-image: linear-gradient(110deg, #9ca3af, #b87333 52%, #7c4525) !important;
        }

        main .bg-gradient-to-r.from-sky-400.to-blue-500 {
            background-image: linear-gradient(110deg, #b87333, #8f532f) !important;
        }

        main .bg-gradient-to-b.from-white.to-sky-100,
        main .bg-gradient-to-br.from-sky-100.to-blue-100 {
            background-image: linear-gradient(135deg, #ffffff, #f1f1ef) !important;
        }

        main .bg-gradient-to-br.from-blue-900.to-sky-700 {
            background-image: linear-gradient(135deg, #292e33, #59636b) !important;
        }

        .status-badge {
            background: #f2dfd0;
            color: #8f4f27;
        }

        .modern-table thead th:first-child {
            border-radius: .75rem 0 0 0;
        }

        .modern-table thead th:last-child {
            border-radius: 0 .75rem 0 0;
        }

        .modern-table tbody tr {
            transition: background-color .2s ease;
        }

        .modern-table tbody tr:hover {
            background-color: #fff7ed;
        }

        @media (prefers-reduced-motion: reduce) {

            .scroll-reveal,
            .glow-card,
            .animate-\[floatGlow_9s_ease-in-out_infinite\],
            .animate-\[floatGlow_12s_ease-in-out_infinite_reverse\] {
                animation: none;
                transition: none;
            }

            .scroll-reveal {
                opacity: 1;
                transform: none;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            const revealTargets = document.querySelectorAll(
                'main section:not(:first-of-type) > div, main section:not(:first-of-type) > img');
            const staggerGroups = document.querySelectorAll('[data-reveal-group]');

            staggerGroups.forEach((group) => {
                group.querySelectorAll(':scope > div').forEach((card, index) => {
                    card.classList.add('scroll-reveal');
                    card.style.transitionDelay = prefersReducedMotion ? '0ms' : `${index * 100}ms`;
                });
            });

            revealTargets.forEach((target) => target.classList.add('scroll-reveal'));

            const showTarget = (target) => {
                target.classList.add('is-visible');
            };

            if (prefersReducedMotion || !('IntersectionObserver' in window)) {
                revealTargets.forEach(showTarget);
                document.querySelectorAll('.scroll-reveal').forEach(showTarget);
            } else {
                const revealObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            showTarget(entry.target);
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.15,
                    rootMargin: '0px 0px -40px'
                });

                document.querySelectorAll('.scroll-reveal').forEach((target) => revealObserver.observe(target));
            }

            document.querySelectorAll('[data-counter]').forEach((counter) => {
                const targetValue = Number(counter.dataset.counter);
                let hasStarted = false;

                const animateCounter = () => {
                    if (hasStarted) return;
                    hasStarted = true;

                    if (prefersReducedMotion) {
                        counter.textContent = targetValue;
                        return;
                    }

                    const startTime = performance.now();
                    const duration = 1600;
                    const update = (currentTime) => {
                        const progress = Math.min((currentTime - startTime) / duration, 1);
                        const easedProgress = 1 - Math.pow(1 - progress, 3);
                        counter.textContent = Math.floor(easedProgress * targetValue);
                        if (progress < 1) requestAnimationFrame(update);
                    };

                    requestAnimationFrame(update);
                };

                const counterObserver = new IntersectionObserver((entries, observer) => {
                    if (entries[0].isIntersecting) {
                        animateCounter();
                        observer.disconnect();
                    }
                }, {
                    threshold: 0.6
                });

                counterObserver.observe(counter);
            });
        });
    </script>
@endsection
