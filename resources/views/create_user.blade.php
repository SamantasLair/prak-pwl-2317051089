@extends('layouts.app')
@section('content')
<div class="min-h-screen bg-gradient-to-br from-black via-gray-900 to-black py-10 flex items-center justify-center">
    <div class="w-full max-w-lg bg-neutral-900 border border-gray-700 shadow-2xl
                shadow-yellow-500/20 hover:shadow-yellow-400/40 transition duration-500 rounded-lg p-8">
        
        <h1 class="text-3xl font-extrabold text-center text-yellow-400 mb-8 drop-shadow-lg">
            🗿 Buat Pengguna Baru 🗿
        </h1>

        <form action="{{ route('user.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <div>
                <label for="nama" class="block text-gray-300 font-semibold mb-2">Nama:</label>
                <input type="text" id="nama" name="nama" 
                    class="w-full px-4 py-2 rounded-md bg-gray-800 border border-gray-700 text-gray-200
                           focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400
                           transition duration-300" required>
            </div>
            <div>
                <label for="nim" class="block text-gray-300 font-semibold mb-2">NIM:</label>
                <input type="text" id="nim" name="nim" 
                    class="w-full px-4 py-2 rounded-md bg-gray-800 border border-gray-700 text-gray-200
                           focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400
                           transition duration-300" required>
            </div>

            <div>
                <label for="kelas_id" class="block text-gray-300 font-semibold mb-2">Kelas:</label>
                <select name="kelas_id" id="kelas_id"
                    class="w-full px-4 py-2 rounded-md bg-gray-800 border border-gray-700 text-gray-200
                           focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400
                           transition duration-300">
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            <div class="text-center">
                <button type="submit"
                    class="w-full py-3 bg-gradient-to-r from-yellow-500 to-yellow-600 
                           hover:from-yellow-400 hover:to-yellow-500 text-black font-bold 
                           rounded-md shadow-md transition transform hover:scale-105">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
