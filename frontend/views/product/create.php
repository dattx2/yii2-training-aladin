<?php

use yii\helpers\Html;

Html::csrfMetaTags() ;
/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = 'Create Products';
//$url ='';$name='';$cate='';$des='';
//if (isset($_POST['add'])){
//    $name = $_POST['name'];
//    $cate = $_POST['category'];
//    $des = $_POST['Description'];
//
//    $url = 'http://localhost/yii2/backend/web/get/cr?name='.$name.'&category='.$cate.'&Description='.$des;
//    //header( 'Location: '.$url  );
////= \yii\bootstrap4\Html::submitButton("Add", ['class' => 'form-control btn btn-primary submit px-3', 'name' => 'add'])
//}
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<form name="create" method="get" action="http://localhost/yii2/backend/web/get/cr" class="w3-container w3-card-4"  >
    <h2 class="w3-text-blue">Create</h2>

    <p>
        <label class="w3-text-blue"><b>Name</b></label>
        <input class="w3-input w3-border" name="name" type="text"></p>
    <p>
        <label class="w3-text-blue"><b>Category</b></label>
        <input class="w3-input w3-border" name="category" type="text"></p>
    <p>
        <label class="w3-text-blue"><b>Description</b></label>
        <input class="w3-input w3-border" name="Description" type="text"></p>
    <p>
        <button type="submit" class="form-control btn btn-primary submit px-3'">Add</button>
    </p>
    <p>

<!--        --><? ?>
</form>



