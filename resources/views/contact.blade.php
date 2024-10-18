@extends('layouts.app')

@section('content')
<div class="bg-gray-100 rounded-lg shadow-lg p-6">
    <h2 class="text-2xl font-bold mb-4">Contact List</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="px-4 py-2">Nama Mahasiswa</th>
                    <th class="px-4 py-2">Umur</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Jurusan</th>
                    <th class="px-4 py-2">No HP</th>
                </tr>
            </thead>
            <tbody>
                @foreach(range(1, 10) as $index)
                <tr class="border-b hover:bg-gray-100">
                    <td class="px-4 py-2">{{ Faker\Factory::create()->name() }}</td>
                    <td class="px-4 py-2">{{ rand(18, 25) }}</td>
                    <td class="px-4 py-2">{{ Faker\Factory::create()->safeEmail() }}</td>
                    <td class="px-4 py-2">{{ Faker\Factory::create()->randomElement(['Teknik Informatika', 'Sistem Informasi', 'Teknik Komputer', 'Desain Komunikasi Visual']) }}</td>
                    <td class="px-4 py-2">{{ Faker\Factory::create()->phoneNumber() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
