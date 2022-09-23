<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCategory;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('name', 'ASC')->paginate();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateCategory $request)
    {
        
        $data = $request->all();
        //eturn $request->file('photo');
        
        $data['url'] = Str::slug($request->name);

        if ($request->photo) {
            $data['photo'] = $request->photo->store('categories');
            
            $nombre = Str::random(20) . $request->file('photo')->getClientOriginalName();
            
            $ruta = storage_path() . '\app\public\categories/' . $nombre;
            
            Image::make($request->file('photo'))
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($ruta);
            // $image = $request->file('photo');
            // $input['imagename'] = time().'.'.$image->extension();

            // $destinationPath = public_path('thumbs');
            // $img = Image::make($image->path());
            // $data['thumb'] = $img->resize(300, 200, function ($constraint) {
            //      $constraint->aspectRatio();
            //  })->save($destinationPath.'//'.$input['imagename']);   

        }

        Category::create($data);

        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
