<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaquiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $taquillero = DB::table('users')
        //              ->join('profiles', 'users.id', '=', 'profiles.fkuser')
        //              ->join('rols', 'profiles.fkrol', '=', 'rols.id')
        //              ->where('rols.rol', '=', 'Taquillero')
        //              ->select('users.*', 'profiles.id as profile', 'rols.rol as cargo')->get();
        //              return response()->json($taquillero);

        return Profile::with('user')->with('rol')->with(['registerTaqui', 'registerTuris'])->where('fkrol', '=', 2)->get();
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
        //
        $user = User::create($request->all());
        $user->save();

        $perfil = new Profile();
        $perfil->fkuser = $user->id;
        $perfil->fkrol = '2';
        $perfil->save();
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
        $user = User::find($id);
        $user->update($request->all());
        return response()->json($user);
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
        $data = DB::table('users')
        ->leftJoin('profiles', 'users.id', '=', 'profiles.fkuser')
        ->where('users.id', $id);

        DB::table('profiles')->where('fkuser', $id)->delete();

        $data->delete();
    }
}
