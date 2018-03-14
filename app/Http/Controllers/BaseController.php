<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $model;

    function __construct($model) {
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = null;
        if(isset($request->search)){
            $query = ($query ? $query->where('name', 'like', '%'.$request->search.'%') : call_user_func($this->model.'::where', 'name', 'like', '%'.$request->search.'%') );
        }
        if(isset($request->sort)){
            $query = ($query ? $query->orderBy(explode(':', $request->sort)[0], explode(':', $request->sort)[1]) : call_user_func($this->model.'::orderBy', explode(':', $request->sort)[0], explode(':', $request->sort)[1])) ;
        }

        return ($query ? $query->paginate($request->itemsByPage) : call_user_func($this->model.'::paginate', $request->itemsByPage));
    }
}
