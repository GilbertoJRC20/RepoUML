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
        DB::table('foo_fighters')
            ->insert([
                [
                    'nomeAlbum'=>'Foo Fighters',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Foo_Fighters_(%C3%A1lbum)#/media/Ficheiro:Foo_Fighters_-_Foo_Fighters_(%C3%A1lbum).png',
                    'dataLancamento'=>'4 de Julho de 1995',
                    'nMusicas'=>'12'
                ],
                [
                    'nomeAlbum'=>'The Colour and the Shape',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/The_Colour_and_the_Shape#/media/Ficheiro:Foo_Fighters_-_The_Colour_and_the_Shape.jpg',
                    'dataLancamento'=>'20 de Maio de 1997',
                    'nMusicas'=>'13'
                ],
                [
                    'nomeAlbum'=>'There Is Nothing Left to Lose',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/There_Is_Nothing_Left_to_Lose#/media/Ficheiro:Foo_Fighters_-_There_Is_Nothing_Left_to_Lose.jpg',
                    'dataLancamento'=>'2 de Novembro de 1999',
                    'nMusicas'=>'12'
                ],
                [
                    'nomeAlbum'=>'One by One',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/One_by_One#/media/Ficheiro:Foo_Fighters_-_One_by_One.jpg',
                    'dataLancamento'=>'22 de Outubro de 2002',
                    'nMusicas'=>'11'
                ],
                [
                    'nomeAlbum'=>'In Your Honor',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/In_Your_Honor#/media/Ficheiro:Foo_Fighters_-_In_Your_Honor.jpg',
                    'dataLancamento'=>'14 de Junho de 2005',
                    'nMusicas'=>'20'
                ],
                [
                    'nomeAlbum'=>'Echoes, Silence, Patience & Grace',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Echoes,_Silence,_Patience_%26_Grace#/media/Ficheiro:Foo_Fighters_-_Echoes,_Silence,_Patience_&_Grace.jpg',
                    'dataLancamento'=>'25 de Setembro de 2007',
                    'nMusicas'=>'17'
                ],
                [
                    'nomeAlbum'=>'Wasting Light',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Wasting_Light#/media/Ficheiro:CAPA_CD_WASTING_LIGHT.jpg',
                    'dataLancamento'=>'12 de Abril de 2011',
                    'nMusicas'=>'11'
                ],
                [
                    'nomeAlbum'=>'Sonic Highways',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Sonic_Highways#/media/Ficheiro:FooFightersSonicHighways.jpg',
                    'dataLancamento'=>'10 de Novembro de 2014',
                    'nMusicas'=>'8'
                ],
                [
                    'nomeAlbum'=>'Concrete and Gold',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Concrete_and_Gold#/media/Ficheiro:Foo_Fighters_-_Concrete_and_Gold_-_2017.jpg',
                    'dataLancamento'=>'15 de Setembro de 2017',
                    'nMusicas'=>'11'
                ],
                [
                    'nomeAlbum'=>'Medicine at Midnight',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Medicine_at_Midnight#/media/Ficheiro:Foo_Fighters_-_Medicine_at_Midnight.png',
                    'dataLancamento'=>'5 de Fevereiro de 2021',
                    'nMusicas'=>'9'
                ],
                [
                    'nomeAlbum'=>'But Here We Are',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/But_Here_We_Are#/media/Ficheiro:Foo_Fighters_-_But_Here_We_Are.png',
                    'dataLancamento'=>'2 de Junho de 2023',
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
