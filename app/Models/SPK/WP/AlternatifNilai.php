<?php

namespace App\Models\SPK\WP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;

class AlternatifNilai extends Model
{
    use HasFactory, Loggable;
    protected $fillable = [
        'id',
        'kriteria_id',
        'alternatif_id',
        'nilai',
    ];

    protected $primaryKey = 'id';
    protected $table = 'spk_wp_alternatif_nilai';
    const tableName = 'spk_wp_alternatif_nilai';

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria_id', 'id');
    }

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'alternatif_id', 'id');
    }

    public static function datatable(WP $spk)
    {
        $kriterias = Kriteria::orderBy('kode')->get();
        $alternatifs = Alternatif::with(['nilais.kriteria'])->where('spk_id', $spk->id)->get();

        // sort nilai berdasarkan kriteria
        $results = [];
        foreach ($alternatifs as $alternatif) {
            $new_nilais = [];
            foreach ($kriterias as $kriteria) {
                $get_nilai = null;
                foreach ($alternatif->nilais as $nilai) {
                    if ($nilai->kriteria_id == $kriteria->id) $get_nilai = $nilai;
                }
                $new_nilais[] = $get_nilai;
            }

            unset($alternatif->nilais);
            $alternatif['nilais'] = $new_nilais;
            $results[] = $alternatif;
        }

        return [
            'header' => $kriterias,
            'body' => $results
        ];
    }

    public static function getEdit(Alternatif $alternatif)
    {
        $kriterias = Kriteria::with(['nilais' => fn ($query) => $query->where('alternatif_id', $alternatif->id)])
            ->orderBy('kode')->get();
        $alternatif->kriterias = $kriterias;
        return $alternatif;
    }
}
