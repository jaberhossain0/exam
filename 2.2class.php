<?php
/* class is a paradigm. how someone writes code and organize code 
1. state - property
2 behaviour -method
*/


// class Animal
// {
//     public $name;
//     public $color;
//     public $size;

//     function __construct($_name, $_color, $_size)
//     {
//         $this->name = $_name;
//         $this->color = $_color;
//         $this->size = $_size;
//     }

//     public function eat()
//     {
//         echo "animals eat";
//     }
//     static function sleep()
//     {
//         echo "sleeping";
//     }
//     /* final function makeSound()
//     {
//         return "making a sound";
//     } */
//     public function makeSound()
//     {
//         return "making a sound";
//     }
// }

// $a_cow = new Animal("Mohesh", "red", "big");
// $a_cat = new Animal("Tom", "blue", "small");

// echo "<pre>";
// print_r($a_cow);
// echo "</pre>";
// echo "<pre>";
// print_r($a_cat);
// echo "</pre>";
// // echo $a_cow->name . "<br>";
// // echo $a_cow->makeSound();

// class Cat extends Animal
// {
//     public $tail_size;

//     function __construct($_name, $_color, $_size, $_tail_size)
//     {
//         parent::__construct($_name, $_color, $_size);
//         $this->tail_size = $_tail_size;
//     }

//     public function nightVision()
//     {
//         echo "I can see in the dark";
//     }
//     public function makeSound()
//     {
//         return "Meow";
//     }
// }

// $another_cat = new Cat("mini", "white", "small", "long");
// echo $another_cat->name;
// echo $another_cat->tail_size;
// echo $another_cat->makeSound();

class User
{
    public $username;
    private $password;
    public $fullName;
    protected $email;

    function __construct($_username, $_password, $_fullName, $_email)
    {
        $this->username = $_username;
        $this->password = $_password;
        $this->fullName = $_fullName;
        $this->email = $_email;
    }

    function makePost() {}

    function deletePost() {}

    function makeComment() {}
    function giveLike() {}
}

class Moderator extends User
{
    function deleteOthersPost() {}
}

class Admin extends Moderator
{
    function addUser() {}

    function deleteUser() {}

    function promoteToModerator() {}
    function demoteToUser() {}
}
?>