@extends('layouts.app')

@section('content')
    <div class="flex min-h-screen">
        <div class="flex-1 flex flex-col">
            <main class="flex-1 p-6 overflow-auto">

                <div class="rounded-2xl bg-white h-full">
                    <!-- HEADER -->
                    <div class="mb-6 flex items-center justify-between mx-6 pt-6">
                        <div>
                            <div class="flex items-center gap-2.5 mb-1">
                                <div class="w-2 h-10 bg-accent rounded-full"></div>
                                <h1 class="text-4xl font-bold text-tertiary">Data <span class="text-secondary bg-accent py-1 px-2 rounded-lg">Karyawan</span></h1>
                            </div>
                            <p class="text-gray-500 ml-5 mt-2 text-lg">Kelola informasi karyawan dan data lengkap mereka</p>
                        </div>
                        <div class="flex gap-6">
                            <div class="text-center">
                                <p class="text-3xl font-bold text-secondary bg-tertiary py-1 px-2 rounded-lg">24</p>
                                <p class="text-sm text-gray-400 mt-2">Total</p>
                            </div>
                            <div class="text-center">
                                <p class="text-3xl font-bold text-tertiary bg-secondary py-1 px-2 rounded-lg">20</p>
                                <p class="text-sm text-gray-400 mt-2">Aktif</p>
                            </div>
                            <div class="text-center">
                                <p class="text-3xl font-bold text-secondary bg-accent py-1 px-2 rounded-lg">4</p>
                                <p class="text-sm text-gray-400 mt-2">Nonaktif</p>
                            </div>
                        </div>
                    </div>

                    <!-- ALERT -->
                    @if (session('success'))
                        <div class="flex items-center px-4 py-4 bg-green-50 border border-green-100 text-green-700 text-sm font-medium">
                        {{ session('success') }}
                        </div>
                    @endif

                    <!-- TABLE -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mx-6">

                        <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
                            <h2 class="text-lg font-semibold text-tertiary">Daftar Karyawan</h2>
                            <a href="{{ route('karyawan.create') }}" class="inline-flex items-center gap-1.5 px-4 py-2 bg-accent text-white text-sm font-semibold rounded-lg hover:bg-tertiary transition duration-300">
                                + Tambah Karyawan
                            </a>
                        </div>

                        <div class="px-6 py-4 border-b border-gray-100 flex gap-3">
                            <input type="text" placeholder="Cari nama atau NIK..."
                                class="flex-1 px-4 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <button class="px-4 py-2 bg-tertiary text-white rounded-lg text-sm font-medium hover:opacity-90 transition">
                                Filter
                            </button>
                        </div>

                        <table class="w-full text-sm">
                            <thead>
                                <tr class="bg-gray-50 text-gray-500 text-xs uppercase">
                                    <th class="px-6 py-3 text-left">No</th>
                                    <th class="px-6 py-3 text-left">Nama</th>
                                    <th class="px-6 py-3 text-left">NIK</th>
                                    <th class="px-6 py-3 text-left">Jabatan</th>
                                    <th class="px-6 py-3 text-left">Gaji</th>
                                    <th class="px-6 py-3 text-center">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-50">
                                @forelse ($employees as $employee)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-gray-400 text-sm">{{ $loop->iteration }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-800 text-sm">{{ $employee->name }}</td>
                                        <td class="px-6 py-4 text-gray-600 text-sm">{{ $employee->nip }}</td>
                                        <td class="px-6 py-4 text-gray-600 text-sm">{{ $employee->position }}</td>
                                        <td class="px-6 py-4 text-gray-600 text-sm">Rp. {{ number_format($employee->salary), 0, '.', '.' }}</td>
                                        <td class="px-6 py-4">
                                            <div class="flex justify-center gap-2">

                                                {{-- Tambah Data Gaji --}}
                                                <a href="{{ route('gaji.create', $employee->id) }}" class="px-3 py-1.5 text-green-600 bg-green-400 bg-opacity-10 rounded-lg text-md font-medium hover:bg-opacity-20 transition">
                                                    <i class="ri-info-i"></i>
                                                </a>

                                                {{-- Edit Data Karyawan --}}
                                                <a href="{{ route('karyawan.edit', $employee->id) }}" class="px-3 py-1.5 text-yellow-600 bg-yellow-400 bg-opacity-10 rounded-lg text-md font-medium hover:bg-opacity-20 transition">
                                                    <i class="ri-edit-line"></i>
                                                </a>

                                                {{-- Delete Button --}}
                                                <form action="{{ route('karyawan.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="inline-flex items-center gap-1.5 px-3 py-1.5 text-red-600 bg-red-50 rounded-lg hover:bg-red-100 transition text-xs font-medium">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>

            </main>
        </div>
    </div>
@endsection