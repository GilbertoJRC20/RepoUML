<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkinParkAlbum extends Model
{
    use HasFactory;

    protected $table = 'linkin_park';
    protected $fillable = ['nomeAlbum', 'capaAlbum', 'dataLancamento', 'nMusicas'];
}
