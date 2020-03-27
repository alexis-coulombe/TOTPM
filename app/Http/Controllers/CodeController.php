<?php

namespace App\Http\Controllers;


use App\Code;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CodeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            // validation
            $name = $request->input('name');
            $secretCode = $request->input('secretCode');

            /** @var Code $code */
            $code = new Code();
            $code->user_id = Auth::user()->id;
            $code->name = $name;
            $code->secretCode = $secretCode;
            $code->save();

            return $this->successJson($code->toArray(), 'Code saved successfully');
        }
    }

    public function destroy(Request $request)
    {
        if ($request->isMethod('post')) {
            $id = $request->input('id');

            Code::find($id)->delete();

            return $this->successJson(null, 'Code deleted successfully');
        }
    }

}
