<?php
namespace app\controllers\rest;

use yii\rest\ActiveController;

class BooksController extends ActiveController
{
    public $modelClass = 'app\models\Books';

    protected function verbs()
	{
	    return [
	        'index' => ['GET', 'HEAD'],
	        'view' => ['GET', 'HEAD'],
	        'create' => ['POST'],
	        'update' => ['PUT', 'PATCH'],
	        'delete' => ['DELETE'],
	    ];
	}
}