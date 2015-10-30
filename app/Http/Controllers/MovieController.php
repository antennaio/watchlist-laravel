<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Movie::all();
    }

    /**
     * Store a new resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $movie = new Movie;
        $movie->title = $request->get('title');
        $movie->watched = $request->get('watched', false);
        $movie->save();

        return $movie;
    }

    /**
     * Update 'watched' state of the resource.
     *
     * @param  integer  $id
     * @param  Request  $request
     * @return Response
     */
    public function watched($id, Request $request)
    {
        $movie = Movie::whereId($id)->first();
        $movie->watched = ($request->get('watched') == 'true') ? true : false;
        $movie->save();

        return $movie;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);

        $movie->delete();

        return $movie;
    }
}
