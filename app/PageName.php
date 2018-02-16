<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageName extends Model
{
    public function pages()
    {
        return $this->hasOne(Home::class, 'id', 'id');
    }
}
