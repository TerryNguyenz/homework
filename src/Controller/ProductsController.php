<?php

// src/Controller/ProductsController.php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    /**
     * @Route("/create_product", name="create_product")
     */
    public function createProduct(Request $request): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('home'); // Chuyển hướng sau khi tạo sản phẩm
        }

        return $this->render('product/create_product.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/products", name="products")
     */
    public function index()
    {
        // Lấy danh sách các sản phẩm từ cơ sở dữ liệu (chưa được triển khai ở đây)

        $products = []; // Thay bằng dữ liệu thực tế từ cơ sở dữ liệu

        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }

    /**
     * @Route("/product/{id}", name="product_detail")
     */
    public function productDetail($id)
    {
        // Lấy thông tin chi tiết về sản phẩm có ID là $id (chưa được triển khai ở đây)

        $product = null; // Thay bằng dữ liệu thực tế từ cơ sở dữ liệu

        return $this->render('product/detail.html.twig', [
            'product' => $product,
        ]);
    }
}