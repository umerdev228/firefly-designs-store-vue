<?php

namespace App\Http\Controllers;

use App\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        //
    }

    public function imageDelete(Request $request) {
        Media::where('id', $request['id'])->delete();
        return response()->json(['result' => 'success', 'message' => 'Image Deleted Successfully']);
    }

    public function imageUpload(Request $request) {
        $id = Array();
//        dd(json_decode(\request()->session()->get('product-images'))[0]);


        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('storage/images/background/slider/'),$imageName);

        $media = Media::create([
            'item_type' => 'background_slider',
            'path' => '/storage/images/background/slider/' . $imageName,
        ]);
        return response()->json(['success'=>$imageName]);
    }

    public function getBackgroundImageSlider() {
        $images = Media::where('item_type', 'background_slider')->get();
        return response()->json([
            'type' => 'success',
            'images' => $images,
        ]);
    }
}
