<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetRequest;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    private $pets;

    public function __construct(Pet $pet)
    {
        $this->pets = $pet;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pets = $this->pets->all();

        return response()->json($pets, 201);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PetRequest $request)
    {
        $data = $request->validated();

        if($request->hasFile('foto') && $request->file('foto')->isValid())
        {
            $foto = $request->file('foto');
            $nomeFoto = $foto->hashName();
            $foto->move(storage_path('app/public/fotos'), $nomeFoto);

            $data['foto'] = asset('storage/fotos/'.$nomeFoto);
        }

        $pet = $this->pets->create($data);

        return response()->json(['message' => 'Pet criado com sucesso', $pet], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pet = $this->pets->find($id);

        return response()->json($pet, 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pet = $this->pets->find($id);

        $pet->delete();

        return response()->json(['message' => 'Pet deletado']);
    }
}
