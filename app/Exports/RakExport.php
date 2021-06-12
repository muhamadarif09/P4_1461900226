<?php

namespace App\Exports;
use Illuminate\support\Facades\DB;
use App\rak_buku;
use Maatwebsite\Excel\Concerns\FromCollection;

class RakExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $rak = DB::table('rak_buku')->select('buku.judul' , 'jenis_buku.jenis' , 'buku.tahun_terbit')->join('buku' , 'rak_buku.id_buku' , '=' , 'buku.id')->join('jenis_buku' , 'rak_buku.id_jenis_buku', '=' , 'jenis_buku.id')
        ->get();
        return $rak;
    }
}
