@extends('layout')
@section('title', 'บริการของเรา')
@section('content')
    <div class="bg-slate-50 text-slate-900">
        <section class="relative overflow-hidden bg-slate-950 px-4 py-20 text-white sm:py-28">
            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=85&amp;w=2000"
                alt="ระบบโลจิสติกส์และคลังสินค้า" class="absolute inset-0 h-full w-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950/95 via-slate-950/80 to-amber-950/60"></div>
            <div class="relative mx-auto max-w-6xl">
                <span
                    class="inline-flex rounded-full border border-amber-300/50 bg-amber-400/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.25em] text-amber-200">DigixTech
                    Solutions</span>
                <h1 class="mt-6 max-w-3xl text-4xl font-black leading-tight sm:text-7xl">เทคโนโลยีที่ทำให้ธุรกิจ<br><span
                        class="text-amber-400">เดินหน้าได้จริง</span></h1>
                <p class="mt-6 max-w-2xl text-lg leading-relaxed text-slate-200 sm:text-xl">โซลูชันสำหรับ Fleet, Logistics
                    และองค์กรยุคดิจิทัล ตั้งแต่ GPS และ TMS ไปจนถึง E-Seal, CCTV, Infrastructure, Software และ Cloud</p>
                <a href="{{ route('contact') }}"
                    class="mt-8 inline-flex items-center gap-3 rounded-xl bg-amber-500 px-6 py-3 font-bold text-slate-950 transition hover:bg-amber-400"><i
                        class="fa-solid fa-arrow-right"></i> ขอคำปรึกษาโซลูชัน</a>
            </div>
        </section>

        <section class="mx-auto max-w-6xl px-4 py-16 sm:py-20">
            <div class="mb-10 max-w-3xl">
                <p class="text-sm font-bold uppercase tracking-widest text-amber-700">Smart Solutions for Modern Fleet &amp;
                    Logistics</p>
                <h2 class="mt-3 text-3xl font-black text-slate-900 sm:text-5xl">บริการหลักของเรา</h2>
                <p class="mt-4 text-slate-600">เพิ่มประสิทธิภาพ ยกระดับความปลอดภัย และลดต้นทุนด้วยระบบที่เชื่อมต่อข้อมูลแบบ
                    Real-time</p>
            </div>
            <div class="grid gap-6 lg:grid-cols-3">
                <article class="service-feature border-t-4 border-blue-700">
                    <div class="service-icon bg-blue-100 text-blue-700"><i class="fa-solid fa-truck-fast"></i></div>
                    <h3>GPS &amp; TMS</h3>
                    <p>ระบบติดตามรถและบริหารจัดการขนส่งครบวงจร มองเห็นทุกเส้นทางแบบ Real-time</p>
                    <ul>
                        <li>GPS Tracking และ Historical Playback</li>
                        <li>วางแผนเส้นทางและจัดการเที่ยวรถ</li>
                        <li>Live Alerts, Reports และ Driver Monitoring</li>
                    </ul>
                </article>
                <article class="service-feature border-t-4 border-amber-600">
                    <div class="service-icon bg-amber-100 text-amber-700"><i class="fa-solid fa-lock"></i></div>
                    <h3>E-Seal</h3>
                    <p>ความปลอดภัยสำหรับสินค้าและตู้คอนเทนเนอร์ พร้อมติดตามสถานะได้ทุกเวลา</p>
                    <ul>
                        <li>Electronic Lock สำหรับ Cargo</li>
                        <li>Tamper Alert และ Geofencing</li>
                        <li>ควบคุมและตรวจสอบผ่านระบบดิจิทัล</li>
                    </ul>
                </article>
                <article class="service-feature border-t-4 border-emerald-600">
                    <div class="service-icon bg-emerald-100 text-emerald-700"><i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3>CCTV &amp; Barrier</h3>
                    <p>ระบบรักษาความปลอดภัยสำหรับด่านขนส่ง สำนักงาน และพื้นที่ปฏิบัติงาน</p>
                    <ul>
                        <li>CCTV และ Video Surveillance</li>
                        <li>Barrier และ Access Control</li>
                        <li>วิเคราะห์ภาพเพื่อเพิ่มความปลอดภัย</li>
                    </ul>
                </article>
            </div>
        </section>

        <section class="integrated-services relative overflow-hidden bg-[#082554] px-4 py-16 text-white sm:py-20">
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_18%_20%,rgba(56,189,248,.24),transparent_32%),radial-gradient(circle_at_85%_80%,rgba(245,158,11,.18),transparent_30%)]">
            </div>
            <div class="relative mx-auto max-w-6xl">
                <div class="mx-auto mb-12 max-w-3xl text-center">
                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-sky-300">One Connected Platform</p>
                    <h2 class="mt-3 text-3xl font-black sm:text-5xl">Integrated Security &amp; IT Services</h2>
                    <p class="mt-4 text-slate-300">รวมระบบรักษาความปลอดภัยและโครงสร้างพื้นฐานไอที
                        เพื่อให้ธุรกิจควบคุมทุกจุดได้จากภาพเดียว</p>
                </div>
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    <article class="integrated-card"><span class="integrated-number">01</span>
                        <div class="integrated-image"><img src="/images/services/barrier.svg" alt="Barrier system"></div>
                        <h3>Barrier</h3>
                        <p>Automated Access Control<br>RFID &amp; Plate Recognition<br>Residential &amp; Commercial</p>
                    </article>
                    <article class="integrated-card"><span class="integrated-number">02</span>
                        <div class="integrated-image"><img src="/images/services/alpr.svg" alt="ALPR system"></div>
                        <h3>ALPR Systems</h3>
                        <p>Automatic License Plate Recognition<br>Real-time Vehicle Tracking<br>Law Enforcement &amp; Tolls
                        </p>
                    </article>
                    <article class="integrated-card"><span class="integrated-number">03</span>
                        <div class="integrated-image"><img src="/images/services/cctv.svg" alt="CCTV surveillance system">
                        </div>
                        <h3>CCTV &amp; Surveillance</h3>
                        <p>High-Definition Video<br>Night Vision and Remote Monitoring<br>Recording</p>
                    </article>
                    <article class="integrated-card"><span class="integrated-number">04</span>
                        <div class="integrated-image"><img src="/images/services/infrastructure.svg"
                                alt="IT infrastructure"></div>
                        <h3>IT Infrastructure</h3>
                        <p>Managed IT Services<br>Network Design<br>Hardware &amp; Software Management</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="bg-white px-4 py-16 sm:py-20">
            <div class="mx-auto max-w-6xl">
                <div class="mb-10 text-center">
                    <p class="text-sm font-bold uppercase tracking-widest text-amber-700">Complete Digital Ecosystem</p>
                    <h2 class="mt-3 text-3xl font-black text-slate-900 sm:text-5xl">โซลูชันที่เชื่อมทุกส่วนของธุรกิจ</h2>
                </div>
                <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <article class="service-card"><img src="/images/services/development.svg"
                            alt="Business-driven software development">
                        <h3>Business-Driven Software</h3>
                        <p>พัฒนา Software ตามกระบวนการทำงานจริงขององค์กร เชื่อมข้อมูลและเพิ่มประสิทธิภาพการปฏิบัติงาน</p>
                    </article>
                    <article class="service-card"><img src="/images/services/infrastructure.svg"
                            alt="Smart office infrastructure">
                        <h3>Smart Office Infrastructure</h3>
                        <p>วางระบบ Server, Network และโครงสร้างพื้นฐานที่พร้อมรองรับการเติบโตของธุรกิจ</p>
                    </article>
                    <article class="service-card"><img src="/images/services/datacenter.svg" alt="Data center services">
                        <h3>Data Center Services</h3>
                        <p>ออกแบบ ติดตั้ง และดูแล Data Center พร้อมระบบสำรองและความต่อเนื่องทางธุรกิจ</p>
                    </article>
                    <article class="service-card"><img src="/images/services/cloud.svg"
                            alt="Cloud hosting for enterprise customers">
                        <h3>Cloud / Hosting</h3>
                        <p>บริการ Cloud และ Hosting สำหรับองค์กร ปรับขนาดได้ ปลอดภัย และพร้อมใช้งาน</p>
                    </article>
                    <article class="service-card"><img src="/images/services/software.svg" alt="Software platform">
                        <h3>Software Platform</h3>
                        <p>แพลตฟอร์มสำหรับจัดการข้อมูล เอกสาร Workflow และการทำงานภายในองค์กร</p>
                    </article>
                    <article class="service-card"><img src="/images/services/alpr.svg" alt="ALPR system">
                        <h3>ALPR System</h3>
                        <p>ระบบอ่านป้ายทะเบียนอัตโนมัติสำหรับด่าน พื้นที่จอดรถ และการตรวจสอบยานพาหนะ</p>
                    </article>
                    <article class="service-card"><img src="/images/services/analytics.svg" alt="Analytics and AI">
                        <h3>Analytics &amp; AI</h3>
                        <p>เปลี่ยนข้อมูลเป็น Insight เพื่อการตัดสินใจที่รวดเร็ว แม่นยำ และวัดผลได้</p>
                    </article>
                    <article class="service-card"><img src="/images/services/network-topology.svg"
                            alt="Network topology design">
                        <h3>Network Design</h3>
                        <p>วิเคราะห์และออกแบบ LAN, WAN และ Wi-Fi ให้เหมาะกับพื้นที่และรูปแบบการใช้งาน</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="bg-slate-950 px-4 py-16 text-white sm:py-20">
            <div class="mx-auto max-w-6xl">
                <div class="grid gap-10 lg:grid-cols-[.8fr_1.2fr] lg:items-center">
                    <div>
                        <p class="text-sm font-bold uppercase tracking-widest text-amber-300">GPS &amp; TMS Control Room</p>
                        <h2 class="mt-3 text-3xl font-black sm:text-5xl">Track. Monitor. Control.</h2>
                        <p class="mt-5 leading-relaxed text-slate-300">คู่คิดด้านปฏิบัติการสำหรับการติดตาม GPS
                            และการขนส่งตลอด 24/7 พร้อมรายงานและการแจ้งเตือนที่ช่วยให้ทีมตัดสินใจได้เร็วขึ้น</p>
                    </div>
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div class="workflow-step"><span>01</span>
                            <h3>Collect</h3>
                            <p>เก็บข้อมูลรถ สถานะ และเส้นทางแบบ Real-time</p>
                        </div>
                        <div class="workflow-step"><span>02</span>
                            <h3>Analyze</h3>
                            <p>วิเคราะห์ความเสี่ยง ประสิทธิภาพ และต้นทุน</p>
                        </div>
                        <div class="workflow-step"><span>03</span>
                            <h3>Alert</h3>
                            <p>แจ้งเตือนเหตุผิดปกติและความปลอดภัยทันที</p>
                        </div>
                        <div class="workflow-step"><span>04</span>
                            <h3>Improve</h3>
                            <p>นำข้อมูลไปปรับปรุงการส่งมอบและการทำงาน</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mx-auto max-w-6xl px-4 py-16 text-center sm:py-20">
            <p class="text-sm font-bold uppercase tracking-widest text-amber-700">One Partner. Connected Solutions.</p>
            <h2 class="mt-3 text-3xl font-black text-slate-900 sm:text-5xl">เริ่มต้นวางระบบที่เหมาะกับธุรกิจคุณ</h2>
            <p class="mx-auto mt-4 max-w-2xl text-slate-600">ทีมงาน DigixTech พร้อมช่วยวิเคราะห์ ออกแบบ ติดตั้ง
                และดูแลระบบตั้งแต่ต้นจนจบ</p><a href="{{ route('contact') }}"
                class="mt-8 inline-flex items-center gap-3 rounded-xl bg-slate-900 px-6 py-3 font-bold text-white transition hover:bg-amber-700"><i
                    class="fa-solid fa-comments"></i> ติดต่อทีมงาน</a>
        </section>
    </div>

    <style>
        .service-feature {
            border-radius: 1.25rem;
            background: white;
            padding: 1.75rem;
            box-shadow: 0 12px 30px rgba(15, 23, 42, .08);
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .service-feature:hover,
        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 38px rgba(168, 93, 42, .16);
        }

        .service-feature h3 {
            margin-top: 1.25rem;
            font-size: 1.5rem;
            font-weight: 800;
            color: #1f2937;
        }

        .service-feature p {
            margin-top: .75rem;
            color: #64748b;
            line-height: 1.7;
        }

        .service-feature ul {
            margin-top: 1.25rem;
            display: grid;
            gap: .5rem;
            color: #475569;
            font-size: .9rem;
        }

        .service-feature li::before {
            content: '✓';
            margin-right: .5rem;
            color: #b87333;
            font-weight: 800;
        }

        .service-icon {
            display: grid;
            width: 3.5rem;
            height: 3.5rem;
            place-items: center;
            border-radius: 1rem;
            font-size: 1.5rem;
        }

        .service-card {
            border: 1px solid #e5e7eb;
            border-radius: 1.25rem;
            background: #fff;
            padding: 1.25rem;
            box-shadow: 0 8px 22px rgba(15, 23, 42, .05);
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .service-card img {
            height: 8rem;
            width: 100%;
            object-fit: contain;
            border-radius: .8rem;
            background: #f8fafc;
            padding: .75rem;
        }

        .service-card h3 {
            margin-top: 1.2rem;
            font-size: 1.1rem;
            font-weight: 800;
            color: #374151;
        }

        .service-card p {
            margin-top: .5rem;
            color: #64748b;
            font-size: .9rem;
            line-height: 1.7;
        }

        .workflow-step {
            border: 1px solid rgba(251, 191, 36, .25);
            border-radius: 1rem;
            background: rgba(255, 255, 255, .06);
            padding: 1.25rem;
        }

        .workflow-step span {
            color: #fbbf24;
            font-size: .75rem;
            font-weight: 800;
            letter-spacing: .15em;
        }

        .workflow-step h3 {
            margin-top: .4rem;
            font-size: 1.25rem;
            font-weight: 800;
        }

        .workflow-step p {
            margin-top: .4rem;
            color: #cbd5e1;
            font-size: .9rem;
            line-height: 1.6;
        }

        .integrated-card {
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(125, 211, 252, .35);
            border-radius: 1.5rem;
            background: linear-gradient(160deg, rgba(30, 64, 175, .72), rgba(15, 23, 42, .82));
            padding: 1rem;
            text-align: center;
            box-shadow: 0 18px 40px rgba(2, 6, 23, .3);
            transition: transform .3s ease, border-color .3s ease, box-shadow .3s ease;
        }

        .integrated-card:hover {
            transform: translateY(-8px);
            border-color: #fbbf24;
            box-shadow: 0 22px 45px rgba(2, 6, 23, .45);
        }

        .integrated-number {
            position: absolute;
            left: 1rem;
            top: 1rem;
            display: grid;
            width: 2.5rem;
            height: 2.5rem;
            place-items: center;
            border-radius: 9999px;
            background: #b87333;
            font-weight: 900;
            box-shadow: 0 0 0 4px rgba(255, 255, 255, .12);
        }

        .integrated-image {
            display: grid;
            height: 9.5rem;
            place-items: center;
            border-radius: 1.1rem;
            background: linear-gradient(145deg, rgba(14, 165, 233, .35), rgba(15, 23, 42, .6));
            padding: 1.5rem;
        }

        .integrated-image img {
            height: 100%;
            width: 100%;
            object-fit: contain;
            filter: brightness(0) invert(1);
        }

        .integrated-card h3 {
            margin-top: 1.2rem;
            font-size: 1.35rem;
            font-weight: 900;
        }

        .integrated-card p {
            margin-top: .65rem;
            min-height: 5.25rem;
            color: #cbd5e1;
            font-size: .85rem;
            line-height: 1.7;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.service-feature, .integrated-card, .service-card, .workflow-step').forEach((
                card, index) => {
                card.setAttribute('data-aos', card.classList.contains('integrated-card') ? 'zoom-in' :
                    'fade-up');
                card.setAttribute('data-aos-delay', String((index % 4) * 120));
            });
        });
    </script>
@endsection
