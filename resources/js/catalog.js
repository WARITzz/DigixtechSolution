const products = [
    {
        sku: "PRO-SRV-V42",
        name: "ProServer Enterprise Hub v4.2",
        price: 145000,
        oldPrice: 165000,
        category: "คอมพิวเตอร์และแล็ปท็อป",
        brand: "Dell",
        rating: 4.9,
        moq: "1 เครื่อง",
        stock: "พร้อมส่ง",
        stockStatus: "text-green-600",
        badge: "Top Rated",
        badgeColor: "bg-blue-600",
        images: [
            "https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=600",
            "https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=600",
            "https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=600"
        ],
        desc: "โซลูชันเซิร์ฟเวอร์ประสิทธิภาพสูงสำหรับศูนย์ข้อมูลองค์กร มั่นใจด้วยมาตรฐานความปลอดภัยสูงสุด",
        specs: [
            { label: "Processor", value: "Dual Intel Xeon Platinum 8400 Series" },
            { label: "Memory", value: "8TB DDR5-4800 ECC" },
            { label: "Storage", value: "12 x 3.5\" Hot-swap bays" },
            { label: "Network", value: "Quad-port 10GbE SFP+" }
        ]
    },
    {
        sku: "LAP-XP-2024",
        name: "Precision Workstation Pro X1",
        price: 45900,
        oldPrice: 52000,
        category: "คอมพิวเตอร์และแล็ปท็อป",
        brand: "Dell",
        rating: 4.9,
        moq: "5 เครื่อง",
        stock: "พร้อมส่ง (120+)",
        stockStatus: "text-green-600",
        badge: "New Arrival",
        badgeColor: "bg-teal-600",
        images: ["https://images.unsplash.com/photo-1593642632823-8f785ba67e45?q=80&w=600"],
        desc: "แล็ปท็อปประสิทธิภาพสูงสำหรับการทำงานกราฟิกและประมวลผลข้อมูลระดับมืออาชีพ",
        specs: [
            { label: "Processor", value: "Intel Core i9-14900HX" },
            { label: "Memory", value: "64GB DDR5" },
            { label: "Display", value: "16\" 4K OLED" },
            { label: "Battery", value: "99.9Whr" }
        ]
    },
    {
        sku: "MON-UL-32",
        name: "UltraSharp 32\" 4K Enterprise Display",
        price: 22500,
        category: "คอมพิวเตอร์และแล็ปท็อป",
        brand: "HP",
        rating: 4.8,
        moq: "10 เครื่อง",
        stock: "เหลือน้อย (12)",
        stockStatus: "text-red-600",
        images: ["https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?q=80&w=600"],
        desc: "จอภาพความละเอียดสูงสำหรับงานออกแบบและตรวจสอบข้อมูลที่ต้องการความแม่นยำของสี",
        specs: [
            { label: "Resolution", value: "3840 x 2160 (4K)" },
            { label: "Panel", value: "IPS Anti-glare" },
            { label: "Connectivity", value: "USB-C, HDMI 2.1, DP 1.4" }
        ]
    },
    {
        sku: "TAB-PRO-13",
        name: "TabPro Business Series 13\"",
        price: 32900,
        oldPrice: 35900,
        category: "คอมพิวเตอร์และแล็ปท็อป",
        brand: "HP",
        rating: 4.7,
        moq: "2 เครื่อง",
        stock: "พร้อมส่ง (45)",
        stockStatus: "text-green-600",
        badge: "Best Seller",
        badgeColor: "bg-orange-500",
        images: ["https://images.unsplash.com/photo-1544244015-0df443ffc680?q=80&w=600"],
        desc: "แท็บเล็ตเพื่อการใช้งานทางธุรกิจ คล่องตัวและทรงพลังด้วยชิปประมวลผลรุ่นล่าสุด",
        specs: [
            { label: "Processor", value: "M2 Chip" },
            { label: "Storage", value: "256GB SSD" },
            { label: "Weight", value: "0.5 kg" }
        ]
    },
    {
        sku: "LAP-XP-2024",
        name: "Precision Workstation Pro X1",
        price: 45900,
        oldPrice: 52000,
        category: "คอมพิวเตอร์และแล็ปท็อป",
        brand: "HP",
        rating: 4.8,
        moq: "5 เครื่อง",
        stock: "พร้อมส่ง (120+)",
        stockStatus: "text-green-600",
        badge: "New Arrival",
        badgeColor: "bg-teal-600",
        images: ["https://images.unsplash.com/photo-1593642632823-8f785ba67e45?q=80&w=600"],
        desc: "แล็ปท็อปสำหรับการประมวลผลงานกราฟิกหนักๆ",
        specs: [{ label: "Processor", value: "Intel Core i9-14900HX" }, { label: "RAM", value: "64GB DDR5" }]
    },
    {
        sku: "TAB-PRO-13",
        name: "TabPro Business Series 13\"",
        price: 32900,
        oldPrice: 35900,
        category: "สมาร์ทโฟนและแท็บเล็ต",
        brand: "Apple",
        rating: 4.7,
        moq: "2 เครื่อง",
        stock: "พร้อมส่ง (45)",
        stockStatus: "text-green-600",
        badge: "Best Seller",
        badgeColor: "bg-orange-500",
        images: ["https://images.unsplash.com/photo-1544244015-0df443ffc680?q=80&w=600"],
        desc: "แท็บเล็ตเพื่อการใช้งานทางธุรกิจ คล่องตัวและทรงพลัง",
        specs: [{ label: "Chip", value: "M2 Chip" }, { label: "Display", value: "13-inch Liquid Retina" }]
    },
    {
        sku: "PHN-ULTRA-24",
        name: "Galaxy Enterprise S24",
        price: 28900,
        category: "สมาร์ทโฟนและแท็บเล็ต",
        brand: "Samsung",
        rating: 4.6,
        moq: "10 เครื่อง",
        stock: "พร้อมส่ง",
        stockStatus: "text-green-600",
        images: ["https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?q=80&w=600"],
        desc: "สมาร์ทโฟนรุ่นเรือธงสำหรับการทำงานนอกสถานที่",
        specs: [{ label: "Camera", value: "200MP AI Camera" }, { label: "Storage", value: "512GB" }]
    },
    {
        sku: "ACC-MECH-KB",
        name: "Wireless Mechanical Keyboard Pro",
        price: 3500,
        category: "อุปกรณ์เสริมไอที",
        brand: "Dell",
        rating: 4.5,
        moq: "20 เครื่อง",
        stock: "เหลือน้อย (8)",
        stockStatus: "text-red-600",
        images: ["https://images.unsplash.com/photo-1587829741301-dc798b83add3?q=80&w=600"],
        desc: "คีย์บอร์ด Mechanical สัมผัสเยี่ยม เชื่อมต่อได้หลายอุปกรณ์",
        specs: [{ label: "Switch", value: "Cherry MX Red" }, { label: "Battery", value: "3000mAh" }]
    },
    {
        sku: "NET-WIFI-6E",
        name: "Enterprise Access Point AX6000",
        price: 8900,
        category: "อุปกรณ์เน็ตเวิร์ค",
        brand: "HP",
        rating: 4.7,
        moq: "3 เครื่อง",
        stock: "พร้อมส่ง (25)",
        stockStatus: "text-green-600",
        images: ["https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=600"],
        desc: "อุปกรณ์กระจายสัญญาณ Wi-Fi 6E ความเร็วสูงสำหรับออฟฟิศ",
        specs: [{ label: "Speed", value: "6000 Mbps" }, { label: "Coverage", value: "200 sq.m." }]
    },
    {
        sku: "NET-SW-24P",
        name: "Gigabit PoE Switch 24 Port",
        price: 12500,
        category: "อุปกรณ์เน็ตเวิร์ค",
        brand: "Dell",
        rating: 4.8,
        moq: "2 เครื่อง",
        stock: "พร้อมส่ง (15)",
        stockStatus: "text-green-600",
        images: ["https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=600"],
        desc: "สวิตช์เครือข่ายรองรับ PoE สำหรับกล้องและ Access Point",
        specs: [{ label: "Ports", value: "24 x Gigabit PoE+" }, { label: "Management", value: "Web-based" }]
    }
];



