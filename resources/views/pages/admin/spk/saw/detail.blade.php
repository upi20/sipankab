@extends('layouts.admin.master')

@section('content')
    @php
        $can_insert = auth_can(h_prefix('insert'));
        $can_update = auth_can(h_prefix('update'));
        $can_delete = auth_can(h_prefix('delete'));
        
        $can_kriteria = $spk->kriterias->count() > 0;
        $can_alternatif = $spk->alternatifs->count() > 0;
        $can_status = $can_kriteria && $can_alternatif;
        
        $status_str = $spk->status == 1 ? 'Diumumkan' : ($spk->status == 2 ? 'Selsai' : 'Diproses');
        $status_color = $spk->status == 1 ? 'primary' : ($spk->status == 2 ? 'success' : 'secondary');
    @endphp
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2">Detail {{ $spk->nama }}
                        (<span class="text-{{ $status_color }} fw-bold">{{ $status_str }}</span>)
                    </h6>
                </div>
                <div>
                    <a class="btn btn-rounded btn-secondary btn-sm" href="{{ route(h_prefix(min: 1)) }}">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    @if ($spk->status == 0)
                        <button type="button" class="btn btn-rounded btn-primary btn-sm" data-toggle="tooltip"
                            title="Umumkan {{ $spk->nama }}" onclick="setStatus({{ $spk->status }})">
                            <i class="fas fa-desktop"></i> Umumkan
                        </button>
                    @elseif ($spk->status == 1)
                        <button type="button" class="btn btn-rounded btn-primary btn-sm" data-toggle="tooltip"
                            title="Set Selesai {{ $spk->nama }}" onclick="setStatus({{ $spk->status }})">
                            <i class="fas fa-desktop"></i> Umumkan
                        </button>
                    @endif
                </div>
            </div>
            <hr class="mt-1 mb-0" />
            {!! $spk->keterangan !!}
            <div class="list-group">
                <a href="{{ route(h_prefix('kriteria', 1), $spk->slug) }}" class="list-group-item list-group-item-action ">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">1. Input Kriteria</h5>
                        <small class="text-muted">{{ $spk->kriterias->count() }}</small>
                    </div>
                    <p class="mb-1">Input Kode, Nama dan bobot dari kriteria</p>
                </a>
                <a href="{{ route(h_prefix('alternatif', 1), $spk->slug) }}"
                    class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">2. Input Data Kandidat/Alternatif</h5>
                        <small class="text-muted">{{ $spk->alternatifs->count() }}</small>
                    </div>
                    <p class="mb-1">Pastikan sebelumnya sudah mengisi data kriteria.</p>
                </a>
                <a href="{{ route(h_prefix('perhitungan', 1), $spk->slug) }}"
                    class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">3. Perhitungan dan hasil</h5>
                    </div>
                    <p class="mb-1">
                        Setelah mengisi data kriteria dan kandidat/alternatif maka perhitungan dapat dilakukan untuk
                        mendapatkan hasil yang di inginkan.
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset_admin('plugins/datatable/css/dataTables.bootstrap5.min.css') }}" />
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/loading/loadingoverlay.min.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    @php
        $resource = resource_loader(
            blade_path: $view,
            params: [
                'can_update' => $can_update ? 'true' : 'false',
                'can_delete' => $can_delete ? 'true' : 'false',
                'page_title' => $page_attr['title'],
            ],
        );
    @endphp
    <script src="{{ $resource }}"></script>
@endsection
