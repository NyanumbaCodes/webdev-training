<?php
class company
{
    public $name;
    public $department;
    public $location;
    public $krapin;
    public $employees;

    public function setName($name)
    {
        return $this->name = $name;
    }
    public function setKrapin($kra)
    {
        return $this->krapin = $kra;
    }
    public function setDepartments($department)
    {
        return $this->department = $department;
    }
    public function setLocation($location)
    {
        return $this->location = $location;
    }
    public function setEmployees($employees)
    {
        return $this->employees = $employees;
    }
    public function getDetails()
    {
        return [
        "name" => $this->name,
        "location" => $this->location,
        "department" => $this->department,
        "krapin" => $this->krapin,
        "employees" =>$this->employees
        ];
    }
    
}
$company = new Company();
$company->setName("Jhastine PLC");
$company->setLocation("Nairobi");
$company->setEmployees(["John Doe", "Jane Doe", "Jim Doe", "Jill Doe", "Jack Doe"]);
$company->setDepartments(["Sales", "Marketing", "IT", "HR", "Finance"]);
$company->setKrapin("A0123456");


print_r($company->getDetails());