@extends('layouts.frontend')

@section('content')
    @php
        $compact['pengumuman'] = true;
    @endphp
    <div class="d-flex justify-content-between">
        <div>
            @if ($rumus)
                @php
                    $params = request()->query();
                    unset($params['hitung']);
                @endphp
                <a href="{{ route('kecamatan.detail', $kecamatan->slug) . url_params_generator($params) }}" type="button"
                    class="btn btn-outline-primary px-5 mt-2">
                    Sembunyikan Perhitungan
                </a>
            @else
                @php $params['hitung'] = 1; @endphp
                <a href="{{ route('kecamatan.detail', $kecamatan->slug) . url_params_generator($params) }}" type="button"
                    class="btn btn-primary px-5 mt-2">
                    Tampilkan Perhitungan
                </a>
            @endif
        </div>
        <div>
            <a href="{{ url('') }}" type="button" class="btn btn-secondary px-5 mt-2">
                Kembali
            </a>
        </div>
    </div>

    @if ($rumus)
        <div class="card radius-10 border-start border-0 border-4 border-primary mt-4">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        @if ($metode == 'saw')
                            <h6 class="my-1 text-primary">Perhitungan dengan metode simple additive weighting (SAW)
                            </h6>
                        @elseif ($metode == 'wp')
                            <h6 class="my-1 text-primary">Perhitungan dengan metode weight product (WP)</h6>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($rumus)
        <div class="card mt-3">
            <div class="card-body">
                <div class="card-title d-md-flex flex-row justify-content-between">
                    <div>
                        <h6 class="mt-2 text-uppercase">Tabel tahapan (Kriteria)</h6>
                    </div>
                </div>
                <table class="table table-striped table-hover w-100 datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tahapans as $k => $tahapan)
                            <tr>
                                <td>{{ $k + 1 }}</td>
                                <td>{{ $tahapan->kode }}</td>
                                <td>{{ $tahapan->nama }}</td>
                                <td>{{ $tahapan->bobot }}%</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif


    @if ($metode == 'saw')
        @include('pages.admin.perhitungan.saw', $compact)
    @elseif ($metode == 'wp')
        @include('pages.admin.perhitungan.wp', $compact)
    @endif
@endsection

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset_admin('plugins/datatable/css/dataTables.bootstrap5.min.css') }}" />
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/loading/loadingoverlay.min.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    <script>
        $(document).ready(() => {
            $('.datatable').each((i, e) => {
                const table_html = $(e);
                const new_table = $(e).DataTable({
                    scrollX: true,
                    language: {
                        url: datatable_indonesia_language_url
                    },
                    columnDefs: [{
                        orderable: false,
                        targets: [0]
                    }],
                });

                new_table.on('draw.dt', function() {
                    tooltip_refresh();
                    var PageInfo = table_html.DataTable().page.info();
                    new_table.column(0, {
                        page: 'current'
                    }).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1 + PageInfo.start;
                    });
                });
            });
        })
    </script>
@endsection
