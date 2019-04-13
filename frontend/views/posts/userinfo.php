<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/11/26
 * Time: 17:06
 */

?>

<div class="container">
    <div class="col-md-4">
    <div class="thumbnail">
    <img src="../../web/img/testimonials-1.jpg" class="img-thumbnail img-responsive" >
        <h2><?=$user->name?></h2>
        <h4><?=$user->username?></h4>
        <p><?=$user->phone?></p>

    </div>
    </div>
    <div class="col-md-6">

        <table class="table table-striped table-hover">
            <thead>
            <th>Posted by</th>
            <th>Title</th>
            <th>Body</th>
            </thead>
            <tbody>
            <?php
           foreach ($user->posts as $post ) {

               ?>
               <tr>
                   <td><?=$user->username?></td>
                   <td><?=$post->title?></td>
                   <td><?=$post->body?></td>
               </tr>
               <?php
           }
            ?>
            </tbody>

        </table>

    </div>

</div>
