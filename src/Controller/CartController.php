<?php

// src/Controller/CartController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="cart")
     */
    public function index()
    {
        // Lấy giỏ hàng của người dùng từ cơ sở dữ liệu (chưa được triển khai ở đây)

        $cartItems = []; // Thay bằng dữ liệu thực tế từ cơ sở dữ liệu

        return $this->render('cart/index.html.twig', [
            'cartItems' => $cartItems,
        ]);
    }

    /**
     * @Route("/cart/add/{productId}", name="cart_add")
     */
    public function addToCart($productId)
    {
        // Thêm sản phẩm với ID là $productId vào giỏ hàng của người dùng (chưa được triển khai ở đây)

        return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/cart/remove/{itemId}", name="cart_remove")
     */
    public function removeFromCart($itemId)
    {
        // Xóa sản phẩm với ID là $itemId khỏi giỏ hàng của người dùng (chưa được triển khai ở đây)

        return $this->redirectToRoute('cart');
    }
}