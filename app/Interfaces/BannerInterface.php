<?php

namespace App\Interfaces;

interface BannerInterface {
    public function listFrontend();

    public function listAll();
    public function getBannerById($id);
    public function create(array $data);
    public function update($id, array $newDetails);
    public function toggle($id);
    public function delete($id);
}