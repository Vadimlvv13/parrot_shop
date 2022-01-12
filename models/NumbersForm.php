<?php 

namespace app\models;

use yii\base\Model;

/**
 *  two numbers form.
 */
class NumbersForm extends Model
{
	
	public $number1;
	public $number2;

	public function attributeLabels(){
		return [
			'number1' => 'Высота сетки',
			'number2' => 'Шырина сетки',
		]
	}

	public function rules(){
		return [
			[ ['number1', 'number2'], 'integer', 'max' => 3, 'tooLong' => 'Слишком большое значение' ],
		];
	}

	function __construct(argument)
	{
		// code...
	}
}
?>