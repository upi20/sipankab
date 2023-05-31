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
    $perhitungan = $kecamatan->saw();
    $i = 0;
    $hitung = $perhitungan[$i];
    $i++;
    if ($rumus) {
        unset($pengumuman);
    }
@endphp
@if ($rumus)
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">1. Membuat matriks keputusan</h6>
                </div>
            </div>
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        @if (isset($pengumuman))
                            <th>Calon</th>
                        @else
                            <th>Alternatif</th>
                        @endif
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
                    <h6 class="mt-2 text-uppercase">2. Dibagi nilai tertinggi </h6>
                    <small>{{ $kecamatan->kode }} | {{ $kecamatan->nama }}</small>
                </div>
            </div>
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>

                        <th>No</th>
                        @if (isset($pengumuman))
                            <th>Calon</th>
                        @else
                            <th>Alternatif</th>
                        @endif
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
                    <h6 class="mt-2 text-uppercase">3. Dikali bobot kriteria</h6>
                    <small>{{ $kecamatan->kode }} | {{ $kecamatan->nama }}</small>
                </div>
            </div>
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>

                        <th>No</th>
                        @if (isset($pengumuman))
                            <th>Calon</th>
                        @else
                            <th>Alternatif</th>
                        @endif
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
@endif

@php
    $hitung = $perhitungan[$i];
    $i++;
    $jml_header = count($hitung['header']);
@endphp
<div class="card mt-3">
    <div class="card-body">
        <div class="card-title d-md-flex flex-row justify-content-between">
            <div>
                @if ($rumus)
                    <h6 class="mt-2 text-uppercase">4. Dijumlahkan untuk mendapatkan hasil</h6>
                    <small>Nilai dari setiap alternatif di jumlahkan kemudian hasilnya di buat ranking</small>
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
                    @if (isset($pengumuman))
                        <th>No. Pendaftaran</th>
                    @endif

                    @if (isset($pengumuman))
                        <th>Calon</th>
                    @else
                        <th>Alternatif</th>
                    @endif
                    @if ($rumus)
                        @foreach ($hitung['header'] as $header)
                            <th title="{{ $header['nama'] }}" data-toggle="tooltip">{{ $header['kode'] }}</th>
                        @endforeach
                        <th>Total</th>
                    @else
                        <th>Nilai</th>
                    @endif
                    @if (isset($pengumuman))
                        <th>Status</th>
                    @endif
                    <th>Rangking</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hitung['body'] as $k => $body)
                    <tr>
                        <td>{{ $k + 1 }}</td>
                        @if (isset($pengumuman))
                            <td>{{ $body['nomor_pendaftaran'] }}</td>
                        @endif
                        <td>{{ $body['nama'] }}</td>
                        @if ($rumus)
                            @foreach ($body['nilais'] as $nilai)
                                <td title="{{ $nilai ? $nilai['nilai_str'] : '' }}" data-toggle="tooltip">
                                    {{ $nilai ? $nilai['nilai'] : '' }}
                                </td>
                            @endforeach
                        @endif

                        @if (isset($pengumuman))
                            <td title="{{ $body['total_str'] }} * 100" data-toggle="tooltip">
                                {{ number_format((float) ($body['total'] * 100), 3, '.', '') }}
                            </td>
                        @else
                            <td title="{{ $body['total_str'] }}" data-toggle="tooltip">
                                {{ $body['total'] }}
                            </td>
                        @endif

                        @php
                            $status = $k + 1 > $kecamatan->jml_lulus ? 'bg-danger' : 'bg-success';
                            $status_str = $k + 1 > $kecamatan->jml_lulus ? 'Tidak Lulus' : 'Lulus';
                        @endphp
                        @if (isset($pengumuman))
                            <td>{{ $status_str }}</td>
                        @endif
                        <td class="{{ $status }} text-white">{{ $body['rank'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
