<?php
    $url = isset($_GET['url'])?$_GET['url']:'/';
    require_once './commons/util.php';
    require_once './vendor/autoload.php';
    require_once './commons/database-config.php';
    use App\Controllers\HomeController;
    use App\Controllers\ProductController;
    switch ($url){
        case '/':
            $ctr = new HomeController();
            $ctr->home();
            break;
        case 'san-pham':
            $ctr = new ProductController();
            $ctr->product();
            break;
        case 'add-product':
            $ctr = new ProductController();
            $ctr->addForm();
            break;
        case 'save-add-product':
            $ctr = new ProductController();
            $ctr->saveAdd();
            break;
        case 'gio-hang':
            $ctr = new ProductController();
            $ctr->cart();
            break;
        case 'remove-product':
            $ctr = new ProductController();
            $ctr->delete();
            break;
        default :
            echo "Đường dẫn không tồn tại";
            break;
    }
?>