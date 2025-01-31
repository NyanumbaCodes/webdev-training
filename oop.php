<?php
/*
Object Oriented Programming Concepts

1. Class
2. Object
3. Inheritance - Inheritance is the process of creating a new class based on an existing class. The new class inherits all the properties and methods of the existing class.
4. Polymorphism - Polymorphism is the ability of an object to take on many forms.
5. Encapsulation - Encapsulation is the process of hiding the implementation details of a class from the outside world.
6. Abstraction - Abstraction is the process of hiding the implementation details of a class from the outside world.

*/
class Company
{
    public $employees;
    public $name;
    public $location;

    public $departments;

    public function getEmployees()
    {
        return $this->employees;
    }

    public function getDepartments()
    {
        return $this->departments;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function setDepartments($departments)
    {
        $this->departments = $departments;
    }

    public function setEmployees($employees)
    {
        $this->employees = $employees;
    }
}



$company = new Company();
$company->setName("Safaricom PLC");
$company->setLocation("Nairobi");
$company->setDepartments(["Sales", "Marketing", "IT", "HR", "Finance"]);
$company->setEmployees(["John Doe", "Jane Doe", "Jim Doe", "Jill Doe", "Jack Doe"]);

print_r($company->getDepartments());

$company2 = new Company();
$company2->setName("Kenya Airways");
$company2->setLocation("Nairobi");
$company2->setDepartments(["Sales", "Marketing", "IT", "HR", "Finance"]);
$company2->setEmployees(["John Doe", "Jane Doe", "Jim Doe", "Jill Doe", "Jack Doe"]);

print_r($company2->name);




class Human
{
    public $name;
    public $dateOfBirth;
    public $gender;

    public bool $is_washed;

    public function wash()
    {
        $this->is_washed = true;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getDetails()
    {
        return [
            "name" => $this->name,
            "dateOfBirth" => $this->dateOfBirth,
            "gender" => $this->gender,
            "is_washed" => $this->is_washed
        ];
    }
}
echo "\n";
echo "\n";
$human = new Human();
$human->setName("Justine Stephanie Anyango Odhiambo");
$human->setDateOfBirth("2001-11-04");
$human->setGender("Female");
$human->wash();

print_r($human->getDetails());

$human2 = new Human();
$human2->setName("Steve Omwebu Nyanumba");
$human2->setDateOfBirth("1996-11-06");
$human2->setGender("Male");
$human2->wash();

print_r($human2->getDetails());



// Inheritance

class Student extends Human
{
    public $student_id;
    public $course;
    public $yearOfStudy;

    public function setStudentId($student_id)
    {
        $this->student_id = $student_id;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function setYearOfStudy($yearOfStudy)
    {
        $this->yearOfStudy = $yearOfStudy;
    }

    public function getDetails()
    {
        return [
            "name" => $this->name,
            "student_id" => $this->student_id,
            "course" => $this->course,
            "yearOfStudy" => $this->yearOfStudy
        ];
    }
}

$student = new Student();
$student->setName("Justine Stephanie Anyango Odhiambo");
$student->setDateOfBirth("2001-11-04");
$student->setGender("Female");
$student->setStudentId("1234567890");
$student->setCourse("Computer Science");
$student->setYearOfStudy("2024");

print_r($student->getDetails());



// Polymorphism

class Animal
{
    public function makeSound()
    {
        return "The animal makes a sound";
    }
}   

class Dog extends Animal
{
    public function makeSound()
    {
        return "Woof Woof";
    }
}   

class Cat extends Animal
{
    public function makeSound()
    {
        return "Meow Meow";
    }
}

$animal = new Animal();
$dog = new Dog();
$cat = new Cat();

//In Polymorphism, the same method can be used for different objects. The phenomenon is called method overriding.

print_r($animal->makeSound());
echo "\n";
print_r($dog->makeSound());
echo "\n";
print_r($cat->makeSound());



// Encapsulation
// Encapsulation is the process of hiding the implementation details of a class from the outside world.

echo "\n";
echo "\n";
echo "Encapsulation";
echo "\n";
echo "\n";

class Teacher{
    private $first_name;
    private $last_name;
    private $dateOfBirth;
    private $gender;
    private $salary; 

    public function setName($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->first_name . " " . $this->last_name;
    }

    public function getDetails()
    {
        return [
            "name" => $this->name,
            "dateOfBirth" => $this->dateOfBirth,
            "gender" => $this->gender,
            "salary" => $this->salary
        ];
    }
}

$teacher = new Teacher();
$teacher->setName("John", "Doe");
$teacher->setDateOfBirth("1980-01-01");
$teacher->setGender("Male");
$teacher->setSalary(100000);

print_r($teacher->getDetails());


class ClassTeacher extends Teacher
{
    public $class;

    public function setClass($class)
    {
        $this->class = $class;
    }

    public function getDetails()
    {
        return [
            "name" => $this->getName(),
            "class" => $this->class
        ];
    }
    
}
echo "\n";
echo "\n";
$classTeacher = new ClassTeacher();
$classTeacher->setName("John", "Doe");
$classTeacher->setDateOfBirth("1980-01-01");
$classTeacher->setGender("Male");
$classTeacher->setSalary(100000);
$classTeacher->setClass("Class 1");

print_r($classTeacher->getDetails());   



// Public: Accessible from anywhere
// Private: Accessible only within the class
// Protected: Accessible within the class and its subclasses. Subclasses can access the protected properties and methods of the parent class.



// Abstraction
// Abstraction is the process of hiding the implementation details of a class from the outside world.


echo "\n";
echo "\n";

// Example of Abstraction

class Vehicle
{
    public function start()
    {
        return "The vehicle is starting";
    }
}

class Car extends Vehicle
{
    public function start()
    {
        return "The car is starting";
    }
}

$vehicle = new Vehicle();
$car = new Car();

print_r($vehicle->start());
print_r($car->start());




// Importance of Abstraction
// Abstraction is important because it allows us to hide the implementation details of a class from the outside world.
// It allows us to focus on the essential features of a class and ignore the implementation details.
// It allows us to create more flexible and reusable code.
// It allows us to create more secure code.


//Importance of OOP
// OOP is important because it allows us to create more flexible and reusable code.
// It allows us to create more secure code.
// It allows us to create more efficient code.
// It allows us to create more scalable code.
// It allows us to create more maintainable code.
// It allows us to create more extensible code.
// It allows us to create more testable code.
// It allows us to create more readable code.

