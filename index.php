<?php

class Worker 
{
	private $name;
	private $age;
	private $salary;
	
	public function setName($name) {
		return $this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setAge($age) {
		if ($this->checkAge($age)) {
			return $this->age = $age;
		} 
	}
	public function getAge() {
		return $this->age;
	}
	public function setSalary($salary) {
		return $this->salary = $salary;
	}
	public function getSalary() {
		return $this->salary;
	}
	private function checkAge($age) {
		if ($age > 1 && $age < 100) {
			$this->setAge($age); return true
		} else {
			return false;
		}
	}
}

$ivan = new worker;
	$name = 'Иван';
	$ivan->getName = $name;
	$age = 25;
	$ivan->getAge = $age;
	$salary = 1000;
	$ivan->setSalary = $salary;
	
$vasa = new worker;
	$name = 'Вася';
	$vasa->getName = $name;
	$age = 26;
	$ivan->getAge = $age;
	$salary = 2000;
	$vasa->setSalary = $salary;


$result = $vasa->setSalary + $ivan->setSalary;
echo $result;
