@extends('components.template')

@section('title', 'homepage')

@section('content')
    <h1 class="text-3xl font-bold mb-4 text-center">Contact Page</h1>
    
    <table class="table-auto w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-violet-500 text-white">
                <th class="px-4 py-2">No</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Role</th>
                <th class="px-4 py-2">Email</th>
            </tr>
        </thead>
        <tbody>
            @php
                $people = [
                    ['name' => 'Michael Scott', 'role' => 'Karyawan', 'email' => 'michael@dundermifflin.com'],
                    ['name' => 'Pam Beesly', 'role' => 'Karyawan', 'email' => 'pam@dundermifflin.com'],
                    ['name' => 'Jim Halpert', 'role' => 'Mahasiswa', 'email' => 'jim@dundermifflin.com'],
                    ['name' => 'Dwight Schrute', 'role' => 'Mahasiswa', 'email' => 'dwight@dundermifflin.com'],
                    ['name' => 'Kelly Kapoor', 'role' => 'Karyawan', 'email' => 'kelly@dundermifflin.com'],
                    ['name' => 'Erin Hannon', 'role' => 'Karyawan', 'email' => 'erin@dundermifflin.com'],
                    ['name' => 'Andy Bernard', 'role' => 'Mahasiswa', 'email' => 'andy@dundermifflin.com'],
                    ['name' => 'Robert California', 'role' => 'Karyawan', 'email' => 'robert@dundermifflin.com'],
                    ['name' => 'Jan Levinson', 'role' => 'Karyawan', 'email' => 'jan@dundermifflin.com'],
                    ['name' => 'Meredith Palmer', 'role' => 'Karyawan', 'email' => 'meredith@dundermifflin.com'],
                ];
            @endphp

            @foreach ($people as $index => $person)
                <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : '' }}">
                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $person['name'] }}</td>
                    <td class="border px-4 py-2">{{ $person['role'] }}</td>
                    <td class="border px-4 py-2">{{ $person['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection