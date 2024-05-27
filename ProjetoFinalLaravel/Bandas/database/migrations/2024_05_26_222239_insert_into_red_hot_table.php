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
        DB::table('red_hot')
            ->insert([

                [
                    'nomeAlbum'=>'The Red Hot Chili Peppers',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/The_Red_Hot_Chili_Peppers#/media/Ficheiro:Red_Hot_Chili_Peppers_-_The_Red_Hot_Chili_Peppers.jpg',
                    'dataLancamento'=>'10 de Agosto de 1984',
                    'nMusicas'=>'11'
                ],
                [
                    'nomeAlbum'=>'Freaky Styley',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Freaky_Styley#/media/Ficheiro:Red_Hot_Chili_Peppers_-_Freaky_Styley.jpg',
                    'dataLancamento'=>'16 de Agosto de 1985',
                    'nMusicas'=>'14'
                ],
                [
                    'nomeAlbum'=>'The Uplift Mofo Party Plan',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/The_Uplift_Mofo_Party_Plan#/media/Ficheiro:Red_Hot_Chili_Peppers_-_The_Uplift_Mofo_Party_Plan.jpg',
                    'dataLancamento'=>'29 de Setembro de 1987',
                    'nMusicas'=>'12'
                ],
                [
                    'nomeAlbum'=>'Mothers Milk',
                    'capaAlbum'=>'https://upload.wikimedia.org/wikipedia/en/9/98/Mother%27sMilkAlbumcover.jpg',
                    'dataLancamento'=>'	16 de Agosto de 1989',
                    'nMusicas'=>'13'
                ],
                [
                    'nomeAlbum'=>'Blood Sugar Sex Magik',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Blood_Sugar_Sex_Magik#/media/Ficheiro:Red_Hot_Chili_Peppers_-_Blood_Sugar_Sex_Magik.jpg',
                    'dataLancamento'=>'24 de Setembro de 1991',
                    'nMusicas'=>'17'
                ],
                [
                    'nomeAlbum'=>'One Hot Minute',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/One_Hot_Minute#/media/Ficheiro:Red_Hot_Chili_Peppers_-_One_Hot_Minute.jpg',
                    'dataLancamento'=>'12 de Setembro de 1995',
                    'nMusicas'=>'13'
                ],
                [
                    'nomeAlbum'=>'Californication',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Californication#/media/Ficheiro:Red_Hot_Chili_Peppers_-_Californication.jpg',
                    'dataLancamento'=>'	8 de Junho de 1999',
                    'nMusicas'=>'15'
                ],
                [
                    'nomeAlbum'=>'By the Way',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/By_the_Way#/media/Ficheiro:Red_Hot_Chili_Peppers_-_By_the_Way.jpg',
                    'dataLancamento'=>'9 de Julho de 2002',
                    'nMusicas'=>'16'
                ],
                [
                    'nomeAlbum'=>'Stadium Arcadium',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Stadium_Arcadium#/media/Ficheiro:Red_Hot_Chili_Peppers_-_Stadium_Arcadium.jpg',
                    'dataLancamento'=>'9 de Maio de 2006',
                    'nMusicas'=>'28'
                ],
                [
                    'nomeAlbum'=>'Im with You',
                    'capaAlbum'=>'https://www.discogs.com/release/8906138-Red-Hot-Chili-Peppers-Im-With-You/image/SW1hZ2U6NTI2NzU5NzQ=',
                    'dataLancamento'=>'26 de Agosto de 2011',
                    'nMusicas'=>'14'
                ],
                [
                    'nomeAlbum'=>'The Getaway',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/The_Getaway_(%C3%A1lbum)#/media/Ficheiro:The_Getaway.jpg',
                    'dataLancamento'=>'17 de Junho de 2016',
                    'nMusicas'=>'13'
                ],
                [
                    'nomeAlbum'=>'Unlimited Love',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Unlimited_Love#/media/Ficheiro:Red_Hot_Chili_Peppers_Unlimited_Love_capa.png',
                    'dataLancamento'=>'1 de Abril de 2022',
                    'nMusicas'=>'17'
                ],
                [
                    'nomeAlbum'=>'Return of the Dream Canteen',
                    'capaAlbum'=>'https://pt.wikipedia.org/wiki/Return_of_the_Dream_Canteen#/media/Ficheiro:Red_Hot_Chili_Peppers_Return_of_the_Dream_Canteen_capa.png',
                    'dataLancamento'=>'	14 de Outubro de 2022',
                    'nMusicas'=>'17'
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
