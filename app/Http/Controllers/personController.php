<?php

namespace App\Http\Controllers;

use App\Http\Resources\personResource;
use App\Http\Resources\personResourceCollection;
use App\Models\person;
use http\Env\Response;
use Illuminate\Http\Request;

class personController extends Controller
{


    public function show(person $person):personResource
    {
        return new personResource($person);
    }

    public function index(): personResourceCollection
    {
        return new personResourceCollection(person::paginate());
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_name'=>'required',
            'user_email'=>'required',
            'user_phone'=>'required'
        ]);
        $person=person::create($request->all());
        return new personResource($person);
    }

    public function update(person $person,Request $request):personResource
    {
        $person->update($request->all());
        return new personResource($person);
    }

    public function destroy(person $person)
    {
        $person->delete();
        return response()->json();

    }

}
