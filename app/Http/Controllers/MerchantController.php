<?php

namespace App\Http\Controllers;

use App\Merchant;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class MerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Merchant = DB::table('merchants')->paginate(8);

        return view('Merchant.Merchant', compact('Merchant'));
    }

    /**
     * , compact('Merchant')
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
            ['Merchant' => 'required|max:50',],
            [
                'Merchant.required' => 'يرجى ادخال اسم التاجر ',

            ]
        );
        Merchant::create([
            'Merchant' => $request->Merchant,
            'Phone_Merchant' => $request->Phone_Merchant,
            'Address' => $request->Address,
            'Notee' => $request->Notee,
            'Creat By' => (Auth::user()->name),

        ]);
        session()->flash('Add', 'تم اضافة الاسم بنجاح ');
        return redirect('/Merchant');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function show(Merchant $merchant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function edit(Merchant $merchant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $this->validate($request, [
            'Merchant' => 'required|max:50,' . $id,
        ], [

            'Merchant' => 'يرجى ادخال اسم التاجر'
        ]);

        $merchants = Merchant::find($id);
        $merchants->update([
            'Merchant' => $request->Merchant,
            'Phone_Merchant' => $request->Phone_Merchant,
            'Address' => $request->Address,
            'Notee' => $request->Notee,
            'Creat By' => (Auth::user()->name),

        ]);
        session()->flash('edit', 'تم التعديل  بنجاح ');
        return redirect('/Merchant');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $id = $request->id;
        Merchant::find($id)->delete();
        session()->flash('delete','تم حذف الاسم بنجاح');
        return redirect('/Merchant');
    }
}
