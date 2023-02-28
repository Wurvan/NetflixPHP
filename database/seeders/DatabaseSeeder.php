<?php

namespace Database\Seeders;

use App\Models\ClientPayment;
use App\Models\Favorite;
use App\Models\Genere;
use App\Models\History;
use App\Models\Payment;
use App\Models\User;
use App\Models\Video;
use App\Models\VideosGenere;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        DB::table('generes')->insert([
            'genere' => 'fiction',
        ]);
        DB::table('generes')->insert([
            'genere' => 'action',
        ]);
        DB::table('generes')->insert([
            'genere' => 'cartoon',
        ]);
        DB::table('generes')->insert([
            'genere' => 'comedy',
        ]);
        DB::table('generes')->insert([
            'genere' => 'drama',
        ]);
        DB::table('generes')->insert([
            'genere' => 'educational',
        ]);
        DB::table('generes')->insert([
            'genere' => 'horror',
        ]);
        DB::table('payments')->insert([
            'paymentDate' => now(),
        ]);
        DB::table('users')->insert([
            'email' => 'blanca@gmail.com',
            'name' => 'blanca',
            'surname' => 'serna',
            'password' => 'blanca',
        ]);
        /**
         *  'hash' => 'i7999',
         * 'profileImg' => '/img/profile.jpeg',
            'tipo' => 'admins',
            'auth' => true,
            'block' => false,
            'creditCard' => 8993829,
            'cvv' => 3214,
         */
        DB::table('videos')->insert([
            'title' => 'Arcane',
            'creationDate' => now(),
            'sinopsis' => 'Set in utopian Piltover and the oppressed underground of Zaun, the story follows the origins of two iconic League champions-and the power that will tear them apart. ',
            'duration' => 20,
            'file' =>  'videos/arcanew.mp4',
            'tipo' => 'serie',
            'episode' => 1,
            'season' => 1,
            'imageFilm' => 'https://animecorner.me/wp-content/uploads/2021/11/league-arcane-final-trailer.jpg',
        ]);

        DB::table('videos')->insert([
            'title' => 'Imagine Me & You',
            'creationDate' => Carbon::parse('9/11/2005'),
            'sinopsis' => 'Imagine Me & You is a 2005 romantic comedy-drama film written and directed by Ol Parker, and starring Piper Perabo and Lena Headey with Matthew Goode, Celia Imrie, and Anthony Head. It centers on the relationship between Rachel (Perabo) and Luce (Headey), who meet on Rachels wedding day.',
            'duration' => 94,
            'file' => 'videos/arcanew.mp4',
            'tipo' => 'movie',
            'episode' => 0,
            'season' => 0,
            'imageFilm' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQhT2SNBw4fRQxWbHVsn09Ag_cfpt65XrHgAOLTpT-auFVLbd_',
        ]);
        DB::table('videos')->insert([
            'title' => 'Interstellar',
            'creationDate' => Carbon::parse('11/26/2005'),
            'sinopsis' => 'Interstellar is a 2014 epic science fiction film co-written, directed and produced by Christopher Nolan. It stars Matthew McConaughey, Anne Hathaway, Jessica Chastain, Bill Irwin, Ellen Burstyn, and Michael Caine. Set in a dystopian future where humanity is struggling to survive, the film follows a group of astronauts who travel through a wormhole near Saturn in search of a new home for mankind.',
            'duration' => 169,
            'file' => 'videos/arcanew.mp4',
            'tipo' => 'movie',
            'episode' => 0,
            'season' => 0,
            'imageFilm' => 'https://upload.wikimedia.org/wikipedia/en/b/bc/Interstellar_film_poster.jpg',
        ]);
        DB::table('videos')->insert([
            'title' => 'Big Hero 6',
            'creationDate' => Carbon::parse('10/23/2014'),
            'sinopsis' => 'Big Hero 6 is a 2014 American computer-animated superhero film produced by Walt Disney Animation Studios and released by Walt Disney Pictures. Loosely based on the Marvel comics of the same name created by Man of Action, the film is the 54th Disney animated feature film.',
            'duration' => 102,
            'file' => 'videos/arcanew.mp4',
            'tipo' => 'movie',
            'episode' => 0,
            'season' => 0,
            'imageFilm' => 'https://es.web.img3.acsta.net/pictures/14/09/01/13/43/553593.jpg',
        ]);
        DB::table('videos')->insert([
            'title' => 'Frozen',
            'creationDate' => Carbon::parse('11/19/2013'),
            'sinopsis' => 'Frozen is a 2013 American computer-animated musical fantasy film produced by Walt Disney Animation Studios and released by Walt Disney Pictures.[5] The 53rd Disney animated feature film, it is inspired by Hans Christian Andersen fairy tale The Snow Queen. The film depicts a princess who sets off on a journey alongside an iceman, his reindeer, and a snowman to find her estranged sister, whose icy powers have inadvertently trapped their kingdom in eternal winter. ',
            'duration' => 102,
            'file' => 'videos/arcanew.mp4',
            'tipo' => 'movie',
            'episode' => 0,
            'season' => 0,
            'imageFilm' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/05/Frozen_%282013_film%29_poster.jpg/220px-Frozen_%282013_film%29_poster.jpg',
        ]);
        DB::table('videos')->insert([
            'title' => 'Your Name',
            'creationDate' => Carbon::parse('7/3/2016'),
            'sinopsis' => 'Your Name (Japanese: Hepburn: Kimi no Na wa.) is a 2016 Japanese animated romantic fantasy film produced by CoMix Wave Films and released by Toho. It depicts a high school boy in Tokyo and a high school girl in the Japanese countryside who suddenly and inexplicably begin to swap bodies. ',
            'duration' => 107,
            'file' => 'videos/arcanew.mp4',
            'tipo' => 'movie',
            'episode' => 0,
            'season' => 0,
            'imageFilm' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/0b/Your_Name_poster.png/220px-Your_Name_poster.png',
        ]);
        DB::table('videos')->insert([
            'title' => 'Orange Is The New Black',
            'creationDate' => Carbon::parse('7/11/2013'),
            'sinopsis' => 'Orange Is the New Black (sometimes abbreviated to OITNB) is an American comedy-drama streaming television series created by Jenji Kohan for Netflix.The series is based on Piper Kerman memoir',
            'duration' => 40,
            'file' => 'videos/arcanew.mp4',
            'tipo' => 'serie',
            'episode' => 91,
            'season' => 7,
            'imageFilm' => 'https://kbimages1-a.akamaihd.net/4d69ea75-ff32-4360-bd31-16a24c7e817b/1200/1200/False/orange-is-the-new-black.jpg',
        ]);
        DB::table('videos')->insert([
            'title' => 'The Good Place',
            'creationDate' => Carbon::parse('9/19/2016'),
            'sinopsis' => 'The series is centered around an afterlife in which humans are sent to "the Good Place" or "the Bad Place" after death. All humans are assigned a numerical score based on the morality of their conduct in life.',
            'duration' => 22,
            'file' => 'videos/arcanew.mp4',
            'tipo' => 'serie',
            'episode' => 53,
            'season' => 4,
            'imageFilm' => 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQePbj2dzP_1S9eIG68hqcJGs1TfPvoAMRz0Yk62bsSLPC9wd2-',
        ]);
        DB::table('videos')->insert([
            'title' => 'She-ra',
            'creationDate' => Carbon::parse('11/13/2018'),
            'sinopsis' => 'She-Ra, real name Adora, is a fictional superheroine in the 1985 Filmation series She-Ra: Princess of Power and its 2018 reboot She-Ra and the Princesses of Power.[3] A series of toys under her name was produced by Mattel[4] in 1984.',
            'duration' => 22,
            'file' => 'videos/arcanew.mp4',
            'tipo' => 'serie',
            'episode' => 52,
            'season' => 4,  
            'imageFilm' => 'https://i.pinimg.com/originals/f2/41/31/f2413106ef00fda2ec92070a8e21dc02.jpg',
        ]);
        DB::table('videos')->insert([
            'title' => 'Riverdale',
            'creationDate' => Carbon::parse('1/26/2017'),
            'sinopsis' => 'Riverdale is an American teen drama television series based on the characters of Archie Comics. The series was adapted for The CW by Archie Comics chief creative officer Roberto Aguirre-Sacasa, and is produced by Warner Bros. Television and CBS Studios, in association with Berlanti Productions and Archie Comics.',
            'duration' => 46,
            'file' => 'videos/arcanew.mp4',
            'tipo' => 'serie',
            'episode' => 100,
            'season' => 6,
            'imageFilm' => 'https://static.wikia.nocookie.net/riverdale/images/7/7f/Temporada_2.jpg/revision/latest?cb=20170925001649&path-prefix=es',
        ]);
        User::factory()->count(10)->create();
        Video::factory()->count(50)->create();
        Payment::factory()->count(5)->create();
        ClientPayment::factory()->count(10)->create();
        Favorite::factory()->count(100)->create();
        History::factory()->count(300)->create();
        VideosGenere::factory()->count(30)->create();
    }
}
