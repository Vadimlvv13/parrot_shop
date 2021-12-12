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
		$a = 600851475143; // 13195;

		while ($z == true){
			$b = $a;
			for ($i = 2; $i <= sqrt($a); $i++) {
				if ($a % $i == 0) {
					$flag = true;
					for ($q = 2; $q <= sqrt($i); $q++) {

						if ($i % $q == 0) {
							$flag = false;
							break;
						}
					}
					if ($flag == true) {
						$a /= $i;
						break;
					}
				}
				
			}
			if ($a == $b) {
				$z = false;
				$mas = $a;
			}
		}

		return $this->render('task3', [
			'mas' => $mas,
		]);
	}

	/**
   * Project Euler task #4.
   *
   * @return mixed
   */
	public function actionTask4()
	{
		$res = [1, 1, 1];
		$mas = array();
		for ($i=100; $i < 1000; $i++) { 
			for ($j=100; $j < 1000; $j++) { 
				$a = $i*$j;
				$word = strrev(strval($a));
				if ($a == intval($word)) {
					$mas[] = ["$i", "$j", "$a"];
				}
			}
		}
		foreach ($mas as $val) {
			if ($val[2] > $res[2]) {
				$res = [$val[0], $val[1], $val[2]];
			}
		}



		return $this->render('task4', [
			'res' => $res,
		]);
	}

	/**
   * Project Euler task #5.
   *
   * @return mixed
   */
	public function actionTask5()
	{
		$z = true;
		$i = 0;
		while ($z == true) {
			$i += 1;
			$flag = false;
			for ($j=1; $j <= 20; $j++) {
				if ($i % $j != 0){
					$flag = true;
					break;
				}
				
			}
			if ($flag == false){
				$res = $i;
				$z = false;
			}
		}

		return $this->render('task5', [
			'res' => $res,
		]);
	}

	/**
   * Project Euler task #6.
   *
   * @return mixed
   */
	public function actionTask6()
	{
		$sum1 = $sum2 = 0;
		for ($i=1; $i <= 10; $i++) { 
			$sum1 += ($i*$i);
			$sum2 += $i;
		}
		$res = ($sum2*$sum2)-$sum1;

		return $this->render('task6', [
			'res' => $res,
		]);
	}
}
?>