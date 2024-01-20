@extends('layouts.main')
@section('container')

<h1>Create Armada</h1>
<form class="row g-3" action="{{ route('armada.store') }}" method="POST">
    @csrf
    <div class="form-floating mb-1">
        <input type="text" class="form-control @error ('kendaraan') is-invalid @enderror" id="kendaraan"
            name="kendaraan" value="{{ old('kendaraan') }}">
        <label for="kendaraan">kendaraan</label>
        @error('kendaraan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
        <input type="text" class="form-control @error ('ketersediaan') is-invalid @enderror" id="ketersediaan"
            name="ketersediaan" value="{{ old('ketersediaan') }}">
        <label for="ketersediaan">ketersediaan</label>
        @error('ketersediaan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
        <input type="text" class="form-control @error ('kapasitas') is-invalid @enderror" id="kapasitas"
            name="kapasitas" value="{{ old('kapasitas') }}">
        <label for="kapasitas">kapasitas</label>
        @error('kapasitas')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-secondary"><i class="bi bi-pencil"></i> Add Armada</button>
</form>
@endsection