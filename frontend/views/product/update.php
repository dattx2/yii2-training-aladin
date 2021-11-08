<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = 'Update Products: ' . $model->name;
//$url ='';$name='';$cate='';$des='';
//if (isset($_POST['update'])){
//    $name = $_POST['name'];
//    $cate = $_POST['category'];
//    $des = $_POST['Description'];
//
//    $url = 'http://localhost/yii2/backend/web/get/up?id='.$model->id.'&name='.$name.'&category='.$cate.'&Description='.$des;
//
//         \yii\bootstrap4\Html::submitButton("Continue", ['class' => 'form-control btn btn-primary submit px-3', 'name' => 'update'])
//}
?>
<!--<a href="--><?//=$url?><!--">Update</a>-->

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<form name="update" method="get" enctype="multipart/form-data" action="http://localhost/yii2/backend/web/get/up" class="w3-container w3-card-4"  >
    <h2 class="w3-text-blue">Create</h2>

    <p>
        <label class="w3-text-blue"><b>ID</b></label>
        <input class="w3-input w3-border" name="id" value="<?=$model->id?>" type="text" readonly="readonly"></p>
    </p>
    <p>
        <label class="w3-text-blue"><b>Name</b></label>
        <input class="w3-input w3-border" name="name" value="<?=$model->name?>" type="text"></p>
    <p>
        <label class="w3-text-blue"><b>Category</b></label>
        <input class="w3-input w3-border" name="category" value="<?=$model->category?>" type="text"></p>
    <p>
        <label class="w3-text-blue"><b>Description</b></label>
        <input class="w3-input w3-border" name="Description" value="<?=$model->Description?>"></p>
    <p>
        <button type="submit" class="form-control btn btn-primary submit px-3'">Update</button>
    </p>
    <p>
</form>
