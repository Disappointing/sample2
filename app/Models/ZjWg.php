<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZjWg extends Model
{
    //
    public function cjwgs()
    {
        return $this->hasMany(CjWg::class);
    }
}
