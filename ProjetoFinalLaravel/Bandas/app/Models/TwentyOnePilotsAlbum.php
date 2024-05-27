<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwentyOnePilotsAlbum extends Model
{
    use HasFactory;

    protected $table = 'twenty_one_pilots';
    protected $fillable = ['nomeAlbum', 'capaAlbum', 'dataLancamento', 'nMusicas'];
}
