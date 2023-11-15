<?php

namespace backend\models;

use common\models\UserCource;
use Yii;

/**
 * This is the model class for table "cources".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $url
 *
 * @property \common\models\UserCource $userCources
 */
class Cource extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cources';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['title', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'url' => 'Url',
        ];
    }

    /**
     * Gets query for [[UserCources]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserCources()
    {
        return $this->hasMany(UserCource::class, ['cource_id' => 'id']);
    }
}
