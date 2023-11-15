<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user_cources".
 *
 * @property int $id
 * @property int $user_id
 * @property int $cource_id
 *
 * @property Cource $cource
 * @property User $user
 */
class UserCources extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_cources';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'cource_id'], 'required'],
            [['user_id', 'cource_id'], 'integer'],
            [['cource_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cource::class, 'targetAttribute' => ['cource_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'cource_id' => 'Cource ID',
        ];
    }

    /**
     * Gets query for [[Cource]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCource()
    {
        return $this->hasOne(Cource::class, ['id' => 'cource_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}
