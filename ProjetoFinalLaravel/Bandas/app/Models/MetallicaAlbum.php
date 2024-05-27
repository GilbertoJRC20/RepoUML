<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetallicaAlbum extends Model
{
    use HasFactory;

    protected $table = 'metallica';
    protected $fillable = ['nomeAlbum', 'capaAlbum', 'dataLancamento', 'nMusicas'];
}
