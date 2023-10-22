<?php
namespace Controllers;
use Utilities\Site;
use Views\Renderer;

use \Dao\Productos\Producto as ProductoDao;

class HomeController extends PublicController
{
    public function run() :void
    {
        $viewData = [];
        
        $viewData["productsOnSale"] = ProductoDao::getDailyDeals();
        $viewData["productsHighlighted"] = ProductoDao::getFeaturedProducts();
        $viewData["productsNew"] = ProductoDao::getNewProducts();
        Site::addLink("public/css/cards.css");
        Renderer::render("home", $viewData);
    }
}
?>