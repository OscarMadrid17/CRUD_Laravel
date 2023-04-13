<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo; //C.W.

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{

//C.W.
public function user(): BelongsTo
{
    return $this->belongsTo(User::class);
}
    use HasFactory;
//C.W.
    protected $fillable = [ 
        'message',
    ];
}
