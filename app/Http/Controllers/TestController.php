<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $imgs = Test::all();

        return view('task_image',['images' => $imgs]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uploadedFile = $request->file('file');
        request()->validate([
            'file.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
       ]);
        $resp = ['data'=>0];
        if ($request->hasfile('file')) {
            $data = [];
            foreach ($request->file('file') as $file) {
                $name = $file->getClientOriginalName();
                    $file_id = $file->store('public/images');
                $data[]= array(
                    'file_name' => $name,
                    'delete_id' => str_replace('public/images/','',$file_id)
                );

            }
            Test::insert($data);
            $resp['data'] = $data;
        }
        // if ($uploadedFile->isValid()) {
            // $request->file->store('images');
            // $uploadedFile->move(destinationPath, $fileName);
        // return response()->json(['ok'=>1],200);

        // }
        return response()->json($resp,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $delete_id)
    {
        // return $delete_id;
        $resp = ['data'=>0];
        request()->validate([
            'file.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
       ]);
        if($delete_id){
            
            if ($request->hasfile('file')) {
                $file =  $request->file('file');
                $name = $file->getClientOriginalName();
                $file_id = $file->store('public/images');
                $update_data = array(
                    'file_name' => $name,
                    'delete_id' => str_replace('public/images/','',$file_id),
                );
                Test::where('delete_id',$delete_id)->update($update_data);
                Storage::delete( 'public/images/' . $delete_id );

            $resp = $update_data;
            }
        }
        return response()->json($resp,200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $all = $request->all;
        // if single id
        if($all==0){
            $id = $request->delete_id;
            $resp = Test::where('delete_id',$id)->delete();
            Storage::delete( 'public/images/' . $id );
        }else{
        // if multiple id

            $ids = $request->delete_id;

            $resp = Test::whereIn('delete_id',$ids)->delete();
            foreach($ids as $id){
                Storage::delete( 'public/images/' . $id );
                
            }
        }
        return $resp;
    }
}
