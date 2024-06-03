<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\T_food;
use App\models\lsp;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;


class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $t_foods = t_food::paginate(4);
        return view('t_food.t_food-list',compact('t_foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lsps=Lsp::all();
        return view('t_food.t_food-create',compact('lsps'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),
        [
            "name"  => "required",
            "price" => "required",
            "price_sale" => "required",
            "detail"  => "required",
            "lsp_id" =>"required",
            'image_file'=>'mimes:jpeg,jpg,png,gif|max:10000'
        ]);

        if ($validation->fails()){
            return redirect('t_foods/create')->withErrors($validation)->withInput();
        }
        $name = null;
        if($request->hasfile('image_file'))
        {
            $file = $request->file('image_file');
            $name=time().'_'.$file->getClientOriginalName();
            $destinationPath=public_path('image'); //project\public\images, //public_path(): trả về đường dẫn tới thư mục public
            $file->move($destinationPath, $name); //lưu hình ảnh vào thư mục public/images/
        }
     
        $t_foods=new t_food();
        $t_foods->name=$request->input('name');
        $t_foods->price=$request->input('price');
        $t_foods->price_sale=$request->input('price_sale');
        $t_foods->detail=$request->input('detail');
        $t_foods->lsp_id=$request->input('lsp_id');
        $t_foods->image=$name ?? '';
        $t_foods->save();
        return redirect('t_foods')->with('message','Thêm thành công');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $t_foods=t_food::find($id);
        //tương đương select* from where
        return view('t_food.t_food-show',compact('t_foods'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $t_foods=t_food::find($id);
        $lsps=Mf::all();
        return view('t_food.t_food-edit',compact('t_foods','lsps'));
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
        $validation = Validator::make($request->all(), [
        "name" => "required",
        "price" => "required",
        "price_sale" => "required",
        "detail" => "required",
        "lsp_id" => "required",
        'image_file' => 'mimes:jpeg,jpg,png,gif|max:10000000'
    ]);

    if ($validation->fails()) {
        return redirect()->back()->withErrors($validation)->withInput();
    }

    $t_foods = t_food::find($id);

    $t_foods->name = $request->input('name');
    $t_foods->price = $request->input('price');
    $t_foods->detail = $request->input('detail');
    $t_foods->lsp_id = $request->input('lsp_id');

    if ($request->hasFile('image_file')) {
        $file = $request->file('image_file');
        $name = time() . '_' . $file->getClientOriginalName();
        $destinationPath = public_path('image');
        $file->move($destinationPath, $name);
        $t_foods->image = $name;
    }

    $t_foods->save();

    return redirect('t_foods')->with('message', 'Cập nhật thông tin xe thành công');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $t_foods=t_food::find($id);
    $linkImage=public_path('image/').$t_foods->image;
    if(File::exists($linkImage)){
        File::delete($linkImage);
    }
    $t_foods->delete();
    return redirect()->back()->with('message', 'bạn đã xóa thành công !');
}
public function postSearch(Request $req){
    $search_value=$req->txtSearch;
    $t_foods_search=t_food::where('price','like','%'.$search_value)->orWhere('name','like','%'.$search_value.'%')->paginate(3);
    return view('t_food.t_food-list',compact('t_foods_search'));
    }
}
