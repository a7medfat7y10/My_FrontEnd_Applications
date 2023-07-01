<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use App\Photo;
use App\User;
use Illuminate\Http\Request;

class AdminItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Item::all();
        return view('admin.items.index', compact('items'));
    }


    public function activateItem($id)
    {
        //
        $item = Item::findOrFail($id);
        $item->is_approved = 1;
        $item->save();
        return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //



        $items = Item::all();
        $categories = Category::where('parent', 0)->get();
        $users = User::all();
        return view('admin.items.create', compact('categories', 'users'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        if($file = $request->file('photo_id')){
            $name = time() .  $file->getClientOriginalName();
            $file->move('images', $name);

            $photo = Photo::create(['name'=>$name]);
            $input['photo_id'] = $photo->id;

        }


        Item::create($input);

        return redirect('/admin/items');
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
        $item = Item::findOrFail($id);
        $users = User::all();
        $categories = Category::where('parent', 0)->get();
        return view('admin.items.edit', compact('item', 'users', 'categories'));
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
        $input = $request->all();
        if($file = $request->file('photo_id')){
            $name = time() .  $file->getClientOriginalName();
            $file->move('images', $name);

            $photo = Photo::create(['name'=>$name]);
            $input['photo_id'] = $photo->id;

        }


        $item = Item::findOrFail($id);
        $item->update($input);

        return redirect('/admin/items');

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
        $item = Item::findOrFail($id);
        unlink('images/'. $item->photo->name);
        $item->delete();
        return redirect('/admin/items');
    }
}
