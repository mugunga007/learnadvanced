<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/11/11
 * Time: 17:38
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="container">
    <div class="row">
        <div class="col-md-4 ">
            <div class="well well-sm text-center"> <h3>Create a post</h3></div>

<?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

<?=$form->field($model,'title') ?>
<?=$form->field($model,'body')->textarea() ?>
<?=$form->field($model,'image')->fileInput()?>
            <div class="text-center">

<?=Html::submitButton('Create',['class'=>'btn btn-primary']); ?>
            </div>
<?php ActiveForm::end(); ?>
        </div>
    </div>
</div>