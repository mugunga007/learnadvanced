<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/11/01
 * Time: 21:44
 */
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Product Detail'
?>


<h2>Product Details</h2>
<div class="col-md-4">
<div class="thumbnail ">
    <h2>Id <span class="glyphicon glyphicon-lock"> </span>: <?=$id?> </h2>
    <h2>Product <span class="glyphicon glyphicon-shopping-cart "> </span>: <?=$name?></h2>
</div>
</div>
<a href="<?=Url::to(['/product/index'])?>"> <span class="glyphicon glyphicon-backward"></span> <?=Url::home()?> </a>
<div class="col-md-4">
<?php $form = ActiveForm::begin();?>
<?=$form->field($model,'name')->label('Product Name')?>
<?=$form->field($model,'model')?>
<?=$form->field($model,'exp_date')->input('date')?>
<?=Html::submitButton('Save',['class'=>'btn btn-success'])?>
<?php ActiveForm::end()?>
</div>