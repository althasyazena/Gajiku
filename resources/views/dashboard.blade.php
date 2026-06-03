@extends('layouts.app')

@section('content')
    <div class="flex min-h-screen">
        <div class="flex-1 flex flex-col">
            <main class="flex-1 p-6 bg-gray-100">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 rounded-2xl bg-white h-full">

                <!-- LEFT -->
                <div class="lg:col-span-2 space-y-6 m-6 mr-0">

                <!-- GREETING -->
                <div class="bg-primary rounded-3xl p-8 shadow-md">
                    <p class="text-white uppercase max-w-md">Lorem Ipsum</p>
                    <h2 class="text-4xl text-white font-semibold mb-2">Kamis, <span class="bg-secondary py-1 px-2 rounded-lg text-tertiary">21 Mei 2026</span></h2>
                    <p class="text-white max-w-md">Kelola data karyawan dan penggajian dengan lebih rapi dan efisien hari ini.</p>
                </div>

                <!-- STATS -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                    <div class="bg-tertiary rounded-2xl p-5 shadow-md hover:-translate-y-1 transition duration-200">
                    <p class="text-md text-white mb-2">Total Karyawan</p>
                    <p class="text-2xl font-semibold text-white">24</p>
                    </div>
                    <div class="bg-secondary rounded-2xl p-5 shadow-sm hover:-translate-y-1 transition duration-200">
                    <p class="text-md text-black mb-2">Digaji Bulan Ini</p>
                    <p class="text-2xl font-semibold text-gray-800">20</p>
                    </div>
                    <div class="bg-accent rounded-2xl p-5 shadow-md hover:-translate-y-1 transition duration-200">
                    <p class="text-md text-white mb-2">Total Gaji</p>
                    <p class="text-2xl font-semibold text-white">Rp 98.500.000</p>
                    </div>
                </div>

                <!-- GRAFIK BAR -->
                <div class="bg-white rounded-3xl p-6 shadow-sm">
                    <p class="font-semibold text-tertiary mb-4 text-xl">Penggajian <span class="bg-accent py-1 px-2 rounded-lg text-secondary">6 Bulan</span> Terakhir</p>
                    <div class="flex items-end gap-3 h-28">
                    <div class="flex flex-col items-center gap-1 flex-1">
                        <div class="w-full rounded-t-lg bg-secondary" style="height:50px"></div>
                        <span class="text-xs text-gray-400">Des</span>
                    </div>
                    <div class="flex flex-col items-center gap-1 flex-1">
                        <div class="w-full rounded-t-lg bg-tertiary" style="height:60px"></div>
                        <span class="text-xs text-gray-400">Jan</span>
                    </div>
                    <div class="flex flex-col items-center gap-1 flex-1">
                        <div class="w-full rounded-t-lg bg-accent" style="height:55px"></div>
                        <span class="text-xs text-gray-400">Feb</span>
                    </div>
                    <div class="flex flex-col items-center gap-1 flex-1">
                        <div class="w-full rounded-t-lg bg-secondary" style="height:68px"></div>
                        <span class="text-xs text-gray-400">Mar</span>
                    </div>
                    <div class="flex flex-col items-center gap-1 flex-1">
                        <div class="w-full rounded-t-lg bg-tertiary" style="height:78px"></div>
                        <span class="text-xs text-gray-400">Apr</span>
                    </div>
                    <div class="flex flex-col items-center gap-1 flex-1">
                        <div class="w-full rounded-t-lg bg-accent" style="height:96px"></div>
                        <span class="text-xs text-blue-600 font-semibold">Mei</span>
                    </div>
                    </div>
                </div>

                </div>

                <!-- RIGHT -->
                <div class="bg-white rounded-3xl p-6 m-6 ml-0 shadow-xl">

                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-semibold text-tertiary text-xl">Gaji <span class="bg-accent py-1 px-2 rounded-lg text-secondary">Terbaru</span></h3>
                </div>

                <div class="space-y-4">
                    <div class="flex items-center justify-between p-3 rounded-xl bg-gray-50 transition">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-primary text-secondary flex items-center justify-center text-sm font-semibold">W</div>
                        <div>
                        <p class="text-sm font-medium text-gray-800">Wiwie Djoyo</p>
                        <p class="text-xs text-gray-400">Mei 2025</p>
                        </div>
                    </div>
                    <span class="text-sm font-semibold text-gray-700">Rp 15.670.000</span>
                    </div>

                    <div class="flex items-center justify-between p-3 rounded-xl bg-gray-50 transition">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-primary text-secondary flex items-center justify-center text-sm font-semibold">W</div>
                        <div>
                        <p class="text-sm font-medium text-gray-800">Wiwie Djoyo</p>
                        <p class="text-xs text-gray-400">Mei 2025</p>
                        </div>
                    </div>
                    <span class="text-sm font-semibold text-gray-700">Rp 15.670.000</span>
                    </div>

                    <div class="flex items-center justify-between p-3 rounded-xl bg-gray-50 transition">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-primary text-secondary flex items-center justify-center text-sm font-semibold">W</div>
                        <div>
                        <p class="text-sm font-medium text-gray-800">Wiwie Djoyo</p>
                        <p class="text-xs text-gray-400">Mei 2025</p>
                        </div>
                    </div>
                    <span class="text-sm font-semibold text-gray-700">Rp 15.670.000</span>
                    </div>
                </div>

                <!-- PROGRESS -->
                <div class="border-t border-gray-100 mt-6 pt-5">
                    <div class="flex justify-between items-center mb-2">
                    <p class="text-md font-semibold text-gray-800">Progress Penggajian</p>
                    <span class="text-md font-semibold text-primary">83%</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-2">
                    <div class="bg-tertiary h-2 rounded-full" style="width: 83%"></div>
                    </div>
                    <p class="text-sm text-gray-400 mt-1.5">20 dari 24 karyawan sudah digaji</p>
                </div>

                </div>

            </div>

            </main>
        </div>
    </div>
@endsection