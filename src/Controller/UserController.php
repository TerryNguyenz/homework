<?php

// src/Controller/UserController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/users", name="users")
     */
    public function index()
    {
        // Lấy danh sách người dùng từ cơ sở dữ liệu (chưa được triển khai ở đây)

        $users = []; // Thay bằng dữ liệu thực tế từ cơ sở dữ liệu

        return $this->render('user/index.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     * @Route("/user/{id}", name="user_detail")
     */
    public function userDetail($id)
    {
        // Lấy thông tin chi tiết về người dùng có ID là $id (chưa được triển khai ở đây)

        $user = null; // Thay bằng dữ liệu thực tế từ cơ sở dữ liệu

        return $this->render('user/detail.html.twig', [
            'user' => $user,
        ]);
    }
}