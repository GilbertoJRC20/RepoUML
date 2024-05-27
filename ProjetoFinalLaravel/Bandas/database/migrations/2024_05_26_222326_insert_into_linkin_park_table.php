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
        DB::table('linkin_park')
            ->insert([
                [
                    'nomeAlbum'=>'Hybrid Theory',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Hybrid_Theory#/media/Ficheiro:Linkin_Park_Hybrid_Theory.jpg',
                    'dataLancamento'=>'	24 de Outubro de 2000',
                    'nMusicas'=>'12'
                ],
                [
                    'nomeAlbum'=>'Meteora',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Meteora_(%C3%A1lbum)#/media/Ficheiro:Linkin_park-meteora_a.jpg',
                    'dataLancamento'=>'25 de Março de 2003',
                    'nMusicas'=>'13'
                ],
                [
                    'nomeAlbum'=>'Minutes to Midnight',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Minutes_to_Midnight#/media/Ficheiro:Linkin_Park_Minutes_to_Midnight.jpg',
                    'dataLancamento'=>'14 de Maio de 2007',
                    'nMusicas'=>'12'
                ],
                [
                    'nomeAlbum'=>'A Thousand Suns',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/A_Thousand_Suns#/media/Ficheiro:Linkin_Park_A_Thousand_Suns.jpg',
                    'dataLancamento'=>'14 de Setembro de 2010',
                    'nMusicas'=>'15'
                ],
                [
                    'nomeAlbum'=>'Living Things',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Living_Things_(%C3%A1lbum)#/media/Ficheiro:Linkin_Park_-_Living_Things.jpg',
                    'dataLancamento'=>'	26 de Junho de 2012',
                    'nMusicas'=>'12'
                ],
                [
                    'nomeAlbum'=>'The Hunting Party',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/The_Hunting_Party#/media/Ficheiro:Linkin_Park_Hunting_Party.jpg',
                    'dataLancamento'=>'13 de Junho de 2014',
                    'nMusicas'=>'12'
                ],
                [
                    'nomeAlbum'=>'One More Light',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/One_More_Light#/media/Ficheiro:Linkin_Park_-_One_More_Light_(capa).jpg',
                    'dataLancamento'=>'19 de Maio de 2017',
                    'nMusicas'=>'10'
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
