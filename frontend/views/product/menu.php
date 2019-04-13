<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/11/01
 * Time: 21:44
 */

use yii\helpers\Url;

?>

<?php

?>
<div class="list-group">
    <h4><?=$menu ?></h4>
    <a href="<?php
    echo Url::toRoute(['/product/detail','id'=>1,'name'=>'Link1']);

    ?>" class="list-group-item">Menu 1 </a>
    <a href="<?=Url::to(['/product/detail','id'=>2,'name'=>'Link2'])?>" class="list-group-item">Menu 2</a>
    <a href="<?=Url::to(['/product/detail','id'=>3 ,'name'=>'Link3'])?>" class="list-group-item">Menu 3 </a>
</div>
