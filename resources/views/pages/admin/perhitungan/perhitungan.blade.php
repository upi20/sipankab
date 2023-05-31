@extends('layouts.admin.master')

@section('content')
    @if ($rumus)
        @php $params['hitung'] = 0; @endphp
        <a href="{{ route(h_prefix()) . url_params_generator($params) }}" type="button"
            class="btn btn-outline-primary px-5 mt-2">
            Sembunyikan Perhitungan
        </a>
    @else
        @php
            $params = request()->query();
            unset($params['hitung']);
        @endphp
        <a href="{{ route(h_prefix()) . url_params_generator($params) }}" type="button" class="btn btn-primary px-5 mt-2">
            Tampilkan Perhitungan
        </a>
    @endif

    @if ($metode == 'wp')
        @php
            $params = request()->query();
            unset($params['metode']);
        @endphp
        <a href="{{ route(h_prefix()) . url_params_generator($params) }}" type="button"
            class="btn btn-outline-info px-5 mt-2">
            Hitung Dengan Metode SAW
        </a>
    @else
        @php
            $params = request()->query();
            $params['metode'] = 'wp';
        @endphp
        <a href="{{ route(h_prefix()) . url_params_generator($params) }}" type="button"
            class="btn btn-outline-info px-5 mt-2">
            Hitung Dengan Metode WP
        </a>
    @endif

    <div class="card radius-10 border-start mt-4">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <h6 class="my-1 text-info">Pengumuan</h6>
                    <form action="" id="MainForm">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="umumkan" id="umumkan"
                                {{ setting_get('spk.hitung.umumkan', false) ? 'checked' : '' }}>
                            <label class="form-check-label" for="umumkan">
                                Umumkan Hasil Seleksi
                            </label>
                        </div>
                        <h6 class="my-1 text-info">Metode yang digunakan</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metode" id="metode-saw" value="saw"
                                {{ setting_get('spk.hitung.metode', $metode) == 'saw' ? 'checked' : '' }}>
                            <label class="form-check-label" for="metode-saw">Simple additive weighting</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metode" id="metode-wp" value="wp"
                                {{ setting_get('spk.hitung.metode', $metode) == 'wp' ? 'checked' : '' }}>
                            <label class="form-check-label" for="metode-wp">Weight product</label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2" id="btn-save" form="MainForm">
                            <li class="fas fa-save mr-1"></li> Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card radius-10 border-start border-0 border-4 border-primary mt-4">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    @if ($metode == 'saw')
                        <h6 class="my-1 text-primary">Perhitungan dengan metode simple additive weighting (SAW)</h6>
                    @elseif ($metode == 'wp')
                        <h6 class="my-1 text-primary">Perhitungan dengan metode weight product (WP)</h6>
                    @endif
                    <span>{{ $kecamatans->count() }} Kecamatan</span>
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

    @foreach ($kecamatans as $kecamatan)
        @if ($metode == 'saw')
            @include('pages.admin.perhitungan.saw', $compact)
        @elseif ($metode == 'wp')
            @include('pages.admin.perhitungan.wp', $compact)
        @endif
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
    @php
        $resource = resource_loader(blade_path: $view);
    @endphp
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

            $('#MainForm').submit(function(e) {
                e.preventDefault();
                resetErrorAfterInput();
                var formData = new FormData(this);
                setBtnLoading('#btn-save', 'Simpan');
                $.ajax({
                    type: "POST",
                    url: "{{ route(h_prefix('pengumuman')) }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data berhasil disimpan',
                            showConfirmButton: false,
                            timer: 1500
                        })

                    },
                    error: function(data) {
                        const res = data.responseJSON ?? {};
                        errorAfterInput = [];
                        for (const property in res.errors) {
                            errorAfterInput.push(property);
                            setErrorAfterInput(res.errors[property], `#${property}`);
                        }
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: res.message ?? 'Something went wrong',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    complete: function() {
                        setBtnLoading('#btn-save',
                            '<li class="fas fa-save mr-1"></li> Simpan',
                            false);
                    }
                });
            });
        })
    </script>
@endsection
