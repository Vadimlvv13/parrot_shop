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
		for ($i=3; $i < 2000000; $i++) { 
			$flag = true;
			for ($j=2; $j <= sqrt($i); $j++) {
				if ($i % $j == 0) {
					$flag = false;
					break;
				}
			}
			if ($flag == true) {
					$sum += $i;
			}
		}
		

		return $this->render('task010', [
			 'sum' => $sum,
		]);
	}

	/**
   * Project Euler task #11.
   *
   * @return mixed
   */
	public function actionTask011()
	{
		$matrix = [
			[8, 2, 22, 97, 38, 15, 0, 40, 0, 75, 4, 5, 7, 78, 52, 12, 50, 77, 91, 8],
			[49, 49, 99, 40, 17, 81, 18, 57, 60, 87, 17, 40, 98, 43, 69, 48, 4, 56, 62, 0],
			[81, 49, 31, 73, 55, 79, 14, 29, 93, 71, 40, 67, 53, 88, 30, 3, 49, 13, 36, 65],
			[52, 70, 95, 23, 4, 60, 11, 42, 69, 24, 68, 56, 1, 32, 56, 71, 37, 2, 36, 91],
			[22, 31, 16, 71, 51, 67, 63, 89, 41, 92, 36, 54, 22, 40, 40, 28, 66, 33, 13, 80],
			[24, 47, 32, 60, 99, 3, 45, 2, 44, 75, 33, 53, 78, 36, 84, 20, 35, 17, 12, 50],
			[32, 98, 81, 28, 64, 23, 67, 10, 26, 38, 40, 67, 59, 54, 70, 66, 18, 38, 64, 70],
			[67, 26, 20, 68, 2, 62, 12, 20, 95, 63, 94, 39, 63, 8, 40, 91, 66, 49, 94, 21],
			[24, 55, 58, 5, 66, 73, 99, 26, 97, 17, 78, 78, 96, 83, 14, 88, 34, 89, 63, 72],
			[21, 36, 23, 9, 75, 0, 76, 44, 20, 45, 35, 14, 0, 61, 33, 97, 34, 31, 33, 95],
			[78, 17, 53, 28, 22, 75, 31, 67, 15, 94, 3, 80, 4, 62, 16, 14, 9, 53, 56, 92],
			[16, 39, 5, 42, 96, 35, 31, 47, 55, 58, 88, 24, 0, 17, 54, 24, 36, 29, 85, 57],
			[86, 56, 0, 48, 35, 71, 89, 7, 5, 44, 44, 37, 44, 60, 21, 58, 51, 54, 17, 58],
			[19, 80, 81, 68, 5, 94, 47, 69, 28, 73, 92, 13, 86, 52, 17, 77, 4, 89, 55, 40],
			[4, 52, 8, 83, 97, 35, 99, 16, 7, 97, 57, 32, 16, 26, 26, 79, 33, 27, 98, 66],
			[88, 36, 68, 87, 57, 62, 20, 72, 3, 46, 33, 67, 46, 55, 12, 32, 63, 93, 53, 69],
			[4, 42, 16, 73, 38, 25, 39, 11, 24, 94, 72, 18, 8, 46, 29, 32, 40, 62, 76, 36],
			[20, 69, 36, 41, 72, 30, 23, 88, 34, 62, 99, 69, 82, 67, 59, 85, 74, 4, 36, 16],
			[20, 73, 35, 29, 78, 31, 90, 1, 74, 31, 49, 71, 48, 86, 81, 16, 23, 57, 5, 54],
			[1, 70, 54, 71, 83, 51, 54, 69, 16, 92, 33, 48, 61, 43, 52, 1, 89, 19, 67, 48]
		];
		// Транспонирование матрицы
		for ($i=0; $i < 20; $i++) { 
			foreach ($matrix as $value) {
				$trans[$i][] = $value[$i];
			}
		}
		// Отображение матрицы по вертикали
		function flipmatrix($arr){
			$j = 0;
			foreach ($arr as $value) {
				$c = count($value);
				for ($i=$c-1; $i >= 0; $i--) { 
					$res[$j][] = $value[$i];
				}
				$j += 1;
			}
			return $res;
		}
		// Умножение каждых 4 чисел в рядах
		function multrow($arr){
			foreach ($arr as $val) {
				$i = 0;
				while (isset($val[$i+3])){
					$z = $val[$i]*$val[$i+1]*$val[$i+2]*$val[$i+3];
					$mas[] = [$z, $val[$i], $val[$i+1], $val[$i+2], $val[$i+3]];
					$i += 1;
				}
			}
			foreach ($mas as $value) {
				if ($value[0] > $res[0]){
					$res = [$value[0], $value[1], $value[2], $value[3], $value[4]];
				}
			}
			return $res;
		}
		// Умножение каждых 4 чисел по диагонали
		function multdia($arr){
			$row = count($arr);
			$col = count($arr[0]);
			if ($row >= 4 && $col >= 4){
				for ($i=0; $i < $row-3; $i++) { 
					for ($j=0; $j < $col-3; $j++) {
						$z = $arr[$i][$j]*$arr[$i+1][$j+1]*$arr[$i+2][$j+2]*$arr[$i+3][$j+3];
						$mas[] = [$z, $arr[$i][$j], $arr[$i+1][$j+1], $arr[$i+2][$j+2], $arr[$i+3][$j+3]];
					}
				}
				foreach ($mas as $val) {
					if ($val[0] > $res[0]) {
						$res = [$val[0], $val[1], $val[2], $val[3], $val[4]];
					}
				}
			}
			else{
				$res[] = "Error! Small matrix!";
			}
			return $res;
		}
		$flip = flipmatrix($matrix);
		$mas = [multrow($matrix), multrow($trans), multdia($matrix), multdia($flip)];
		foreach ($mas as $value) {
			if ($value[0] > $result[0]) {
				$result = [$value[0], $value[1], $value[2], $value[3], $value[4]];
			}
		}

		return $this->render('task011', [
			'result' => $result,
		]);
	}
	
	/**
   * Project Euler task #12.
   *
   * @return mixed
   */
	public function actionTask012()
	{
		function dividers($int){
			if ($int < 2) $res = 1;
			else{
				$i = 2;
				do{
					for ($i; $i <= $int; $i++) { 
						if ($int % $i == 0) {
							$int /= $i;
							$div[] = $i;
							break;
						}
					}
				}while($int != 1);
				foreach ($div as $key => $val) {
					if ($val == $a) {
						$mult[$key-1-$b] += 1;
						$b += 1;
					}else{
						$mult[$key-$b] = 2;
					}
					$a = $val;
				}
				$res = 1;
				foreach ($mult as $val) {
					$res *= $val;
				}
			}
			return $res;
		}

		do{
			$i += 1;
			$num += $i;
			if (dividers($num) > 500) {
				$result = $num;
			}
		}while ($result == NULL);
		

		return $this->render('task012', [
			'result' => $result,
		]);
	}

	/**
   * Project Euler task #13.
   *
   * @return mixed
   */
	public function actionTask013()
	{
		

		return $this->render('task013', [
			
		]);
	}
}
?>