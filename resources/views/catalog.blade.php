@extends('layout')
@section('title', 'แคตตาล็อกสินค้า')
@section('content')
    <section class="max-w-7xl mx-auto px-4 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col lg:flex-row gap-8">
            <aside class="w-full lg:w-64 bg-white p-6 rounded-xl border border-gray-200 shadow-sm h-fit">
                <h3 class="font-bold text-sm mb-4">หมวดหมู่สินค้า</h3>
                <div id="category-list" class="space-y-2 text-xs">
                </div>
                <hr class="my-6">
                <h3 class="font-bold text-sm mb-4">แบรนด์ยอดนิยม</h3>
                <div id="brand-list" class="grid grid-cols-2 gap-2 text-xs text-center">
                </div>
            </aside>

            <main class="flex-1">
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h2 class="text-xl font-bold text-gray-900">รายการสินค้าทั้งหมด</h2>
                        <p id="product-count" class="text-xs text-gray-500">พบ 0 รายการ</p>
                    </div>
                    <select onchange="filterProducts()"
                        class="border border-gray-300 rounded-lg text-xs px-3 py-1.5 bg-white focus:outline-none">
                        <option value="latest">เรียงตาม: ล่าสุด</option>
                        <option value="price-low">ราคา: ต่ำ - สูง</option>
                        <option value="price-high">ราคา: สูง - ต่ำ</option>
                    </select>
                </div>

                <div id="product-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"></div>
                <div>
                    <div id="product-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"></div>
                    <div id="pagination-nav" class="flex justify-center gap-4 mt-8 py-4"></div>
                </div>
            </main>
            <div id="product-list-page" class="transition-all duration-500 ease-in-out transform">
            </div>
            <div id="product-detail-page"
                class="fixed inset-0 bg-white z-50 transform translate-x-full transition-transform duration-500 ease-in-out p-8">
                <button onclick="hideDetail()" class="mb-4 text-sm font-bold flex items-center">
                    <i class="fa-solid fa-arrow-left mr-2"></i> ย้อนกลับ
                </button>
                <div id="detail-content">
                </div>
            </div>
        </div>
    </section>
      @vite(['resources/js/catalog.js'])
@endsection
