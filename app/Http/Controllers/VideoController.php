<?php

namespace App\Http\Controllers;
use App\Models\Video;
use App\Models\Genere;

use App\Http\Requests\SearchRequest;
use Illuminate\Http\Request;


class videoController extends Controller{ 

    private $videos;

    public function __construct() {
        $this->videos = new Video();
        //$this->videosGenere = new videosGenere();
        //$this->videos->get();
        $this->generes = new Genere();
    }

    //TOTS ELS VIDEOS
    public function videoList(Request $request){
        
        if ($request->type == 'pelis') {
            return view('videos/videoList')->with(['videos'=>$this->videos->byTipo('movie')->byOrderBy()->get()]);

        } else {
            return view('videos/videoList')->with(['videos'=>$this->videos->byTipo('serie')->byOrderBy()->get()]);
        }
    
        
    }

    // List pelis i videos filtrats per genere 
    public function list(){
       //Agafem tots els generes, i els posem en una variable
       $tipos = Genere::all();
       //var_dump($tipos);
       //Recorrem cada genere
       foreach($tipos as $tipo){
           //Emmagatzamem el titol en una array
           $categories_title[]=$tipo->genere;
           //Emmagatzamem cada pelicula en una array on la clau seria el genere
           $peliculas[$tipo->genere]=$this->videos->JoinGenere()->byGenere($tipo->idGenere)->get();
           //var_dump($peliculas);
        
       }

       return view('users/home2')->with('tipos',$categories_title)->with('peliculas',$peliculas)->with(['arcane'=>$this->videos->byMovie('Arcane')->get()]);

    }

    // Search video by type (serie or film) and title
    public function searchVideo(SearchRequest $request) {
        //$request->flash();
        // Agafem del input si es serie o peli
        $typeVideo = $request->input('typeVideo');
        // el titol introduit o lletra
        $searchInput = $request->input('userSearch');

        // Comencem consulta sql
        $listVideos = $this->videos->query();

        // Agafem la scope per ordenar pel tipus 
        $listVideos->byTipo($typeVideo);
        // Agafem scope pel titol introduit
        $listVideos->ByTitle($searchInput);
        
        // var_dump($listVideos->get());
        // dd($listVideos);
        return view('videos.search')->with('video', $listVideos->get());
    }

    // Afegir favorites from the session
    public function addFav(Request $request) {
        // Creem llista favoritos de la sessio iniciada 
        $favs = $request->session()->get('favorites', []);
        // Utilitzem scope per id per agafar el video en concret
        $vid = $this->videos->byId($request->input('idVideo'))->get();

        // Si el video ja esta en favorits
        if (in_array($vid, $favs)) {
            return redirect()->back()->withErrors(['error' => 'This video is already in favorites']);
        } else {
            // Sinó fem un push a l'array de la sessio 
            array_push($favs,$vid);
        }
        // Afegir l'array ja amb els videos fav dins de la sesio creada (favorites)
        $request->session()->put('favorites', $favs);
        return redirect()->back();
    }

    // Borrar una sessio
    public function removeFav(Request $request) {
        $request->session()->forget('favorites');
        return redirect()->back();
    }

    // Streaming video
    public function watchVideo(Request $request) {
        $vid = $this->videos->byId($request->id)->get();
        return  view('videos/streaming')->with('video',$vid);
    }
}
