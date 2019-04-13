<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/11/11
 * Time: 8:48
 */

namespace frontend\controllers;
use yii\helpers\ArrayHelper;
use yii\web\Controller;


class ArrayhelperController extends Controller
{


    public function actionIndex()
    {

        /*
        $array1 = [
          'one',
          'two',
          'three',
        ];

        $array = [

            'one'=>['one1','one2','one3'],
            'two'=>['two1','two2','one3'],
            'three',
            'four',
            'five'=>['five1','five2','five3'],

            ];

        $data = ArrayHelper::getValue($array,'one');
        $data1 = ArrayHelper::getValue($array1,'2');


       echo json_encode($data );
      echo json_encode($data1);
        */

        $array = [
            ['id'=>1,'name'=>'shema','phone'=>'3435'],
            ['id'=>2,'name'=>'john','phone'=>'4586'],
            ['id'=>3,'name'=>'steve','phone'=>'2354'],
        ];

       // $data = ArrayHelper::index($array,'name ');

        //$data = ArrayHelper::getColumn($array,'name');

       // $data = ArrayHelper::map($array,'id','name');

         ArrayHelper::multisort($array,'id',SORT_DESC);

        echo json_encode($array);
    }

}