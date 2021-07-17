<?php
include "model.php";

$id = $_GET['id'];
$model = new Model();
$data = $model->edit($id);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>

<body>
    <a href="index.php">Kembali</a>
    <h1>Edit mahasiswa <?= $data->name ?></h1>
    <br>

    <form action="prosess.php" method="post">
        <div>
            <label for="">Nama Mahasiswa</label>
            <input type="text" name="name" value="<?= $data->name ?>">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" value="<?= $data->email ?>">
        </div>
        <div>
            <label for="">Mobile</label>
            <input type="text" name="mobile" value="<?= $data->mobile ?>">
        </div>
        <input type="hidden" name="id" value="<?= $data->id ?>">
        <input type="submit" name="update" value="Edit Mahasiswa">
    </form>
</body>

</html>