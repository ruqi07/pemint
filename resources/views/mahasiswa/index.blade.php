@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Daftar Mahasiswa</h1>
            <tr>
                <table class="table">
                    <thead class="thead-dark">
                    <tbody>
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">ID</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Fakultas</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Aksi</th>
                    </tbody>
            </tr>
            </thead>
            <tbody>
                @foreach( $mahasiswa as $mhs )
                <tr>
                    <!-- <th scope="row">{{ $loop->iteration }}</th> -->
                    <td>{{ $mhs->id }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->fakultas }}</td>
                    <td>{{ $mhs->prodi }}</td>
                    <td>{{ $mhs->email }}</td>
                    <td>
                        <a href="" class="badge badge-success">edit</a>
                        <a href="" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection