<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .avatar-box {
            border: 2px solid #a6a6a6;
        }
    </style>
</head>
<body class="bg-gray-900 text-white font-sans flex items-center justify-center min-h-screen">

<div class="profile-container w-full max-w-sm p-8 bg-gray-800 rounded-xl shadow-lg flex flex-col items-center">
    <div class="avatar-box w-32 h-32 rounded-full overflow-hidden mb-8 border-red-500 hover:border-red-400 transition-all duration-300">
        <img src="{{ asset('image/image.png') }}" alt="Foto Profil" class="w-full h-full object-cover object-center">
    </div>
    
    <div class="info-box w-full mb-6 p-4 rounded-lg bg-gray-700 text-center shadow-md border-b-4 border-red-500 hover:scale-105 hover:shadow-xl transition-all duration-300">
        <p class="font-bold text-lg text-red-400">Nama</p>
        <p class="mt-1 text-gray-200">{{ $nama }}</p>
    </div>
    
    <div class="info-box w-full mb-6 p-4 rounded-lg bg-gray-700 text-center shadow-md border-b-4 border-red-500 hover:scale-105 hover:shadow-xl transition-all duration-300">
        <p class="font-bold text-lg text-red-400">Kelas</p>
        <p class="mt-1 text-gray-200">{{ $kelas }}</p>
    </div>
    
    <div class="info-box w-full p-4 rounded-lg bg-gray-700 text-center shadow-md border-b-4 border-red-500 hover:scale-105 hover:shadow-xl transition-all duration-300">
        <p class="font-bold text-lg text-red-400">NPM</p>
        <p class="mt-1 text-gray-200">{{ $NPM }}</p>
    </div>
</div>

</body>
</html>