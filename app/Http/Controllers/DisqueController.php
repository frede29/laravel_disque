<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Disques;
use Illuminate\Http\Request;

class DisqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disques= Disques::all();
        return view("admin.disques.index",['disques' => $disques]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::pluck('name','id');
        return view("admin.disques.create",['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form=$request->except('image');
        $this->validate($request,[
            'title'=>'required',
            'author'=>'required',
            'code'=>'required',
            'price'=>'required',
            'description'=>'required',
            'image'=>'image|mimes: png,jpg,jpeg,|max:10000',
        ]);

    /*   $image=$request->image;
       if($image){

           $imageName=$image->getClientOriginalExtension();
           $image->move(public_path('image',$imageName));
           $form['image']=$imageName;
        } */

      /*  if ($files = $request->file('image')) {
            $destinationPath = 'public/image/'; // upload path
            $imageName = $files->getBasename();
            $files->move($destinationPath, $imageName);
            $form['image'] = "$imageName";
        } */
        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('image'), $imageName);
        $form['image']=$imageName;

        Disques::create($form);
        return redirect()->back();
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
        $disque = Disques::findOrFail($id);

        return view('admin.disques.edit')->with('disque', $disque);
    }


    public function update(Request $request, Disques $disques)
    {

      //  $disque = Disques::find($request->id);

        $form=$request->except('image');
        $this->validate($request,[
            'title'=>'required',
            'author'=>'required',
            'code'=>'required',
            'price'=>'required',
            'description'=>'required',
            'image'=>'image|mimes: png,jpg,jpeg,|max:10000',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('image'), $imageName);
        $form['image']=$imageName;

        $disques->update($form);



      //  Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Disques::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
