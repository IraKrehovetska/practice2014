<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property integer $message_id
 * @property integer $receiver_id
 * @property integer $sender_id
 * @property string $text
 * @property string $title
 * @property string $datetime
 *
 * @property Users $receiver
 * @property Users $sender
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['receiver_id', 'sender_id', 'text', 'datetime'], 'required'],
            [['receiver_id', 'sender_id'], 'integer'],
            [['text'], 'string'],
            [['datetime'], 'safe'],
            [['title'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'message_id' => 'Message ID',
            'receiver_id' => 'Receiver ID',
            'sender_id' => 'Sender ID',
            'text' => 'Text',
            'title' => 'Title',
            'datetime' => 'Datetime',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceiver()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'receiver_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSender()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'sender_id']);
    }
}
