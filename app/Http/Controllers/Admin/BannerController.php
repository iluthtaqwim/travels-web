<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        return view('pages.admin.banner.index', [
            'list_banner' => Banner::latest()->get()
        ]);
    }

    public function create()
    {
        return view('pages.admin.banner.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $store = $request->file('image')->store(
            'public/banner'
        );
        $image = $request->file('image');
        if ($store) {
            $data['image'] = $image->hashName();
            $created = Banner::create($data);

            return redirect()->route('banner.index')->with('message', 'Banner berhasil ditambahkan');
        }

        return redirect()->route('banner.index')->with('message', 'Banner gagal ditambahkan');
    }

    public function edit($id)
    {
        $data = Banner::findOrFail($id);

        return view('pages.admin.banner.edit', ['item' => $data]);

    }

    public function update(Request $request, Banner $post, $id)
    {

        $update = Banner::find($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');

            $image->storeAs('public/banner/', $image->hashName());

            //delete old image
            Storage::delete('public/banner/' . $post->image);

            //update post with new image
            $update->update([
                'image' => $image->hashName(),
                'title' => $request->input('title'),
                'subtitle' => $request->input('subtitle'),
                'link' => $request->input('link'),
            ]);

        } else {

            //update post without image
            $update->update([
                'title' => $request->input('title'),
                'subtitle' => $request->input('subtitle'),
                'link' => $request->input('link'),
            ]);
        }
        return redirect()->route('banner.index')->with('message', 'Banner berhasil diupdate');
    }

    public function destroy($id)
    {
        $delete = Banner::findOrFail($id);
        Storage::delete('public/banner/' . $delete->image);

        $delete->delete();

        return redirect()->route('banner.index')->with('message', 'Banner berhasil dihapus');

    }

}
