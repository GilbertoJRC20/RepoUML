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
        DB::table('twenty_one_pilots')
            ->insert([
                [
                    'nomeAlbum'=>'Twenty One Pilots',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Twenty_One_Pilots_(%C3%A1lbum)#/media/Ficheiro:Twenty_One_Pilots_%C3%A1lbum.png',
                    'dataLancamento'=>'29 de Dezembro de 2009',
                    'nMusicas'=>'14'
                ],
                [
                    'nomeAlbum'=>'Regional at Best',
                    'capaAlbum'=>'https://upload.wikimedia.org/wikipedia/pt/2/2e/Twenty_One_Pilots_-_Regional_at_Best.png',
                    'dataLancamento'=>'8 de Julho de 2011',
                    'nMusicas'=>'14'
                ],
                [
                    'nomeAlbum'=>'Vessel',
                    'capaAlbum'=>'https://upload.wikimedia.org/wikipedia/pt/thumb/7/7a/Capa_de_Vessel.jpg/330px-Capa_de_Vessel.jpg',
                    'dataLancamento'=>'8 de Janeiro de 2013',
                    'nMusicas'=>'12'
                ],
                [
                    'nomeAlbum'=>'Blurryface',
                    'capaAlbum'=>'https://upload.wikimedia.org/wikipedia/pt/3/3f/Capa_de_Blurryface.png?20160114221238',
                    'dataLancamento'=>'17 de Maio de 2015',
                    'nMusicas'=>'14'
                ],
                [
                    'nomeAlbum'=>'Trench',
                    'capaAlbum'=>'https://upload.wikimedia.org/wikipedia/pt/f/f9/Capa_de_Trench.jpg',
                    'dataLancamento'=>'	5 de Outubro de 2018',
                    'nMusicas'=>'14'
                ],
                [
                    'nomeAlbum'=>'Scaled and Icy',
                    'capaAlbum'=>'https://en.wikipedia.org/wiki/Scaled_and_Icy#/media/File:Twenty_One_Pilots_-_Scaled_and_Icy.png',
                    'dataLancamento'=>'21 de Maio de 2021',
                    'nMusicas'=>'11'
                ],
                [
                    'nomeAlbum'=>'Clancy',
                    'capaAlbum'=>'https://upload.wikimedia.org/wikipedia/pt/5/5a/Twenty_One_Pilots_-_Clancy.jpeg',
                    'dataLancamento'=>'24 de Maio de 2024',
                    'nMusicas'=>'13'
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
