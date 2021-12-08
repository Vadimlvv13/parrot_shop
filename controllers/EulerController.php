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
}
?>