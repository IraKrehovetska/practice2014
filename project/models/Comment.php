<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $comment_id
 * @property integer $sender_id
 * @property integer $user_id
 * @property string $text
 * @property string $datetime
 *
 * @property Users $sender
 * @property Users $user
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sender_id', 'user_id', 'text', 'datetime'], 'required'],
            [['sender_id', 'user_id'], 'integer'],
            [['text'], 'string'],
            [['datetime'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'comment_id' => 'Comment ID',
            'sender_id' => 'Sender ID',
            'user_id' => 'User ID',
            'text' => 'Text',
            'datetime' => 'Datetime',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSender()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'sender_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }
}
