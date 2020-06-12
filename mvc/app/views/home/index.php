
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
            <th>Role</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $u):?>
            <tr>
                <td><?= $u->id?></td>
                <td><?= $u->name?></td>
                <td><?= $u->price?></td>
                <td><?= $u->quantity?></td>
                
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>