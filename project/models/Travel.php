<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "travels".
 *
 * @property integer $travel_id
 * @property string $from
 * @property string $to
 * @property string $payment
 * @property integer $no_pets
 * @property integer $no_smoke
 * @property string $gender
 * @property string $date
 * @property integer $user_id
 *
 * @property Users $user
 */
class Travel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'travels';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['from', 'to', 'date', 'user_id'], 'required'],
            [['no_pets', 'no_smoke', 'user_id'], 'integer'],
            [['date'], 'safe'],
            [['from', 'to', 'payment', 'gender'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'travel_id' => 'Travel ID',
            'from' => 'From',
            'to' => 'To',
            'payment' => 'Payment',
            'no_pets' => 'No Pets',
            'no_smoke' => 'No Smoke',
            'gender' => 'Gender',
            'date' => 'Date',
            'user_id' => 'User ID',
        ];
    }

    public function findRecentTravels($limit=null)
    {
        return $this->findAll(array(
            'order'=>'t.create_time DESC',
            'limit'=>$limit,
        ));
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }
}
