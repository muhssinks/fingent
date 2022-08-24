<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Models\Resource;
use App\Http\Requests\UrlPostRequest;
use App\Http\Requests\UrlGetRequest;


class HomeController extends Controller
{
    public function urlPost(UrlPostRequest $request)
    {
        $data = $request->all();
        if (strpos($data['given_url'], '127.0.0.1') !== false) {
            return response(json_encode(['response' => 'error', 'data' => 'Invalid Url']));
        }
        $data['output_string'] = uniqid();
        $data['output_url'] = url('/').'/'.$data['output_string'];
        Resource::create($data);
        return response(json_encode(['response' => 'success', 'data' => $data['output_url']]));
    }

    public function urlGet($key)
    {
        $obj = Resource::where(['output_string'=> $key])->first();
        if(is_null($obj)){
            return redirect('error');
        } else {
            return Redirect::to($obj->given_url);
        }
        
    }


}
