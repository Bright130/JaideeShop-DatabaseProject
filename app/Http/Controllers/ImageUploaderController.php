<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Productimage;

class ImageUploaderController extends Controller
{
    /**
     * Show the application ajaxImageUpload.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload()
    {
    	return view('uploadimage');
    }

    /**
     * Show the application ajaxImageUploadPost.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadPost(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'productid' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

      if ($validator->passes()) {

        $input = $request->all();
        $input['urlimage'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('urlimage'), $input['urlimage']);

        Productimage::create($input);

        return response()->json(['success'=>'done']);
      }

      return response()->json(['error'=>$validator->errors()->all()]);
    }
}
