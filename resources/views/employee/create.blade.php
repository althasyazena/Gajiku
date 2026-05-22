@extends('layouts.app')

@section('content')
    {{-- ===== HEADER ===== --}}
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Tambah Data Karyawan</h1>
        <p class="text-gray-500">Kelola informasi karyawan dan data lengkap mereka</p>
    </div>

    {{-- ===== FORM SECTION ===== --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <form action="{{ route('karyawan.store') }}" method="POST" class="space-y-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input name="name" value="{{ old('name') }}" type="text" id="name" class="mt-1 block w-full px-4 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>  
                    @enderror
                </div>
                <div>
                    <label for="nip" class="block text-sm font-medium text-gray-700">NIP</label>
                    <input name="nip" value="{{ old('nip') }}" type="text" id="nip" class="mt-1 block w-full px-4 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    @error('nip')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>  
                    @enderror
                </div>
                <div>
                    <label for="position" class="block text-sm font-medium text-gray-700">Jabatan</label>
                    <input name="position" value="{{ old('position') }}" type="text" id="position" class="mt-1 block w-full px-4 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    @error('position')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>  
                    @enderror
                </div>
                <div>
                    <label for="salary" class="block text-sm font-medium text-gray-700">Gaji Pokok</label>
                    <input name="salary" value="{{ old('salary') }}" type="number" id="salary" class="mt-1 block w-full px-4 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    @error('salary')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>  
                    @enderror
                </div>
                <div>
                    <label for="join_date" class="block text-sm font-medium text-gray-700">Tanggal Bergabung</label>
                    <input name="join_date" value="{{ old('join_date') }}" type="date" id="join_date" class="mt-1 block w-full px-4 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    @error('join_date')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>  
                    @enderror
                </div>
            </div>

            <div class="pt-4">
                <button type="submit" class="inline-flex items-center gap-1.5 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
@endsection