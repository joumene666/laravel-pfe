<?php

namespace App\Http\Controllers;

use App\Models\Structer;
use App\Models\User;
use Illuminate\Http\Request;

class AdherentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adherents = User::all();

        return view('adherent.index', [
            'adherents' => $adherents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $structers = Structer::all();

        if ($structers->count() === 0){

            return view('adherent.empty');
        }
        return view('adherent.create', [
            'structers' => $structers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(([
            'firstname' => 'required',
            'lastname' => 'required',
            'profession' => 'required',
            'nationality' => 'required',
            'cin' => 'required',
            'gender' => 'required',
            'type' => 'required',
            'date_naissance' => 'required',
            'joining_date' => 'required',
            'image' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'code_structure' => 'required',
            'birth_place' => 'required',
            'password' => 'required',
            'commission' => 'required',
            'observation' => 'required',
        ]));

        $adherent = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'profession' => $request->profession,
            'nationality' => $request->nationality,
            'cin' => $request->cin,
            'gender' => $request->gender,
            'type_adherent' => $request->type,
            'birth_date' => $request->date_naissance,
            'joinning_date' => $request->joining_date,
            'image' => 'url',
            'email' => $request->email,
            'phone' => $request->phone,
            'structer_id' => $request->code_structure,
            'place_birth' => $request->birth_place,
            'password' => $request->password,
            'code_commession' => $request->commission,
            'observation' => $request->observation,
        ]);

        if ($adherent){

            return back()->with('success', 'Adherent ajoutée avec succées');
        }else{
            return back()->with('error', 'Il y aune erreur sil vous plais essayer plus tard');
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
        $adherent = User::find($id);
        return view('adherent.show', [
            'adherent' => $adherent
        ]);
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
