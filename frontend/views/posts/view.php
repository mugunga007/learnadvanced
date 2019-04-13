<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/11/16
 * Time: 17:18
 */

?>

<?php

?>

<div class="container">
<div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-title panel-heading panel-info ">
                <?=$model->title  ?>
            </div>
            <div class="panel-body">
              <?=$model->body?>
            </div>
        <div class="panel-footer">

            <div class=" text-right">  <?=$model->user->username?>: <?=$model->time?>  </div>
        </div>
        </div>
</div>
    </div>