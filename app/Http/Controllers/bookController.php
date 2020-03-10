<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBook;
use App\User;

class bookController extends Controller
{   

    private $objUser;
    private $objBook;
    
    public function __construct()
    {

        $this->objUser = new User();
        $this->objBook = new ModelBook();

    }

    public function index()
    {   
        //NOT WORKINGF -----------------------8*****************
        //dd($this->objBook->all());
        //return view('index');

        $book = $this->objBook->all();

        return view('index',compact('book'));

        dd($this->objUser->all());

    }

    public function create()
    {



    }

    public function show($id)
    {

        echo $id;

    }



}
