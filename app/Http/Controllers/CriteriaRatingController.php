<?php

namespace App\Http\Controllers;

use App\Models\CriteriaRating;
use App\Models\CriteriaWeight;
use Illuminate\Http\Request;

class CriteriaRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $criteriaratings = CriteriaRating::leftJoin('criteriaweights', 'criteriaratings.criteria_id', '=', 'criteriaweights.id')
        ->select(
            'criteriaratings.id as id',
            'criteriaratings.criteria_id as cid',
            'criteriaratings.rating as rating',
            'criteriaratings.description as description',
            'criteriaweights.name as name')
        ->get();
        return view('perangkingan.criteriarating.index', compact('criteriaratings'))->with('i', 0);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $criteriaweight = CriteriaWeight::get();
        return view('perangkingan.criteriarating.create', compact('criteriaweight'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'criteria_id' => 'required',
            'rating' => 'required',
            'description' => 'required',
        ]);

        CriteriaRating::create($request->all());

         $message = [
            'alert-type'=>'success',
            'message'=> 'Data Berhasil Diinput'
        ];
        return redirect()->route('criteriaratings.index')->with($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CriteriaRating  $criteriaRating
     * @return \Illuminate\Http\Response
     */
    public function show(CriteriaRating $criteriaRating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CriteriaRating  $criteriaRating
     * @return \Illuminate\Http\Response
     */
    public function edit(CriteriaRating $criteriarating)
    {
        return view('perangkingan.criteriarating.edit',compact('criteriarating'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CriteriaRating  $criteriaRating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CriteriaRating $criteriarating)
    {
        $request->validate([
            'rating' => 'required',
            'description' => 'required',
        ]);

        $criteriarating->update($request->all());

        $message = [
            'alert-type'=>'success',
            'message'=> 'Data Berhasil Diinput'
        ];
        return redirect()->route('criteriaratings.index')->with($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CriteriaRating  $criteriaRating
     * @return \Illuminate\Http\Response
     */
    public function destroy(CriteriaRating $criteriarating)
    {
        $criteriarating->delete();

        $message = [
            'alert-type'=>'danger',
            'message'=> 'Data Berhasil Hapus'
        ];
        return redirect()->route('criteriaratings.index')->with($message);
    }
}
