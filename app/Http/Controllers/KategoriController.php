<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        $data = Kategori::all();
     return view('frontend.kategori',compact('data','kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'nullable',
        ]);
        $suburl = str_replace(' ', '_', $request->name);

        Kategori::create(
            [
                'name' =>$request->name,
                'suburl' =>$suburl,
            ]
        );
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function menu($kategori)
    {
        $menu = $kategori;
        $kategori = Kategori::all();
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://api.themoviedb.org/3/movie/'.$menu.'?api_key=b6358e7e4603206eb1d61170fe19901e',
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
        return view ('frontend.kategorimenu',compact('area','kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategoris)
    {
        $kategori = Kategori::all();

        return view ('frontend..edit-kategori',compact('kategori','kategoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        $this->validate($request, [
            'name' => 'nullable',
        ]);
        $kategori = Kategori::find($request->id);
        $suburl = str_replace(' ', '_', $request->name);

        $kategori->update(
            [
                'name' =>$request->name,
                'suburl' =>$suburl,
            ]
        );
        return redirect()->route('home.kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy( $kategori)
    {
        $data = Kategori::find($kategori);
        $data->delete();
        return redirect()->route('home.kategori'); 
    }
}
