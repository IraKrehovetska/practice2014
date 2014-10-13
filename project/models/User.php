<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $user_id
 * @property string $email
 * @property string $password
 * @property string $name
 * @property string $picture
 * @property string $google_uid
 * @property integer $role_id
 *
 * @property Comments[] $comments
 * @property Messages[] $messages
 * @property Travels[] $travels
 * @property Roles $role
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'password', 'role_id'], 'required'],
            [['role_id'], 'integer'],
            [['email', 'password', 'name', 'picture', 'google_uid'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'email' => 'Email',
            'password' => 'Password',
            'name' => 'Name',
            'picture' => 'Picture',
            'google_uid' => 'Google Uid',
            'role_id' => 'Role ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMessages()
    {
        return $this->hasMany(Messages::className(), ['sender_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTravels()
    {
        return $this->hasMany(Travels::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(Roles::className(), ['role_id' => 'role_id']);
    }
}
