<?php
class Worker 
{
	private $name;
	private $age;
	private $salary;
	
	public function setName($name) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	private function checkAge($age)
	{ 
		if ($age >= 1 && $age < 100) {
			return $age = true;
		} else {
			return $age = false;
		}
    }
	
	
	public function setAge($age) {
		if ($this->checkAge($age)) {
		$this->age = $age;
		}
	}
	public function getAge() {
		return $this->age;
	}
	public function setSalary($salary) {
		$this->salary = $salary;
	}
	public function getSalary() {
		return $this->salary;
	}
	

	
	public function NameSalary() {	
		 printf(
            'Имя: %s, возраст: %s<br>',
            $this->getName(),
            $this->getAge()
        );
	}
}
$ivan = new Worker;
	$ivan->setName('Иван');
	$ivan->setAge(25);
	$ivan->setSalary(1000);
	
$vasa = new Worker;
	$vasa->setName('Вася');
	$vasa->setAge(26);
	$vasa->setSalary(2000);	
	
$sumAge = $vasa->getAge() + $ivan->getAge();
$sumSalary = $vasa->getSalary() + $ivan->getSalary();
echo 'Сумма зарплат ' . $sumSalary . '<br>';
echo 'Сумма возрастов ' . $sumAge . '<br>';

$ivan->NameSalary();
$vasa->NameSalary();
