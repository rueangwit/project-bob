<?php

//namespace App\Http\Controllers\news;
namespace App\Http\Controllers\news;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\modules\sqlcrud\sqlcrudModule;
use Auth;
class NewsController extends Controller
{

//  public function __construct()
  //{
  //    $chack=$this->middleware('auth');//ตรวจสอบการเข้าสู่ระบบ
  //}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $array = sqlcrudModule::show("social_accounts");
        return response()->json($array);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::guest()!="false"){

        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() //$id
    {

      $create = NewsModule::latest()->orderby('tbnid','DESC')->limit(100)->get();
      //$a=true;
      return response()->json($create);

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
