<?php

namespace Dao\Productos;

class Producto{

    public static function getAllProducts(){
        return array(
            array(
                "id"=>1,
                "name"=> "Panadol",
                "img_url"=> "https://placehold.co/300x220?text=Panadol",
                "price"=> 100,
                "bar_code"=> "00001"
            ),
            array(
                "id"=>2,
                "name"=> "Panadol Ultra",
                "img_url"=> "https://placehold.co/300x220?text=PanadolUltra",
                "price"=> 200,
                "bar_code"=> "00002"
            ),
            array(
                "id"=>3,
                "name"=> "Panadol Gripe y TOs",
                "img_url"=> "https://placehold.co/300x220?text=PanadolGripe",
                "price"=> 300,
                "bar_code"=> "00003"
            )
            );
    }
    public static function getFeaturedProducts() {
        return [
            [
              "productId" => 1,
              "productName" => "Producto 1",
              "productDescription" => "Descripción del producto 1",
              "productImgUrl" => "https://via.placeholder.com/150?text=Producto1",
              "productPrice" => 100.00
            ],
            [
              "productId" => 2,
              "productName" => "Producto 2",
              "productDescription" => "Descripción del producto 2",
              "productImgUrl" => "https://via.placeholder.com/150?text=Producto2",
              "productPrice" => 120.00
            ],
            [
              "productId" => 3,
              "productName" => "Producto 3",
              "productDescription" => "Descripción del producto 3",
              "productImgUrl" => "https://via.placeholder.com/150?text=Producto3",
              "productPrice" => 70.00
            ]
          ];
      }

    public static function getProductById($id){
        $product = array();
        $products = self::getAllProducts();
        foreach($products as $prodi){
            if($prodi["id"] === $id){
                $product = $prodi;
                break;
            }
        }
        return $product;
    }

    public static function getNewProducts() {
        return [
            [
              "productId" => 99,
              "productName" => "Producto 99",
              "productDescription" => "Descripción del producto nuevo 99",
              "productImgUrl" => "https://via.placeholder.com/150?text=Producto99",
              "productPrice" => 50.00
            ],
            [
              "productId" => 100,
              "productName" => "Producto 100",
              "productDescription" => "Descripción del producto nuevo 100",
              "productImgUrl" => "https://via.placeholder.com/150?text=Producto100",
              "productPrice" => 130.00
            ]
        ];
    }

    public static function getDailyDeals() {
        return [ 
            [
              "productId" => 73,
              "productName" => "Producto 73",
              "productDescription" => "Descripción del producto 73",
              "productImgUrl" => "https://via.placeholder.com/150?text=Producto73",
              "productPrice" => 10.00
            ],
            [
              "productId" => 15,
              "productName" => "Producto 15",
              "productDescription" => "Descripción del producto 15",
              "productImgUrl" => "https://via.placeholder.com/150?text=Producto15",
              "productPrice" => 13.00
            ],
            [
              "productId" => 10,
              "productName" => "Producto 10",
              "productDescription" => "Descripción del producto 10",
              "productImgUrl" => "https://via.placeholder.com/150?text=Producto10",
              "productPrice" => 20.00
            ]
          ];
    }


}