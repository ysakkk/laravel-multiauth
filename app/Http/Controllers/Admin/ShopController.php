<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\MasterPref;
//use App\Forms\Admin\Shop as ShopForm;

class ShopController extends Controller
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
    //public function store(Request $request)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'shop_name' => 'required|max:255',
            'postal_code' => 'required|digits:7',
            'pref_id' => 'required|numeric',
            'addr01' => 'required|max:255',
            'addr02' => 'required|max:255',
            'phone_number' => 'required|numeric|digits_between:7,13',
            'other_expense' => 'max:255',
            'payment' => 'max:255',
            'delivery_time' => 'max:255',
            'refund' => 'max:255',
            'defective' => 'max:255',
            'delivery_fee' => 'nullable|numeric|max_digits:5',
            'delivery_free_amount' => 'nullable|max_digits:5'
        ]);
        Shop::firstOrFail()->update($validated);
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $form = Shop::firstOrFail();
        //$prefs = MasterPref::all('name')->KeyBy('id');
        $prefs = MasterPref::all()->mapWithKeys(function ($item) {
            return [$item['id'] => $item['name']];
        });
        return view('admin.shop', compact('form', 'prefs'));

        /*
        $model = Shop::find(1);
       $form = $formBuilder->create('App\Forms\Admin\Shop', [
          'method' => 'POST',
          'url' => route('admin.shop.store'),
          'model' => $model,
       ]);
*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
    public function update(Request $request)
    {
        //$entity = Shop::find();
        //var_dump($entity);
        /*
        $form = $this->generateEditForm($entity);

        // formを検証して問題があればいつものあれ
        if (!$form->isValid()) {
            $this->flash_error_message();
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($form->getErrors());
        }

        // getFormValue 忖度して値を取得。Modelを更新
        $entity->fill($this->getFormValue($form));

        $entity->save();

        return redirect(route('user.edit', ['user' => $id]));
        */

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
