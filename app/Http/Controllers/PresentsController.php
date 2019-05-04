<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Present;
use App\Http\Resources\PresentsCollection;

class PresentsController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $presents = Present::paginate(15);

        if($request->wantsJson())
        {
            return new PresentsCollection($presents);
        }

        return view('presents.index', ['presents' => $presents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $present = new Present;
        return view('presents.create', ["present" => $present]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $options = [
            'title' => $request->title,
            'description' => $request->description,
            'links' => $request->links
        ];

        if(Present::create($options)) {
            return redirect('/presents');
        } else {
            return view('presents.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $present = Present::find($id);
        return view('presents.show', ["present" => $present]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $present = Present::find($id);
        return view("presents.edit", ["present" => $present]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $present = Present::find($id);
        $present->title = $request->title;
        $present->description = $request->description;
        $present->links = $request->links;

        if($present->save()) {
            return redirect('/');
        } else {
            return view("presents.edit", ["present" => $present]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Present::destroy($id);
        return redirect('/presents');
    }
}
