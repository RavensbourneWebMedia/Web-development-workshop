# Week 11

### Today, Friday 24th April 2015

1. Variables
* Objects
* Functions
* APIs
* Logic
* Arrays
* Loops
* Templating



# Building blocks

Different *syntax*, same *building blocks*. No matter which language you're using.

Compare these two programs. 

**JavaScript**
```js
// declare a variable
var weather = "sunny";

// define a function
function greet() {
	if (weather == "sunny") {
		alert("Good morning sunshine!");
	} else {
		alert("Where is the sun today?");
	}
}

// run a function
greet();
```

**PHP**
```php
// declare a variable
$weather = "sunny";

// define a function
function greet() {
	global $weather; 
	if ($weather == "sunny") {
		echo("Good morning sunshine!");
	} else {
		echo("Where is the sun today?");
	}
}

// run a function
greet();
```

### Programming is a **way of thinking**

[ ] [Learnable Programming](http://worrydream.com/LearnableProgramming) 


# Variables

### When?

Whenever you want a computer to **remember something**.

### Why?

Variables are useful because they let us write programs without knowing the data which will flow through them.

```js
// We don't know their name yet, but we can define how to greet them
function greet(name) {
	alert("Hello " + name + "!");
}
// we store their name in a variable
var userName = prompt("What's your name?");
// and then we greet them using that variable
greet(userName);
```

### How?

To use a variable, we must 

1. *declare* it: give it a **label**, let the computer know about the variable

	`var myName;`
2. *assign* it: give it a **value**, let the computer know what *value* we are storing in the variable

	`myName = "Matteo";`

#### How do we name them? 

* Variable names should be **clear and meaningful**: `myName` is better than `n` or `name` 
* Variable names should begin with letters, `$` or `_` and only contain letters, numbers, `$` and `_`
* Variable names are **case sensitive**, which means that `myName` is different to `myname` or `MyName` or `MYNAME`
* Variable names cannot be multiple words, so you can use [*camel case*](http://en.wikipedia.org/wiki/CamelCase) for  variables like `userTelephoneNumber` (instead of `usertelephonenumber`).


# Objects

### When?

Whenever you want to store a bunch of related values together.

### Why?

**Objects** are useful to keep things organised.

### How?

To create an object, we declare a variable like we normally would, and then we use curly brackets to surround **key-value** property pairs:

```js
var objectName = { 
  propertyName: propertyValue,
  propertyName: propertyValue,
  ...
};
```

For example

```js
var cat = 
{
	name: "Bruno",
	age: 2,
	meow: function() { 
		alert("MEOOOOOOW") 
	},
	drink: function(beverage) { 
		alert("I am drinking " + beverage) 
	}
}
```

#### How do we access them?

An object is not useful unless we can look inside it and grab the values of its properties. 

We can do that in two ways:

1. using *dot notation*, where we write the name of the variable, followed by a `.` and then the property name

	`cat.name`
	
2. using *bracket notation*, where we write the variable name, then square brackets with the property name inside in speech marks

	`cat["name"]`

#### How do we change them?

We can change the values of the object properties at any time during a program, using the *dot* or *bracket* notation.

`cat.name = "Bob";`

We can also add entirely new properties!

`cat.colour = "brown";`

# Functions

### When?

Whenever we want a computer to **do something**, like capturing an input, making a calculation, comparing data, answering a question, sending data, requesting data, drawing stuff on screen... 

### Why?

Functions are useful to **make code reusable and flexible**. For instance, the action of *drinking* remains the same, no matter what you are drinking.

```js
cat.drink = function(beverage) { 
	alert("I am drinking " + beverage); 
}
// let the cat drink various drinks
cat.drink("milk");
cat.drink("tea");
cat.drink("beer");
```

### How?

To use a function, we must

1. *declare* it: give it a **name** and teach the computer about the **steps** required to perform that action

	```js
	function meow() {
		alert("MEOOOOOOW");
	}
	``` 
2. *call* it: tell the computer to **execute** the code inside the function, by writing its name followed by round brackets	

	```js
	meow();
	// and again
	meow();
	```

### Arguments

`meow()` is a **reusable** function. How can we make it **flexible**?

```js
function meow(message) {
	alert("MEOOOOOOW " + message);
}
// different messages
meow("I'm hungry");
meow("I need a nap");
``` 

The `message` is a **parameter**, that is a [variable](#variables) which lives inside the `meow` function.

`I'm hungry` and `I need a nap` are called **arguments** ([don't argue, that's what they're called](http://programmers.stackexchange.com/questions/186293/why-are-actual-parameters-called-arguments)) and they are the actual values that we *pass* to a function.

### What happens in a function, stays in a function

There's another powerful thing we can do with functions: we can use them to take in some values, compute them, and then return a new value.

```js
function areYouAnAdult(age) {
  var answer;
  if (age < 18) answer = "no";
  else answer = "yes";
  return answer;
};
```

`return` does two things: 

1. it gives a value back to whoever asked for it 
2. it immediately exits the function

```js
areYouAnAdult(16); // returns "no"
areYouAnAdult(23); // returns "yes"
```

Without `return` we wouldn't know the answer!

# APIs

> Like calling a function over the Web..


* Data from the Web
* Don't care what it looks like, just give me the data (see [The interface layer](https://medium.com/bridge-collection/the-interface-layer-when-design-commoditizes-tech-e7017872173a)) and I'll make it work and look proper
* URLs to get and send data, examples

	* Google
	* Facebook (www vs graph)
	* Gender-api
	* Mashape?
	* Edamam

Data APIs vs service APIs


# Arrays

### When?

When you want to store a list of things that have the **same data structure**.

Data APIs often return **lists** of objects (a list of recipes, or a list of photos, or a list of posts).

Each object contains different data, but has the same data structure.

### Why?

Because it's useful to have consistent data structures when you need to compare a lot of values quickly.

We may want to compare them so that we can sort them (eg the most popular picture, or the recipe with the shortest preparation time)

### How?

To create an array, we declare a variable like we always do, but then we surround our list of values with *square brackets* and separate each value with a comma.

To create an array of **numbers**
```js
var primeNumbers = [2, 3, 5, 7, 11, 13]; 
// the list goes on but we stop here
```

We can store any sort of JavaScript value in an array, not just numbers. Here's an example where we make an array of **strings**

```js
var animals = ["antelope", "zebra", "cat", "dog"]; 
// the list could go on
```

APIs often return arrays of **objects**

```js
var recipes = [
	{
		name: 'Banana bread',
		ingredients: [ ... ],
		picture: 'http://example.com/banana-bread.jpg'
	},
	{
		name: 'Banana fritters',
		ingredients: [ ... ],
		picture: 'http://example.com/banana-fritters.png'
	}
];
// the list could go on
```

#### How long?

To know how long an array is, we can use its `length` property

`recipes.length`

#### How do we access them?

When we want to access a particular value in an array, we access it by referencing its **index** in the array, which represents its *position* in the list. 

The first index in an array is `0`, so if we want to access the first element in an array, we specify the name of the array variable, then `0` in square brackets

```js
var animals = ["antelope", "zebra", "cat", "dog"]; 

animals[0] // "antelope"
animals[2] // "cat"
```

The **zero-based indexing** is one of the most confusing aspects of arrays for new programmers :scream_cat:

#### How do we change them?

Arrays can be changed in many ways. To change a value

```js 
animals[1] = "crocodile";
```

We can also add entirely new values to them, using the `push()` function

```js 
animals.push("penguin");
```


# Loops

We often want to take some action for every element in an array, like how we used the text() command to display the names above. Instead of writing that code over and over, it's better to use a for loop to iterate through each of the elements in the array, and do something to each element inside the loop. We have to start from index 0, go until we reach the end of the array, and add 1 to the index each time. Here's how we'd do that:
for (var i = 0; i < myFriends.length; i++) {
   text(myFriends[i], 200, i*100);
}

Notice how we put i inside the square brackets, because it represents the current index each time the loop is run.

use `while` and Choc

# Templating

Use example from github


# Resources

[JavaScript for cats](http://jsforcats.com) is an interactive, easy introduction to JavaScript. 

Intended audience: *cats*.

[![](http://jsforcats.com/images/customers5.jpg)](http://jsforcats.com)


# Assignment

- [ ] TODO
