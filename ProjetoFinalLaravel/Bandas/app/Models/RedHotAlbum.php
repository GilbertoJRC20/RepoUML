<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedHotAlbum extends Model
{
    use HasFactory;

    protected $table = 'red_hot';
    protected $fillable = ['nomeAlbum', 'capaAlbum', 'dataLancamento', 'nMusicas'];
}
