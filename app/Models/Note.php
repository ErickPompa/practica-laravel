<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
    use HasFactory;

    protected $table = "notes";

    protected $fillable = [
        "title",
        "description",
        "deadline",
        "done"
    ];

    // protected $guarded = 
    // protected $casts =
    // protected $hidden = "password";
}
