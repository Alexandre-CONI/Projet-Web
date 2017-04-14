<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImagesRequest;


class PhotoController extends Controller
{

    public function getForm(){
        return view('photo');
    }

    public function  postForm(ImagesRequest $request){

        $image = $request->file('image');

        if ($image->isValid()){

            $chemin = config('image.path');

            $extension = $image->getClientOriginalExtension();

            do {

                $name = str_random(10) . '.' . $extension;
            } while(file_exists($chemin . '/' . $name));

            if($image->move($chemin, $name)){
                return view('photo_ok');
            }
        }
        return redirect('photo/form')->with('error','Votre image ne peut pas être envoyée');
    }
}
