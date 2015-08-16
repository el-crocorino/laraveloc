<?php

namespace App\Handlers;

class ImageHandler implements ImageHandlerInterface {
    
    public function save($image) {
        
        if ($image->isValid()) {
            
            $path = config('images.paths');
            $extension = $image->getClientOriginalExtension();
            
            do {
                $name = str_random(10) . '.' . $extension;
            } while (file_exists($path . '/' . $name));
            
            return $image->move($path, $name);
            
        }
        
        return false;
        
    }
    
}

