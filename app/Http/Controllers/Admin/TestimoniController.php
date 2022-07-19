<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use App\Models\KavlingImage;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    public function index()
    {
        $data = Testimoni::latest()->get();

        return view('pages.admin.testimoni.index', ['items' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan = Kecamatan::where('kabupaten_id', 3306)->get();
        return view('pages.admin.testimoni.create', ['kecamatan' => $kecamatan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $store = $request->file('photo')->store(
            'public/testimoni'
        );
        $image = $request->file('photo');
        if ($store) {
            $data['photo'] = $image->hashName();
            $created = Testimoni::create($data);
            if ($created) {
                return redirect()->route('testimoni.index')->with('status', 'Image Has been uploaded successfully');
            }else{
                return redirect()->route('testimoni.index')->with('status', 'Image upload was failed');
            }
        }


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
        $data = Testimoni::findOrFail($id);
        $kecamatan = Kecamatan::where('kabupaten_id', 3306)->get();

        return view('pages.admin.testimoni.edit', ['item' => $data, 'kecamatan' => $kecamatan]);

    }

    public function desa(Request $request)
    {
        $id = $request->input('id');
        $desa = Desa::where('kecamatan_id', $id)->get();
        $option = '';
        foreach ($desa as $key => $value) {
            $option .= '<option value="' . $value->id . '">' . $value->nama . '</option>';
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kavling  $kavling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimoni $post, $id)
    {

        $update = Testimoni::find($id);

        //check if image is uploaded
        if ($request->hasFile('photo')) {

            //upload new image
            $image = $request->file('photo');

            $image->storeAs('public/testimoni/', $image->hashName());

            //delete old image
            Storage::delete('public/testimoni/' . $post->photo);

            //update post with new image
            $update->update([
                'photo' => $image->hashName(),
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'address' => $request->input('address')
            ]);

        } else {

            //update post without image
            $update->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'address' => $request->input('address')
            ]);
        }

        return redirect()->route('testimoni.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kavling  $kavling
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Testimoni::findOrFail($id);
        Storage::delete('public/testimoni/' . $delete->denah);

        $delete->delete();

        return redirect()->route('testimoni.index');

    }
}
