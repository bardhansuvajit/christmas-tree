<?php

namespace App\Repositories;

use App\Interfaces\BannerInterface;
use App\Models\Banner;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
// use App\Traits\UploadAble;

class BannerRepository implements BannerInterface {
    // use UploadAble;

    public function listFrontend() {
        return Banner::where('status', 1)->orderBy('position')->get();
    }
    public function listAll() 
    {
        return Banner::orderBy('position')->paginate(5);
    }
    public function getBannerById($id) 
    {
        return Banner::findOrFail($id);
    }
    public function create(array $data) 
    {
        $upload_path = "uploads/slide/";
        $collection = collect($data);
        $banners = new Banner;
        $banners->heading = $collection['heading'];
        $banners->primary_btn_text = $collection['primary_btn_text'];
        $banners->primary_btn_link = $collection['primary_btn_link'];
        $banners->secondary_btn_text = $collection['secondary_btn_text'];
        $banners->secondary_btn_link = $collection['secondary_btn_link'];
        $banners->desc = $collection['desc'];
        
        // image 50
            // $img_50 = $collection['img_50'];
            // $imageName = time().".".mt_rand().".".$img_50->getClientOriginalName();
            // $img_50->move($upload_path, $imageName);
            // $uploadedImage = $imageName;
            // $banners->img_50 = $upload_path.$uploadedImage;
        
        // image 200
            // $img_200 = $collection['img_200'];
            // $imageName = time().".".mt_rand().".".$img_200->getClientOriginalName();
            // $img_200->move($upload_path, $imageName);
            // $uploadedImage = $imageName;
            // $banners->img_200 = $upload_path.$uploadedImage;
        
        // image 500
            // $img_500 = $collection['img_500'];
            // $imageName = time().".".mt_rand().".".$img_500->getClientOriginalName();
            // $img_500->move($upload_path, $imageName);
            // $uploadedImage = $imageName;
            // $banners->img_500 = $upload_path.$uploadedImage;

        // image 1000
        $img_1000 = $collection['img_1000'];
        $imageName = time().".".mt_rand().".".$img_1000->getClientOriginalName();
        $img_1000->move($upload_path, $imageName);
        $uploadedImage = $imageName;
        $banners->img_1000 = $upload_path.$uploadedImage;
        // dd($banners);
        $banners->save();
        return $banners;
    }

    public function update($id, array $newDetails) 
    {
        // dd($newDetails);
        $upload_path = "uploads/slide/";
        $banners = Banner::findOrFail($id);
        $collection = collect($newDetails); 
        $banners->heading = $collection['heading'];
        $banners->primary_btn_text = $collection['primary_btn_text'];
        $banners->primary_btn_link = $collection['primary_btn_link'];
        $banners->secondary_btn_text = $collection['secondary_btn_text'];
        $banners->secondary_btn_link = $collection['secondary_btn_link'];
        $banners->desc = $collection['desc'];

        // if (isset($newDetails['img_50'])) {
        //     // delete old image
        //     if (Storage::exists($banners->img_50)) unlink($banners->img_50);

        //     $image = $newDetails['img_50'];
        //     $imageName = time().".".$image->getClientOriginalName();
        //     $image->move($upload_path, $imageName);
        //     $uploadedImage = $imageName;
        //     $banners->img_50 = $upload_path.$uploadedImage;
        // }
        // if (isset($newDetails['img_200'])) {
        //     // delete old image
        //     if (Storage::exists($banners->img_200)) unlink($banners->img_200);

        //     $image = $newDetails['img_200'];
        //     $imageName = time().".".$image->getClientOriginalName();
        //     $image->move($upload_path, $imageName);
        //     $uploadedImage = $imageName;
        //     $banners->img_200 = $upload_path.$uploadedImage;
        // }
        // if (isset($newDetails['img_500'])) {
        //     // delete old image
        //     if (Storage::exists($banners->img_500)) unlink($banners->img_500);

        //     $image = $newDetails['img_500'];
        //     $imageName = time().".".$image->getClientOriginalName();
        //     $image->move($upload_path, $imageName);
        //     $uploadedImage = $imageName;
        //     $banners->img_500 = $upload_path.$uploadedImage;
        // }
        if (isset($newDetails['img_1000'])) {
            // delete old image
            if (Storage::exists($banners->img_1000)) unlink($banners->img_1000);

            $image = $newDetails['img_1000'];
            $imageName = time().".".$image->getClientOriginalName();
            $image->move($upload_path, $imageName);
            $uploadedImage = $imageName;
            $banners->img_1000 = $upload_path.$uploadedImage;
        }
        // dd($banners);
        $banners->save();

        return $banners;
    }
    public function toggle($id){
        $banners = Banner::findOrFail($id);

        $status = ( $banners->status == 1 ) ? 0 : 1;
        $banners->status = $status;
        $banners->save();

        return $banners;
    }
    public function delete($id) 
    {
        Banner::destroy($id);
    }

}