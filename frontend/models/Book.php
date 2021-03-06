<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%book}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $author
 * @property string $publisher
 * @property integer $year
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%book}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'author', 'description','publisher','cat_id', 'year','isbn'], 'required'],
			//['cover_photo', 'file', 'extensions' => ['png', 'jpg', 'gif', 'jpeg'], 'maxSize' => 1024 * 1024 * 2],
			[['cover_photo'], 'string'],
            [['description'], 'string'],
            [['year','pages','stock','author_id','shelf_id'], 'integer'],
            [['title','written_lang'], 'string', 'max' => 255],
            [['author', 'publisher','book_number'], 'string', 'max' => 50]
        ];
    }

	public static function getAllBooks()
	{
		$query = self::find()->all();
		return $query;
	}
	
	
    /**
     * @inheritdoc
     */
  /*  public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'author' => Yii::t('app', 'Author'),
            'publisher' => Yii::t('app', 'Publisher'),
            'year' => Yii::t('app', 'Year'),
        ];
    }*/
}
