<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CjWg extends Model
{
    //
    public function zjwg()
    {
        return $this->belongsTo(ZjWg::class);
    }
}
