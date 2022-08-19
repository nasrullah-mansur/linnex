<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
// ================ Status =========================== //
const STATUS_ACTIVE = 'active';
const STATUS_INACTIVE = 'inactive';
const USER_ROLE = 'user';

// ================ Image Path =========================== //
const SLIDER_IMAGE = 'uploaded_file/images/slider/';
const PHONE_IMAGE = 'uploaded_file/images/phone/';
const FACILITY_IMAGE = 'uploaded_file/images/facility/';
const THEME_APPEARANCE = 'uploaded_file/images/appearance/';



// ================ Image Upload =========================== //
function ImageUpload($new_file, $path, $old_image) {
    if (!file_exists(public_path($path))) {
        mkdir(public_path($path), 0777, true);
    }
    $file_name = Str::slug($new_file->getClientOriginalName()) . '_' . rand(111111, 999999) . '.' . $new_file->getClientOriginalExtension();
    $destinationPath = public_path($path);

    if($old_image != null) {
        if (File::exists(public_path($old_image))) {
            unlink(public_path($old_image));
        }
    }
    
    $new_file->move($destinationPath, $file_name);

    return $path . $file_name;
};

function ResizeImageUpload($new_file, $path, $old_image, $w, $h) {
    if (!file_exists(public_path($path))) {
        mkdir(public_path($path), 0777, true);
    }

    $destinationPath = public_path($path);
    $file_name = Str::slug($new_file->getClientOriginalName()) . '_' . rand(111111, 999999) . '.' . $new_file->getClientOriginalExtension();

    if($old_image != null) {
        if (File::exists(public_path($old_image))) {
            unlink(public_path($old_image));
        }
    }

    Image::make($new_file)
    ->fit($w, $h)
    ->save($destinationPath . $file_name);

    return $path . $file_name;
};


function removeImage($file) {
    if($file != null) {
        if (File::exists(public_path($file))) {
            unlink(public_path($file));
        }
    }
}


?>