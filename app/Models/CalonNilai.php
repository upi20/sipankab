<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Http\Request;

class CalonNilai extends Model
{
    use HasFactory, Loggable;
    protected $fillable = [
        'id',
        'tahapan_id',
        'calon_id',
        'nilai',
    ];

    protected $primaryKey = 'id';
    protected $table = Calon::tableName . '_nilai';
    const tableName = Calon::tableName . '_nilai';

    public function tahapan()
    {
        return $this->belongsTo(Tahapan::class, 'tahapan_id', 'id');
    }

    public function calon()
    {
        return $this->belongsTo(Calon::class, 'calon_id', 'id');
    }

    public static function datatable(Request $request)
    {
        $tahapans = Tahapan::orderBy('kode')->get();
        $alternatifs = Calon::with(['kecamatan', 'nilais.tahapan'])->get();

        // sort nilai berdasarkan tahapan
        $results = [];
        foreach ($alternatifs as $alternatif) {
            $new_nilais = [];
            foreach ($tahapans as $tahapan) {
                $get_nilai = null;
                foreach ($alternatif->nilais as $nilai) {
                    if ($nilai->tahapan_id == $tahapan->id) $get_nilai = $nilai;
                }
                $new_nilais[] = $get_nilai;
            }

            unset($alternatif->nilais);
            $alternatif['nilais'] = $new_nilais;
            $results[] = $alternatif;
        }

        return [
            'header' => $tahapans,
            'body' => $results
        ];
    }

    public static function getEdit(Calon $calon)
    {
        $tahapans = Tahapan::with(['nilais' => fn ($query) => $query->where('calon_id', $calon->id)])
            ->orderBy('kode')->get();
        $calon->tahapans = $tahapans;
        return $calon;
    }
}
