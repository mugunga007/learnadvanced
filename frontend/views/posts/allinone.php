<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/11/18
 * Time: 20:52
 */
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ListView;
?>

<div class="container">
    <div class="col-md-3">

    </div>
    <div class="col-md-8">
        <?php
            echo ListView::widget([
                    'dataProvider'=>$model,
                    'itemView' => '_post'
            ])
        ?>

    </div>

</div>
