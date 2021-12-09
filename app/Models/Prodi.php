<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_prodi', 'fakultas_id'
    ];

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }
}
