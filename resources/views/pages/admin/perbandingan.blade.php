@extends('layouts.admin.master')

@section('content')
    <div class="card-title d-md-flex flex-row justify-content-between">
        <div>
            @if ($rumus)
                @php $params['hitung'] = 0; @endphp
                <a href="{{ route(h_prefix()) . url_params_generator($params) }}" type="button"
                    class="btn btn-primary px-5 mt-2">
                    Sembunyikan Perhitungan
                </a>
            @else
                @php $params['hitung'] = 1; @endphp
                <a href="{{ route(h_prefix()) . url_params_generator($params) }}" type="button"
                    class="btn btn-outline-primary px-5 mt-2">
                    Tampilkan Perhitungan
                </a>
            @endif
        </div>
        <div>
            <h2 class="my-1">{{ $kecamatans->count() }} Kecamatan</h2>
        </div>
    </div>


    <div class="card mt-4">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <h4 class="my-1 text-primary">Perbandingan Menggunakan Metode MSE</h4>
                    <span>Mean Square Error</span>
                </div>
            </div>
            <div>
                <table class="table table-striped table-hover w-100 datatable">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Kecamatan</th>
                            <th colspan="2" class="text-center">Deviasi</th>
                        </tr>
                        <tr>
                            <th>SAW</th>
                            <th>WP</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kecamatans ?? [] as $k => $kecamatan)
                            <tr>
                                <td>{{ $k + 1 }}</td>
                                <td>{{ $kecamatan->nama }}</td>
                                <td>{{ $kecamatan->saw_deviasi }}</td>
                                <td>{{ $kecamatan->wp_deviasi }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">Total</th>
                            <th>{{ $deviasi['saw'] }}</th>
                            <th>{{ $deviasi['wp'] }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="card radius-10 mt-4 bg-primary">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="text-white">Setelah melakukan perbandingan menggunakan metode Mean Square Error(MSE),
                                kemudian hasilnya
                                @if ($deviasi['saw'] > $deviasi['saw'])
                                    Metode <b>Simple Additive Aeighting (SAW)</b> Lebih baik dari Metode Weight Product (WP)
                                @elseif ($deviasi['wp'] > $deviasi['saw'])
                                    Metode <b>Metode Weight Product (WP)</b> Lebih baik dari Simple Additive Aeighting (SAW)
                                @else
                                    seri kedua metode tersebut sama baiknya
                                @endif
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <div class="card radius-10 border-start border-0 border-4 border-primary mt-4">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <h1 class="my-1 text-primary">Perhitungan dengan metode simple additive weighting (SAW)</h1>
                </div>
            </div>
        </div>
    </div>
    @foreach ($kecamatans as $kecamatan)
        @include('pages.admin.perhitungan.saw')
    @endforeach

    <div class="card radius-10 border-start border-0 border-4 border-primary mt-4">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <h1 class="my-1 text-primary">Perhitungan dengan metode weight product (WP)</h1>
                </div>
            </div>
        </div>
    </div>
    @foreach ($kecamatans as $kecamatan)
        @include('pages.admin.perhitungan.wp')
    @endforeach
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
