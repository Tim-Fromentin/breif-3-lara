<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'note',
    ];
    public function notesByUser($id)
    {
        return Note::where('id_user', $id)->get();
    }

}
