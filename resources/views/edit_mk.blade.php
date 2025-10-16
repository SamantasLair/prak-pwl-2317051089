@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-black via-gray-900 to-black py-10 flex items-center justify-center">
    <div class="container mx-auto px-6">
        
        <div class="bg-neutral-900 border border-gray-700 rounded-lg shadow-2xl shadow-yellow-500/20 
                    hover:shadow-yellow-400/40 transition duration-500 p-8 max-w-2xl mx-auto">

            <h1 class="text-3xl font-extrabold text-center mb-8 text-yellow-400 drop-shadow-lg">
                ✍️ Edit Mata Kuliah ✍️
            </h1>
            
            <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                {{-- Input untuk Nama Mata Kuliah --}}
                <div class="mb-6">
                    <label for="nama_mk" class="block mb-2 text-sm font-medium text-gray-300">Nama Mata Kuliah</label>
                    <input type="text" id="nama_mk" name="nama_mk" value="{{ $mk->nama_mk }}"
                           class="w-full px-4 py-2 bg-gray-800 border border-gray-600 rounded-md text-gray-200 
                                  focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 transition" 
                           placeholder="Contoh: Pemrograman Web Lanjut" required>
                </div>
                
                {{-- Input untuk SKS --}}
                <div class="mb-8">
                    <label for="sks" class="block mb-2 text-sm font-medium text-gray-300">Jumlah SKS</label>
                    <input type="number" id="sks" name="sks" value="{{ $mk->sks }}"
                           class="w-full px-4 py-2 bg-gray-800 border border-gray-600 rounded-md text-gray-200
                                  focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 transition" 
                           placeholder="Contoh: 3" required min="1" max="6">
                </div>
                
                {{-- Tombol Aksi --}}
                <div class="flex items-center justify-between">
                    <a href="{{ url()->previous() }}" 
                       class="bg-gray-700 hover:bg-gray-600 text-gray-200 font-bold py-2 px-4 rounded-md 
                              transition duration-300 ease-in-out transform hover:scale-105">
                        Kembali
                    </a>
                    <button type="submit" 
                            class="bg-gradient-to-r from-yellow-500 to-yellow-600 hover:from-yellow-600 hover:to-yellow-700 
                                   text-black font-bold px-6 py-2 rounded-md shadow-lg 
                                   transition transform hover:scale-105">
                        Simpan Perubahan
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection