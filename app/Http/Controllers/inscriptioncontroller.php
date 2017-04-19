<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inscriptioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inscription');
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
        $request->all();

        if ($request['Pass'] == $request['Pass2']){

        $Name = $request['Nom'];
        $Surname = $request['Prenom'];
        $Birthday = $request['Birthday'];
        $Pass = $request['Pass'];
        $Email = $request['Email'];
        $Avatar = "avatar.png";
        $Rank = "utilisateur";
        $Promo = $request['Promo'];
        $Studies = $request['Studies'];

        $result = DB::insert(DB::raw("SELECT * FROM user1 WHERE Email = '$Email'"));

            if ($result == null)

            {
            DB::insert(DB::raw("INSERT INTO user1 (Name, Surname, Birthday, Pass, Email, Avatar)
            VALUES (‘$Name’,’$Surname’,’$Birthday’,’$Pass’,’$Email’,’$Avatar’)"));

            DB::update(DB::raw("update user1 SET ID_Promo=(SELECT ID_Promo FROM promo WHERE Promo=$Promo),
            ID_Rank=(SELECT ID_Rank FROM rank WHERE Rank=$Rank),
            ID_Studies=(SELECT ID_Studies FROM studies WHERE Studies=$Studies)
            WHERE Pass=’$Pass’"));
            });

            return redirect()->action('Controller@template');

            }

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
