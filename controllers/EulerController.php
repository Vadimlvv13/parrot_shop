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
	public function actionTask001()
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

		return $this->render('task001', [
			'sum' => $sum,
		]);
	}

	/**
   * Project Euler task #2.
   *
   * @return mixed
   */
	public function actionTask002()
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


		return $this->render('task002', [
			'fib' => $fib, 'fib2' => $fib2, 'sum' => $sum,
		]);
	}

	/**
   * Project Euler task #3.
   *
   * @return mixed
   */
	public function actionTask003()
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

		return $this->render('task003', [
			'mas' => $mas,
		]);
	}

	/**
   * Project Euler task #4.
   *
   * @return mixed
   */
	public function actionTask004()
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



		return $this->render('task004', [
			'res' => $res,
		]);
	}

	/**
   * Project Euler task #5.
   *
   * @return mixed
   */
	public function actionTask005()
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

		return $this->render('task005', [
			'res' => $res,
		]);
	}

	/**
   * Project Euler task #6.
   *
   * @return mixed
   */
	public function actionTask006()
	{
		$sum1 = $sum2 = 0;
		for ($i=1; $i <= 100; $i++) { 
			$sum1 += ($i*$i);
			$sum2 += $i;
		}
		$res = ($sum2*$sum2)-$sum1;

		return $this->render('task006', [
			'res' => $res,
		]);
	}

	/**
   * Project Euler task #7.
   *
   * @return mixed
   */
	public function actionTask007()
	{
		$count = 0;
		$j = 1;
		while ($count < 10001) {
			$j += 1;
			$flag = true;
			for ($i=2; $i <= sqrt($j); $i++) { 
				if ($j % $i == 0){
					$flag = false;
					break;
				}
			}
			if ($flag == true) {
				$count += 1;
			}
		}

		return $this->render('task007', [
			'j' => $j,
		]);
	}

	/**
   * Project Euler task #8.
   *
   * @return mixed
   */
	public function actionTask008()
	{
		$str = "7316717653133062491922511967442657474235534919493496983520312774506326239578318016984801869478851843858615607891129494954595017379583319528532088055111254069874715852386305071569329096329522744304355766896648950445244523161731856403098711121722383113622298934233803081353362766142828064444866452387493035890729629049156044077239071381051585930796086670172427121883998797908792274921901699720888093776657273330010533678812202354218097512545405947522435258490771167055601360483958644670632441572215539753697817977846174064955149290862569321978468622482839722413756570560574902614079729686524145351004748216637048440319989000889524345065854122758866688116427171479924442928230863465674813919123162824586178664583591245665294765456828489128831426076900422421902267105562632111110937054421750694165896040807198403850962455444362981230987879927244284909188845801561660979191338754992005240636899125607176060588611646710940507754100225698315520005593572972571636269561882670428252483600823257530420752963450";

		
		for ($i=0; $i < strlen($str); $i++) {
			$arr[] = $str[$i];
		}
		for ($j=12; $j < strlen($str); $j++) {
			$mas[] = [$arr[$j]*$arr[$j-1]*$arr[$j-2]*$arr[$j-3]*$arr[$j-4]*$arr[$j-5]*$arr[$j-6]*$arr[$j-7]*$arr[$j-8]*$arr[$j-9]*$arr[$j-10]*$arr[$j-11]*$arr[$j-12], $arr[$j-12], $arr[$j-11], $arr[$j-10], $arr[$j-9], $arr[$j-8], $arr[$j-7], $arr[$j-6], $arr[$j-5], $arr[$j-4], $arr[$j-3], $arr[$j-2], $arr[$j-1], $arr[$j]];
		}
		foreach ($mas as $val) {
			if ($val[0] > $res[0]){
				$res = [$val[0], $val[1], $val[2], $val[3], $val[4], $val[5], $val[6], $val[7], $val[8], $val[9], $val[10], $val[11], $val[12], $val[13]];
			}
		}

		return $this->render('task008', [
			'res' => $res,
		]);
	}

	/**
   * Project Euler task #9.
   *
   * @return mixed
   */
	public function actionTask009()
	{
		$m = 1;
		while ($res == NULL){
			$m += 1; 
			for ($n=1; $n < $m; $n++) { 
				$x = ($m*$m)-($n*$n);
				$y = 2*$m*$n;
				$z = ($m*$m)+($n*$n);
				if ($x+$y+$z == 1000) {
					$res = $x*$y*$z;
					break;
				}
			}

		}

		return $this->render('task009', [
			'res' => $res, 'x' => $x, 'y' => $y, 'z' => $z, 
		]);
	}

	/**
   * Project Euler task #10.
   *
   * @return mixed
   */
	public function actionTask010()
	{
		$sum = 2;
		for ($i=3; $i < 10; $i++) { 
			$flag = true;
			for ($j=2; $j < sqrt($i); $j++) {
				if ($i % $j == 0) {
					$flag = false;
					break
				}
				if ($flag == true) {
					$sum += $i;
				}
			}
		}

		return $this->render('task010', [
			 'sum' => $sum,
		]);
	}
}
?>