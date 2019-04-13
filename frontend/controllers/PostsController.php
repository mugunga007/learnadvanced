<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/11/11
 * Time: 17:13
 */

namespace frontend\controllers;


use app\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\filters\AccessControl;
use app\models\Posts;
use Yii;
use yii\web\UploadedFile;
class PostsController extends Controller
{

        public function behaviors(){

            return [

                'access'=>[
                    'class'=>AccessControl::className(),
                    'only'=>['create'],
                    'rules'=>[
                        [
                            'allow'=>true,
                            'roles'=>['@']
                        ]
                    ]
                ]

            ];

        }

        public function actionTool(){


        }

    public function actionCreate(){
        $model = new Posts();
        if($model->load(Yii::$app->request->post())){
            $model->poster = Yii::$app->user->identity->id;
            $image = UploadedFile::getInstance($model,'image');
            $image->saveAs('img/upload/'.$model->poster = Yii::$app->user->identity->id.'pic.'.$model->title.'.'.$image->extension);
          $model->image = $model->poster = Yii::$app->user->identity->id.'pic.'.$model->title.'.'.$image->extension;

           if($model->save()){
               return $this->redirect(['index']);
           }

        }
            return $this->render('create',['model'=>$model]);
    }


    public function actionIndex(){

           /*
            * The findAll for All
            */
          //  $model = Posts::find()->all();

        /*
         * The findAll with condition of poster(2 way)
         */
       // $model = Posts::findAll(['poster'=>Yii::$app->user->identity->username]);
      //  $model = User::findOne(['email'=>Yii::$app->user->identity->email])->posts;
        $model = Posts::find()->where(['poster'=>Yii::$app->user->identity->id])->all();
            return $this->render('index',['model'=>$model]);
    }

    public function actionView($id){
            $model = Posts::findOne(['id'=>$id]);
            return $this->render('view',['model'=>$model]);
    }

    public function actionAllinone(){
       //     $model = Posts::find()->all();
        /*
         * Select data in DB with conditions
         */

            /*
            $model = Posts::find()

                ->select('poster,title,body,time')
                ->where(['poster'=>'shema1','title'=> 'this'])
                ->andWhere('id != 0 and id != 2')
                ->orderBy('title ASC')
                ->limit(10)
                ->all();
*/

            $model = new ActiveDataProvider([
               'query'=>Posts::find()->orderBy('title ASC'),
               'pagination'=>[
                   'pageSize'=>3
               ]
            ]);


            return $this->render('allinone',['model'=>$model]);
    }

/*
 * list of posts of shema
 */
/*
    public function actionUserpost(){
            $model = Posts::findAll(['username'=>'shema']);
            return $this->render('userpost');

    }
*/

    /*
     *
     * Update action
     */

    public function actionUpdate($id)
    {

        $model = Posts::findOne(['id' => $id,'poster'=>Yii::$app->user->identity->username
        ]);
        if ($model->load(Yii::$app->request->post())) {
       if( $model->update()){
           return $this->redirect(['index']);
       }

        }
            return $this->render('update',['model'=>$model]);
    }

/*
 *
 * Delete action
 */


    public function actionDelete($id){

            if(Posts::find()->where(['id'=>$id])->exists()){

                $model = Posts::find()->where(['id'=>$id])->one();
                if($model->delete()){
                    return $this->redirect(['index']);
                }
            }

    }


    /*
    * Using pagination in case the are a lot of data to display
    */
    public function actionUsegrid(){



        $model = new ActiveDataProvider([
            'query'=>Posts::find(),
            'pagination'=>[
                'pageSize'=> 3
            ]
        ]);

        return $this->render('usegrid',['model'=>$model]);
    }

    /*
     * Get the user info and get his all posts using hasMany relationship
     *
     */
    public function actionUserinfo($id){
        $user = User::findOne(['id'=>$id]);
        $posts = new Posts();
         return $this->render('userinfo',['user'=>$user,'id'=>$id]);
    }

    /**
     * Deactivate post
     *
     */
    public function actionActivate($id){
        $post = Posts::findOne(['id'=>$id]);
        $post->status = 'activated';
        $post->update();


        $model = Posts::find()->where(['poster'=>Yii::$app->user->identity->id])->all();
       return $this->render('index',['model'=>$model]);

       // return $this->redirect(Yii::$app->request->referrer);



        //    return $this->redirect('index');
    }
    public function actionDeactivate($id){
        $post = Posts::findOne(['id'=>$id]);
        $post->status = 'deactivated';
        $post->update();
        $model = Posts::find()->where(['poster'=>Yii::$app->user->identity->id])->all();
        return $this->render('index',['model'=>$model]);

    }
}