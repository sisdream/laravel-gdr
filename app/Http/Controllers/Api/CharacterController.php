<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;


class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::select(['id', 'name', 'description', 'strength', 'defence', 'speed', 'intelligence', 'life', 'type_id'])
        ->with(['type:id,name,image'])
        ->paginate();

        // foreach ($characters as $character) {
        //     $character->image = !empty($character->image) ? asset('/storage/' . $character->image) : null;
        // }

        return response()->json($characters);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
    //  * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = Character::select(['id', 'name', 'description', 'strength', 'defence', 'speed', 'intelligence', 'life', 'type_id'])
        ->where('id', $id)
        ->with(['type:id,name,image'])
        ->first();

        // foreach ($characters as $character) {
        //     $character->image = !empty($character->image) ? asset('/storage/' . $character->image) : null;
        // }

        return response()->json($character);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
    //  * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
    //  * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
