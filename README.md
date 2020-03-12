# The Chain of Responsability Pattern in PHP

The code of this example is based on the [Laracasts](https://laracasts.com/) lesson on the [The Chain of Responsability Pattern](https://laracasts.com/series/design-patterns-in-php/episodes/5).

The Chain of Responsability pattern allows to simplify of the code by creating a single class for each responsability (single responsability principle). Each of the responsability is connected to the next where the responsability represent a functionality that we want to add to the chain. Any of the object in the chain can block the execution if the condition to traverse that object are not respected.

All responsabilities inherit from the same base class or interface, in this example an abstract class is used. This facitilates the chaining of the object by calling the abstract method defined in the contract which represents the responsability of the sub classes. (e.g HomeChecker::check())

The pattern helps to have a better design of the system in situations where different conditions need to be verified for a request to be satisfied. It also allows to extend the functionalities of a system by chaining new objects/responabilities.

## Info

You could run the code in your local environment by cloning the repo:

`git clone https://github.com/federico-boncaldo/chain-of-responsability-php.git`

and from command line running:

`php index.php`

## Requirements

PHP 5 or greater