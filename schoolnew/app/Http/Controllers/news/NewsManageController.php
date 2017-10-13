<?php

namespace App\Http\Controllers\news;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\modules\news\NewsModule;
use Auth;
class NewsManageController extends Controller
{

  //public function __construct()
  //{
    //  $this->middleware('guest');

  //}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  if(Auth::guest()){
            return View('news.newstoday');
        //};


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //  print_r($data=$_POST);
    //  return;

          //return Redirect::to('manage_work');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
      if(Auth::guest()){
        $array = Auth::guest();
        return response()->json($array);
      }
      else
      {
        NewsModule::create([
        'tbname' =>$request->input('tbname'),
        'tbndetail' =>$request->input('tbndetail'),
        'tbnsumView'=>$request->input('tbnsumView')
      ]);
      $array = Auth::guest();
      return response()->json($array);
      //echo 'rueangwit';

      }


      //echo $name = Input::get('name_admin');
      //$data = array('name'  => "rueangwit123",'email'  => $name."@gmail.com",'password'  => "1212121212");
    //  User1::insert_tb_admin($data);
    //  return Redirect::to('user1');

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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      if(Auth::guest()){
        $array = Auth::guest();
        return response()->json($array);
      }
      else
      {
        //echo "รักนะจุ๊ฟๆ";


        $data = array(
          'tbname' =>$request->input('tbname'),
          'tbndetail' =>$request->input('tbndetail'),
          'tbnsumView'=>$request->input('tbnsumView')
        );
        $id=$request->input('tbnid');
        NewsModule::updateData($data,$id);
        $array = Auth::guest();
        return response()->json($array);

      }

      //return Redirect::to('user1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //echo "1234567890";
      echo $id;
      //return;
      NewsModule::find($id)->delete();
      return "เรียบร้อย";
    }
}
