@extends('layouts.frontend')
@section('content')
    <div class="card radius-10 border-start mt-4">
        <div class="card-body">
            @if (!setting_get('spk.hitung.umumkan'))
                <h1 class="my-1 text-info text-center">Mohon maaf. Pengumuman belum dibuka.</h1>
            @else
                <h6 class="my-1 text-info">Silahakn Pilih Kecamatan</h6>
                <a href="{{ route('kecamatan.detail.semua') }}" type="button" class="btn btn-outline-primary px-5 mt-2">
                    Semua Kecamatan
                </a>
                @foreach ($kecamatans as $kecamatan)
                    <a href="{{ route('kecamatan.detail', $kecamatan->slug) }}" type="button"
                        class="btn btn-outline-primary px-5 mt-2">
                        {{ $kecamatan->nama }}
                    </a>
                @endforeach
            @endif
        </div>
    </div>
@endsection
