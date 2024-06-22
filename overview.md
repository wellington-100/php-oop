




#   OOP / PHP
    !!! PHP > C++, Java, C#, TypeScript...

    > class / object (instance)
    > namespacing
    > static / non-static
    > properties
    > acces modifiers
    > magic methods

    > abstraction
    > inheritance
    > abstract classes
    > interfaces
    > traits

    > overriding
    > overloading
    > polymorphism

    > SOLID
    > design patterns
    > packages / PSR
    > composer

    //////////////////////////////////////////

    class:
        > box / container (static) - grouping properties and methods
        > blueprint for creating objects / instances


        ////////
        HW1: create 2 files:        +
            index.php -> main file
            lib.php -> library
                |
               declare a class name Post:
                    properties: title, body, author, publishedAt...
                    methods:
                        renderAsHTML() -> return the HTML equivalent of the post
                        renderAsXML () -> return the XML equivalent of the post
                        renderAsJSON () -> return the JSON equivalent of the post



////
HW1:
define class Profile
                |
                +-- name
                +-- avatar
                +-- isOnline

    define a constructor
    define a toHTML()
    create a few profile objects and render them on the page

HW2:
    in Length class, add encapsulation for "value" allow only >=0   +

HW3: implement __isset() so it returns true only if link has a non-empty text and url