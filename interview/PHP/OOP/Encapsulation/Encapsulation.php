<?php

namespace Interview\PHP\OOP\Encapsulation;
/*
https://medium.com/@miladev95/oop-encapsulation-in-php-2cc5e4a7148d

Encapsulation in PHP is a fundamental concept of Object-Oriented Programming (OOP) that involves bundling data and the methods that operate on that data within a single unit, known as a class. It allows you to control access to the internal state (properties) of an object and provides a public interface (methods) to interact with that object. Encapsulation helps in achieving data abstraction, code maintainability, and security.

Encapsulation in PHP, as in any object-oriented programming language, offers several benefits and is considered a good practice. Here are some reasons why you should use encapsulation in PHP:

Data Protection: Encapsulation helps protect the internal state (properties) of an object from direct external access. By defining properties as private or protected, you restrict access to those properties only through specific methods (getters and setters). This ensures that the object’s state remains consistent and prevents unauthorized modifications.
Code Maintainability: Encapsulation promotes code maintainability by encapsulating the implementation details within a class. By exposing a public interface (methods) to interact with the object, you can change the internal implementation without affecting the external code that uses the object. This provides a level of abstraction and allows for easier updates and modifications in the future.
Code Flexibility: Encapsulation allows you to change the internal implementation of a class without impacting the code that uses the class. By encapsulating the implementation details, you can freely modify the private and protected properties or even change the entire class structure, as long as the public interface remains unchanged. This flexibility promotes code evolution and makes your codebase more adaptable to changing requirements.
Code Reusability: Encapsulation encourages reusable code components. By encapsulating related data and behavior within a class, you create self-contained objects that can be reused in different parts of your application or in other projects. This promotes modularity and reduces code duplication.
Security and Validation: Encapsulation allows you to enforce data validation and security measures. By using setter methods, you can validate and sanitize input data before assigning it to the object’s properties. This helps in ensuring data integrity and preventing the introduction of invalid or malicious data into the object’s state.
Improved Collaboration: Encapsulation improves collaboration among developers by providing clear boundaries and interfaces for interacting with objects. Classes that follow encapsulation principles are self-contained units that can be developed and tested independently. This promotes parallel development, easier integration, and better collaboration within development teams.
In PHP, you can achieve encapsulation by defining class properties as private, protected, or public, and providing getter and setter methods to manipulate and retrieve the values of those properties. Here’s an example to illustrate encapsulation in PHP:
*/

class Person
{
    private $name;
    protected $age;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($age >= 0) {
            $this->age = $age;
        }
    }
}

// $person = new Person();
// $person->setName("John");
// $person->setAge(25);

// echo "Name: " . $person->getName();  // Output: Name: John
// echo "Age: " . $person->getAge();    // Output: Age: 25

/*
In this example, the Person class has two properties: $name and $age. The $name property is defined as private, meaning it can only be accessed within the class itself. The $age property is defined as protected, allowing it to be accessed within the class and any subclasses that inherit from it.

The class provides getter methods (getName() and getAge()) to retrieve the values of the properties, and setter methods (setName() and setAge()) to modify the values of the properties. The setter methods can include validation logic, such as ensuring that the age is a non-negative value.

By encapsulating the properties and providing controlled access through getter and setter methods, you can enforce data integrity and encapsulate the internal implementation details of the Person class. Other parts of the code interact with the Person object using the public interface, ensuring consistent and controlled access to the object's state.

Encapsulation in PHP helps in hiding implementation details, preventing direct manipulation of properties, and promoting code maintainability by allowing you to change the internal implementation without affecting the external code that uses the object. It also provides an additional layer of security by controlling access to sensitive data or operations.

Overall, encapsulation in PHP promotes code organization, maintainability, flexibility, and security. It helps in creating clean and robust code that is easier to understand, modify, and reuse. By encapsulating data and behavior within classes and providing controlled access through methods, you create more reliable and maintainable software systems.
*/
