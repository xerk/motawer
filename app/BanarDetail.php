<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BanarDetail extends Model
{
    public function Banars()
    {
        return $this->BelongsTo("App\Banar", 'banar_id');
    }
    
}
