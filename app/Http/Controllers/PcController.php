<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pc;

class PcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pcs = Pc::all();

        return view('index', compact('pcs'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Pc = new Pc();

        $Pc->pc_model = $request->input('pc_model');
        $Pc->pc_windows = $request->input('pc_windows');
        $Pc->pc_generation = $request->input('pc_generation');
        $Pc->pc_graphics = $request->input('pc_graphics');
        $Pc->pc_core = $request->input('pc_core');
        $Pc->pc_hard = $request->input('pc_hard');
        $Pc->pc_optical = $request->input('pc_optical');
        $Pc->pc_display = $request->input('pc_display');
        $Pc->pc_vr = $request->input('pc_vr');
        $Pc->pc_led = $request->input('pc_led');
        $Pc->price = $request->input('price');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/image/', $filename);
            $Pc->image = $filename;
        } else {
            return $request;
            $Pc->image = '';
        }

        $Pc->save();

        return redirect('/pcs')->with('success', 'PC is successfully updated');
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
        $pc = Pc::findOrFail($id);

        return view('edit', compact('pc'));
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
        $Pc = Pc::findorFail($id);

        $Pc->pc_model = $request->input('pc_model');
        $Pc->pc_windows = $request->input('pc_windows');
        $Pc->pc_generation = $request->input('pc_generation');
        $Pc->pc_graphics = $request->input('pc_graphics');
        $Pc->pc_core = $request->input('pc_core');
        $Pc->pc_hard = $request->input('pc_hard');
        $Pc->pc_optical = $request->input('pc_optical');
        $Pc->pc_display = $request->input('pc_display');
        $Pc->pc_vr = $request->input('pc_vr');
        $Pc->pc_led = $request->input('pc_led');
        $Pc->price = $request->input('price');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/image/', $filename);
            $Pc->image = $filename;
        } else {
            return $request;
            $Pc->image = '';
        }


        $Pc->save();

        return redirect('/pcs')->with('success', 'PC is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pc = Pc::findOrFail($id);
        $pc->delete();

        return redirect('/pcs')->with('success', 'PC is successfully deleted');
    }
}
