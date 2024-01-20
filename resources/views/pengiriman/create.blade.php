@extends('layouts.main')
@section('container')

<h1>Create Pengiriman</h1>
<form class="row g-3" action="{{ route('pengiriman.store') }}" method="POST">
    {{-- @method('PUT') --}}
    @csrf
    <div class="mb-3">
        <label for="armada" class="form-label">armada</label>
        <select class="form-select" name="id_armada" id="armada">
            @foreach ($armadas as $armada)
            @if (old('id_armada'))
            <option value="{{ $armada->id }}" selected> {{ $armada->nama_armada }}</option>
            @else
            <option value="{{ $armada->id }}"> {{ $armada->kendaraan }}</option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="form-floating mb-1">
        <input type="text" class="form-control @error ('loc_asal') is-invalid @enderror" id="loc_asal" name="loc_asal"
            value="{{ old('loc_asal') }}">
        <label for="loc_asal">loc_asal</label>
        @error('loc_asal')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-1">
        <input type="text" class="form-control @error ('loc_tujuan') is-invalid @enderror" id="loc_tujuan"
            name="loc_tujuan" value="{{ old('loc_tujuan') }}">
        <label for="loc_tujuan">loc_tujuan</label>
        @error('loc_tujuan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-floating mb-1">
        <input type="text" class="form-control @error ('status') is-invalid @enderror" id="status" name="status"
            value="{{ old('status') }}">
        <label for="status">status</label>
        @error('status')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-floating mb-1">
        <input name="tanggal_kirim" id="tanggal_kirim" type="date"
            class="form-control @error ('tanggal_kirim') is-invalid @enderror" placeholder="Date of birth"
            value="{{ old('tanggal_kirim') }}" />
        <label for="tanggal_kirim">tanggal_kirim</label>
        @error('tanggal_kirim')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>


    <button type="submit" class="btn btn-secondary"><i class="bi bi-pencil"></i> Create pengiriman</button>
</form>
@endsection