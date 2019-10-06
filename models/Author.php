<?php

namespace app\models;

use app\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "author".
 *
 * @property int $id
 * @property string $author_name
 * @property int $created_at
 * @property int $updated_at
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return
            [
                [['author_name', 'description'], 'required'],
                [['created_at', 'updated_at', 'user_id'], 'integer'],
                ['author_name', 'string', 'max' => 255],
                ['description', 'string', 'max' => 500],
            ];
    }

    /**
     * @inheritdoc
     */
    public function getBook()
    {
        return $this->hasMany(Book::className(), ['author_id' => 'id']);
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_name' => 'Author Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
