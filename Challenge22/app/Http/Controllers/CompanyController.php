<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Company;
use Newsletter;


class CompanyController extends Controller
{
    // public function __construct()
    // {
    //  $this->middleware(['auth','verified']);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = \DB::table('cards')->get()->toArray();
        return view('home', ["cards"=> $cards]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        $validateData = $request->validate(
            [
                     "number" => "required|numeric",
                     "company" => "required|max:25|alpha",
                     "email" => "email"
             ]);
         //modal
         $company = new Company();
         $company->email = $request->email;
         if(!Newsletter::isSubscribed($request->email)){
             Newsletter::subscribePending($request->email);
            }
         $company->number = $request->number;
         $company->company = $request->company;
         $company->save();

         return view('/companies', ['company' =>$company], $validateData);

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