//==============================================================================================================
let currentPage = 1;
const itemsPerPage = 6;
let currentFilteredProducts = [...products]; // เก็บข้อมูลที่กรองล่าสุดไว้ที่นี่
// 2. ฟังก์ชัน Render รายการสินค้า
window.renderProductList = function() {
    const container = document.getElementById('product-list');
    container.innerHTML = `
        <div class="col-span-full flex justify-center py-20">
            <div class="loader"></div>
        </div>
    `;

    setTimeout(() => {
    // 1. คำนวณ Index ของสินค้าที่จะแสดง
    // คำนวณช่วงข้อมูลจาก currentFilteredProducts
    const startIndex = (currentPage - 1) * itemsPerPage;
    const paginatedItems = currentFilteredProducts.slice(startIndex, startIndex + itemsPerPage);

    // อัปเดตจำนวนสินค้า
    document.getElementById('product-count').textContent = `พบ ${currentFilteredProducts.length} รายการ`;

    container.innerHTML = paginatedItems.map(p => `
        <div class="bg-white animate-fade-in border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
            <div class="relative h-44 bg-slate-100">
                <img src="${p.images[0]}" class="w-full h-full object-cover" onclick="showDetail('${p.sku}')">
                ${p.badge ? `<span class="absolute top-3 left-3 ${p.badgeColor} text-white text-[9px] font-bold uppercase px-2 py-0.5 rounded">${p.badge}</span>` : ''}
            </div>
            <div class="p-4">
                <div class="flex justify-between text-[10px] text-gray-400 mb-1">
                    <span>SKU: ${p.sku}</span>
                    <span><i class="fa-solid fa-star text-yellow-400"></i> ${p.rating}</span>
                </div>
                <h3 class="font-bold text-sm text-gray-900 mb-1 line-clamp-1">${p.name}</h3>
                <div class="text-blue-600 font-bold text-base mb-3">
                    ฿${p.price.toLocaleString()}
                    ${p.oldPrice ? `<span class="text-xs text-gray-400 line-through font-normal">฿${p.oldPrice.toLocaleString()}</span>` : ''}
                </div>
                <div class="bg-slate-50 p-2 rounded text-[11px] text-gray-500 space-y-1">
                    <div class="flex justify-between"><span>ขั้นต่ำ (MOQ):</span><span class="font-semibold text-slate-800">${p.moq}</span></div>
                    <div class="flex justify-between"><span>คลังสินค้า:</span><span class="${p.stockStatus} font-medium">${p.stock}</span></div>
                </div>
                <button class="w-full mt-4 bg-slate-900 hover:bg-slate-800 text-white text-xs py-2 rounded-lg font-medium transition" onclick="showDetail('${p.sku}')">
                    ดูรายละเอียดสินค้า
                </button>
            </div>
        </div>
    `).join('');
    
    
    // 3. Render ปุ่มเปลี่ยนหน้า (Pagination Controls)
        renderPagination(currentFilteredProducts.length);
    }, 300);
}
// 3. ฟังก์ชัน Filter (รวมหมวดหมู่, แบรนด์, ราคา)
window.filterProducts = function() {
    currentPage = 1;

    const selectedCats = Array.from(document.querySelectorAll('.category-checkbox:checked')).map(c => c.value);
    const selectedBrands = Array.from(document.querySelectorAll('.brand-btn.bg-blue-600')).map(b => b.dataset.brand);
    const priceMax = parseInt(document.querySelector('input[type="range"]')?.value || 150000);

    // 2. อัปเดตข้อมูลลงในตัวแปร Global
    currentFilteredProducts = products.filter(p =>
        (selectedCats.length === 0 || selectedCats.includes(p.category)) &&
        (selectedBrands.length === 0 || selectedBrands.includes(p.brand)) &&
        (p.price <= priceMax)
    );

    // 3. เรียงลำดับ (Sorting)
    const sortValue = document.querySelector('select').value;
    if (sortValue === 'price-low') {
        currentFilteredProducts.sort((a, b) => a.price - b.price);
    } else if (sortValue === 'price-high') {
        currentFilteredProducts.sort((a, b) => b.price - a.price);
    }

    // 4. อัปเดตข้อความจำนวนสินค้า
    const countElement = document.getElementById('product-count');
    if (countElement) {
        let catText = selectedCats.length > 0 ? selectedCats.join(', ') : 'ทั้งหมด';
        countElement.textContent = `พบ ${currentFilteredProducts.length} รายการ ในหมวดหมู่ ${catText}`;
    }
    // 4. แสดงผลรายการสินค้า
    renderProductList();
}

