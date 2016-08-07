<?php
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'My Yii Application';

?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You get an application.</p>

        <p><a class="btn btn-lg btn-success" href=<?= Url::toRoute('/translator/')?>>Lets Translate!</a></p>
    </div>

    <div class="body-content">


    </div>
</div>
