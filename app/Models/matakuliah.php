<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = 'matakuliah';
    protected $fillable = ['kode_matakuliah', 'nama_matakuliah', 'sks'];

    
}
