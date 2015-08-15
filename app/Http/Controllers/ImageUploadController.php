<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageUploadRequest;

class ImageUploadController extends Controller {
    
    public function getForm() {
        return view('ImageUpload');
    }
    
    public function postForm(ImageUploadRequest $request) {
        
        $image = $request->file('image');
        
        if ($image->isValid()) {
            
            $path = config('images.paths');
            $extension = $image->getClientOriginalExtension();
            
            do {
                $name = str_random(10) . '.' . $extension;
            } while (file_exists($path . '/' . $name));
            
            if ($image->move($path, $name)) {
                return view('imageuploadsuccess');
            }
            
        }
        
        return redirect('imageupload/form')->with('file_upload_error', 'Picture could not be uploaded');
        
    }
    
}