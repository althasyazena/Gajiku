<!DOCTYPE html>
<html lang="id">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>{{ $title ?? 'Payroll App' }}</title>
  
   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">

   <div class="flex min-h-screen">

       {{-- ===== SIDEBAR ===== --}}
       <aside class="w-64 bg-white shadow-md flex flex-col">

        <div class="h-16 flex items-center justify-center border-b border-gray-100">
            <span class="flex items-center gap-2 text-xl font-bold text-tertiary">
                <img src="{{ asset('assets/Logo_Gajiku.png') }}" alt="PayrollApp Logo" class="w-8 h-8">
                Gajiku
            </span>
        </div>

        <nav class="flex-1 px-4 py-6 space-y-2">
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Menu Utama</p>

            <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3 py-3 rounded-lg text-md font-medium
             {{ request()->routeIs('dashboard') ? 'bg-tertiary text-(--color-secondary)' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                Dashboard
            </a>
            <a href="{{ route('karyawan.index') }}" class="flex items-center gap-3 px-3 py-3 rounded-lg text-md font-medium 
            {{ request()->routeIs('karyawan.*') ? 'bg-tertiary text-(--color-secondary)' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                Data Karyawan
            </a>
            <a href="{{ route('gaji.index') }}" class="flex items-center gap-3 px-3 py-3 rounded-lg text-md font-medium
             {{ request()->routeIs('gaji.*') ? 'bg-tertiary text-(--color-secondary)' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                Penggajian
            </a>
        </nav>

        <div class="border-t border-gray-100 px-4 py-4">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-9 h-9 rounded-full bg-accent flex items-center justify-center text-secondary font-semibold text-sm">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
                <div>
                    <p class="text-md font-medium text-gray-900">{{ auth()->user()->name }}</p>
                    <p class="text-sm text-gray-400">{{ auth()->user()->role_as == 0 ? 'HRD / Admin' : 'Karyawan' }}</p>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="w-full flex items-center gap-2 px-3 py-2 rounded-lg text-sm text-red-500 hover:bg-red-50 font-medium transition cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    Logout
                </button>
            </form>
        </div>

        </aside>
       {{-- ===== END SIDEBAR ===== --}}

       {{-- ===== MAIN CONTENT ===== --}}
       <div class="flex-1 flex flex-col">

           {{-- Page Content --}}
           <main class="flex-1 p-6 overflow-auto">
               @yield('content')
           </main>

       </div>
       {{-- ===== END MAIN CONTENT ===== --}}

   </div>

</body>
</html>