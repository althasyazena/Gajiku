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
                                <h1 class="text-4xl font-bold text-tertiary">Tambah <span class="text-secondary bg-accent py-1 px-2 rounded-lg">Data</span> Karyawan</h1>
                            </div>
                            <p class="text-gray-500 ml-3.5 mt-2">Kelola informasi karyawan dan data lengkap mereka</p>
                        </div>
                    </div>

                    <!-- FORM -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mx-6">

                        <form action="{{ route('karyawan.store') }}" method="POST" class="space-y-6">
                            @csrf

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                                <div>
                                    <label for="name" class="text-sm font-medium text-gray-700">Nama Lengkap</label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        value="{{ old('name') }}"
                                        placeholder="Masukkan nama lengkap"
                                        class="mt-1 w-full px-4 py-2 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                                    @error('name')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="nip" class="text-sm font-medium text-gray-700">NIP</label>
                                    <input
                                        type="text"
                                        id="nip"
                                        name="nip"
                                        value="{{ old('nip') }}"
                                        placeholder="Masukkan NIP"
                                        class="mt-1 w-full px-4 py-2 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                                    @error('nip')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="position" class="text-sm font-medium text-gray-700">Jabatan</label>
                                    <input
                                        type="text"
                                        id="position"
                                        name="position"
                                        value="{{ old('position') }}"
                                        placeholder="Masukkan jabatan"
                                        class="mt-1 w-full px-4 py-2 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                                    @error('position')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="salary" class="text-sm font-medium text-gray-700">Gaji Pokok</label>
                                    <input
                                        type="number"
                                        id="salary"
                                        name="salary"
                                        value="{{ old('salary') }}"
                                        placeholder="Masukkan gaji"
                                        class="mt-1 w-full px-4 py-2 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                                    @error('salary')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="join_date" class="text-sm font-medium text-gray-700">Tanggal Bergabung</label>
                                    <input
                                        type="date"
                                        id="join_date"
                                        name="join_date"
                                        value="{{ old('join_date') }}"
                                        class="mt-1 w-full px-4 py-2 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                                    @error('join_date')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>

                            <div class="pt-2 flex gap-3">
                                <button
                                    type="submit"
                                    class="px-6 py-2 bg-accent text-secondary text-sm font-medium rounded-xl hover:opacity-90 transition">
                                    Simpan Data
                                </button>

                                <a href="{{ route('karyawan.index') }}"
                                    class="px-6 py-2 bg-gray-100 text-gray-600 text-sm font-medium rounded-xl hover:bg-gray-200 transition">
                                    Batal
                                </a>
                            </div>

                        </form>

                    </div>
                </div>

            </main>

        </div>
    </div>
@endsection