<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Categories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categories-form">

    <?php $form = ActiveForm::begin();
    $status = Array('0'=>'active','1'=>'disactive');

    ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descriptipn')->widget(\dosamigos\tinymce\TinyMce::className(), [
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



    <?= $form->field($model, 'status')->dropDownList($status,['prompt'=>'Chọn trạng thái']) ?>

    <?= $form->field($model, 'date_create')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']);?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
