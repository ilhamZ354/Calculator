<?php

if(isset($_POST['angka'])){
    $bil = $_POST['angka'];
    // echo $bil;


class StringParser {
  private $operators;
  private $bilangan;

  public function __construct($inputAngka) {
    $this->operators = array();
    $this->bilangan = array();

    $this->parseString($inputAngka);
  }

  private function parseString($inputAngka) {
    $operatorTemp = '/[-+*\/]/'; 
    $operators = preg_match_all($operatorTemp, $inputAngka, $matches);

    $this->operators = $matches[0];

    $angkaTemp = '/\d+/';
    $bilangan = preg_match_all($angkaTemp, $inputAngka, $matches);

    $this->bilangan = $matches[0];
  }

  public function getNumbers() {
    return $this->bilangan;
  }

  public function getOperators() {
    return $this->operators;
  }
}

$inputAngka = $bil;
$stringParser = new StringParser($inputAngka);

$bilangan1 = $stringParser->getNumbers();
$operators1 = $stringParser->getOperators();

// for ($i = 0; $i <count($bilangan); $i++) {
//   echo "Number: " . $bilangan[$i] ."<br>";
// }

// for ($i = 0; $i <count($operators); $i++) {
//   echo "Operator: " . $operators[$i] ."<br>";
// }


class Calculator {
  public static function calculate($bilangan, $operators) {

    $result = $bilangan[0];

    for ($i = 0; $i < count($operators); $i++) {
      $number = $bilangan[$i + 1];
      $operator = $operators[$i];

      switch ($operator) {
        case '+':
          $result += $number;
          break;
        case '-':
          $result -= $number;
          break;
        case '*':
          $result *= $number;
          break;
        case '/':
          $result /= $number;
          break;
        default:
          throw new Exception("Invalid operator: $operator");
          break;
      }
    }

    return $result;
  }
}

$bilangan = $bilangan1;
$operators = $operators1;

$result = Calculator::calculate($bilangan, $operators);



$hasil = $result;
// if($hasil=''){
//     $hasil='0';
// }
}
?>
