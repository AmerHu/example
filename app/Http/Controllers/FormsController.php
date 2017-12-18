<?php

namespace App\Http\Controllers;

use App\Form;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FormsController extends Controller
{
    public function singleRow($id)
    {
        return $form = Form::where('id', $id)->first();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function printForm($id)
    {
        $form = Form::find($id);
        return view('forms.print', compact('form'));
//        $pdf = \PDF::loadView('forms.print', compact('form'));
//        return $pdf->stream('document.pdf');
    }


    public function index()
    {
        $forms = Form::all();
        return view('forms.index', compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            request(), [
            'credit_id' => 'required',
            'name' => 'required',
            'contract' => 'required',
            'berth' => 'required',
            'level' => 'required',
            'expire' => 'required',
            'percentage_in' => 'required',
            'percentage_out' => 'required',
        ]);

        Form::create([
            'name' => request('name'),
            'credit_id' => request('credit_id'),
            'contract' => request('contract'),
            'berth' => request('berth'),
            'level' => request('level'),
            'expire' => request('expire'),
            'percentage_in' => request('percentage_in'),
            'percentage_out' => request('percentage_out'),
        ]);
        return redirect('/forms');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $form = Form::find($id);
        return view('forms.show', compact('form'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function showEdit($id)
    {
        $form = $this->singleRow($id);
        return view('forms.edit', compact('form'));
    }

    public function edit($id)
    {
        Form::whereId($id)->update([
            'name' => request('name'),
            'credit_id' => request('credit_id'),
            'contract' => request('contract'),
            'berth' => request('berth'),
            'level' => request('level'),
            'expire' => request('expire'),
            'percentage_in' => request('percentage_in'),
            'percentage_out' => request('percentage_out'),
        ]);
        return redirect('/forms');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('comments')->where('post_id', $id)->delete();
        $this->singleRow($id)->delete();
        return redirect('/forms');
    }
}
