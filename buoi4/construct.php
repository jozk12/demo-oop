<?php
class BaseModel
{
    function __construct()
    {
        $this->connect = new PDO("mysql:host=127.0.0.1;dbname=duan1_db;charset=utf8", "root", "");
    }

    static function getAll()
    {
        $model = new static();
        $getUserQuery = "select * from $model->table";
        $stmt = $model->connect->prepare($getUserQuery);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
    }
}
class Student extends BaseModel
{
    var $table = "users";

    static function getAll(){
        $model = new static();
        $getUserQuery = "select u.*, r.name role_name
                                from $model->table u
                                join roles r
                                on u.role_id = r.id";
        $stmt = $model->connect->prepare($getUserQuery);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
    }

}
$student = Student::getAll();
?>
<table border="1">
    <thead>
        <th>ID</th>
        <th>EMAIL</th>
        <th>NAME</th>
        <th>PHONE</th>
        <th>ROLE</th>
    </thead>
    <tbody>
        <?php foreach ($student as $stu) : ?>
            <tr>
                <td><?= $stu->id ?></td>
                <td><?= $stu->email ?></td>
                <td><?= $stu->name ?></td>
                <td><?= $stu->phone_number ?></td>
                <td><?= $stu->role_name?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
