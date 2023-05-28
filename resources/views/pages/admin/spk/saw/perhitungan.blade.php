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
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Max</th>
                        @foreach ($hitung['maxs'] as $max)
                            <th>{{ $max }}</th>
                        @endforeach
                    </tr>
                </tfoot>
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
                    <h6 class="mt-2 text-uppercase">2. Dibagi nilai tertinggi </h6>
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
                    <h6 class="mt-2 text-uppercase">3. Dikali bobot kriteria</h6>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @php
        $hitung = $perhitungan[$i];
        $i++;
        $jml_header = count($hitung['header']);
    @endphp
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">4. Dijumlahkan untuk mendapatkan hasil</h6>
                    <small>Nilai dari setiap alternatif di jumlahkan kemudian hasilnya di buat ranking</small>
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
                        <th>Total</th>
                        <th>Rangking</th>
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
                            <td title="{{ $body['total_str'] }}" data-toggle="tooltip">
                                {{ $body['total'] }}
                            </td>
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
        $resource = resource_loader(
            blade_path: $view,
            params: [
                'jml_header' => $jml_header,
            ],
        );
    @endphp
    <script src="{{ $resource }}"></script>
@endsection
