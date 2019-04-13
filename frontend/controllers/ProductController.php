<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/10/29
 * Time: 17:23
 */

namespace frontend\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;
use frontend\models\Detail;
use app\models\Product;


class ProductController extends Controller
{

    /**
     * @return array
     * This method requires you to login before you enter in the detail page
     * it has the same function as the one in the actionDetail (if)
     * but behaviors method is better because once logged in,
     * it directs you to the page you were looking for
     */
    /*
    public function behaviors(){

        return [

            'access'=>[
                'class'=>AccessControl::className(),
                'only'=>['detail'],
                'rules'=>[
                    [
                        'allow'=>true,
                        'roles'=>['@']
                    ]
                ]
            ]

        ];

    }
*/
    public function actionIndex()
    {

        $menu = 'Category';
        $model = new Product();
        $message= null;
        if($model->load(\Yii::$app->request->post())){
            if($model->save()){
                $message = 'Data saved successfully';
              //  return $this->redirect('index');
            }
        }



        return $this->render('index',['menu'=>$menu,'model'=>$model,'message'=>$message]);
    }

   public function actionTesting(){

  //  \yii::$app->params['var1']='Parameter var in yii::app from ProductController called in the main.php';
     return $this->render('testing'

     );
   }

   public function actionDetail($id,$name){
        $menu = "Details";
        $model = new Detail();
if(!\Yii::$app->user->isGuest)
       return $this->render('detail',['menu'=>$menu,'id'=>$id,'name'=>$name,'model'=>$model]);
else
    return $this->redirect(['/site/login']);
   }

   public function actionPjax(){

        $time = date('H:i:s');
        return $this->render('pjax',['time'=>$time]);
   }


}
