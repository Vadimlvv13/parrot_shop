<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\NumbersForm;

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
		$res[0] = 0;

		
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
		$res = NULL;
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
			$res[0] = 0;
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
			$res[0] = 0;
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
		$result[0] = 0;
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
				$a = $b = 0;
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

		$i = $num = 0;
		$result = NULL;
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
		$mas = [
			'37107287533902102798797998220837590246510135740250',
			'46376937677490009712648124896970078050417018260538',
			'74324986199524741059474233309513058123726617309629',
			'91942213363574161572522430563301811072406154908250',
			'23067588207539346171171980310421047513778063246676',
			'89261670696623633820136378418383684178734361726757',
			'28112879812849979408065481931592621691275889832738',
			'44274228917432520321923589422876796487670272189318',
			'47451445736001306439091167216856844588711603153276',
			'70386486105843025439939619828917593665686757934951',
			'62176457141856560629502157223196586755079324193331',
			'64906352462741904929101432445813822663347944758178',
			'92575867718337217661963751590579239728245598838407',
			'58203565325359399008402633568948830189458628227828',
			'80181199384826282014278194139940567587151170094390',
			'35398664372827112653829987240784473053190104293586',
			'86515506006295864861532075273371959191420517255829',
			'71693888707715466499115593487603532921714970056938',
			'54370070576826684624621495650076471787294438377604',
			'53282654108756828443191190634694037855217779295145',
			'36123272525000296071075082563815656710885258350721',
			'45876576172410976447339110607218265236877223636045',
			'17423706905851860660448207621209813287860733969412',
			'81142660418086830619328460811191061556940512689692',
			'51934325451728388641918047049293215058642563049483',
			'62467221648435076201727918039944693004732956340691',
			'15732444386908125794514089057706229429197107928209',
			'55037687525678773091862540744969844508330393682126',
			'18336384825330154686196124348767681297534375946515',
			'80386287592878490201521685554828717201219257766954',
			'78182833757993103614740356856449095527097864797581',
			'16726320100436897842553539920931837441497806860984',
			'48403098129077791799088218795327364475675590848030',
			'87086987551392711854517078544161852424320693150332',
			'59959406895756536782107074926966537676326235447210',
			'69793950679652694742597709739166693763042633987085',
			'41052684708299085211399427365734116182760315001271',
			'65378607361501080857009149939512557028198746004375',
			'35829035317434717326932123578154982629742552737307',
			'94953759765105305946966067683156574377167401875275',
			'88902802571733229619176668713819931811048770190271',
			'25267680276078003013678680992525463401061632866526',
			'36270218540497705585629946580636237993140746255962',
			'24074486908231174977792365466257246923322810917141',
			'91430288197103288597806669760892938638285025333403',
			'34413065578016127815921815005561868836468420090470',
			'23053081172816430487623791969842487255036638784583',
			'11487696932154902810424020138335124462181441773470',
			'63783299490636259666498587618221225225512486764533',
			'67720186971698544312419572409913959008952310058822',
			'95548255300263520781532296796249481641953868218774',
			'76085327132285723110424803456124867697064507995236',
			'37774242535411291684276865538926205024910326572967',
			'23701913275725675285653248258265463092207058596522',
			'29798860272258331913126375147341994889534765745501',
			'18495701454879288984856827726077713721403798879715',
			'38298203783031473527721580348144513491373226651381',
			'34829543829199918180278916522431027392251122869539',
			'40957953066405232632538044100059654939159879593635',
			'29746152185502371307642255121183693803580388584903',
			'41698116222072977186158236678424689157993532961922',
			'62467957194401269043877107275048102390895523597457',
			'23189706772547915061505504953922979530901129967519',
			'86188088225875314529584099251203829009407770775672',
			'11306739708304724483816533873502340845647058077308',
			'82959174767140363198008187129011875491310547126581',
			'97623331044818386269515456334926366572897563400500',
			'42846280183517070527831839425882145521227251250327',
			'55121603546981200581762165212827652751691296897789',
			'32238195734329339946437501907836945765883352399886',
			'75506164965184775180738168837861091527357929701337',
			'62177842752192623401942399639168044983993173312731',
			'32924185707147349566916674687634660915035914677504',
			'99518671430235219628894890102423325116913619626622',
			'73267460800591547471830798392868535206946944540724',
			'76841822524674417161514036427982273348055556214818',
			'97142617910342598647204516893989422179826088076852',
			'87783646182799346313767754307809363333018982642090',
			'10848802521674670883215120185883543223812876952786',
			'71329612474782464538636993009049310363619763878039',
			'62184073572399794223406235393808339651327408011116',
			'66627891981488087797941876876144230030984490851411',
			'60661826293682836764744779239180335110989069790714',
			'85786944089552990653640447425576083659976645795096',
			'66024396409905389607120198219976047599490197230297',
			'64913982680032973156037120041377903785566085089252',
			'16730939319872750275468906903707539413042652315011',
			'94809377245048795150954100921645863754710598436791',
			'78639167021187492431995700641917969777599028300699',
			'15368713711936614952811305876380278410754449733078',
			'40789923115535562561142322423255033685442488917353',
			'44889911501440648020369068063960672322193204149535',
			'41503128880339536053299340368006977710650566631954',
			'81234880673210146739058568557934581403627822703280',
			'82616570773948327592232845941706525094512325230608',
			'22918802058777319719839450180888072429661980811197',
			'77158542502016545090413245809786882778948721859617',
			'72107838435069186155435662884062257473692284509516',
			'20849603980134001723930671666823555245252804609722',
			'53503534226472524250874054075591789781264330331690'
		];
		function SumOfNumbers($array){
			$sum = '';
			$temp = 0;
			$result = NULL;
			foreach ($array as $val) {
				$len = max(strlen($sum), strlen($val));
				$num1 = str_pad($sum, $len, "0", STR_PAD_LEFT);
				$num2 = str_pad($val, $len, "0", STR_PAD_LEFT);
				for ($i=$len-1; $i >= 0; $i--) { 
					$num3 = intval($num1[$i])+intval($num2[$i])+$temp;
					$temp = 0;
					if ($num3 > 9) {
						$temp = 1;
						$num3 -= 10;
					}
					$result = strval($num3).$result;
				}
				if ($temp == 1) {
					$result = '1'.$result;
					$temp = 0;
				}
			$sum = $result;
			$result = '';
			}
			return $sum;
		}
		$res = SumOfNumbers($mas);
		$result = intval(substr($res, 0, 10));

		return $this->render('task013', [
			'result' => $result,
		]);
	}

	/**
   * Project Euler task #14.
   *
   * @return mixed
   */
	public function actionTask014()
	{
		for ($i=1; $i < 1000000; $i++) { 
			$num = $i;
			$count = 1;
			while ($num != 1) {
				if ($num % 2 == 0) {
					$num /= 2;
				}else{
					$num = 3 * $num + 1;
				}
				$count += 1;
			}
			$mas[$i] = $count;
		}
		

		return $this->render('task014', [
			'mas' => $mas,
		]);
	}

	/**
   * Project Euler task #15.
   *
   * @return mixed
   */
	public function actionTask015()
	{
		$model = new NumbersForm();
		/*if ($model->load(Yii::$app->request->post())) {
			if ($model->validate()){
				Yii::$app->session->setFlash('success', 'Данные приняты');
			}else{
				Yii::$app->session->setFlash('error', 'Ошибка');
			}
		}*/
		//$m = intval($request->post('number1'));
		//$n = intval($request->post('number2'));
		//if ($m || $n == null) {
			$n = 20;
			$m = 20;
		//}
		function factorial($a){
			if ($a > 1) {
				$result = 1;
				for ($i=1; $i <= $a; $i++) { 
					$result *= $i;
				}
			}
			return $result;
		}
		$res = (factorial(($m)+($n)))/(factorial($m)*factorial($n)); // Формула комбинаторики.

		return $this->render('task015', [
			'res' => $res, 'model' => $model,
		]);
	}

	/**
   * Project Euler task #16.
   *
   * @return mixed
   */
	public function actionTask016()
	{
		$num = $number = 2; // число которое возводим в степень.
		$n = 1000; // степень на которую мы возводим число.
		function Multiplication($a, $b) // произведение двух чисел $a и $b.
		{
			$c = NULL;
			if (strlen($a) == 1 && strlen($b) == 1) {
				$C = strval(intval($a)*intval($b));
			}else{
				$count = $temp = 0;
				$A = strval($a);
				$B = strval($b);
				$lenA = strlen($a);
				$lenB = strlen($b);
				for ($i = $lenB-1; $i >= 0; $i--) {
					for ($j = $lenA-1; $j >= 0; $j--) { 
						$mult = intval($A[$j]) * intval($B[$i]) + $temp;
						if ($mult > 9) {
							$temp = intval(substr(strval($mult),0,-1));
							$c[$count] = substr(strval($mult),-1).$c[$count];
						}else{
							$temp = 0;
							$c[$count] = strval($mult).$c[$count];
						}
					}
					if ($count > 0) {
						$lenC = strlen($c[$count])+$count;
						$c[$count] = str_pad($c[$count], $lenC, "0", STR_PAD_RIGHT);
					}
					if ($temp != 0) {
						$c[$count] = strval($temp).$c[$count];
						$temp = 0;
					}
					$count++;
				}

				if ($count == 1) {
					$C = strval($c[$count-1]);
				}else{
					$lenC = strlen($c[$count-1]);
					foreach ($c as $key => $value) {
						$c[$key] = str_pad($value, $lenC, "0", STR_PAD_LEFT);
					}
					$temp = 0;
					for ($i = $lenC-1; $i >= 0 ; $i--) {
						$count = 0; 
						foreach ($c as $value) {
							$count += intval($value[$i]);
						}
						$count += $temp;
						if ($count > 9) {
							$len_co = strlen($count)-1;
							$temp = intval(substr(strval($count),0,-1));
							$C = substr(strval($count),-1).$C;
						}else{
							$temp = 0;
							$C = strval($count).$C;
						}
					}
					if ($temp != 0) {
						$C = strval($temp).$C;
					}
				}
			}

			return $C;
		}

		for ($i=1; $i < $n; $i++) { 
			$number = Multiplication($number, $num);
		}
		$n = strlen($number);
		for ($j=0; $j < $n; $j++) { 
			$res += intval($number[$j]);
		}


		return $this->render('task016', [
			'res' => $res,
		]);
	}

	/**
   * Project Euler task #17.
   *
   * @return mixed
   */
	public function actionTask017()
	{
		function num2str ($n) {
			$n1_19[1] = "one";
			$n1_19[2] = "two";
			$n1_19[3] = "three";
			$n1_19[4] = "four";
			$n1_19[5] = "five";
			$n1_19[6] = "six";
			$n1_19[7] = "seven";
			$n1_19[8] = "eight";
			$n1_19[9] = "nine";
			$n1_19[10] = "ten";
			$n1_19[11] = "eleven";
			$n1_19[12] = "twelve";
			$n1_19[13] = "thirteen";
			$n1_19[14] = "fourteen";
			$n1_19[15] = "fifteen";
			$n1_19[16] = "sixteen";
			$n1_19[17] = "seventeen";
			$n1_19[18] = "eighteen";
			$n1_19[19] = "nineteen";

			$des[2] = "twenty";
			$des[3] = "thirty";
			$des[4] = "forty";
			$des[5] = "fifty";
			$des[6] = "sixty";
			$des[7] = "seventy";
			$des[8] = "eighty";
			$des[9] = "ninety";

			$hundred = "hundred";
			$thousand = "thousand";

			$num = strval($n);
			$len = strlen($num);
			if ($len <= 6 && $num != 0) {
				if ($num < 20) {
					$result = $n1_19[$num];
				}elseif ($len == 2) {
					if ($num[1] == 0) {
						$result = $des[$num[0]];
					}else{
						$result = $des[$num[0]].'-'.$n1_19[$num[1]];
					}
				}elseif ($len == 3) {
					if ($num[2] == 0 && $num[1] == 0) {
						$result = $n1_19[$num[0]].' '.$hundred;
					}elseif ($num[2] == 0) {
						$result = $n1_19[$num[0]].' '.$hundred.' and '.$des[$num[1]];
					}elseif ($num[1] == 0) {
						$result = $n1_19[$num[0]].' '.$hundred.' and '.$n1_19[$num[2]];
					}elseif (substr($num, -2) < 20) {
						$result = $n1_19[$num[0]].' '.$hundred.' and '.$n1_19[substr($num, -2)];
					}else{
						$result = $n1_19[$num[0]].' '.$hundred.' and '.$des[$num[1]].'-'.$n1_19[$num[2]];
					}
				}else{
					if ($num == 1000) {
						$result = $n1_19[$num[0]].' '.$thousand;
					}
				}	
			}else{
				if ($num == 0) {
					$result = "zero";
				}else{
					$result = "number is too big";
				}
			}

			return $result;
		}

		$res = 0;
		for ($i=1; $i <= 1000; $i++) { 
			$res += strlen(preg_replace(array("/\s/", "/-/"), "", num2str($i))); 
		}

		return $this->render('task017', [
			'res' => $res,
		]);
	}

	/**
   * Project Euler task #18.
   *
   * @return mixed
   */
	public function actionTask018()
	{
		$triangle = [[3], [7, 4], [2, 4, 6], [8, 5, 9, 3]];
		$height = count($triangle);
		function Route($mas){
			for ($i=0; $i < $height; $i++) { 
				
			}
		}

		return $this->render('task018', [
			'triangle' => $triangle, 'height' => $height,
		]);
	}

	/**
   * Project Vlad task #1.
   *
   * @return mixed
   */
	public function actionTaskvlad1()
	{
		$i = 1;
		$j = 2;
		$count = 0;
		while ($i/$j > 0.001) {
			$count++;
			$mas[] = $i.'/'.$j;
			if ($count % 2 == 0) {
				$sum -= $i/$j;
			}else{
				$sum += $i/$j;
			}
			$i++;
			$j *= 2;
		}

		return $this->render('taskvlad1', [
			'sum' => $sum, 'count' => $count, 'mas' => $mas,
		]);
	}
}
?>