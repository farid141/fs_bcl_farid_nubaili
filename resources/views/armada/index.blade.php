@extends('layouts.main')
@section('container')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nomor</th>
            <th scope="col">Kendaraan</th>
            <th scope="col">Ketersediaan</th>
            <th scope="col">Muatan</th>
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