@extends('layout')
@section('title', 'ผลงานของเรา')
@section('content')
    <div class="portfolio-page">
        <section class="portfolio-hero">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=85&amp;w=2000"
                alt="โครงการดิจิทัลทรานส์ฟอร์เมชันของ DigixTech">
            <div class="portfolio-hero__overlay"></div>
            <div class="portfolio-hero__content">
                <span data-i18n="port_hero_subtitle">DigixTech Portfolio</span>
                <h1>
                    <span data-i18n="port_hero_title_part1" class="port_hero_title">ผลงานที่เปลี่ยนระบบ</span><br>
                    <b data-i18n="port_hero_title_highlight">ให้เป็นโอกาสทางธุรกิจ</b>
                </h1>
                <p data-i18n="port_hero_desc">รวมโซลูชัน Software, Logistics, Security และ Infrastructure ที่ออกแบบเพื่อการใช้งานจริง</p>
            </div>
        </section>

        <section class="portfolio-section">
            <div class="portfolio-heading">
                <span data-i18n="sec_sec_num">01 / Integrated Security</span>
                <h2 data-i18n="sec_sec_title">ระบบความปลอดภัยและโครงสร้างพื้นฐาน</h2>
                <p data-i18n="sec_sec_desc">เชื่อมต่อการควบคุมพื้นที่ การตรวจจับยานพาหนะ และการบริหารระบบไอทีไว้ในแพลตฟอร์มเดียว</p>
            </div>
            <div class="portfolio-grid portfolio-grid--four">
                <!-- Card 1 -->
                <article class="portfolio-card">
                    <div class="portfolio-card__visual"><img src="/images/portfolio/Image_Barrier.jpg" alt="Barrier System"></div>
                    <div class="portfolio-card__body">
                        <span data-i18n="sec_card1_tag">Access Control</span>
                        <h3 data-i18n="sec_card1_title">Barrier</h3>
                        <p data-i18n="sec_card1_desc">ระบบไม้กั้นอัตโนมัติ รองรับ RFID, Plate Recognition และการควบคุมการเข้าออกสำหรับพื้นที่พักอาศัยและธุรกิจ</p>
                    </div>
                </article>
                <!-- Card 2 -->
                <article class="portfolio-card">
                    <div class="portfolio-card__visual"><img src="/images/portfolio/Image_Balpr.jpg" alt="ALPR System"></div>
                    <div class="portfolio-card__body">
                        <span data-i18n="sec_card2_tag">Vehicle Intelligence</span>
                        <h3 data-i18n="sec_card2_title">ALPR Systems</h3>
                        <p data-i18n="sec_card2_desc">อ่านป้ายทะเบียนอัตโนมัติ ติดตามรถแบบ Real-time และรองรับงานด่าน การจราจร และระบบ Toll</p>
                    </div>
                </article>
                <!-- Card 3 -->
                <article class="portfolio-card">
                    <div class="portfolio-card__visual"><img src="/images/portfolio/Image_Bcctv.jpg" alt="CCTV Surveillance"></div>
                    <div class="portfolio-card__body">
                        <span data-i18n="sec_card3_tag">Video Security</span>
                        <h3 data-i18n="sec_card3_title">CCTV &amp; Surveillance</h3>
                        <p data-i18n="sec_card3_desc">ระบบกล้องความคมชัดสูง Night Vision, Remote Monitoring และ Recording เพื่อความปลอดภัยรอบด้าน</p>
                    </div>
                </article>
                <!-- Card 4 -->
                <article class="portfolio-card">
                    <div class="portfolio-card__visual"><img src="/images/portfolio/Image_Binfrastructure.jpg" alt="IT Infrastructure"></div>
                    <div class="portfolio-card__body">
                        <span data-i18n="sec_card4_tag">Managed IT</span>
                        <h3 data-i18n="sec_card4_title">IT Infrastructure</h3>
                        <p data-i18n="sec_card4_desc">ออกแบบ Network, ดูแล Hardware และ Software Management ให้โครงสร้างไอทีพร้อมใช้งาน</p>
                    </div>
                </article>
            </div>
        </section>

        <section class="portfolio-section portfolio-section--dark">
            <div class="portfolio-heading">
                <span data-i18n="soft_sec_num">02 / Business Software</span>
                <h2 data-i18n="soft_sec_title">ระบบซอฟต์แวร์สำหรับธุรกิจ</h2>
                <p data-i18n="soft_sec_desc">เครื่องมือที่ช่วยให้ทีมทำงานเร็วขึ้น เห็นข้อมูลชัดขึ้น และบริหารจัดการได้จากทุกที่</p>
            </div>
            <div class="portfolio-grid portfolio-grid--three">
                <!-- Card 1 -->
                <article class="software-card">
                    <div class="software-card__icon"><i class="fa-solid fa-chart-line"></i></div>
                    <div>
                        <span data-i18n="soft_c1_tag">Management Platform</span>
                        <h3 data-i18n="soft_c1_title">Smart ERP Connect Plus</h3>
                        <p data-i18n="soft_c1_desc">ระบบบริหารจัดการองค์กรที่รวม Inventory, Accounting, Workflow และข้อมูลสำคัญไว้ในที่เดียว</p>
                        <ul>
                            <li data-i18n="soft_c1_li1">Dashboard และ Main Menu</li>
                            <li data-i18n="soft_c1_li2">Inventory Management</li>
                            <li data-i18n="soft_c1_li3">Accounting Module</li>
                        </ul>
                    </div>
                </article>
                <!-- Card 2 -->
                <article class="software-card">
                    <div class="software-card__icon"><i class="fa-solid fa-users"></i></div>
                    <div>
                        <span data-i18n="soft_c2_tag">People Operations</span>
                        <h3 data-i18n="soft_c2_title">HR-M System</h3>
                        <p data-i18n="soft_c2_desc">ระบบบริหารทรัพยากรบุคคลสำหรับติดตามข้อมูลพนักงานและการทำงานอย่างเป็นระบบ</p>
                        <ul>
                            <li data-i18n="soft_c2_li1">Executive Dashboard</li>
                            <li data-i18n="soft_c2_li2">Time Attendance</li>
                            <li data-i18n="soft_c2_li3">Daily Timesheet และ Payslip</li>
                        </ul>
                    </div>
                </article>
                <!-- Card 3 -->
                <article class="software-card">
                    <div class="software-card__icon"><i class="fa-solid fa-calendar-check"></i></div>
                    <div>
                        <span data-i18n="soft_c3_tag">Smart Workforce</span>
                        <h3 data-i18n="soft_c3_title">Smart Check IN-OUT</h3>
                        <p data-i18n="soft_c3_desc">ลงเวลาเข้าออกด้วย Biometric และ GPS พร้อมระบบ Geofencing, Dynamic Workflow และจัดการกะงาน</p>
                        <ul>
                            <li data-i18n="soft_c3_li1">Biometric &amp; GPS Tracking</li>
                            <li data-i18n="soft_c3_li2">Smart Geofencing</li>
                            <li data-i18n="soft_c3_li3">Advanced Shift &amp; OT</li>
                        </ul>
                    </div>
                </article>
                <!-- Card 4 -->
                <article class="software-card">
                    <div class="software-card__icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div>
                        <span data-i18n="soft_c4_tag">Transport Management</span>
                        <h3 data-i18n="soft_c4_title">Smart TMS</h3>
                        <p data-i18n="soft_c4_desc">แพลตฟอร์มบริหารจัดการขนส่งแบบครบวงจร พร้อมมองเห็นรถและสถานะงานแบบ Real-time</p>
                        <ul>
                            <li data-i18n="soft_c4_li1">Live GPS Tracking</li>
                            <li data-i18n="soft_c4_li2">Maintenance</li>
                            <li data-i18n="soft_c4_li3">Travel History &amp; Analytics</li>
                        </ul>
                    </div>
                </article>
                <!-- Card 5 -->
                <article class="software-card">
                    <div class="software-card__icon"><i class="fa-solid fa-file-signature"></i></div>
                    <div>
                        <span data-i18n="soft_c5_tag">Paperless Workflow</span>
                        <h3 data-i18n="soft_c5_title">E-Docs</h3>
                        <p data-i18n="soft_c5_desc">ระบบเอกสารดิจิทัลสำหรับ Dashboard, Meeting Booking, Document List และ E-Form</p>
                        <ul>
                            <li data-i18n="soft_c5_li1">จัดเก็บเอกสารกลาง</li>
                            <li data-i18n="soft_c5_li2">Workflow และ Approval</li>
                            <li data-i18n="soft_c5_li3">ค้นหาเอกสารได้รวดเร็ว</li>
                        </ul>
                    </div>
                </article>
                <!-- Card 6 -->
                <article class="software-card">
                    <div class="software-card__icon"><i class="fa-solid fa-cash-register"></i></div>
                    <div>
                        <span data-i18n="soft_c6_tag">Retail Operations</span>
                        <h3 data-i18n="soft_c6_title">Smart POS System</h3>
                        <p data-i18n="soft_c6_desc">ระบบจุดขายและ Back Office สำหรับบริหารสินค้า ยอดขาย ใบเสร็จ และ Tax Invoice</p>
                        <ul>
                            <li data-i18n="soft_c6_li1">POS Terminal</li>
                            <li data-i18n="soft_c6_li2">Sales Analytics</li>
                            <li data-i18n="soft_c6_li3">Receipt &amp; Tax Invoice</li>
                        </ul>
                    </div>
                </article>
            </div>
        </section>

        <section class="portfolio-section">
            <div class="portfolio-heading">
                <span data-i18n="log_sec_num">03 / Logistics Ecosystem</span>
                <h2 data-i18n="log_sec_title">โซลูชันโลจิสติกส์และแพลตฟอร์มใหม่</h2>
                <p data-i18n="log_sec_desc">ออกแบบระบบให้เชื่อมผู้ให้บริการ ผู้ขับรถ ลูกค้า และพื้นที่ปฏิบัติการเข้าด้วยกัน</p>
            </div>
            <div class="portfolio-grid portfolio-grid--four">
                <!-- Card 1 -->
                <article class="mini-project">
                    <div class="mini-project__icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                    <h3 data-i18n="log_c1_title">KOKKEAK</h3>
                    <p data-i18n="log_c1_desc">แพลตฟอร์มรายงานและตรวจสอบงานซ่อมบำรุงภาคสนาม พร้อมติดตามสถานะได้ตลอดเวลา</p>
                </article>
                <!-- Card 2 -->
                <article class="mini-project">
                    <div class="mini-project__icon"><i class="fa-solid fa-truck-fast"></i></div>
                    <h3 data-i18n="log_c2_title">Logistic Pro</h3>
                    <p data-i18n="log_c2_desc">แพลตฟอร์ม On-demand เชื่อม Customer และ Driver พร้อมแผนที่ การชำระเงิน และ Real-time Tracking</p>
                </article>
                <!-- Card 3 -->
                <article class="mini-project">
                    <div class="mini-project__icon"><i class="fa-solid fa-square-parking"></i></div>
                    <h3 data-i18n="log_c3_title">Xpark</h3>
                    <p data-i18n="log_c3_desc">แพลตฟอร์มจองลานจอดรถสำหรับคนขับ เจ้าของลาน และบริษัทขนส่ง พร้อม Dashboard และการชำระเงิน</p>
                </article>
                <!-- Card 4 -->
                <article class="mini-project">
                    <div class="mini-project__icon"><i class="fa-solid fa-layer-group"></i></div>
                    <h3 data-i18n="log_c4_title">Other Projects</h3>
                    <p data-i18n="log_c4_desc">Pre-Alert, Pre-Gate, WMS, Interlink, Container Tracking, Smart Chat, CIMS, Stock Cheque และระบบสนับสนุนงานด่าน</p>
                </article>
            </div>
        </section>

        <section class="portfolio-section portfolio-section--cta">
            <div class="portfolio-heading">
                <span data-i18n="deliv_sec_num">04 / Project Delivery</span>
                <h2 data-i18n="deliv_sec_title">จากไอเดียสู่ระบบที่ใช้งานได้จริง</h2>
                <p data-i18n="deliv_sec_desc">เราดูแลตั้งแต่สำรวจความต้องการ ออกแบบ พัฒนา ติดตั้ง ไปจนถึง Support หลังส่งมอบ</p>
            </div>
            <div class="delivery-steps">
                <!-- Step 01 -->
                <div>
                    <b>01</b>
                    <h3 data-i18n="deliv_s1_title">Discover</h3>
                    <p data-i18n="deliv_s1_desc">เข้าใจโจทย์และกระบวนการทำงาน</p>
                </div>
                <!-- Step 02 -->
                <div>
                    <b>02</b>
                    <h3 data-i18n="deliv_s2_title">Design</h3>
                    <p data-i18n="deliv_s2_desc">ออกแบบโซลูชันและประสบการณ์ใช้งาน</p>
                </div>
                <!-- Step 03 -->
                <div>
                    <b>03</b>
                    <h3 data-i18n="deliv_s3_title">Build</h3>
                    <p data-i18n="deliv_s3_desc">พัฒนา เชื่อมระบบ และทดสอบ</p>
                </div>
                <!-- Step 04 -->
                <div>
                    <b>04</b>
                    <h3 data-i18n="deliv_s4_title">Support</h3>
                    <p data-i18n="deliv_s4_desc">ดูแลและพัฒนาต่อยอดอย่างต่อเนื่อง</p>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="portfolio-cta">
                <i class="fa-solid fa-comments"></i> 
                <span data-i18n="deliv_cta_btn">คุยกับทีม DigixTech</span>
            </a>
        </section>
    </div>
    <style>
        .portfolio-page {
            background: #f8fafc;
            color: #172033;
        }

        .portfolio-hero {
            position: relative;
            min-height: 500px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: #071b3b;
        }

        .portfolio-hero>img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: .3;
        }

        .portfolio-hero__overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(110deg, #071b3b 12%, rgba(7, 27, 59, .84) 48%, rgba(168, 93, 42, .3));
        }

        .portfolio-hero__content {
            position: relative;
            max-width: 72rem;
            width: 100%;
            margin: 0 auto;
            padding: 5rem 1rem;
            color: white;
        }
        .portfolio-hero__content span.port_hero_title{
            font-size: clamp(2.5rem, 6vw, 5.75rem);
            letter-spacing: unset;
            color: white !important;
        }
        .portfolio-hero__content span,
        .portfolio-heading span {
            color: #b87333;
            font-size: .75rem;
            font-weight: 800;
            letter-spacing: .2em;
            text-transform: uppercase;
        }

        .portfolio-hero h1 {
            margin-top: 1.25rem;
            font-size: clamp(2.5rem, 6vw, 5.75rem);
            line-height: 1.05;
            font-weight: 900;
        }

        .portfolio-hero h1 b {
            color: #f4b66c;
        }

        .portfolio-hero p {
            max-width: 38rem;
            margin-top: 1.5rem;
            color: #dbeafe;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .portfolio-section {
            max-width: 72rem;
            margin: 0 auto;
            padding: 5rem 1rem;
        }

        .portfolio-section--dark {
            max-width: none;
            padding-right: max(1rem, calc((100% - 72rem) / 2));
            padding-left: max(1rem, calc((100% - 72rem) / 2));
            background: #0b1f42;
            color: white;
        }

        /* .portfolio-section--cta {
            text-align: center;
        } */

        .portfolio-heading {
            max-width: 48rem;
            margin-bottom: 2.5rem;
        }

        .portfolio-heading h2 {
            margin-top: .65rem;
            color: #172033;
            font-size: clamp(2rem, 4vw, 3.5rem);
            font-weight: 900;
            line-height: 1.1;
        }

        .portfolio-section--dark .portfolio-heading h2 {
            color: white;
        }

        .portfolio-heading p {
            margin-top: .85rem;
            color: #64748b;
            line-height: 1.75;
        }

        .portfolio-section--dark .portfolio-heading p {
            color: #cbd5e1;
        }

        .portfolio-grid {
            display: grid;
            gap: 1.25rem;
        }

        .portfolio-grid--four {
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }

        .portfolio-grid--three {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .portfolio-card,
        .software-card,
        .mini-project {
            border-radius: 1.25rem;
            overflow: hidden;
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .portfolio-card:hover,
        .software-card:hover,
        .mini-project:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 38px rgba(15, 23, 42, .18);
        }

        .portfolio-card {
            background: white;
            border: 1px solid #e2e8f0;
        }

        .portfolio-card__visual {
            display: grid;
            /* height: 11rem; */
            place-items: center;
            background: linear-gradient(135deg, #dbeafe, #eff6ff);
            /* padding: 1.2rem; */
        }

        .portfolio-card__visual img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .portfolio-card__body {
            padding: 1.35rem;
        }

        .portfolio-card__body span,
        .software-card span {
            color: #b87333;
            font-size: .7rem;
            font-weight: 800;
            letter-spacing: .12em;
            text-transform: uppercase;
        }

        .portfolio-card h3,
        .software-card h3,
        .mini-project h3 {
            margin-top: .5rem;
            font-size: 1.25rem;
            font-weight: 900;
        }

        .portfolio-card p,
        .software-card p,
        .mini-project p {
            margin-top: .6rem;
            color: #64748b;
            font-size: .9rem;
            line-height: 1.7;
        }

        .software-card {
            display: flex;
            gap: 1rem;
            border: 1px solid rgba(148, 163, 184, .2);
            background: linear-gradient(145deg, #162d55, #0d1c38);
            padding: 1.35rem;
        }

        .software-card p,
        .software-card li {
            color: #cbd5e1;
        }

        .software-card__icon,
        .mini-project__icon {
            display: grid;
            flex: 0 0 3rem;
            width: 3rem;
            height: 3rem;
            place-items: center;
            border-radius: .9rem;
            background: #b87333;
            color: white;
            font-size: 1.2rem;
        }

        .software-card h3 {
            color: white;
        }

        .software-card ul {
            margin-top: .8rem;
            display: grid;
            gap: .25rem;
            font-size: .8rem;
        }

        .software-card li::before {
            content: '✓';
            margin-right: .4rem;
            color: #f4b66c;
        }

        .mini-project {
            border: 1px solid #e2e8f0;
            background: white;
            padding: 1.5rem;
        }

        .mini-project__icon {
            background: #e8edf4;
            color: #b87333;
        }

        .delivery-steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            margin: 2.5rem 0;
            text-align: left;
        }

        .delivery-steps>div {
            border-top: 3px solid #b87333;
            background: white;
            padding: 1.5rem;
        }

        .delivery-steps b {
            color: #b87333;
            font-size: .8rem;
            letter-spacing: .15em;
        }

        .delivery-steps h3 {
            margin-top: .75rem;
            font-size: 1.25rem;
            font-weight: 900;
        }

        .delivery-steps p {
            margin-top: .4rem;
            color: #64748b;
            font-size: .9rem;
        }

        .portfolio-cta {
            display: inline-flex;
            align-items: center;
            gap: .65rem;
            border-radius: .8rem;
            background: #172033;
            padding: .9rem 1.4rem;
            color: white;
            font-weight: 800;
            transition: background .2s ease;
        }

        .portfolio-cta:hover {
            background: #b87333;
        }

        @media (max-width: 900px) {
            .portfolio-grid--four {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .portfolio-grid--three {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .delivery-steps {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {

            .portfolio-grid--four,
            .portfolio-grid--three,
            .delivery-steps {
                grid-template-columns: 1fr;
            }

            .portfolio-hero {
                min-height: 460px;
            }

            .software-card {
                flex-direction: column;
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.portfolio-hero__content, .portfolio-heading, .portfolio-hero').forEach((element) => {
                element.setAttribute('data-aos', 'fade-up');
            });

            document.querySelectorAll('.portfolio-card, .software-card, .mini-project, .delivery-steps > div').forEach((card, index) => {
                card.setAttribute('data-aos', card.classList.contains('software-card') ? 'zoom-in' : 'fade-up');
                card.setAttribute('data-aos-delay', String((index % 4) * 120));
            });
        });
    </script>
@endsection
