<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;
use Validator;
use Image;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Topic::all();
        return view('admin.topic', compact('form'));
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
        $images = Topic::all()->mapWithKeys(function ($item) {
            return [$item['id'] => $item['file_name']];
        });

        $validated = $request->validate([
            'ids.*'  => 'required',
            'comment.*' => 'max:255',
            'url.*' => 'max:255'
        ]);

        foreach ($validated['ids'] as $id) {

            // アップロードされない画像はそのまま
            $path = $images[$id];

            // 画像更新
            if (isset($request->file('file')[$id])) {
                $file = $request->file('file')[$id];
                if ($file->isValid()) {
                    $resize = Image::make($file)->resize(640, 260)->encode('jpg');
                    $hash =  md5($resize->__toString());
                    $path = "images/{$hash}.jpg";

                    // public/images/{$hash}.jpg
                    $resize->save(public_path($path));

                    //$path = $request->file('file')[$id]->store('images','public');
                }
            }
            $data[] = [
                'id' => $id,
                'comment' => $validated['comment'][$id],
                'url'     => $validated['url'][$id],
                'file_name'    => $path,
            ];
        }

        Topic::upsert(
            $data,
            ['id'],
            ['comment', 'url', 'file_name']
        );

        session()->flash('settings', '更新しました');
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
    public function edit()
    {
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
    }
}
