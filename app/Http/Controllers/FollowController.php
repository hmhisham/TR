<?php

namespace App\Http\Controllers;
use App\Merchant;
use App\follow;
use App\detailss;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detailsss = detailss::all();
        $Merchantt = Merchant::all();
        $followw = follow::all();

        return view('follow.follow', compact('followw', 'Merchantt','detailsss'));


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

        $validatedData = $request->validate(
            ['Container' => 'required|max:11',],
            ['Container.required' => 'يرجي ادخال رقم الحاوية ',  ]

        );

        follow::create([
            'Container' => $request->Container,
            'Arrival_Date' => $request->Arrival_Date,
            'Due_date' => $request->Due_date,
            'Berth' => $request->Berth,

            'Size' => $request->Size,
            'Line' => $request->Line,
            'Merchant' => $request->Merchant,
            'note_shreh'=> $request->note_shreh,
            'Name_Dri'=> $request->Name_Dri,

            'phone_Dri'=> $request->phone_Dri,
            'No_Car'=> $request->No_Car,
            'Name_stor'=> $request->Name_stor,
            'phone_stor'=> $request->phone_stor,
            'oajba'=> $request->oajba,
            'load_date'=> $request->load_date,
            'export_date'=> $request->export_date,
            'end_exp_date'=> $request->end_exp_date,
            'section'=> $request->section,
            'notee'=> $request->notee,


            'Creat By' => (Auth::user()->name),

        ]);
        session()->flash('Add', 'تم اضافة الحاوية بنجاح ');
        return redirect('/follow');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function show(follow $follow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function edit(follow $follow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, follow $follow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function destroy(follow $follow)
    {
        //
    }

    public function getproducts($id)
    {
        $detailsses = DB::table("detailsses")->where("id", $id)->pluck("Merchant", "Line","id");
        return json_encode($detailsses);
    }

}
