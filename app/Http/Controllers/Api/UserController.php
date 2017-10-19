<?php
namespace App\Http\Controllers\Api;

use App\Data\Repositories\UserRepository;

class UserController extends BaseController
{
    public function getUsers(UserRepository $userRepository) {
        $data = $userRepository->findAll();
        return $this->responseSuccess($data);
    }
}