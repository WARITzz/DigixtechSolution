@extends('layout')
@section('title', 'ผลงานของเรา')
@section('content')
    <section class="max-w-7xl mx-auto px-4 py-16">
        <div class="text-center mb-16 space-y-4">
            <h2 class="text-headline-lg text-on-surface">
                ผลงานของเรา
            </h2>
            <p class="text-body-md text-on-surface-variant">
                เราภูมิใจที่ได้เป็นส่วนหนึ่งในการสนับสนุนธุรกิจของลูกค้าด้วยสินค้าคุณภาพสูงและบริการที่เป็นเลิศ
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- ระบบจัดการเครือข่ายองค์กรขนาดใหญ่ -->
            <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=600&h=400&fit=crop"
                    alt="ระบบจัดการเครือข่ายองค์กรขนาดใหญ่" class="w-full h-48 rounded-lg object-cover">
                <span class="inline-block bg-primary text-on-primary px-3 py-1 rounded-full text-xs font-semibold mt-4">ระบบเครือข่าย</span>
                <h3 class="text-headline-md font-bold mt-3">ระบบจัดการเครือข่ายองค์กรขนาดใหญ่</h3>
                <p class="text-body-sm text-on-surface-variant mt-2">โปรเจกต์การติดตั้งโครงสร้าง SD-WAN ที่ลดต้นทุนการบำรุงรักษาลง 30% และเพิ่มประสิทธิภาพเครือข่าย 45%</p>
                <p class="text-xs text-on-surface mt-3"><strong>ลูกค้า:</strong> Finance Plus Group</p>
            </div>

            <!-- ระบบผลิตอัจฉริยะ -->
            <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=600&h=400&fit=crop"
                    alt="ระบบผลิตอัจฉริยะ" class="w-full h-48 rounded-lg object-cover">
                <span class="inline-block bg-secondary text-on-secondary px-3 py-1 rounded-full text-xs font-semibold mt-4">IoT & AI</span>
                <h3 class="text-headline-md font-bold mt-3">ระบบผลิตอัจฉริยะสำหรับโรงงาน</h3>
                <p class="text-body-sm text-on-surface-variant mt-2">โซลูชัน Smart Factory ด้วย Machine Learning ลดเวลาหยุดเครื่อง 60% และเพิ่มผลผลิต 35%</p>
                <p class="text-xs text-on-surface mt-3"><strong>ลูกค้า:</strong> Industrial Tech Solutions</p>
            </div>

            <!-- แพลตฟอร์ม CRM -->
            <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?q=80&w=600&h=400&fit=crop"
                    alt="แพลตฟอร์ม CRM" class="w-full h-48 rounded-lg object-cover">
                <span class="inline-block bg-tertiary text-on-tertiary px-3 py-1 rounded-full text-xs font-semibold mt-4">ระบบบริหาร</span>
                <h3 class="text-headline-md font-bold mt-3">แพลตฟอร์ม CRM ครบวงจร</h3>
                <p class="text-body-sm text-on-surface-variant mt-2">ระบบ CRM ที่รองรับ 50+ สาขาและ 500+ ผู้ใช้ พร้อม Analytics และ Automation ขั้นสูง</p>
                <p class="text-xs text-on-surface mt-3"><strong>ลูกค้า:</strong> Service Excellence Corp</p>
            </div>

            <!-- ระบบความปลอดภัยไซเบอร์ -->
            <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                <img src="https://images.unsplash.com/photo-1535905557558-afc4877a26fc?q=80&w=600&h=400&fit=crop"
                    alt="ระบบความปลอดภัยไซเบอร์" class="w-full h-48 rounded-lg object-cover">
                <span class="inline-block bg-error text-on-error px-3 py-1 rounded-full text-xs font-semibold mt-4">ความปลอดภัย</span>
                <h3 class="text-headline-md font-bold mt-3">ระบบปลอดภัยไซเบอร์แบบครบวงจร</h3>
                <p class="text-body-sm text-on-surface-variant mt-2">ระบบ 24/7 Threat Detection พร้อม AI สำหรับ Anomaly Detection ลดเวลาตรวจจับภัยคุกคาม 75%</p>
                <p class="text-xs text-on-surface mt-3"><strong>ลูกค้า:</strong> Cyber Defense International</p>
            </div>

            <!-- การย้ายระบบไปยังคลาวด์ -->
            <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=600&h=400&fit=crop"
                    alt="การย้ายระบบไปยังคลาวด์" class="w-full h-48 rounded-lg object-cover">
                <span class="inline-block bg-success text-on-success px-3 py-1 rounded-full text-xs font-semibold mt-4">คลาวด์</span>
                <h3 class="text-headline-md font-bold mt-3">การย้ายระบบไปยังคลาวด์</h3>
                <p class="text-body-sm text-on-surface-variant mt-2">โครงการย้ายแอปพลิเคชัน 100+ ไปยัง Multi-cloud ลดต้นทุน 50% และเพิ่ม Uptime เป็น 99.99%</p>
                <p class="text-xs text-on-surface mt-3"><strong>ลูกค้า:</strong> Enterprise Solutions Ltd</p>
            </div>

            <!-- ระบบ ERP บัญชีการเงิน -->
            <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                <img src="https://images.unsplash.com/photo-1551731423-8ac59e3f3ffa?q=80&w=600&h=400&fit=crop"
                    alt="ระบบ ERP บัญชีการเงิน" class="w-full h-48 rounded-lg object-cover">
                <span class="inline-block bg-primary text-on-primary px-3 py-1 rounded-full text-xs font-semibold mt-4">ERP</span>
                <h3 class="text-headline-md font-bold mt-3">ระบบบัญชีและการเงินแบบคลาวด์</h3>
                <p class="text-body-sm text-on-surface-variant mt-2">ระบบ ERP ที่รองรับหลายสกุลเงินและภาษี ลดการประมวลผล Journal Entry ลง 70%</p>
                <p class="text-xs text-on-surface mt-3"><strong>ลูกค้า:</strong> Global Finance Group</p>
            </div>

            <!-- แอปพลิเคชันโทรศัพท์มือถือ HR -->
            <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                <img src="https://images.unsplash.com/photo-1512941691920-ab7fbf46eece?q=80&w=600&h=400&fit=crop"
                    alt="แอปพลิเคชันจัดการพนักงาน" class="w-full h-48 rounded-lg object-cover">
                <span class="inline-block bg-secondary text-on-secondary px-3 py-1 rounded-full text-xs font-semibold mt-4">Mobile</span>
                <h3 class="text-headline-md font-bold mt-3">แอป HR Mobile สำหรับพนักงาน</h3>
                <p class="text-body-sm text-on-surface-variant mt-2">แอปพลิเคชัน iOS/Android สำหรับจัดการเวลาทำงาน GPS Tracking เพิ่มความพึงพอใจ 40%</p>
                <p class="text-xs text-on-surface mt-3"><strong>ลูกค้า:</strong> HR Dynamics Solutions</p>
            </div>

            <!-- แพลตฟอร์มอีคอมเมิร์ซ -->
            <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                <img src="https://images.unsplash.com/photo-1523475335684-37898b6baf30?q=80&w=600&h=400&fit=crop"
                    alt="แพลตฟอร์มอีคอมเมิร์ซ" class="w-full h-48 rounded-lg object-cover">
                <span class="inline-block bg-tertiary text-on-tertiary px-3 py-1 rounded-full text-xs font-semibold mt-4">Ecommerce</span>
                <h3 class="text-headline-md font-bold mt-3">แพลตฟอร์มอีคอมเมิร์ซระดับเอนเตอร์ไพรส์</h3>
                <p class="text-body-sm text-on-surface-variant mt-2">ระบบขายออนไลน์ 100,000+ สินค้า รองรับการซื้อขาย 10,000+ รายการต่อชั่วโมง</p>
                <p class="text-xs text-on-surface mt-3"><strong>ลูกค้า:</strong> Digital Commerce Asia</p>
            </div>
        </div>

        <!-- Details -->
        <div id="portfolio-details" class="mt-16 space-y-12">
            <article id="detail-network" class="bg-surface p-8 rounded-2xl border border-outline">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=900&h=600&fit=crop" alt="ระบบจัดการเครือข่าย" class="w-full rounded-lg lg:col-span-1 object-cover">
                    <div class="lg:col-span-2">
                        <h3 class="text-headline-lg font-bold">ระบบจัดการเครือข่ายองค์กรขนาดใหญ่</h3>
                        <p class="text-body-md text-on-surface-variant mt-3">โปรเจกต์นี้รวมการออกแบบสถาปัตยกรรมเครือข่าย, ติดตั้ง SD-WAN, และปรับปรุงระบบรักษาความปลอดภัยเชิงโครงสร้าง ผลลัพธ์รวมถึงการเพิ่มThroughput 45% และลดค่าใช้จ่ายการบำรุงรักษา 30%.</p>
                        <ul class="mt-4 space-y-2 text-sm">
                            <li><strong>ลูกค้า:</strong> Finance Plus Group</li>
                            <li><strong>แล้วเสร็จ:</strong> สิงหาคม 2025</li>
                            <li><strong>เทคโนโลยี:</strong> Cisco, Fortinet, SD-WAN, Linux</li>
                            <li><strong>สถานะ:</strong> Completed</li>
                        </ul>
                        <p class="mt-6"><a href="#" onclick="location.hash=''; return false;" class="text-primary font-semibold">กลับไปยังผลงาน</a></p>
                    </div>
                </div>
            </article>

            <article id="detail-smartfactory" class="bg-surface p-8 rounded-2xl border border-outline">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=900&h=600&fit=crop" alt="ระบบผลิตอัจฉริยะ" class="w-full rounded-lg lg:col-span-1 object-cover">
                    <div class="lg:col-span-2">
                        <h3 class="text-headline-lg font-bold">ระบบผลิตอัจฉริยะสำหรับโรงงาน</h3>
                        <p class="text-body-md text-on-surface-variant mt-3">ระบบ Smart Factory ที่รวม IoT และ Machine Learning เพื่อทำ Predictive Maintenance และปรับกระบวนการผลิตแบบเรียลไทม์ ช่วยลดเวลาหยุดเครื่อง 60% และเพิ่มผลผลิต 35%.</p>
                        <ul class="mt-4 space-y-2 text-sm">
                            <li><strong>ลูกค้า:</strong> Industrial Tech Solutions</li>
                            <li><strong>แล้วเสร็จ:</strong> มิถุนายน 2025</li>
                            <li><strong>เทคโนโลยี:</strong> Python, TensorFlow, MQTT, Kubernetes</li>
                            <li><strong>สถานะ:</strong> Completed</li>
                        </ul>
                        <p class="mt-6"><a href="#" onclick="location.hash=''; return false;" class="text-primary font-semibold">กลับไปยังผลงาน</a></p>
                    </div>
                </div>
            </article>

            <article id="detail-crm" class="bg-surface p-8 rounded-2xl border border-outline">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                    <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?q=80&w=900&h=600&fit=crop" alt="แพลตฟอร์ม CRM" class="w-full rounded-lg lg:col-span-1 object-cover">
                    <div class="lg:col-span-2">
                        <h3 class="text-headline-lg font-bold">แพลตฟอร์ม CRM ครบวงจร</h3>
                        <p class="text-body-md text-on-surface-variant mt-3">CRM ที่ผสานกับ ERP และระบบบัญชี, พร้อมฟีเจอร์ Customer Analytics และ Marketing Automation ช่วยให้การตัดสินใจเร็วขึ้นและลดค่าใช้จ่ายการดำเนินงาน.</p>
                        <ul class="mt-4 space-y-2 text-sm">
                            <li><strong>ลูกค้า:</strong> Service Excellence Corp</li>
                            <li><strong>แล้วเสร็จ:</strong> เมษายน 2025</li>
                            <li><strong>เทคโนโลยี:</strong> Laravel, Vue.js, MySQL, Redis, AWS</li>
                            <li><strong>สถานะ:</strong> Completed</li>
                        </ul>
                        <p class="mt-6"><a href="#" onclick="location.hash=''; return false;" class="text-primary font-semibold">กลับไปยังผลงาน</a></p>
                    </div>
                </div>
            </article>

            <article id="detail-cyber" class="bg-surface p-8 rounded-2xl border border-outline">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                    <img src="https://images.unsplash.com/photo-1535905557558-afc4877a26fc?q=80&w=900&h=600&fit=crop" alt="ความปลอดภัยไซเบอร์" class="w-full rounded-lg lg:col-span-1 object-cover">
                    <div class="lg:col-span-2">
                        <h3 class="text-headline-lg font-bold">ระบบปลอดภัยไซเบอร์แบบครบวงจร</h3>
                        <p class="text-body-md text-on-surface-variant mt-3">โซลูชัน Security Operations (SOC) พร้อมการตรวจจับ Anomaly แบบ AI, DDoS Protection และ Incident Response ที่ช่วยลดเวลาในการตอบสนองและได้มาตรฐาน ISO 27001.</p>
                        <ul class="mt-4 space-y-2 text-sm">
                            <li><strong>ลูกค้า:</strong> Cyber Defense International</li>
                            <li><strong>แล้วเสร็จ:</strong> พฤษภาคม 2025</li>
                            <li><strong>เทคโนโลยี:</strong> SIEM, Splunk, Elasticsearch, Python</li>
                            <li><strong>สถานะ:</strong> Completed</li>
                        </ul>
                        <p class="mt-6"><a href="#" onclick="location.hash=''; return false;" class="text-primary font-semibold">กลับไปยังผลงาน</a></p>
                    </div>
                </div>
            </article>

            <article id="detail-cloud" class="bg-surface p-8 rounded-2xl border border-outline">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                    <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=900&h=600&fit=crop" alt="การย้ายระบบไปยังคลาวด์" class="w-full rounded-lg lg:col-span-1 object-cover">
                    <div class="lg:col-span-2">
                        <h3 class="text-headline-lg font-bold">การย้ายระบบไปยังคลาวด์</h3>
                        <p class="text-body-md text-on-surface-variant mt-3">ย้ายแอปพลิเคชัน 100+ ตัวไปยัง Multi-cloud พร้อมใช้ Auto-scaling, Load Balancer และ Infrastructure as Code เพื่อเพิ่มความทนทานและลดค่าใช้จ่าย.</p>
                        <ul class="mt-4 space-y-2 text-sm">
                            <li><strong>ลูกค้า:</strong> Enterprise Solutions Ltd</li>
                            <li><strong>แล้วเสร็จ:</strong> มีนาคม 2025</li>
                            <li><strong>เทคโนโลยี:</strong> AWS, Azure, Docker, Kubernetes, Terraform</li>
                            <li><strong>สถานะ:</strong> Completed</li>
                        </ul>
                        <p class="mt-6"><a href="#" onclick="location.hash=''; return false;" class="text-primary font-semibold">กลับไปยังผลงาน</a></p>
                    </div>
                </div>
            </article>

            <article id="detail-erp" class="bg-surface p-8 rounded-2xl border border-outline">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                    <img src="https://images.unsplash.com/photo-1551731423-8ac59e3f3ffa?q=80&w=900&h=600&fit=crop" alt="ระบบ ERP" class="w-full rounded-lg lg:col-span-1 object-cover">
                    <div class="lg:col-span-2">
                        <h3 class="text-headline-lg font-bold">ระบบบัญชีและการเงินแบบคลาวด์</h3>
                        <p class="text-body-md text-on-surface-variant mt-3">ระบบ ERP แบบคลาวด์ที่รองรับการบัญชีหลายสกุลเงิน, Automation สำหรับกระบวนการบัญชี และ BI Dashboard สำหรับการวิเคราะห์การเงินแบบเรียลไทม์.</p>
                        <ul class="mt-4 space-y-2 text-sm">
                            <li><strong>ลูกค้า:</strong> Global Finance Group</li>
                            <li><strong>แล้วเสร็จ:</strong> กุมภาพันธ์ 2025</li>
                            <li><strong>เทคโนโลยี:</strong> SAP, Oracle, React, PostgreSQL</li>
                            <li><strong>สถานะ:</strong> Completed</li>
                        </ul>
                        <p class="mt-6"><a href="#" onclick="location.hash=''; return false;" class="text-primary font-semibold">กลับไปยังผลงาน</a></p>
                    </div>
                </div>
            </article>

            <article id="detail-hr" class="bg-surface p-8 rounded-2xl border border-outline">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                    <img src="https://images.unsplash.com/photo-1512941691920-ab7fbf46eece?q=80&w=900&h=600&fit=crop" alt="แอป HR Mobile" class="w-full rounded-lg lg:col-span-1 object-cover">
                    <div class="lg:col-span-2">
                        <h3 class="text-headline-lg font-bold">แอป HR Mobile สำหรับพนักงาน</h3>
                        <p class="text-body-md text-on-surface-variant mt-3">แอปมือถือสำหรับจัดการเวลาทำงาน, ตารางงาน และการขอลา พร้อม GPS verification และ Push Notifications.</p>
                        <ul class="mt-4 space-y-2 text-sm">
                            <li><strong>ลูกค้า:</strong> HR Dynamics Solutions</li>
                            <li><strong>แล้วเสร็จ:</strong> มกราคม 2025</li>
                            <li><strong>เทคโนโลยี:</strong> React Native, Firebase, Node.js</li>
                            <li><strong>สถานะ:</strong> Completed</li>
                        </ul>
                        <p class="mt-6"><a href="#" onclick="location.hash=''; return false;" class="text-primary font-semibold">กลับไปยังผลงาน</a></p>
                    </div>
                </div>
            </article>

            <article id="detail-ecom" class="bg-surface p-8 rounded-2xl border border-outline">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                    <img src="https://images.unsplash.com/photo-1523475335684-37898b6baf30?q=80&w=900&h=600&fit=crop" alt="แพลตฟอร์มอีคอมเมิร์ซ" class="w-full rounded-lg lg:col-span-1 object-cover">
                    <div class="lg:col-span-2">
                        <h3 class="text-headline-lg font-bold">แพลตฟอร์มอีคอมเมิร์ซระดับเอนเตอร์ไพรส์</h3>
                        <p class="text-body-md text-on-surface-variant mt-3">แพลตฟอร์มอีคอมเมิร์ซที่รองรับ 100,000+ รายการ, ระบบสั่งซื้อและชำระเงินที่ปลอดภัย และ Infrastructure ที่ปรับขนาดได้ตามการใช้งาน.</p>
                        <ul class="mt-4 space-y-2 text-sm">
                            <li><strong>ลูกค้า:</strong> Digital Commerce Asia</li>
                            <li><strong>แล้วเสร็จ:</strong> ธันวาคม 2024</li>
                            <li><strong>เทคโนโลยี:</strong> Magento, Laravel, Elasticsearch, AWS</li>
                            <li><strong>สถานะ:</strong> Completed</li>
                        </ul>
                        <p class="mt-6"><a href="#" onclick="location.hash=''; return false;" class="text-primary font-semibold">กลับไปยังผลงาน</a></p>
                    </div>
                </div>
            </article>
        </div>
        
        <script>
            // Smooth scroll when clicking the anchor links
            document.querySelectorAll('a[href^="#detail-"]').forEach(a => {
                a.addEventListener('click', function(e){
                    e.preventDefault();
                    const id = this.getAttribute('href').substring(1);
                    const el = document.getElementById(id);
                    if(el) el.scrollIntoView({behavior: 'smooth', block: 'start'});
                    history.replaceState(null, '', '#'+id);
                });
            });
        </script>
    </section>
@endsection
