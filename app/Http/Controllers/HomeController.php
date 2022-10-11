<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategori = Kategori::all();
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://api.themoviedb.org/3/movie/popular?api_key=b6358e7e4603206eb1d61170fe19901e',
        [
            'allow_redirects' => [
                'max'             => 2,        // allow at most 10 redirects.
          
            ]
        ]);
        $response = $request->getBody()->getContents(4);
        $area = json_decode($response, true);
        foreach ($area['results'] as $key => $value){
            $val = $value['backdrop_path'];
        }
        return view('frontend.index',compact('area','kategori'));
    }
    public function detail($id)
    {
        $kategori = Kategori::all();

        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://api.themoviedb.org/3/movie/'.$id.'?api_key=b6358e7e4603206eb1d61170fe19901e',
        [
            'allow_redirects' => [
                'max'             => 2,        // allow at most 10 redirects.
          
            ]
        ]);
        $response = $request->getBody()->getContents(4);
        $area = json_decode($response, true);
      
        return view('frontend.detail',compact('area','kategori'));
    }
    
}
