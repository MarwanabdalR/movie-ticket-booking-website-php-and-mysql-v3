<?php

/**
 * BookController
 * هنا الشكل بتاعك لو عايز تزود او تنقص صفحة (احنا بنشتغل او او بي الموضوع مختلف)
 */
class BookController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        require_once VIEW . "layout/header.php";
        require_once VIEW . 'bookk.php';
        require_once VIEW . "layout/footer.php";
    }

    
}
