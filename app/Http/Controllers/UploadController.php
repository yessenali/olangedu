<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadForm(){
        return view('index');
    }

    public function uploadSubmit(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'phone' => 'required',
            'name' => 'required',
            'photos' => 'required',
            'message' => 'required'
        ]);
        if($request->hasFile('photos')){
            $allowedfileExtension=['pdf', 'jpg', 'png', 'docx', 'txt'];
            $files = $request->file('photos');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check){
                    $users= User::create($request->all());
                    foreach($request->photos as $photo){
                        $filename = $photo->store('files');
                        UserDetails::create([
                            'user_id' => $users->id,
                            'filename' => $filename
                        ]);
                    }
                    echo  "Upload Successfully";
                }
                else{
                    echo '<div class= "alert alert-warning"><strong>
                    Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
                }
            }
        }
    }
}
