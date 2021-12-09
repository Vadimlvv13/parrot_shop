<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class EulerController extends Controller
{

	public $layout = 'euler';

	/**
   * Project Euler task list.
   *
   * @return mixed
   */
	public function actionTasks()
	{
		return $this->render('tasks');
	}

	/**
   * Project Euler task #1.
   *
   * @return mixed
   */
	public function actionTask1()
	{
		$r_mas = array();
		$sum = 0;
		for ($i=1; $i < 1000; $i++) { 
			$a3 = $i % 3;
			$a5 = $i % 5;
			if ($a3 == 0 or $a5 == 0) {
				$r_mas[] = $i;
			}
		}
		foreach ($r_mas as $val) {
			$sum = $sum + $val;
		}

		return $this->render('task1', [
			'sum' => $sum,
		]);
	}

	/**
   * Project Euler task #2.
   *
   * @return mixed
   */
	public function actionTask2()
	{
		$fib = array(1, 2);
		$fib2 = array();
		$sum = 0;
		$z = true;
		while ($z == true) {
		 	$a = $fib[count($fib)-2] + $fib[count($fib)-1];
		 	if ($a <= 4000000){
		 		$fib[] = $a;
		 		$a = 0;
		 	}
		 	else{
		 		$z = false;
		 	}
		 }

		 foreach ($fib as $value) {
		 	if ($value % 2 == 0) {
		 		$fib2[] = $value;
		 		$sum = $sum + $value;
		 	}

		 }


		return $this->render('task2', [
			'fib' => $fib, 'fib2' => $fib2, 'sum' => $sum,
		]);
	}

	/**
   * Project Euler task #3.
   *
   * @return mixed
   */
	public function actionTask3()
	{
		$z = true;
		$a = 13195;
		$b = $a-1;
		$arr = array();
		for ($i=0; $i < 10; $i++) {
			$arr[] = $i;
			if ($i == 5) {
				return break;
			}
		}



		return $this->render('task3', [
			'arr' => $arr;
		]);
	}
}
?>