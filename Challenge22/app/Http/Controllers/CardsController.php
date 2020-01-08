<?php

namespace App\Http\Controllers;
use App\Cards;
use Illuminate\Http\Request;
use Newsletter;

class CardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = \DB::table('cards')->get();
        return view('cards', ["cards"=> $cards]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateData = $request->validate(
            [
                     "title" => "required",
                     "subtitle" => "required",
                     "image" => "required|url",
                     "description"=>"required|max:200"
             ]);

        $cards = new Cards();
        $cards->title= $request->title;
        $cards->subtitle=$request->subtitle;
        $cards->image=$request->image;
        $cards->description=$request->description;
        $cards->save();

       return view('add',$validateData);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $cards = \DB::table('cards')->get()->toArray();
        $card = Cards::where('id',$id)->first();
        return view('edit', ['card'=>$card],['cards'=>$cards]);

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
        $cards = \DB::table('cards')->get()->toArray();
        $c = Cards::where('id',$id)->first();
        if(!empty($c))
        {
            $c->image = $request->image;
            $c->title =  $request->title;
            $c->subtitle = $request->subtitle;
            $c->description = $request->description;
            $c->save();
        }
        return view('cards',['ca'=>$c],['cards'=>$cards]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cards::where('id',$id)->delete();
        return redirect('cards');
    }
    public function view()
    {
        $cards = \DB::table('cards')->get();
        return view('cards', ["cards"=> $cards]);

    }
}
