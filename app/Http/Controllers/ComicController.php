<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Comic $comic)
    {
        $TypeComics = Comic::select('type')->distinct()->get()->all();
        return view("comics.create", compact("comic", "TypeComics"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     "title" => "required|min:5|max:50",
        //     "description" => "required|min:5|max:65535",
        //     "thumb" => "required|max:20",
        //     "price" => "required|max:20",
        //     "series" => "required|max:20",
        //     "sale_date" => "required|date_format: Y-m-d",
        //     "type" => "required|min:5|max:255",
        //     "artists" => "max:50",
        //     "writers" => "max:50",
        // ]);

        $data = $this->validateComic($request->all());

        // $data = $request->all();

        // $data = $request->except();
        $newComic = new Comic(); //faccio un ciclo sull'array data con la chiave e il suo valore. Per ogni ciclo new Comic ->key = valore
        foreach ($data as $key => $value) {
            // $newComic->$key = $value; entrambe le sintassi sono corrette. Cercano il valore della proprietà $key
            $newComic[$key] = $value;
        }
        $newComic->fill($data);
        // $newComic = new Comic($data);
        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->type = $data['type'];
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)

    {
        $TypeComics = Comic::select('type')->distinct()->get()->all();
        // dd($TypeComics);
        return view("comics.edit", compact("comic", "TypeComics"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)

    {

        // $data = $request->all();

        // newComic=[$data, "id"=$comic=>"id" ];

        $data = $this->validateComic($request->all());
        $comic->fill($data);

        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];
        $comic->update();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        // return view("comics.index");
        return redirect()->route("comics.index");
    }

    private function validateComic($data)
    {
        $validator = validator::make($data, [
            "title" => "required|min:5|max:50",
            "description" => "required|min:5|max:65535",
            "thumb" => "required|max:65535",
            "price" => "required|max:20",
            "series" => "required|max:20",
            "sale_date" => "required|max:255",
            "type" => "required|min:5|max:255",
            "artists" => "max:20",
            "writers" => "max:20",
        ], [
            "title.required" => "Il titolo è obbligatorio",
            "title.min" => "Il titolo deve essere almeno di :min caratteri",
            "description.required" => "Inserisci una descrizione",
            "price.required" => "Inserisci un prezzo",
            "type.required" => "Inserisci la tipologia"
        ])->validate();

        return $validator;
    }
}
