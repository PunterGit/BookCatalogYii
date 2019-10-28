<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $title
 * @property string $genre
 * @property string $author
 * @property int $pub_date
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'genre', 'author', 'pub_date'], 'required'],
            [['title', 'genre', 'author'], 'string'],
            [['pub_date'], 'integer', 'max' => date('Y')],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'title' => 'Title',
            'genre' => 'Genre',
            'author' => 'Author',
            'pub_date' => 'Publication date',
        ];
    }
}
