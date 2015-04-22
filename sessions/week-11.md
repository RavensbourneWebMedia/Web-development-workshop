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

Whenever you want the browser (or computer) to **remember something**..

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

1. *declare* it: give it a **label**, let the computer/browser know about the variable

	`var myName;`
2. *assign* it: give it a **value**, let the computer/browser know what *value* we are storing in the variable

	`myName = "Matteo";`

### How do we name them? 

* Variable names should be **clear and meaningful**: `myName` is better than `n` or `name` 
* Variable names should begin with letters, `$` or `_` and only contain letters, numbers, `$` and `_`
* Variable names are **case sensitive**, which means that `myName` is different to `myname` or `MyName` or `MYNAME`
* Variable names cannot be multiple words, so you can use [*camel case*](http://en.wikipedia.org/wiki/CamelCase) for  variables like `userTelephoneNumber` (instead of `usertelephonenumber`).

# Functions

# Objects

# Arrays

# Loops

use `while` and Choc

# Templating

Use example from github




# Assignment

- [ ] TODO


### APIs 

* Data from the Web
* Don't care what it looks like, just give me the data (see [The interface layer](https://medium.com/bridge-collection/the-interface-layer-when-design-commoditizes-tech-e7017872173a)) and I'll make it work and look proper
* URLs to get and send data, examples

	* Google
	* Facebook (www vs graph)
	* Gender-api
	* Mashape?
	* Edamam