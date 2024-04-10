<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Gender;

class User extends Model
{
    use SoftDeletes;
    protected $guarded = false;

    public function gender() {
        return $this->belongsTo(Gender::class);
    } 
}
