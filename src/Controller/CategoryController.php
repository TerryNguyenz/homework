<?php

// src/Controller/CategoryController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/categories", name="categories")
     */
    public function index()
    {
        // Lấy danh sách các danh mục sản phẩm từ cơ sở dữ liệu (chưa được triển khai ở đây)

        $categories = []; // Thay bằng dữ liệu thực tế từ cơ sở dữ liệu

        return $this->render('category/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/category/{id}", name="category_detail")
     */
    public function categoryDetail($id)
    {
        // Lấy thông tin chi tiết về danh mục có ID là $id (chưa được triển khai ở đây)

        $category = null; // Thay bằng dữ liệu thực tế từ cơ sở dữ liệu

        return $this->render('category/detail.html.twig', [
            'category' => $category,
        ]);
    }
}