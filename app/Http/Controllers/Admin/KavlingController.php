<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kavling;
use App\Models\KavlingImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class KavlingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kavling::latest()->get();
        return view('pages.admin.kavling.index', ['items' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.kavling.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $store = $request->file('denah')->store(
            'public/denah'
        );
        $image = $request->file('denah');
        if ($store) {
            $data['denah'] = $image->hashName();
            $created = Kavling::create($data);
            if ($created) {
                $kavlingId = $created->id;
                if ($request->hasFile('location1')) {
                    $storeImage = $this->storeImage($kavlingId, $request->file('location1'));
                }
                if ($request->hasFile('location2')) {
                    $storeImage = $this->storeImage($kavlingId, $request->file('location2'));
                }
                if ($request->hasFile('location3')) {
                    $storeImage = $this->storeImage($kavlingId, $request->file('location3'));
                }
                if ($request->hasFile('location4')) {
                    $storeImage = $this->storeImage($kavlingId, $request->file('location4'));
                }
            }
        }

        return redirect()->route('kavling.index')->with('status', 'Image Has been uploaded successfully in laravel 8');
    }

    private function storeImage($id, $request)
    {
        $datas = ['kavling_id' => $id];
        $storeLocation = $request->store('public/denah');
        $location = $request->hashName();
        $datas['image'] = $location;
        if ($datas) {
            $created = KavlingImage::create($datas);
        } else {
            $created = null;
        }
        return $created;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kavling  $kavling
     * @return \Illuminate\Http\Response
     */
    public function show(Kavling $kavling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kavling  $kavling
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kavling::findOrFail($id);
        $location = KavlingImage::where('kavling_id', $id)->get();

        return view('pages.admin.kavling.edit', ['item' => $data, 'location' => $location]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kavling  $kavling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kavling $post, $id)
    {

        $update = Kavling::find($id);

        //check if image is uploaded
        if ($request->hasFile('denah')) {

            //upload new image
            $image = $request->file('denah');

            $image->storeAs('public/denah/', $image->hashName());

            //delete old image
            Storage::delete('public/denah' . $post->denah);

            //update post with new image
            $update->update([
                'denah' => $image->hashName(),
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,

            ]);

        } else {

            //update post without image
            $update->update([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,

            ]);
        }

        return redirect()->route('kavling.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kavling  $kavling
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Kavling::findOrFail($id);
        Storage::delete('public/denah' . $delete->denah);

        $delete->delete();

        return redirect()->route('kavling.index');

    }
}
