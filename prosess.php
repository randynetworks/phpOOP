<?

include "model.php";

if (isset($_POST['update'])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];


    $model = new Model();
    $data = $model->update($name, $email, $mobile, $id);

    header("Location: index.php");
}
