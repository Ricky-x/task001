<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;

class customersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return customers::all();
        
        // SQL equivalent: SELECT * FROM institutions;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        return customers::create($request->all());
        
        // SQL equivalent: 
        // INSERT INTO institutions 
        // VALUES ($request->name, $request->region, $request->country);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return customers::find($id);
    
        // SQL equivalent: SELECT * FROM institutions WHERE id = $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id) {
        $customers = customers::find($id);
        $result = $customers->update($request->all());
        return $result;
    
        // SQL equivalent:
        // UPDATE institutions
        // SET name = $request->name, region = $request->region, country = $request->country
        // WHERE id = $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        return customers::destroy($id);
        
        // SQL equivalent:
        // DELETE FROM institutions 
        // WHERE id = $id;
    }
}
