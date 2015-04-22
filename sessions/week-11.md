# Week 11

### Today, Friday 24th April 2015

1. Variables
* Functions
* Objects
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

### Programming is a **way of thinking**.

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

### How do we name them? 

* Variable names should be **clear and meaningful**: `myName` is better than `n` or `name` 
* Variable names should begin with letters, `$` or `_` and only contain letters, numbers, `$` and `_`
* Variable names are **case sensitive**, which means that `myName` is different to `myname` or `MyName` or `MYNAME`
* Variable names cannot be multiple words, so you can use [*camel case*](http://en.wikipedia.org/wiki/CamelCase) for  variables like `userTelephoneNumber` (instead of `usertelephonenumber`).

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

# Objects

# Arrays

# Loops

use `while` and Choc

# Templating

Use example from github


# Resources

[JavaScript for cats](http://jsforcats.com) is an interactive, easy introduction to JavaScript. 

Intended audience: *cats*.

[![](http://jsforcats.com/images/customers5.jpg)](http://jsforcats.com)


# Assignment

- [ ] TODO


### APIs 

Like calling a function over the Web


* Data from the Web
* Don't care what it looks like, just give me the data (see [The interface layer](https://medium.com/bridge-collection/the-interface-layer-when-design-commoditizes-tech-e7017872173a)) and I'll make it work and look proper
* URLs to get and send data, examples

	* Google
	* Facebook (www vs graph)
	* Gender-api
	* Mashape?
	* Edamam