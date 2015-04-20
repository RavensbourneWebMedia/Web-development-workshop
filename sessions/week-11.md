# Week 11

### Today, Friday 24th April 2015

1.Variables
* Functions
* Objects
* Arrays
* Loops
* Templating

# Building blocks

Different syntax, same building blocks. No matter which language you're using.

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

# Variables

# Functions
# Objects
# Arrays
# Loops
# Templating



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