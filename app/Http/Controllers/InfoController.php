<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use Kreait\Firebase\Firestore;


class InfoController extends Controller
{
    
    public function __construct(Firestore $firestore)
    {
        $firestore = app('firebase.firestore');
        $database = $firestore->database();
        $this->firestore = $firestore;
        $this->database = $database;
        $this->tablename = 'User';
        
    }
  
    public function info()
    {
       
        return view('info');
    }

    public function exam()
    {
       
        return view('exam');
    }
  
   
    public function store(Request $req)
    {
        
        $data = $req->input();

        $dataToPush = [
            'name' => $data['name'],
            'email' => $data['name'],
            'seat' => $data['seat'],
        ];

        $firestore = app('firebase.firestore');
        $database = $firestore->database();
        $addedDocRef = $database->collection('User')->add($dataToPush);

        if ($addedDocRef) {
            return redirect('exam')->with('status','Data Added Successfully..');
                                  
                    } else {
                        return redirect('exam')->with('status','Data Not Added Successfully..');
                
                    }
    }

}
