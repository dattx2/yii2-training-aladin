<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model app\models\Products */
$this->title = 'Products';
$url = 'http://localhost/yii2/backend/web/get/get?all=';
$json_data = file_get_contents($url);
$response_data = json_decode($json_data,true);


?>
<style>
    #btn:link, #btn:visited {
        background-color: white;
        color: black;

        border: 2px solid green;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;

    }

    #btn:hover, #btn:active {
        background-color: green;
        color: white;
    }
</style>
<a id="btn" href="create" >Add</a>

<?php
foreach ($response_data as $key=>$values){

    ?>
    <div class="col-lg-4 col-sm-6">
        <div class="single-product">
            <div class="level-pro-new">
                <span>new</span>
            </div>
            <div class="product-img">
                <a href="../single-product?id=<?=$values['id'] ?>">
                    <img src=<?=$values['Link']?> alt="" class="primary-img">
                    <img src="<?=$values['Link']?>" alt="" class="secondary-img">
                </a>
            </div>
            <div class="product-price">
                <div class="product-name">
                    <a href="../single-product?id=<?=$values['id'] ?>" title="Fusce aliquam"><?=$values['name']?></a>
                </div>
                <div class="price-rating">
                    <span>$170.00</span>
                    <div class="ratings">
                        <a href="update?id=<?=$values['id']?>" >Edit</a>
                        <a href="delete?id=<?=$values['id']?>" >Delate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

</div>
?>

