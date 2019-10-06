<?php
namespace api\modules\v1\models;
use api\modules\v1\models\Author;
use \yii\db\ActiveRecord;
/**
 * Book Model
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class Book extends ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'book';
	}

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'text'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'description', 'text'], 'string', 'max' => 500],
        ];
    }

    public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['id' => 'author_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Author ID',
            'name' => 'Name',
            'text' => 'Text',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

}
