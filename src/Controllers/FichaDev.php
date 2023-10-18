<?php
namespace Controllers;

use Views\Renderer;

class FichaDev extends PublicController{
    
    private $viewData = [];
    public function run():void{//page_load
        $this->viewData["nombre"] = "Enoc";
        $this->viewData["correo"] = "eng_@unicah.edu";
        Renderer::render("fichadev", $this->viewData);


    }
}