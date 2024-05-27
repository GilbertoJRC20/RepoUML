<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('bandas')
        ->insert([
            [
                'nome' => 'Twenty One Pilots',
                'foto' => 'https://www.gannett-cdn.com/-mm-/57e93c2cab508a13dc0572372cbae6624807c08c/c=510-0-2489-1488/local/-/media/2018/07/11/WIGroup/Milwaukee/636668965297534649-Twenty-One-Pilots---Main-Pub-2018---Brad-Heaton---Lo.jpg?width=960',
                'nAlbuns' => '7'
            ],
            [
                'nome' => 'Metallica',
                'foto' => 'https://img.redbull.com/images/c_crop,x_0,y_0,h_3335,w_2668/c_fill,w_450,h_600/q_auto:low,f_auto/redbullcom/2017/07/06/e272d4db-1dd6-4317-9063-e89fc438afff/metallica-interview',
                'nAlbuns' => '11'
            ],
            [
                'nome' => 'Red Hot Chili Peppers',
                'foto' => 'https://images.impresa.pt/expresso/2022-03-31-red-hot-chili-peppers.jpg-5b041816/3x2/mw-694',
                'nAlbuns' => '13'
            ],
            [
                'nome' => 'Linkin Park',
                'foto' => 'https://i0.wp.com/kovver.blog/wp-content/uploads/2023/07/linkin-park.png?resize=672%2C372&ssl=1',
                'nAlbuns' => '7'
            ],
            [
                'nome' => 'Parkway Drive',
                'foto' => 'https://roadiecrew.com/wp-content/uploads/Parkway-Drive-1600x1200-1-1024x768.jpg',
                'nAlbuns' => '7'
            ],
            [
                'nome' => 'Foo Fighters',
                'foto' => 'https://veja.abril.com.br/wp-content/uploads/2021/02/FOOFIGHTERS-PRESS-SONY-MUSIC-1.jpg.jpg?quality=90&strip=info&w=720&h=440&crop=1',
                'nAlbuns' => '11'
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
