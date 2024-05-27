<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkwayDriveALbum extends Model
{
    use HasFactory;

    protected $table = 'parkway_drive';
    protected $fillable = ['nomeAlbum', 'capaAlbum', 'dataLancamento', 'nMusicas'];
}
