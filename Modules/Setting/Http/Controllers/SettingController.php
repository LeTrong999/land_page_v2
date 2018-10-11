<?php

namespace Modules\Setting\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class SettingController extends Controller
{
    public function __construct() 
    {
        
    }


    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $data_user = DB::table('users')->where('link',$link)->select('id')->first();
        $user_id = $data_user->id;


        $data = DB::table('cates')
                        ->join('products', 'cates.id', '=', 'products.cate_id')
                        ->orderBy('cates.id')
                        ->where('cates.user_id',$user_id)
                        ->select('cates.id as cate_id','cates.name as name_cate','products.name as name_product','products.*')
                        ->get()
                        ->toArray();


        $result = array();
        foreach ($data as $item) {
            $result[$item->cate_id][] = $item;
        }
        $this->_data['result'] = $result;
        return view('setting::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('setting::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('setting::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('setting::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
