@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-black via-gray-900 to-black py-10">
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-center mb-10">
            <h1 class="text-4xl font-extrabold text-yellow-400 drop-shadow-lg">
                Daftar Mata Kuliah
            </h1>
            <a href="{{ route('matakuliah.create') }}" 
               class="bg-gradient-to-r from-yellow-500 to-yellow-600 hover:from-yellow-600 hover:to-yellow-700 
                      text-black font-bold px-5 py-2 rounded-md shadow-lg 
                      transition transform hover:scale-105">
                + Tambah Baru
            </a>
        </div>

        {{-- Notifikasi Sukses --}}
        @if (session('success'))
            <div id="success-alert" class="bg-green-800 border-l-4 border-green-500 text-green-100 p-4 mb-6 rounded-md flex justify-between items-center shadow-lg">
                <span>{{ session('success') }}</span>
                <button onclick="document.getElementById('success-alert').style.display='none'" class="text-xl font-bold">&times;</button>
            </div>
        @endif

        <div class="overflow-x-auto rounded-lg bg-neutral-900 border border-gray-700 shadow-2xl
                    shadow-yellow-500/20 hover:shadow-yellow-400/40 transition duration-500">
            <table class="table-auto w-full border-collapse text-gray-200">
                <thead class="bg-gradient-to-r from-gray-800 to-gray-900">
                    <tr>
                        <th class="px-6 py-4 text-left font-semibold uppercase">Nama Mata Kuliah</th>
                        <th class="px-6 py-4 text-left font-semibold uppercase">SKS</th>
                        <th class="px-6 py-4 text-center font-semibold uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @forelse ($mks as $mk)
                        <tr class="hover:bg-gradient-to-r hover:from-gray-800 hover:to-gray-700 transition duration-300 ease-in-out">
                            <td class="px-6 py-4">{{ $mk->nama_mk }}</td>
                            <td class="px-6 py-4">{{ $mk->sks }}</td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center space-x-4">
                                    <a href="{{ route('matakuliah.edit', $mk->id) }}" 
                                       class="bg-gradient-to-r from-blue-600 to-blue-800 hover:from-blue-700 hover:to-blue-900 
                                              text-white px-4 py-2 rounded-md shadow-md transition transform hover:scale-105">
                                        Edit
                                    </a>
                                    <form id="delete-form-{{ $mk->id }}" action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDelete('{{ $mk->id }}')" 
                                                class="bg-gradient-to-r from-red-600 to-red-800 hover:from-red-700 hover:to-red-900 
                                                       text-white px-4 py-2 rounded-md shadow-md transition transform hover:scale-105">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-10 text-gray-500">
                                Tidak ada data mata kuliah yang tersedia.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Anda Yakin?',
            text: "Data mata kuliah ini akan dihapus secara permanen!",
            icon: 'warning',
            background: '#0a0a0a',
            color: '#facc15',
            showCancelButton: true,
            confirmButtonColor: '#dc2626',
            cancelButtonColor: '#3b82f6',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        });
    }
</script>
@endsection