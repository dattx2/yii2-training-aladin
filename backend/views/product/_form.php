<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var  $cate app\models\Categories  */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin();
    $status = Array('active'=>'active','disactive'=>'disactive');
    $cate = new \app\models\Categories();
    $data_category =$cate->getName();

    ?>

    <?= $form->field($model, 'category')->dropDownList($data_category,['prompt'=>'Chọn danh mục']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'Description')->widget(\dosamigos\tinymce\TinyMce::className(), [
        'options' => ['rows' => 10],
        'language' => 'vi',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists image link charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor responsivefilemanager code image imagetools"
            ],
            'toolbar1' => "responsivefilemanager | undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            'toolbae2'=>" | responsivefilemanager | link unlink anchor | image medio",
            'image_caption' => true,
            'image_advtab'=>true,
            'external_filemanager_path'=>"../filemanager/",
            'filemanager_title'=>"Filemanager" ,

        ]
    ]);?>
    <?= $form->field($model, 'Link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'end_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'statsu')->dropDownList($status,['prompt'=>'Chọn trạng thái']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