// 4. ฟังก์ชันแสดงรายละเอียดสินค้า (สไลด์หน้าจอ)
window.showDetail = function(sku) {
    const p = products.find(prod => prod.sku === sku);
    const detailContent = document.getElementById('detail-content');

    // สร้างแกลเลอรีรูปภาพ
    const galleryHtml = `
        <div class="space-y-4">
            <img id="main-image" src="${p.images[0]}" class="rounded-2xl w-full h-80 object-cover shadow-lg">
            
            <div class="flex gap-2">
                ${p.images.map(img => `
                    <img src="${img}" onclick="document.getElementById('main-image').src='${img}'" 
                         class="w-20 h-20 rounded-lg cursor-pointer border-2 hover:border-blue-500 transition object-cover">
                `).join('')}
            </div>
        </div>
    `;

    detailContent.innerHTML = `
        <div class="max-w-4xl mx-auto py-8 overflow-auto max-h-screen">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                ${galleryHtml}
                <div>
                    <h1 class="text-xl font-bold mb-4">${p.name}</h1>
                    <p class="text-gray-600 mb-6">${p.desc}</p>
                    <div class="bg-blue-50 p-6 rounded-xl">
                        <span class="text-label-md">พร้อมจัดส่งทันที | รับประกัน 5 ปี</span>
                        <p class="text-xl font-bold text-blue-600">฿${p.price.toLocaleString()}</p>
                        <div class="flex flex-col gap-3 pt-4">
                          <button class="w-full bg-secondary text-on-secondary font-bold py-4 rounded-lg hover:brightness-110 transition-all flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined"><i class="fa-solid fa-file-invoice-dollar"></i></span>
                            ขอใบเสนอราคา (Bulk Quote)
                          </button>
                          <button class="w-full border-2 border-secondary text-secondary font-bold py-4 rounded-lg hover:bg-secondary/5 transition-all flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined"><i class="fa-regular fa-circle-question"></i></span>
                            ปรึกษาผู้เชี่ยวชาญ/ติดต่อฝ่ายขาย
                          </button>
                        </div>
                    </div>
                </div>
            </div>

            <section class="mb-12">
                <h2 class="text-xl font-bold mb-6 border-l-8 border-blue-600 pl-4">ข้อมูลทางเทคนิค (Technical Specifications)</h2>
                <div class="overflow-hidden rounded-xl border border-gray-200">
                    <table class="w-full text-left">
                        <tbody class="divide-y divide-gray-100">
                            ${p.specs.map(s => `
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="p-6 font-bold text-gray-700 w-1/3">${s.label}</td>
                                    <td class="p-6 text-gray-600">${s.value}</td>
                                </tr>
                            `).join('')}
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-xl font-bold mb-6 text-center">ความปลอดภัยและมาตรฐานที่ได้รับ</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="p-6 rounded-2xl bg-blue-900 text-white shadow-lg">
                        <h3 class="font-bold text-lg mb-2">มาตรฐาน ISO 27001</h3>
                        <p class="text-sm opacity-80">มั่นใจด้วยมาตรฐานการจัดการความปลอดภัยของข้อมูลระดับสากล ปกป้องข้อมูลสำคัญขององค์กรอย่างครบวงจร</p>
                    </div>
                    <div class="p-6 rounded-2xl border border-gray-200 shadow-sm">
                        <h3 class="font-bold text-lg mb-2">การรับประกันคุณภาพระดับพรีเมียม</h3>
                        <p class="text-sm text-gray-600">รับประกันเครื่องและอะไหล่ 5 ปีเต็ม พร้อมบริการ On-site ภายใน 4 ชั่วโมงสำหรับกรณีฉุกเฉิน</p>
                    </div>

                </div>
            </section>

        </div>
        

    `;

    document.getElementById('product-detail-page').classList.remove('translate-x-full');
}

