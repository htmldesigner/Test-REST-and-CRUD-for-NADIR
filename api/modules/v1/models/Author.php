<?php
namespace api\modules\v1\models;
use api\modules\v1\models\Book;
use \yii\db\ActiveRecord;

/**
 * Author Model
 *
 */
class Author extends ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'author';
	}

    /**
     * @inheritdoc
     */
    public function getBook()
    {
        return $this->hasMany(Book::className(), ['author_id' => 'id']);
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

//    /**
//     * @inheritdoc
//     */
//    public static function primaryKey()
//    {
//        return ['code'];
//    }
//
//    /**
//     * Define rules for validation
//     */
//    public function rules()
//    {
//        return [
//            [['code', 'name', 'population'], 'required']
//        ];
//    }
}
