@extends('layouts.app')

@section('content')
    <div class="flex min-h-screen">
        <div class="flex-1 flex flex-col">

            <main class="flex-1 p-6">

                <div class="rounded-2xl bg-white h-full">
                    <!-- HEADER -->
                    <div class="mb-6 flex items-center justify-between mx-6 pt-6">
                        <div>
                            <div class="flex items-center gap-2.5 mb-1">
                                <div class="w-2 h-10 bg-accent rounded-full"></div>
                                <h1 class="text-4xl font-bold text-tertiary">Data <span class="text-secondary bg-accent py-1 px-2 rounded-lg">Penggajian</span></h1>
                            </div>
                            <p class="text-gray-500 ml-3.5 mt-2">Kelola slip gaji seluruh karyawan</p>
                        </div>
                    </div>

                    {{-- Alert Messages --}}
                    @if (session('success'))
                        <div class="flex items-center px-4 py-4 bg-green-50 border border-green-100 text-green-700 text-sm font-medium">
                        {{ session('success') }}
                        </div>
                    @endif

                    <!-- FILTER -->
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-4 mb-6 mx-6 flex flex-wrap items-center gap-3">
                        <div class="flex items-center gap-2">
                            <label class="text-sm text-gray-500">Bulan</label>
                            <select class="border border-gray-200 px-3 py-2 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option>Januari</option>
                                <option>Februari</option>
                                <option>Maret</option>
                                <option>April</option>
                                <option selected>Mei</option>
                                <option>Juni</option>
                                <option>Juli</option>
                                <option>Agustus</option>
                                <option>September</option>
                                <option>Oktober</option>
                                <option>November</option>
                                <option>Desember</option>
                            </select>
                        </div>

                        <div class="flex items-center gap-2">
                            <label class="text-sm text-gray-500">Tahun</label>
                            <select class="border border-gray-200 px-3 py-2 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option>2023</option>
                                <option>2024</option>
                                <option selected>2025</option>
                            </select>
                        </div>

                        <button class="px-4 py-2 bg-tertiary text-white text-sm font-medium rounded-xl hover:opacity-90 transition">
                            Tampilkan
                        </button>
                    </div>

                    <!-- TABLE -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mx-6">

                        <div class="px-6 py-4 border-b border-gray-100">
                            <h2 class="text-base font-semibold text-tertiary">Daftar Penggajian</h2>
                        </div>

                        <table class="w-full text-sm">
                            <thead>
                                <tr class="bg-gray-50 text-gray-500 text-xs uppercase">
                                    <th class="px-6 py-3 text-left">No</th>
                                    <th class="px-6 py-3 text-left">Nama</th>
                                    <th class="px-6 py-3 text-left">Jabatan</th>
                                    <th class="px-6 py-3 text-right">Gaji Pokok</th>
                                    <th class="px-6 py-3 text-right">Tunjangan</th>
                                    <th class="px-6 py-3 text-right">Potongan</th>
                                    <th class="px-6 py-3 text-right">Gaji Bersih</th>
                                    <th class="px-6 py-3 text-center">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-50">
                                @forelse ($salaries as $salary)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-gray-400">{{ $loop->iteration }}</td>

                                        <td class="px-6 py-4 font-medium text-gray-800">
                                            {{ $salary->employee->name }}
                                        </td>

                                        <td class="px-6 py-4 text-gray-500">
                                            {{ $salary->employee->position }}
                                        </td>

                                        <td class="px-6 py-4 text-right text-gray-600">
                                            Rp {{ number_format($salary->gaji_pokok, 0, ',', '.') }}
                                        </td>

                                        <td class="px-6 py-4 text-right text-green-600">
                                            + Rp {{ number_format($salary->tunjangan_makan + $salary->tunjangan_transportasi, 0, ',', '.') }}
                                        </td>

                                        <td class="px-6 py-4 text-right text-red-500">
                                            - Rp {{ number_format($salary->potongan, 0, ',', '.') }}
                                        </td>

                                        <td class="px-6 py-4 text-right font-bold text-gray-800">
                                            Rp {{ number_format($salary->gaji_bersih, 0, ',', '.') }}
                                        </td>

                                        <td class="px-6 py-4">
                                            <div class="flex justify-center gap-2">
                                                <a href="{{ route('gaji.show', $salary->id) }}"
                                                    class="px-3 py-1.5 text-xs text-(--color-secondary) bg-tertiary bg-opacity-10 rounded-lg font-medium hover:bg-opacity-20 transition">
                                                    Detail
                                                </a>

                                                <form action="{{ route('gaji.delete', $salary->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                        class="px-3 py-1.5 text-xs text-red-600 bg-red-50 rounded-lg font-medium hover:bg-red-100 transition cursor-pointer">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="px-6 py-10 text-center text-gray-500">
                                            Belum ada data gaji
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>

            </main>

        </div>
    </div>
@endsection