<?php

namespace Database\Seeders;

use App\Models\Tematica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TematicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tematicas = [
            [
                'nombre' => 'Frozen',
                'imagen' => 'https://www.pinknoises.it/wp-content/uploads/2019/11/frozen.jpg'
            ],
            [
                'nombre' => 'Sonic',
                'imagen' => 'https://i0.wp.com/imgs.hipertextual.com/wp-content/uploads/2019/11/hipertextual-sonic-presume-su-rediseno-nuevo-trailer-su-pelicula-2019187843.jpg'
            ],
            [
                'nombre' => 'Vaca Lola',
                'imagen' => 'https://i.ytimg.com/vi/0dkHZYeIGIk/maxresdefault.jpg'
            ],
            [
                'nombre' => 'Dragon ball Z',
                'imagen' => 'https://cdn-us.anidb.net/images/main/279370.jpg'
            ],
            [
                'nombre' => 'Los Vengadores',
                'imagen' => 'https://i.blogs.es/d1f406/avengers-endgame-poster-cropped/1366_2000.jpg'
            ],
            [
                'nombre' => 'Hulk',
                'imagen' => 'https://images.fandango.com/ImageRenderer/820/0/redesign/static/img/default_poster.png/0/images/masterrepository/fandango/40421/Hulk-1000x1000.jpg'
            ],
            [
                'nombre' => 'Super Mario Bross',
                'imagen' => 'https://assets.reedpopcdn.com/Fir9XuWXkAgXo5P.jpeg/BROK/resize/1200x1200%3E/format/jpg/quality/70/Fir9XuWXkAgXo5P.jpeg'
            ],

            [
                'nombre' => 'Granja de Zenon',
                'imagen' => 'https://www.ecured.cu/images/2/2c/La_Granja-Cancion.jpg'
            ],
            [
                'nombre' => 'Paw Patron',
                'imagen' => 'https://www.nextflicks.tv/wp-content/uploads/2023/01/watch-paw-patrol.jpg'
            ],
            [
                'nombre' => 'Campanita',
                'imagen' => 'https://i2.wp.com/www.fiestaideasclub.com/wp-content/uploads/2014/01/fondo_de_tinkerbell_wp_1_1024x768.jpg'
            ],
            [
                'nombre' => 'Unicornio',
                'imagen' => 'https://i.pinimg.com/originals/6b/b3/18/6bb3186eb482e3324985fe4a8c125be5.jpg'
            ],
            [
                'nombre' => 'Pocoyo',
                'imagen' => 'https://r3.abcimg.es/resizer/resizer.php?imagen=https%3A%2F%2Fstatic3.abc.es%2Fmedia%2Fcapitulos%2F000%2F208%2F695%2Fel-picnic-1.jpg'
            ],
            [
                'nombre' => 'Encanto',
                'imagen' => 'https://media.glamour.mx/photos/61a5602b72142b6f063c09c8/4:3/w_2400,h_1800,c_limit/encantoposter.jpg'
            ],
            [
                'nombre' => 'futbol Barcelona',
                'imagen' => 'https://static.vecteezy.com/system/resources/previews/000/064/548/original/vector-fc-barcelona.jpg'
            ],
            [
                'nombre' => 'fútbol Real Madrid',
                'imagen' => 'https://estaticos-cdn.sport.es/clip/c8717efc-31eb-48fb-b01b-bdd1a43dfde1_alta-libre-aspect-ratio_default_0.jpg'
            ],
            [
                'nombre' => 'Mickey',
                'imagen' => 'http://cdn.shopify.com/s/files/1/0607/9253/7254/collections/mickey.png'
            ],
            [
                'nombre' => 'Minnie',
                'imagen' => 'https://w7.pngwing.com/pngs/844/685/png-transparent-minnie-mouse-illustration-minnie-mouse-mickey-mouse-disneyland-daisy-duck-minnie-mouse-mouse-flower-fictional-character.png'
            ],
            [
                'nombre' => 'Winnie Pooh',
                'imagen' => 'https://cloudfront-us-east-1.images.arcpublishing.com/eluniverso/VN2WNNDUDVGO7AI565C75AM6FY.jpg'
            ],
            [
                'nombre' => 'Dora la exploradora',
                'imagen' => 'https://pics.filmaffinity.com/Dora_la_exploradora_Serie_de_TV-276191150-large.jpg'
            ],
            [
                'nombre' => 'Peter Pan',
                'imagen' => 'https://www.bruna.nl/images/active/carrousel/fullsize/9789044760613_front.jpg'
            ],
            [
                'nombre' => 'Free fire',
                'imagen' => 'https://esports.as.com/2019/05/23/otros/Ganera-Free-Fire-levanta-pasiones_1247885260_194827_1440x810.jpg'
            ],
            [
                'nombre' => 'Call of dutty',
                'imagen' => 'https://tm.ibxk.com.br/2022/01/21/21121828708167.jpg'
            ],
            [
                'nombre' => 'Moana',
                'imagen' => 'https://i.etsystatic.com/13730231/r/il/0d3da0/3669386490/il_570xN.3669386490_gx06.jpg'
            ],
            [
                'nombre' => 'Moana bebe',
                'imagen' => 'https://i.pinimg.com/originals/5b/c0/dc/5bc0dc070742f50e6e68980b4425f7a0.jpg'
            ],
            [
                'nombre' => 'Lady Bug',
                'imagen' => 'https://i.pinimg.com/736x/62/ed/8d/62ed8d830429d834c06129a8ae53681e.jpg'
            ],
            [
                'nombre' => 'Capitan América',
                'imagen' => 'https://i0.wp.com/imgs.hipertextual.com/wp-content/uploads/2019/05/hipertextual-avengers-endgame-futuro-capitan-america-2019781893-scaled.jpg'
            ]

        ];
        foreach ($tematicas as $t) {
            Tematica::create($t);
        }
    }
}
