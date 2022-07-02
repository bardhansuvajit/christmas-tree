<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\BannerInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BannerController extends Controller
{
    public function __construct(BannerInterface $BannerRepository) 
    {
        $this->BannerRepository = $BannerRepository;
    }
    public function index(Request $request) 
    {
        $data = $this->BannerRepository->listAll();
        return view('admin.banners.index', compact('data'));
    }
    public function show(Request $request, $id)
    {
        $data = $this->BannerRepository->getBannerById($id);
        return view('admin.banners.detail', compact('data'));
    }  

    public function create(){
        return view('admin.banners.create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            "heading" => "required|string|max:255",
            "primary_btn_text" => "required|string|max:255",
            "primary_btn_link" => "required|string|max:255",
            "secondary_btn_text" => "required|string|max:255",
            "secondary_btn_link" => "required|string|max:255",
            "desc" => "nullable|string",
            "img_50" => "nullable|mimes:jpg,jpeg,png,svg,gif|max:10000000",
            "img_200" => "nullable|mimes:jpg,jpeg,png,svg,gif|max:10000000",
            "img_500" => "nullable|mimes:jpg,jpeg,png,svg,gif|max:10000000",
            "img_1000" => "required|mimes:jpg,jpeg,png,svg,gif|max:10000000",
        ]);

        $params = $request->except('_token');

        $bannerStore = $this->BannerRepository->create($params);

        if ($bannerStore) {
            return redirect()->route('admin.banners.index');
        } else {
            return redirect()->route('admin.banners.create')->withInput($request->all());
        }
    }
    public function edit(Request $request, $id)
    {
        $data = $this->BannerRepository->getBannerById($id);
        return view('admin.banners.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            "heading" => "required|string|max:255",
            "primary_btn_text" => "required|string|max:255",
            "primary_btn_link" => "required|string|max:255",
            "secondary_btn_text" => "required|string|max:255",
            "secondary_btn_link" => "required|string|max:255",
            "desc" => "nullable|string",
            "img_50" => "nullable|mimes:jpg,jpeg,png,svg,gif|max:10000000",
            "img_200" => "nullable|mimes:jpg,jpeg,png,svg,gif|max:10000000",
            "img_500" => "nullable|mimes:jpg,jpeg,png,svg,gif|max:10000000",
            "img_1000" => "nullable|mimes:jpg,jpeg,png,svg,gif|max:10000000",
        ]);

        $params = $request->except('_token');

        $bannerStore = $this->BannerRepository->update($id, $params);

        if ($bannerStore) {
            return redirect()->route('admin.banners.index');
        } else {
            return redirect()->route('admin.banners.edit')->withInput($request->all());
        }
    }

    public function status(Request $request, $id)
    {
        $bannerStatus = $this->BannerRepository->toggle($id);

        if ($bannerStatus) {
            return redirect()->route('admin.banners.index');
        } else {
            return redirect()->route('admin.banners.create')->withInput($request->all());
        }
    }

    public function delete(Request $request, $id) 
    {
        $this->BannerRepository->delete($id);

        return redirect()->route('admin.banners.index');
    }
}
