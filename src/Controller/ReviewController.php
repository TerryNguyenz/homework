<?php

// src/Controller/ReviewController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReviewController extends AbstractController
{
    /**
     * @Route("/reviews", name="reviews")
     */
    public function index()
    {
        // Lấy danh sách các đánh giá sản phẩm từ cơ sở dữ liệu (chưa được triển khai ở đây)

        $reviews = []; // Thay bằng dữ liệu thực tế từ cơ sở dữ liệu

        return $this->render('review/index.html.twig', [
            'reviews' => $reviews,
        ]);
    }

    /**
     * @Route("/review/{id}", name="review_detail")
     */
    public function reviewDetail($id)
    {
        // Lấy thông tin chi tiết về đánh giá sản phẩm có ID là $id (chưa được triển khai ở đây)

        $review = null; // Thay bằng dữ liệu thực tế từ cơ sở dữ liệu

        return $this->render('review/detail.html.twig', [
            'review' => $review,
        ]);
    }
}