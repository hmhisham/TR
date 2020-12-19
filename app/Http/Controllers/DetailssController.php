<?php

namespace App\Http\Controllers;
use App\Merchant;
use App\detailss;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DetailssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $Merchantt = Merchant::all();
        $Detailss = Detailss::all();
        //  $Merchant = DB::table('detailsses')->paginate(8);

        return view('Detailss.Detailss', compact('Detailss', 'Merchantt'));


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






        detailss::create([
            'Container' => $request->Container,
            'Arrival_Date' => $request->Arrival_Date,
            'Due_date' => $request->Due_date,
            'Berth' => $request->Berth,
            'section' => $request->section,
            'Size' => $request->Size,
            'Line' => $request->Line,
            'Merchant' => $request->Merchant,
            'Name_emp' => $request->Name_emp,
            'Creat By' => (Auth::user()->name),
            'note' => $request->note,
        ]);
        session()->flash('Add', 'تم اضافة الحاوية بنجاح ');
        return redirect('/detailss');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detailss  $detailss
     * @return \Illuminate\Http\Response
     */
    public function show(detailss $detailss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detailss  $detailss
     * @return \Illuminate\Http\Response
     */
    public function edit(detailss $detailss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detailss  $detailss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $this->validate($request, [
            'Container' => 'required|max:11,' . $id,
        ], [

            'Container' => 'يرجى ادخال رقم الحاوية'
        ]);



        $detailsses = detailss::find($id);
        $detailsses->update([
            'Container' => $request->Container,
            'Arrival_Date' => $request->Arrival_Date,
            'Due_date' => $request->Due_date,
            'Berth' => $request->Berth,
            'section' => $request->section,
            'Size' => $request->Size,
            'Line' => $request->Line,
            'Merchant' => $request->Merchant,
            'Name_emp' => $request->Name_emp,
            'Creat By' => (Auth::user()->name),
            'note' => $request->note,
        ]);
        session()->flash('edit', 'تم التعديل  بنجاح ');
        return redirect('/detailss');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detailss  $detailss
     * @return \Illuminate\Http\Response
     */
    public function destroy( request $request)
    {
        $id = $request->id;
        detailss::find($id)->delete();
        session()->flash('delete','تم الحذف بنجاح');
        return redirect('/detailss');
    }


}
