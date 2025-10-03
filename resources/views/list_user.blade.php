@extends('layouts.app')
@section('content')
<div class="min-h-screen bg-gradient-to-br from-black via-gray-900 to-black py-10">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-extrabold text-center mb-10 text-yellow-400 drop-shadow-lg">
            🗿Daftar Pengguna🗿
        </h1>

        <div class="overflow-x-auto rounded-lg bg-neutral-900 border border-gray-700 shadow-2xl
                    shadow-yellow-500/20 hover:shadow-yellow-400/40 transition duration-500">
            <table class="table-auto w-full border-collapse text-gray-200">
                <thead class="bg-gradient-to-r from-gray-800 to-gray-900">
                    <tr>
                        <th class="px-6 py-3 text-left">ID</th>
                        <th class="px-6 py-3 text-left">Nama</th>
                        <th class="px-6 py-3 text-left">NIM</th>
                        <th class="px-6 py-3 text-left">Kelas</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @foreach ($users as $user)
                        <tr class="hover:bg-gradient-to-r hover:from-gray-800 hover:to-gray-700 transition duration-300 ease-in-out">
                            <td class="px-6 py-3">{{ $user->id }}</td>
                            <td class="px-6 py-3">{{ $user->nama }}</td>
                            <td class="px-6 py-3">{{ $user->nim }}</td>
                            <td class="px-6 py-3">{{ $user->nama_kelas }}</td>
                            <td class="px-6 py-3 text-center">
                                <button 
                                    onclick="hapusUser({{ $user->id }})" 
                                    class="bg-gradient-to-r from-red-600 to-red-800 hover:from-red-700 hover:to-red-900 
                                           text-white px-4 py-2 rounded-md shadow-md transition transform hover:scale-105">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6 flex justify-center">
            <nav class="inline-flex rounded-md shadow">
                @if ($users->onFirstPage())
                    <span class="px-4 py-2 text-gray-500 bg-gray-800 border border-gray-700 cursor-not-allowed">Sebelumnya</span>
                @else
                    <a href="{{ $users->previousPageUrl() }}" 
                       class="px-4 py-2 bg-gray-900 border border-gray-700 text-yellow-400 hover:bg-gray-700 transition">
                        Sebelumnya
                    </a>
                @endif
        
                @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                    @if ($page == $users->currentPage())
                        <span class="px-4 py-2 bg-yellow-500 text-black font-bold border border-gray-700">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" 
                           class="px-4 py-2 bg-gray-900 border border-gray-700 text-yellow-400 hover:bg-gray-700 transition">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
        
                @if ($users->hasMorePages())
                    <a href="{{ $users->nextPageUrl() }}" 
                       class="px-4 py-2 bg-gray-900 border border-gray-700 text-yellow-400 hover:bg-gray-700 transition">
                        Berikutnya
                    </a>
                @else
                    <span class="px-4 py-2 text-gray-500 bg-gray-800 border border-gray-700 cursor-not-allowed">Berikutnya</span>
                @endif
            </nav>
        </div>
        
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function hapusUser(id) {
        Swal.fire({
            title: 'Hapus Data?',
            text: "Data pengguna tidak bisa dikembalikan!",
            icon: 'warning',
            background: '#0a0a0a',
            color: '#facc15',
            showCancelButton: true,
            confirmButtonColor: '#dc2626',
            cancelButtonColor: '#3b82f6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "/users/delete/" + id;
            }
        });
    }
</script>
@endsection
