<nav class="bg-neutral-900 border-b border-gray-700 shadow-md shadow-yellow-500/20">
    <div class="container mx-auto flex items-center justify-between px-6 py-4">
        <a href="/" class="text-yellow-400 font-extrabold text-xl hover:text-yellow-300 transition">
            🗿 UserApp
        </a>
        <div class="space-x-6">
            <a href="{{ url('/user') }}" 
               class="text-gray-300 hover:text-yellow-400 transition {{ request()->is('user') ? 'text-yellow-400 font-bold' : '' }}">
               Daftar User
            </a>
            <a href="{{ url('/user/create') }}" 
               class="text-gray-300 hover:text-yellow-400 transition {{ request()->is('user/create') ? 'text-yellow-400 font-bold' : '' }}">
               Tambah User
            </a>
            <a href="{{ url('/profile') }}" 
               class="text-gray-300 hover:text-yellow-400 transition {{ request()->is('profile') ? 'text-yellow-400 font-bold' : '' }}">
               Profil
            </a>
        </div>
    </div>
</nav>
