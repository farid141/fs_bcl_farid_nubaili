@extends('layouts.main')
@section('container')
<div class="search-container">
    <label>
        <input type="checkbox" id="checkParam1"> Kendaraan:
    </label>
    <input type="text" id="param1" name="param1" placeholder="Enter kendaraan" disabled value={{
        $kendaraan?$kendaraan:'' }}>
    <label>
        <input type="checkbox" id="checkParam2"> Ketersediaan:
    </label>
    <input type="text" id="param2" name="param2" placeholder="Enter ketersediaan" disabled value={{
        $ketersediaan?$ketersediaan:'' }}>

    <button type="button" onclick="performSearch()">Search</button>
</div>
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
            <th scope="col">Aksi</th>
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
            <td>
                <a href="{{ route('armada.edit', $armada->id) }}" class="badge bg-warning border-0">
                    Edit
                </a>

                <form action="{{ route('armada.destroy', $armada->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="badge bg-danger border-0"
                        onclick="return confirm('are you sure to delete {{ $armada->id }}?')">
                        delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection