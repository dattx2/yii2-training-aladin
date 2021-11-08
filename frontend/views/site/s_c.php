<?php
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \common\models\LoginForm */

use \yii\web\Cookie;

$session = Yii::$app->session;

$cookies = Yii::$app->response->cookies;
// ktra cookie login
$username ="";
$password = "";
$remember = false;
if (isset($_COOKIE['name']) && isset($_COOKIE['pass']) ){
    $username=$_COOKIE['name'];
    $password=$_COOKIE['pass'];
//    if ($_COOKIE['remember']==1)
//        $remember = true;

}

// open a session
$session->open();
if(isset($_POST["login"])) {

    if (($_POST['remember'])==1){ // 1 khi checked
        setcookie("name",$_POST['username']);
        setcookie("pass",$_POST['password']);
        setcookie("remember",$_POST['remember']);

    }

    else  {
        setcookie('pass', null);
        setcookie('remember', null);
        setcookie('name', null);
    }


    $login = Array($_POST["username"],$_POST["password"]);
    $session->set('login', $login);
    header("Location: index");
    exit;

}
$session->close();
?>


<!doctype html>
<html lang="en">
<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body class="img js-fullheight" style="background-image: url(js/images/bg.jpg);">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Login #10</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center">Have an account?</h3>


                    <div class="row">
                        <div class="col-lg-5">


                            <?php $form = \yii\bootstrap4\ActiveForm::begin(['id' => 'login-form','class'=>'form-control btn btn-primary submit px-3']); ?>


                            <div class="form-group">
                                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'name'=>'username','value'=>$username]) ?>

                                <?= $form->field($model, 'id')->passwordInput(['name'=>'password','value'=>$password])->label("password") ?>

                                <?= $form->field($model, 'status')->checkbox(['name'=>'remember'])->label('remember') ?>
                                <?= \yii\bootstrap4\Html::submitButton("SIgn in", ['class' => 'form-control btn btn-primary submit px-3', 'name' => 'login']) ?>
                            </div>

                            <?php \yii\bootstrap4\ActiveForm::end(); ?>
                        </div>
                    </div>



                    <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                    <div class="social d-flex text-center">
                        <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
                        <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>

