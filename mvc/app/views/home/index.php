
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
    <h1>Trang chủ</h1>
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th colspan="2"><a href="<?=getClientUrl('add-product')?>">Thêm</a></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $p):?>
            <tr>
                <td><?= $p->id?></td>
                <td><?= $p->name?></td>
                <td><?= $p->price?></td>
                <td><?= $p->quantity?></td>
                <td><a href="<?=getClientUrl('edit-product',['id'=>$p->id])?>">Sửa</a></td>
                <td><a href="<?=getClientUrl('remove-product',['id'=>$p->id])?>">Xóa</a></td>

            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>