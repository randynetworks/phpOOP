<?

include "model.php";

if (isset($_GET['id'])) {
    $id = $_GET["id"];
    $model = new Model();
    $data = $model->destroy($id);
    header("Location: index.php");
}
