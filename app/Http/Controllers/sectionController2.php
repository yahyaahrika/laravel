<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class sectionController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date= date('Y-m-d');
        $time= date('H:i:s');
        $Array= ['time' => $time , 'date' => $date];

         // $sections =['art'=>'01.jpg','bussniss'=>'02.jpg','php'=>'03.jpg','Mysqli'=>'04.jpg','ajax'=>'05.jpg',
          //'balbal'=>'06.jpg','foot'=>'07.jpg','net'=>'08.jpg','facebook'=>'09.jpg'];

          //with('date',$date)->with('time',$time);
           //->withDate($date)->withTime($time);
        
        $sections = DB::table('sections')->get();
            echo "hhhh";
           return view('libraryViewsContainer.library')->with($Array)->withSections($sections); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
               return '<h1>create A new Libraray </h1>'; 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
               return '<h1>The Libraray is :'.$id.' </h1>'; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
              return '<h1>The Edit Libraray '.$id.'</h1>'; 

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
