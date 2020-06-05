<?php
    $url = isset($_GET['url'])?$_GET['url']:'/';
    require_once "./app/controllers/HomeController.php";
    require_once "./app/controllers/ProductController.php";

    switch ($url){
        case '/':
            $ctr = new HomeController();
            $ctr->home();
            break;
        case 'san-pham':
            $ctr = new ProductController();
            $ctr->product();
            break;
        case 'gio-hang':
            $ctr = new ProductController();
            $ctr->cart();
            break;
        default :
            echo "Đường dẫn không tồn tại";
            break;
    }
?>