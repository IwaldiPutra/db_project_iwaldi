<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_m_client extends Model
{
    use HasFactory;

    // protected $table = "tb_m_client";
    protected $primaryKey = 'client_id';

    public function client()
    {
        return $this->hasMany(tb_m_project::class);
    }

}