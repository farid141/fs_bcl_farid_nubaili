@extends('layouts.main')
@section('container')
@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
</div>
@endif
<a href="{{ route('pengiriman.create') }}" type="button" class="btn btn-success">Create Pengiriman</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nomor</th>
            <th scope="col">Armada</th>
            <th scope="col">Tanggal Kirim</th>
            <th scope="col">Asal</th>
            <th scope="col">Tujuan</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pengirimans as $pengiriman)

        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $pengiriman->id }}</td>
            <td>{{ $pengiriman->armada->kendaraan }}</td>
            <td>{{ $pengiriman->tanggal_kirim }}</td>
            <td>{{ $pengiriman->loc_asal }}</td>
            <td>{{ $pengiriman->loc_tujuan }}</td>
            <td>{{ $pengiriman->status }}</td>
            <td>
                <a href="{{ route('pengiriman.edit', $pengiriman->id) }}" class="badge bg-warning border-0">
                    Edit
                </a>

                <form action="{{ route('pengiriman.destroy', $pengiriman->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="badge bg-danger border-0"
                        onclick="return confirm('are you sure to delete pengiriman {{ $pengiriman->id }}?')">
                        delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection