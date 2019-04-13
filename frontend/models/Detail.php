<?php
/**
 * Created by PhpStorm.
 * User: shema
 * Date: 2018/11/10
 * Time: 7:53
 */

namespace frontend\models;

use yii\base\Model;

class Detail extends Model
{

    public $name;
    public $model;
    public $exp_date;

    public function rules()
    {
        return [
            ['name','required','message'=>'The Name can not be empty!'],
        ];
    }

}