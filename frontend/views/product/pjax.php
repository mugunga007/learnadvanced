<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/12/09
 * Time: 1:53
 */

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $time string */
/* Automatic refresh button */
$script = <<< JS
$(document).ready(function() {
    setInterval(function(){ $("#refreshButton").click(); }, 1000);
});
JS;
$this->registerJs($script);
?>

<div class="container">

    <!--The following button reloads the page because is not inside the pjax -->
<div class="row">
    <div class="col-md-3">
 <a  href="<?=Url::to(['product/pjax'])?>" class="btn btn-primary" type="button" >Refresh outside Pjax</a>
    </div>
</div>
    <div class="row">
        <div class="col-md-3">

            <!-- PJAX begining -->
    <?php Pjax::begin();?>
            <h1>Current time: <?=$time?></h1>
    <!--The following button reloads/updates data without reloading the page because is inside the pjax -->
    <a  href="<?=Url::to(['product/pjax'])?>" class="btn btn-primary" type="button" id="refreshButton">Refresh inside Pjax</a>


<?php Pjax::end();?>
            <!-- PJAX Ending -->


        </div>
    </div>
</div>