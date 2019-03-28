<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $guarded = [''];

    public function mengajars()
    {
        return $this->hasOne('App\Matakuliah', 'id_pengajar');
    }
}
