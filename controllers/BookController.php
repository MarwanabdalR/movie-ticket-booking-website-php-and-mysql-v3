<?php

class BookController extends Controller
{

    function __construct()
    {
        parent::__construct();
    }
   
    public function index()
    {     
        
        $booking=$this->load_model("BookModel")->insert();
        
        require_once VIEW . "layout/header.php";
        require_once VIEW . 'bookk.php';
        require_once VIEW . "layout/footer.php";

    }
   
}

?>