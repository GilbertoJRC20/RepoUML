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
        DB::table('metallica')
            ->insert([
                [
                    'nomeAlbum'=>'Kill Em All',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Kill_%27Em_All#/media/Ficheiro:KillEmAll.jpg',
                    'dataLancamento'=>'25 de Julho de 1983',
                    'nMusicas'=>'10'
                ],
                [
                    'nomeAlbum'=>'Ride the Lightning',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Ride_the_Lightning#/media/Ficheiro:Ride_the_Lightning.jpg',
                    'dataLancamento'=>'27 de Julho de 1984',
                    'nMusicas'=>'8'
                ],
                [
                    'nomeAlbum'=>'Master of Puppets',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Master_of_Puppets#/media/Ficheiro:Master_of_Puppets.jpg',
                    'dataLancamento'=>'3 de Março de 1986',
                    'nMusicas'=>'8'
                ],
                [
                    'nomeAlbum'=>'...And Justice for All',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/...And_Justice_for_All_(%C3%A1lbum)#/media/Ficheiro:...And_Justice_for_All.jpg',
                    'dataLancamento'=>'7 de Setembro de 1988',
                    'nMusicas'=>'9'
                ],
                [
                    'nomeAlbum'=>'Metallica',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Metallica_(%C3%A1lbum)#/media/Ficheiro:Metallica_%C3%A1lbum.jpg',
                    'dataLancamento'=>'12 de Agosto de 1991',
                    'nMusicas'=>'12'
                ],
                [
                    'nomeAlbum'=>'Load',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Load#/media/Ficheiro:Load.jpg',
                    'dataLancamento'=>'4 de Junho 1996',
                    'nMusicas'=>'14'
                ],
                [
                    'nomeAlbum'=>'ReLoad',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/ReLoad#/media/Ficheiro:ReLoad.jpg',
                    'dataLancamento'=>'	18 de Novembro de 1997',
                    'nMusicas'=>'13'
                ],
                [
                    'nomeAlbum'=>'St. Anger',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/St._Anger#/media/Ficheiro:St-anger_album.jpg',
                    'dataLancamento'=>'	5 de Junho de 2003',
                    'nMusicas'=>'11'
                ],
                [
                    'nomeAlbum'=>'Death Magnetic',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Death_Magnetic#/media/Ficheiro:Death_Magnetic.jpg',
                    'dataLancamento'=>'	12 de Setembro de 2008',
                    'nMusicas'=>'10'
                ],
                [
                    'nomeAlbum'=>'Hardwired... to Self-Destruct',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Hardwired..._to_Self-Destruct#/media/Ficheiro:Metallica_-_Hardwired%E2%80%A6To_Self-Destruct_-_2016.jpg',
                    'dataLancamento'=>'18 de Novembro de 2016',
                    'nMusicas'=>'12'
                ],
                [
                    'nomeAlbum'=>'72 Seasons',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/72_Seasons#/media/Ficheiro:Metallica_-_72_Seasons.jpg',
                    'dataLancamento'=>'	14 de Abril de 2023',
                    'nMusicas'=>'12'
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
