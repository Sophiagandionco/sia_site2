<?php

//  <-- CONTROLLER - THE MIDDLE MAN

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request; // <-- handling http request in lumen
use App\Models\User; // <-- The model
use App\Traits\ApiResponser; // <-- use to standardized our code for api response

// use DB;  // <---if you're not using lumen eloquent you can use DB component in lumen


class UserController extends Controller
{
    use ApiResponser;
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
// GET

    public function all()
    {
     
    }

// GET (ID)
public function show($id)
{
   
}

// ADD
public function add(Request $request)
{
   
   
}

// UPDATE
public function up(Request $request, $id)
{
 
}

// DELETE

public function del($id)
{
   
}

    // Index

public function index()
    {
       
    }
}