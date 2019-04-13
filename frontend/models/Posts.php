<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property int $poster
 * @property string $title
 * @property string $body
 * @property string $time
 * @property string $image
 * @property string $status
 *
 *
 * @property User $poster0
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'body'], 'required'],
            [['time','image'], 'safe'],
            [['title'], 'string', 'max' => 30],
            [['body'], 'string', 'max' => 100],
            [['image'],'file','extensions'=>'jpg,png,gif']

                 ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'poster' => 'Poster',
            'title' => 'Title',
            'body' => 'Body',
            'time' => 'Time',
            'image' => 'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'poster']);
    }


}
