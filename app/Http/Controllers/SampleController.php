<?php

namespace App\Http\Controllers;

use App\Sample;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index(Request $request)
    {
        $l = Sample::all()->toArray();

        $field_list = [];
        foreach ($l as $item) {
            foreach ($item as $k => $v) {
                $field_list[$k] = true;
            }
        }

        $data = [];
        $data['field_list'] = $field_list;
        $data['item_list'] = $l;

        return view('sample_list', $data);
    }
}
