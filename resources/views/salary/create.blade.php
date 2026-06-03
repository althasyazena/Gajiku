@extends('layouts.app')


@section('title', 'Input Gaji')


@section('content')

    <div class="flex min-h-screen">
        <div class="flex-1 flex flex-col">

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

                    {{-- Flash error duplikat --}}
                    @if (session('error'))
                    <div class="flex items-center gap-2 bg-red-50 border border-red-200 text-red-600 text-sm rounded-xl px-4 py-3 mb-4">
                        <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-7V7a1 1 0 112 0v4a1 1 0 11-2 0zm1 4a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd" />
                        </svg>
                        {{ session('error') }}
                    </div>
                    @endif

                    {{-- Validation Errors --}}
                    @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 rounded-xl px-4 py-3 mb-4">
                        <p class="text-sm font-semibold text-red-600 mb-2">Terdapat kesalahan input:</p>
                        <ul class="list-disc list-inside space-y-1">
                            @foreach ($errors->all() as $error)
                            <li class="text-sm text-red-500">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('gaji.store') }}" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mx-6">

                            <!-- LEFT -->
                            <div class="lg:col-span-2 space-y-5">

                                <!-- KARYAWAN -->
                                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                                    <h2 class="text-md font-semibold text-tertiary mb-4 border-b border-gray-100 pb-3">
                                        Informasi Karyawan
                                    </h2>

                                    <input type="hidden" name="employee_id" value="{{ $employee->id }}">

                                    <input
                                        type="text"
                                        value="{{ $employee->name }} ({{ $employee->position }})"
                                        disabled
                                        class="w-full border border-gray-200 rounded-xl px-3 py-2 bg-gray-50 text-sm text-gray-500">

                                    @error('employee_id')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror

                                    <!-- BULAN & TAHUN -->
                                    <div class="grid grid-cols-2 gap-4 mt-4">

                                        <div>
                                            <label class="text-sm font-medium text-gray-700">
                                                Bulan
                                            </label>

                                            <select
                                                name="bulan"
                                                class="mt-1 w-full border border-gray-200 rounded-xl px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">

                                                <option value="">-- Pilih Bulan --</option>

                                                <option value="1" {{ old('bulan') == 1 ? 'selected' : '' }}>Januari</option>
                                                <option value="2" {{ old('bulan') == 2 ? 'selected' : '' }}>Februari</option>
                                                <option value="3" {{ old('bulan') == 3 ? 'selected' : '' }}>Maret</option>
                                                <option value="4" {{ old('bulan') == 4 ? 'selected' : '' }}>April</option>
                                                <option value="5" {{ old('bulan') == 5 ? 'selected' : '' }}>Mei</option>
                                                <option value="6" {{ old('bulan') == 6 ? 'selected' : '' }}>Juni</option>
                                                <option value="7" {{ old('bulan') == 7 ? 'selected' : '' }}>Juli</option>
                                                <option value="8" {{ old('bulan') == 8 ? 'selected' : '' }}>Agustus</option>
                                                <option value="9" {{ old('bulan') == 9 ? 'selected' : '' }}>September</option>
                                                <option value="10" {{ old('bulan') == 10 ? 'selected' : '' }}>Oktober</option>
                                                <option value="11" {{ old('bulan') == 11 ? 'selected' : '' }}>November</option>
                                                <option value="12" {{ old('bulan') == 12 ? 'selected' : '' }}>Desember</option>

                                            </select>

                                            @error('bulan')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div>
                                            <label class="text-sm font-medium text-gray-700">
                                                Tahun
                                            </label>

                                            <select
                                                name="tahun"
                                                class="mt-1 w-full border border-gray-200 rounded-xl px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">

                                                <option value="2025" {{ old('tahun') == 2025 ? 'selected' : '' }}>2025</option>
                                                <option value="2026" {{ old('tahun') == 2026 ? 'selected' : '' }}>2026</option>
                                                <option value="2027" {{ old('tahun') == 2027 ? 'selected' : '' }}>2027</option>

                                            </select>

                                            @error('tahun')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>
                                </div>

                                <!-- GAJI -->
                                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                                    <h2 class="text-md font-semibold text-tertiary mb-4 border-b border-gray-100 pb-3">
                                        Komponen Gaji
                                    </h2>

                                    <input
                                        type="hidden"
                                        name="gaji_pokok"
                                        value="{{ $employee->salary }}">

                                    <input
                                        value="Gaji Pokok: Rp {{ number_format($employee->salary, 0, ',', '.') }}"
                                        disabled
                                        class="w-full border border-gray-200 rounded-xl px-3 py-2 bg-gray-50 text-sm text-gray-500 mb-4">

                                    @error('gaji_pokok')
                                        <p class="text-red-500 text-xs mb-3">{{ $message }}</p>
                                    @enderror

                                    <div class="space-y-3">

                                        <input
                                            type="number"
                                            name="tunjangan_makan"
                                            value="{{ old('tunjangan_makan') }}"
                                            placeholder="Tunjangan Makan"
                                            class="w-full border border-gray-200 rounded-xl px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">

                                        <input
                                            type="number"
                                            name="tunjangan_transportasi"
                                            value="{{ old('tunjangan_transportasi') }}"
                                            placeholder="Tunjangan Transport"
                                            class="w-full border border-gray-200 rounded-xl px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">

                                        <input
                                            type="number"
                                            name="potongan"
                                            value="{{ old('potongan') }}"
                                            placeholder="Potongan"
                                            class="w-full border border-gray-200 rounded-xl px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">

                                    </div>
                                </div>

                            </div>

                            <!-- RIGHT -->
                            <div class="space-y-5">

                                <!-- SUMMARY -->
                                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                                    <h2 class="text-md font-semibold text-tertiary mb-4 border-b border-gray-100 pb-3">
                                        Ringkasan
                                    </h2>

                                    <div class="space-y-3 text-sm">

                                        <div class="flex justify-between text-gray-600">
                                            <span>Gaji Pokok</span>
                                            <span id="preview-gaji-pokok">Rp 0</span>
                                        </div>

                                        <div class="flex justify-between text-green-600">
                                            <span>Tunjangan Makan</span>
                                            <span id="preview-t-makan">+ Rp 0</span>
                                        </div>

                                        <div class="flex justify-between text-green-600">
                                            <span>Tunjangan Transport</span>
                                            <span id="preview-t-transport">+ Rp 0</span>
                                        </div>

                                        <div class="flex justify-between text-red-500">
                                            <span>Potongan</span>
                                            <span id="preview-potongan">- Rp 0</span>
                                        </div>

                                        <div class="border-t border-gray-100 pt-3 flex justify-between font-bold text-tertiary">
                                            <span>Total</span>
                                            <span id="preview-gaji-bersih">Rp 0</span>
                                        </div>

                                    </div>

                                    <input
                                        type="hidden"
                                        name="gaji_bersih"
                                        id="input-gaji-bersih"
                                        value="0">

                                    @error('gaji_bersih')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Tombol -->
                                <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6 space-y-3 mt-4">
                                    <button
                                        type="submit"
                                        class="block w-full py-3 bg-tertiary text-secondary rounded-lg hover:bg-accent transition duration-300 text-center cursor-pointer">
                                        Simpan Slip Gaji
                                    </button>

                                    <a href="{{ route('gaji.index') }}"
                                        class="block w-full py-3 mt-3 text-center text-sm font-medium text-gray-500 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                                        Batal
                                    </a>
                                </div>

                                <!-- Info -->
                                <div class="bg-blue-50 border border-blue-100 rounded-xl p-4 mt-6">
                                    <div class="flex gap-2">
                                        <svg class="w-4 h-4 text-blue-400 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <p class="text-xs text-blue-600 leading-relaxed">
                                            Gaji bersih dihitung otomatis:<br>
                                            <span class="font-medium">
                                                Gaji Pokok + Tunjangan − Potongan
                                            </span>
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>

            </main>

        </div>
    </div>

    {{-- ===== SCRIPT KALKULASI REAL-TIME ===== --}}
        <script>
            // Gaji pokok ambil dari hidden input (nilainya static, tidak perlu listen event)
            const gajiPokokValue = parseInt(document.querySelector('[name="gaji_pokok"]').value) || 0;

            const fields = {
                tMakan: document.querySelector('[name="tunjangan_makan"]'),
                tTransport: document.querySelector('[name="tunjangan_transportasi"]'),
                potongan: document.querySelector('[name="potongan"]'),
            };

            const previews = {
                gajiPokok: document.getElementById('preview-gaji-pokok'),
                tMakan: document.getElementById('preview-t-makan'),
                tTransport: document.getElementById('preview-t-transport'),
                potongan: document.getElementById('preview-potongan'),
                gajiBersih: document.getElementById('preview-gaji-bersih'),
                inputBersih: document.getElementById('input-gaji-bersih'),
            };

            function rupiah(angka) {
                return 'Rp ' + Number(angka).toLocaleString('id-ID');
            }

            function hitung() {
                const gp = gajiPokokValue;
                const tm = parseInt(fields.tMakan.value) || 0;
                const tt = parseInt(fields.tTransport.value) || 0;
                const pt = parseInt(fields.potongan.value) || 0;
                const bersih = gp + tm + tt - pt;

                previews.gajiPokok.textContent = rupiah(gp);
                previews.tMakan.textContent = '+ ' + rupiah(tm);
                previews.tTransport.textContent = '+ ' + rupiah(tt);
                previews.potongan.textContent = '- ' + rupiah(pt);
                previews.gajiBersih.textContent = rupiah(bersih);
                previews.inputBersih.value = bersih;
            }

            // Panggil sekali saat load agar preview gaji pokok langsung muncul
            hitung();

            Object.values(fields).forEach(f => f.addEventListener('input', hitung));
        </script>

@endsection