<?php

namespace App\Http\Controllers;

use App\Http\Requests\UniversityRequest;
use App\Http\Requests\UpdateUniversityRequest;
use App\Models\University;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\HttpCache\Store;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("backend.pages.universities.index", [
            "universities"=> University::orderBy('created_at', 'desc')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $university = new University();
        return view('backend.pages.universities.form', [
            'university'=> $university
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UniversityRequest $request)
    {
        $data = $request->validated();
        $photo = $data["photo"];

        /** @var UploadedFile|null $photo */
        if ($photo !== null && !$photo->getError()) {
            $data['photo'] = $photo->store('universities', 'public');
        }

        $data['user_id'] = Auth::user()->id;
        University::create($data);
        return redirect()->route('admin.university.index')->with('success','University added successful !!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(University $university)
    {
        return view('backend.pages.universities.show', [
            'university'=> $university
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(University $university)
    {
        return view('backend.pages.universities.form', [
            'university'=> $university
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUniversityRequest $request, University $university)
    {
        $data = $request->validated();
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            if($university->photo){
                Storage::disk('public')->delete($university->photo);
            }
            $data['photo'] = $photo->store('universities', 'public');
        }

        $university->update($data);
        return redirect()->route('admin.university.index')->with('success','University changed successful !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(University $university)
    {
        if($university->photo){
            Storage::disk('public')->delete($university->photo);
        }

        $university->delete();
        return redirect()->route('admin.university.index')->with('success','University deleted successful !!!!');
    }
}
