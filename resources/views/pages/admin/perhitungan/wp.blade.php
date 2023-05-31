@if ($rumus)
    <div class="card radius-10 border-start border-0 border-4 border-info mt-4">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <h6 class="my-1 text-info">{{ $kecamatan->kode }} | {{ $kecamatan->nama }}</h6>
                    <small>Jumlah Lulus: {{ $kecamatan->jml_lulus }} Orang</small>
                </div>
            </div>
        </div>
    </div>
@endif

@php
    $perhitungan = $kecamatan->wp();
    $i = 0;
    $hitung = $perhitungan[$i];
    $i++;
@endphp
@if ($rumus)
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">1. Membuat matriks keputusan </h6>
                    <small>{{ $kecamatan->kode }} | {{ $kecamatan->nama }}</small>
                </div>
            </div>
            <table class="table table-striped table-hover w-100 datatable">
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
@endif

@php
    $hitung = $perhitungan[$i];
    $i++;
@endphp
@if ($rumus)
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">2. Nilai asli kriteria di pangkat bobot kriteria </h6>
                    <small>{{ $kecamatan->kode }} | {{ $kecamatan->nama }}</small>
                </div>
            </div>
            <table class="table table-striped table-hover w-100 datatable">
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
@endif

@php
    $hitung = $perhitungan[$i + 1];
    $i++;
@endphp
<div class="card mt-3">
    <div class="card-body">
        <div class="card-title d-md-flex flex-row justify-content-between">
            <div>
                @if ($rumus)
                    <h6 class="mt-2 text-uppercase">
                        3. Nilai vektor dibagi Jumlah total
                    </h6>
                    <small>Nilai vektor jumlah per alternatif dibagi Jumlah total kemudian hasilnya di buat
                        ranking</small><br>
                    <small>{{ $kecamatan->kode }} | {{ $kecamatan->nama }}</small>
                @else
                    <h6 class="mt-2 text-uppercase">{{ $kecamatan->kode }} | {{ $kecamatan->nama }}</h6>
                    <small>Jumlah Lulus: {{ $kecamatan->jml_lulus }} Orang</small>
                @endif
            </div>
            <div>
                <span>
                    <i class="fas fa-square text-success me-2"></i>Lulus <br>
                    <i class="fas fa-square text-danger me-2"></i>Tidak Lulus
                </span>
            </div>
        </div>
        <table class="table table-striped table-hover w-100 datatable">
            <thead>
                <tr>

                    <th>No</th>
                    <th>Alternatif</th>
                    <th>Nilai</th>
                    <th>Rank</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hitung['body'] as $k => $body)
                    <tr>
                        <td>{{ $k + 1 }}</td>
                        <td>{{ $body['nama'] }}</td>
                        <td title="{{ $body['jumlah_str'] }}" data-toggle="tooltip">{{ $body['jumlah'] }}</td>
                        @php
                            $status = $k + 1 > $kecamatan->jml_lulus ? 'bg-danger' : 'bg-success';
                        @endphp
                        <td class="{{ $status }} text-white">{{ $body['rank'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
