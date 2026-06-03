@extends('layouts.app')

@section('title', 'Detail Slip Gaji')

@section('content')

    <div class="flex min-h-screen">
        <div class="flex-1 flex flex-col">

            <!-- CONTENT -->
            <main class="flex-1 p-6">

                <div class="rounded-2xl bg-white h-full">
                    <!-- HEADER -->
                    <div class="mb-6 flex items-center gap-4 mx-6 pt-6">
                        <button class="text-2xl mb-6 bg-secondary text-tertiary">
                            <i class="ri-arrow-left-circle-line"></i>
                        </button>
                        <div>
                            <div class="flex items-center gap-2.5 mb-1">
                                <div class="w-2 h-10 bg-accent rounded-full"></div>
                                <h1 class="text-4xl font-bold text-tertiary">Input <span class="text-secondary bg-accent py-1 px-2 rounded-lg">Gaji</span> Karyawan</h1>
                            </div>
                            <p class="text-gray-500 ml-3.5 mt-2">Isi form di bawah untuk membuat slip gaji</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mx-6">

                        <!-- LEFT -->
                        <div class="lg:col-span-2 space-y-5">

                        <!-- INFO -->
                        <div class="bg-white rounded-xl shadow-sm p-6">
                            <h2 class="text-md font-semibold mb-4 border-b pb-2 text-tertiary">
                                Informasi Karyawan
                            </h2>

                            <div class="space-y-2 text-sm">

                                <div class="flex justify-between">
                                    <span class="text-gray-400">Nama</span>
                                    <span class="font-medium">
                                        {{ $salary->employee->name }}
                                    </span>
                                </div>

                                <div class="flex justify-between">
                                    <span class="text-gray-400">NIK</span>
                                    <span class="font-medium">
                                        {{ $salary->employee->nik }}
                                    </span>
                                </div>

                                <div class="flex justify-between">
                                    <span class="text-gray-400">Jabatan</span>
                                    <span class="font-medium">
                                        {{ $salary->employee->position ?? '-' }}
                                    </span>
                                </div>

                                <div class="flex justify-between">
                                    <span class="text-gray-400">Periode</span>
                                    <span class="font-medium">
                                        {{ \Carbon\Carbon::create()->month($salary->bulan)->translatedFormat('F') }}
                                        {{ $salary->tahun }}
                                    </span>
                                </div>

                            </div>
                        </div>

                        <!-- GAJI -->
                        <div class="bg-white rounded-xl shadow-sm p-6">
                            <h2 class="text-md font-semibold mb-4 border-b pb-2 text-tertiary">
                                Komponen Gaji
                            </h2>

                            <div class="space-y-2 text-sm">

                                <p class="text-xs text-gray-400 uppercase">
                                    Pendapatan
                                </p>

                                <div class="flex justify-between">
                                    <span>Gaji Pokok</span>
                                    <span>
                                        Rp {{ number_format($salary->gaji_pokok, 0, ',', '.') }}
                                    </span>
                                </div>

                                <div class="flex justify-between text-green-600">
                                    <span>Tunjangan Makan</span>
                                    <span>
                                        + Rp {{ number_format($salary->tunjangan_makan, 0, ',', '.') }}
                                    </span>
                                </div>

                                <div class="flex justify-between text-green-600">
                                    <span>Tunjangan Transportasi</span>
                                    <span>
                                        + Rp {{ number_format($salary->tunjangan_transportasi, 0, ',', '.') }}
                                    </span>
                                </div>

                                <p class="text-xs text-gray-400 uppercase pt-2">
                                    Potongan
                                </p>

                                <div class="flex justify-between text-red-500">
                                    <span>Potongan</span>
                                    <span>
                                        - Rp {{ number_format($salary->potongan, 0, ',', '.') }}
                                    </span>
                                </div>

                                <div class="border-t pt-2 flex justify-between font-bold text-blue-600">
                                    <span>Gaji Bersih</span>
                                    <span>
                                        Rp {{ number_format($salary->gaji_bersih, 0, ',', '.') }}
                                    </span>
                                </div>

                            </div>
                        </div>

                    </div>

                        <!-- RIGHT -->
                        <div class="space-y-5">

                        <!-- SUMMARY -->
                        <div class="bg-white rounded-xl shadow-sm p-6 text-center">
                            <p class="text-sm text-gray-400">Total Diterima</p>

                            <p class="text-2xl font-bold text-tertiary">
                                Rp {{ number_format($salary->gaji_bersih, 0, ',', '.') }}
                            </p>

                            <p class="text-sm text-gray-400">
                                {{ \Carbon\Carbon::create()->month($salary->bulan)->translatedFormat('F') }}
                                {{ $salary->tahun }}
                            </p>

                            <div class="mt-4">
                                <span class="px-3 py-1 bg-green-50 text-green-600 text-sm rounded-full">
                                    ✓ Slip Gaji Tersimpan
                                </span>
                            </div>
                        </div>

                        <!-- ACTION -->
                        <div class="bg-white rounded-xl shadow-sm p-6">
                            <a href="{{ route('gaji.download', $salary->id) }}"
                                class="block w-full py-3 bg-tertiary text-secondary rounded-lg hover:bg-accent transition duration-300 text-center">
                                Download Slip Gaji
                            </a>
                        </div>

                    </div>

                    </div>
                </div>

            </main>

        </div>
    </div>

@endsection