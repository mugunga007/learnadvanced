<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/11/16
 * Time: 17:09
 */
use yii\helpers\Url;
use frontend\components\SmallBody;
use yii\widgets\Pjax;

?>


<div class="container">
    <div class="row">
    <a href="<?=Url::to(['posts/create'])?>" class="btn btn-success" data-toggle="confirmation"
       data-btn-ok-label="Continue" data-btn-ok-class="btn-success"
       data-btn-ok-icon-class="material-icons" data-btn-ok-icon-content="check"
       data-btn-cancel-label="Stoooop!" data-btn-cancel-class="btn-danger"
       data-btn-cancel-icon-class="material-icons" data-btn-cancel-icon-content="close"
       data-title="Is it ok?" data-content="This might be dangerous"> <span class="glyphicon glyphicon-plus-sign"> </span> Create</a>
    </div>
 <br/>



    <?php
    foreach ($model as $post){
        $status = $post->status;
    ?>
<div class="animated bounceIn">
    <div class="col-md-4">
        <div class="thumbnail ">

            <img src="../../web/img/upload/<?=$post->image?>" class="img-thumbnail" height="350px" width="350px"/>

            <h3 class="text " style="font-size: 2vw; color: #708090" >
                <span>  <?=$post->title  ?> </span>
            </h3>
            <p>
                <?=SmallBody::widget(['body'=>$post->body]) ?>

            </p>








            <div class=" text-right"> <a href="<?=Url::to(['/posts/userinfo','id'=>$post->user->id])?>"> <?=$post->user->username?>:</a> <?=$post->time?>
            </div>

            <a type="button" href="<?= Url::to(['/posts/view', 'id' => $post->id]) ?>" class="btn btn-default" >
                 <span class="glyphicon glyphicon-eye-open"></span>
            </a>
            <a href="<?=Url::to(['/posts/update','id'=>$post->id])?>"  class="btn btn-default" >Edit <span class="glyphicon glyphicon-edit"> </span></a>
            <a href="<?=Url::to(['/posts/delete','id'=>$post->id])?>"  class="btn btn-default" >Delete <span class="glyphicon glyphicon-trash"> </span></a>


            <!-- Deactivating/Activating buttons -->

                <?php Pjax::begin();?>
            <?php
            if($status=='activated') {

                ?>
                <div class="alert alert-success"> <span class="glyphicon glyphicon-eye-open"> </span> Activated
                    <a type="button" href="<?= Url::to(['/posts/deactivate', 'id' => $post->id]) ?>" class="btn btn-default ">
                        Deactivate <span class="glyphicon glyphicon-lock text-danger"></span>
                    </a></div>

                <?php
            } elseif($post->status=='deactivated') {
                ?>
                <div class="alert alert-danger"><span class="glyphicon glyphicon-eye-close"> </span> Deactivated
                <a type="button" href="<?= Url::to(['/posts/activate', 'id' => $post->id]) ?>" class="btn btn-default" >
                    Activate <span class="glyphicon glyphicon-ok text-success"> </span>
                </a>
                </div>

                <?php
            }
            ?>
                <?php Pjax::end();?>


        </div>

    </div>
</div>
    <?php } ?>


</div>



