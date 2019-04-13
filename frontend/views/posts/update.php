<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/11/19
 * Time: 11:47
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<div class="container">
    <div class="row">
        <div class="col-md-4 ">
            <div class="well well-sm text-center"> <h3>Edit Post</h3></div>

            <?php $form = ActiveForm::begin(); ?>

            <?=$form->field($model,'title') ?>
            <?=$form->field($model,'body')->textarea() ?>
            <div class="text-center">
                <?=Html::submitButton('Edit',['class'=>'btn btn-primary']); ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
