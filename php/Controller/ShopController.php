<?php
require "Controller.php";
class ShopController extends Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
//    public function itemsHome() {
    public function single($id) {
//        require "php/Model/ItemsModel.php";		 // charger le fichier PHP
//        $dbItem = new ItemsModel();
//        $itemHome = $dbItem -> listenerItem($id);
        $itemsHome = $this->itemsModel->listenerItem($id);		

//        if(sizeof($itemsHome) != 1)
        if(sizeof($itemHome) != 1)			
            header("Location: ".HOST.FOLDER."404");
        else {
//            $itemsHome = $dbItem->listenerItems();
			$itemsHome = $this->itemsModel->listenerItem($id);		
			require("shop-single.php");
//            echo "<script>let idItem= " . $itemsHome[0]["iditems"] . ";let typePage = 1;</script>";
			echo "<script>let idItem= " . $itemHome[0]["iditems"] . ";let typePage = 1;</script>";
        }
    }
}

?>