@extends('layouts.admin.master')

@section('content')
    @php
        $i = 0;
        $hitung = $perhitungan[$i];
        $i++;
    @endphp
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">1. Membuat matriks keputusan </h6>
                    {{-- <small>{{ $spk->nama }}</small> --}}
                </div>
                <div>
                    <a class="btn btn-rounded btn-secondary btn-sm" href="{{ route(h_prefix('detail', 2), $spk->slug) }}">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
            <table class="table table-striped table-hover w-100" id="tbl_main{{ $i }}">
                <thead>
                    <tr>

                        <th>No</th>
                        <th>Alternatif</th>
                        @foreach ($hitung['header'] as $header)
                            <th title="{{ $header['nama'] }}" data-toggle="tooltip">{{ $header['kode'] }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hitung['body'] as $k => $body)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $body['nama'] }}</td>
                            @foreach ($body['nilais'] as $nilai)
                                <td>{{ $nilai ? $nilai['nilai'] : '' }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @php
        $hitung = $perhitungan[$i];
        $i++;
    @endphp
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">2. Nilai asli kriteria di pangkat bobot kriteria </h6>
                    {{-- <small>{{ $spk->nama }}</small> --}}
                </div>
            </div>
            <table class="table table-striped table-hover w-100" id="tbl_main{{ $i }}">
                <thead>
                    <tr>

                        <th>No</th>
                        <th>Alternatif</th>
                        @foreach ($hitung['header'] as $header)
                            <th title="{{ $header['nama'] }}" data-toggle="tooltip">{{ $header['kode'] }}</th>
                        @endforeach
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hitung['body'] as $k => $body)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $body['nama'] }}</td>
                            @foreach ($body['nilais'] as $nilai)
                                <td title="{{ $nilai ? $nilai['nilai_str'] : '' }}" data-toggle="tooltip">
                                    {{ $nilai ? $nilai['nilai'] : '' }}
                                </td>
                            @endforeach
                            <td title="{{ $body['jumlah_str'] }}" data-toggle="tooltip">
                                {{ $body['jumlah'] }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                @if (isset($hitung['body'][0]['nilais']))
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Total</th>
                            @foreach ($hitung['body'][0]['nilais'] as $body)
                                <th></th>
                            @endforeach
                            <th>{{ $hitung['total'] }}</th>
                        </tr>
                    </tfoot>
                @endif
            </table>
        </div>
    </div>

    @php
        $hitung = $perhitungan[$i + 1];
        $i++;
    @endphp
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">3. Nilai vektor dibagi Jumlah total
                    </h6>
                    <small>Nilai vektor jumlah per alternatif dibagi Jumlah total kemudian hasilnya di buat ranking</small>
                </div>
            </div>
            <table class="table table-striped table-hover w-100" id="tbl_main{{ $i }}">
                <thead>
                    <tr>

                        <th>No</th>
                        <th>Alternatif</th>
                        <th>Jumlah</th>
                        <th>Rank</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hitung['body'] as $k => $body)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $body['nama'] }}</td>
                            <td title="{{ $body['jumlah_str'] }}" data-toggle="tooltip">{{ $body['jumlah'] }}</td>
                            <td>{{ $body['rank'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
        $resource = resource_loader(blade_path: $view);
    @endphp
    <script src="{{ $resource }}"></script>
@endsection
