<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrudRequest;
use App\Models\Crud;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CrudController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cruds = Crud::all();
        return view('crud.index', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CrudRequest $request)
    {
        try {
            $crud_add = new Crud();
            $crud_add->name = $request->name;
            $image_path = $this->handleFile($request, 'image');
            $crud_add->image = !empty($image_path) ? $image_path : "/text";
            $crud_add->manufacturer = $request->manufacturer;
            $crud_add->clocl_speed = $request->clock_speed;
            $crud_add->cores = $request->cores;
            $crud_add->threads = $request->threads;
            $crud_add->architecture = $request->architecture;
            $crud_add->release_date = $request->release_date;
            $crud_add->tdp = $request->tdp;
            $crud_add->price = $request->price;

            $crud_add->save();
            alert()->success('Creation Successful', 'Processor added successfully!');
            return redirect()->route('crud.index');
        } catch (\Throwable $th) {
            alert()->success('Creation Error', $th->getMessage());
            return redirect()->route('crud.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $crud_edit = Crud::findOrFail($id);
        return view('crud.edit', compact('crud_edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CrudRequest $request, string $id)
    {
        $crud_update = Crud::findOrFail($id);
        $crud_update->name = $request->name;
        $image_path = $this->handleFile($request, 'image');
        $crud_update->image = !empty($image_path) ? $image_path : $crud_update->image;
        $crud_update->manufacturer = $request->manufacturer;
        $crud_update->clocl_speed = $request->clock_speed;
        $crud_update->cores = $request->cores;
        $crud_update->threads = $request->threads;
        $crud_update->architecture = $request->architecture;
        $crud_update->release_date = $request->release_date;
        $crud_update->tdp = $request->tdp;
        $crud_update->price = $request->price;

        $crud_update->save();
        alert()->success('Updation Successful', 'Processor Updated successfully!');
        return redirect()->route('crud.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $crud_delete = Crud::findOrFail($id);
            $this->deleteFile($crud_delete->image);
            $crud_delete->delete();

            return response(['status' => 'success', 'message' => __('Processor Delete Successfully')]);
        } catch (\Throwable $th) {
            return response(['status' => 'error', 'message' => $th->getMessage()]);
        }
    }
}
