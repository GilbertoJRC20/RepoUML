<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('parkway_drive')
            ->insert([
                [
                    'nomeAlbum'=>'Killing with a Smile',
                    'capaAlbum'=>'https://en.wikipedia.org/wiki/Killing_with_a_Smile#/media/File:Killingwithasmile.jpg',
                    'dataLancamento'=>'12 de Setembro de 2005',
                    'nMusicas'=>'11'
                ],
                [
                    'nomeAlbum'=>'Horizons',
                    'capaAlbum'=>'https://en.wikipedia.org/wiki/Horizons_(Parkway_Drive_album)#/media/File:Parkway_Drive_-_Horizons.jpg',
                    'dataLancamento'=>'6 de Outubro de 2007',
                    'nMusicas'=>'12'
                ],
                [
                    'nomeAlbum'=>'Deep Blue',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Deep_Blue_(%C3%A1lbum_de_Parkway_Drive)#/media/Ficheiro:Parkway_Drive_-_Deep_Blue.jpg',
                    'dataLancamento'=>'	25 de Junho de 2010',
                    'nMusicas'=>'13'
                ],
                [
                    'nomeAlbum'=>'Atlas',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Atlas_(%C3%A1lbum_de_Parkway_Drive)#/media/Ficheiro:Parkway_Drive_-_Atlas.png',
                    'dataLancamento'=>'	26 de Outubro de 2012',
                    'nMusicas'=>'12'
                ],
                [
                    'nomeAlbum'=>'Ire',
                    'capaAlbum'=>'https://en.wikipedia.org/wiki/Ire_(album)#/media/File:Parkway_Drive_2015_-_Ire.jpg',
                    'dataLancamento'=>'25 de Setembro de 2015',
                    'nMusicas'=>'11'
                ],
                [
                    'nomeAlbum'=>'Reverence',
                    'capaAlbum'=>'https://en.wikipedia.org/wiki/Reverence_(Parkway_Drive_album)#/media/File:Parkway_Drive_-_Reverence.jpg',
                    'dataLancamento'=>'4 de Maio de 2018',
                    'nMusicas'=>'10'
                ],
                [
                    'nomeAlbum'=>'Darker Still',
                    'capaAlbum'=>'https://en.wikipedia.org/wiki/Darker_Still#/media/File:ParkwayDriveDarkerStill.jpg',
                    'dataLancamento'=>'9 de Setembro de 2022',
                    'nMusicas'=>'11'
                ],

            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
