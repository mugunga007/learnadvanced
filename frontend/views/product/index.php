<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/11/01
 * Time: 21:44
 */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
$this->title = 'Product Index'
?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
<?=Html::tag('h2','Welcome to index',['class'=>'text-success'])?>

<?php if(Yii::$app->user->isGuest){ ?>
<p>Mr Guest</p>
<?php } else{?>

    <p> Mr <?=Yii::$app->user->identity->email?></p>

<?php } ?>
<?=$this->render('menu',['menu'=>$menu]);?>
        </div>

        <div class="col-md-4">
            <div class="well well-sm text-center" ><h3>Record Product</h3></div>
            <?php
            if(!empty($message)){
            ?>
            <div class="alert alert-success"><?=$message?> </div>
            <?php
            }
            ?>

            <?php $form = ActiveForm::begin();?>
            <?=$form->field($model,'name')->label('Product Name')?>
            <?=$form->field($model,'model')?>
            <?=$form->field($model,'expdate')->input('date')?>
            <?=Html::submitButton('Save',['class'=>'btn btn-success'])?>
            <?php ActiveForm::end()?>


        </div>

    </div>

</div>