window.hideDetail = function() {
    document.getElementById('product-detail-page').classList.add('translate-x-full');
}

// 5. Initial UI Render (ลูปหมวดหมู่และแบรนด์อัตโนมัติ)
document.addEventListener('DOMContentLoaded', () => {
    // ลูปหมวดหมู่
    const cats = [...new Set(products.map(p => p.category))];
    document.getElementById('category-list').innerHTML = cats.map(c => `
        <label class="flex items-center space-x-2"><input type="checkbox" value="${c}" class="category-checkbox" onchange="filterProducts()"> <span>${c}</span></label>
    `).join('');

    // ลูปแบรนด์
    const brands = [...new Set(products.map(p => p.brand))];
    document.getElementById('brand-list').innerHTML = brands.map(b => `
        <button onclick="this.classList.toggle('bg-blue-600'); this.classList.toggle('text-white'); filterProducts()" class="brand-btn border py-1.5 rounded" data-brand="${b}">${b}</button>
    `).join('');

    renderProductList();
    filterProducts();
});

window.renderPagination = function() {
    const totalPages = Math.ceil(currentFilteredProducts.length / itemsPerPage);
    const nav = document.getElementById('pagination-nav');

    nav.innerHTML = `
        <button ${currentPage === 1 ? 'disabled' : ''} onclick="changePage(${currentPage - 1})" class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold px-4 py-2 rounded-lg transition">ก่อนหน้า</button>
        <span>หน้า ${currentPage} จาก ${totalPages}</span>
        <button ${currentPage === totalPages ? 'disabled' : ''} onclick="changePage(${currentPage + 1})" class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold px-4 py-2 rounded-lg transition">ถัดไป</button>
    `;
}

window.changePage = function(newPage) {
    currentPage = newPage;
    // สำคัญ: ต้องเรียกฟังก์ชันที่ใช้ Filter ล่าสุดมาแสดงผล
    // หากคุณไม่มีตัวแปรเก็บค่า Filter ล่าสุด ให้เรียก filterProducts() ใหม่
    renderProductList();
    window.scrollTo({ top: 0, behavior: 'smooth' }); // เลื่อนขึ้นบนสุดให้ผู้ใช้เห็นสินค้าใหม่
}


