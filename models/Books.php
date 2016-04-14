<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property integer $id
 * @property string $name
 * @property string $summary
 * @property integer $pages
 * @property string $year
 * @property integer $publich
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'summary', 'pages', 'year', 'publich'], 'required'],
            [['name', 'summary'], 'string'],
            [['pages', 'publich'], 'integer'],
            [['year'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'summary' => 'Summary',
            'pages' => 'Pages',
            'year' => 'Year',
            'publich' => 'Publich',
        ];
    }
}
