<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="<?= getClientUrl('save-add-product') ?>" method="post" enctype="multipart/form-data">
    <div class="div">
        <label for="">Tên sản phẩm</label>
        <input type="text" name="name" id="">
    </div>
    <div class="div">
        <label for="">Danh mục</label>
        <select name="cate_id" id="">
            <?php foreach ($cates as $ca): ?>
                <option value="<?= $ca->id ?>">
                    <?= $ca->cate_name ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="div">
        <label for="">Giá</label>
        <input type="mumber" name="price" id="">
    </div>
    <div class="div">
        <label for="">Số lượng</label>
        <input type="mumber" name="quantity" id="">
    </div>
    <div class="div">
        <label for="">Mô tả ngắn</label>
        <input type="text" name="short_desc" id="">
    </div>
    <div class="div">
        <label for="">Mô tả chi tiết</label>
        <input type="text" name="delail_desc" id="">
    </div>
    <div class="div">
        <label for="">Star</label>
        <input type="number" name="star" id="">
    </div>
    <input type="submit" name="" id="" value="Lưu">
</form>
</body>
</html>