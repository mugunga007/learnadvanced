<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/11/25
 * Time: 11:18
 */
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\components\SmallBody;
?>

<div class="panel panel-success">
    <div class="panel-title panel-heading panel-info ">
        <?=$model->title  ?> <a href="<?=Url::to(['/posts/view','id'=>$model->id])?>"  class="btn btn-success">view <span class="glyphicon glyphicon-eye-open"> </span></a>
    </div>
    <div class="panel-body">

        <?=SmallBody::widget(['body'=>$model->body])?>
    </div>
    <div class="panel-footer">

        <div class=" text-right">  <?=$model->user->username?>: <?=$model->time?>  </div>
    </div>

</div>
