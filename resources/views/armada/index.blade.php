@extends('layouts.main')
@section('container')
@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
</div>
@endif
<a href="{{ route('armada.create') }}" type="button" class="btn btn-success">Create Armada</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nomor</th>
            <th scope="col">Kendaraan</th>
            <th scope="col">Ketersediaan</th>
            <th scope="col">Kapasitas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($armadas as $armada)

        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $armada->id }}</td>
            <td>{{ $armada->kendaraan }}</td>
            <td>{{ $armada->ketersediaan }}</td>
            <td>{{ $armada->kapasitas }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection