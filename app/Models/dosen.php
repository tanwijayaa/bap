<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dosen';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['email_dosen', 'nama_dosen'];

    
}
