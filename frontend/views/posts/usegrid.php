<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/11/24
 * Time: 18:01
 */

use yii\helpers\Url;
use frontend\components\SmallBody;
use yii\grid\GridView;

?>

<div class="container">
    <div class="row">
    <a href="<?=Url::to(['posts/create'])?>" class="btn btn-success"> <span class="glyphicon glyphicon-plus-sign"> </span> Create</a>
    </div>
 <br/>
    <div class="animated bounce">
    <div class="row">

        <?php

        echo GridView::widget([
                'dataProvider'=>$model,
                'columns'=>[
                        ['class'=>'yii\grid\SerialColumn'],
                        'user.username',
                        'title',
                        'body',
                    [
                            'attribute'=>'time',
                            'format'=>'date'
                            ],
                    ['class'=>'yii\grid\ActionColumn']

                ]
        ])

        ?>


    </div>
    </div>

</div>

