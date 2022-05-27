<?php 

namespace app\models;

use yii;
use yii\base\Model;

/**
 *  two numbers form.
 */
class NumbersForm extends Model
{
	
	public $number1;
	public $number2;

	public function rules(){
		return [
			[ ['number1', 'number2'], 'required'],//, 'max' => 3, 'tooLong' => 'Слишком большое значение' 
		
			//[ ['number1', 'number2'], 'trim'],
		];
	}

	
}
?>