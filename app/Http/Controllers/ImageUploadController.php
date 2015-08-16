<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageUploadRequest;
use App\Handler\ImageHandlerInterface;

class ImageUploadController extends Controller {
    
    public function getForm() {
        return view('ImageUpload');
    }
    
    public function postForm(ImageUploadRequest $request, ImageHandlerInterface $handler) {
        
        if ($handler->save($request->file('image'))) {
            return view('imageuploadsuccess');
        }
        
        return redirect('imageupload/form')->with('file_upload_error', 'Picture could not be uploaded');
        
    }
    
}