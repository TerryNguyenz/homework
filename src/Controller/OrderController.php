<?php

// src/Controller/OrderController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    /**
     * @Route("/orders", name="orders")
     */
    public function index()
    {
        // Lấy danh sách các đơn đặt hàng từ cơ sở dữ liệu (chưa được triển khai ở đây)

        $orders = []; // Thay bằng dữ liệu thực tế từ cơ sở dữ liệu

        return $this->render('order/index.html.twig', [
            'orders' => $orders,
        ]);
    }

    /**
     * @Route("/order/{id}", name="order_detail")
     */
    public function orderDetail($id)
    {
        // Lấy thông tin chi tiết về đơn đặt hàng có ID là $id (chưa được triển khai ở đây)

        $order = null; // Thay bằng dữ liệu thực tế từ cơ sở dữ liệu

        return $this->render('order/detail.html.twig', [
            'order' => $order,
        ]);
    }

    /**
     * @Route("/order/create", name="order_create")
     */
    public function createOrder()
    {
        // Tạo đơn đặt hàng mới và lưu vào cơ sở dữ liệu (chưa được triển khai ở đây)

        return $this->redirectToRoute('orders');
    }
}
