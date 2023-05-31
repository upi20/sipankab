@php
    $kecamatan = $kecamatans[0]->wp();
@endphp

<div class="card mt-3">
    <div class="card-body">
        <div class="card-title d-md-flex flex-row justify-content-between">
            <div>
                <h6 class="mt-2 text-uppercase">{{ $kecamatans->count() }} Kecamatan</h6>
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
                    <th>Kecamatan</th>
                    <th>No. Pendaftaran</th>
                    <th>Calon</th>
                    <th>Nilai</th>
                    <th>Status</th>
                    <th>Rangking</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kecamatans as $kecamatan)
                    @php
                        $perhitungan = $kecamatan->wp();
                        $hitung = $perhitungan[3];
                    @endphp
                    @foreach ($hitung['body'] as $k => $body)
                        <tr>
                            <td></td>
                            <td>
                                {{ $body['kecamatan']['nama'] }}
                                ({{ $body['kecamatan']['jml_lulus'] }})
                            </td>
                            <td>{{ $body['nomor_pendaftaran'] }}</td>
                            <td>{{ $body['nama'] }}</td>
                            <td title="{{ $body['jumlah_str'] }} * 100" data-toggle="tooltip">
                                {{ number_format((float) ($body['jumlah'] * 100), 3, '.', '') }}
                            </td>
                            @php
                                $status = $k + 1 > $kecamatan->jml_lulus ? 'bg-danger' : 'bg-success';
                                $status_str = $k + 1 > $kecamatan->jml_lulus ? 'Tidak Lulus' : 'Lulus';
                            @endphp
                            <td>{{ $status_str }}</td>
                            <td class="{{ $status }} text-white">{{ $body['rank'] }}</td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</div>
