<?php

namespace App\Http\Controllers\Admin;
use App\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::latest()->get();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'availability' => 'required',
            'description' => 'required',
            'artists' => 'required',
            'writers' => 'required',
            'series' => 'required',
            'price' => 'required',
            'sale_date' => 'required',
            'volume' => 'required',
            'trim_size' => 'required',
            'page_count' => 'required',
            'rated' => 'required',
            'cover' => 'nullable | mimes:jpg,png,svg | max:300'
        ]);

        $cover = Storage::put('cover_imgs', $request->cover);
        $validatedData['cover'] = $cover;
        Comic::create($validatedData);
        $new_comic = Comic::orderBy('id', 'desc')->first();
        return redirect()->route('admin.comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    { 
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
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
        $validatedData = $request->validate([
            'title' => 'required',
            'availability' => 'required',
            'description' => 'required',
            'artists' => 'required',
            'writers' => 'required',
            'series' => 'required',
            'price' => 'required',
            'sale_date' => 'required',
            'volume' => 'required',
            'trim_size' => 'required',
            'page_count' => 'required',
            'rated' => 'required'
        ]);       
        $post->update($validatedData);
        return redirect()->route('admin.comics.index');
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
        return redirect()->route('admin.comics.index');
    }
}
