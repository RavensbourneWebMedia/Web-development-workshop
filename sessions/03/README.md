# Week 3

### Today, Wednesday 20th January 2016

1. Peer-learning: [How does it WWWork?](#peer-learning)
* Workshop: [*scroll magic*](#workshop)! 
* Tutorials on [*Sharing is caring*](#project)

<!--

* BONUS: Principles of programming
 
-->

### Your [homework](#homework) and [blog](#blog)!


# Peer-learning

### How does it WWWork?

We can think of the WWW as a **Web of interlinked knowledge** in constant evolution.

To put this concept into practice, let's pretend that each one of us is a `node` in a `network` of knowledge. Each node will hold information about a certain concept related to the WWW. 

Who | What
--- | -----------
Tom<br>Will | Tim Berners-Lee 
Joe<br>Kaleshe | HyperText
Akvile<br>Ben<br>Josh | HTTP
Melissa<br>Dean | DNS
Rosie<br>Shajee | IP address
Francisco<br>Afsara | Browser
Mark<br>Malore | Server
Darren<br>Rajeev | Internet submarine cables  
Jennifer<br>Ajay | Net neutrality


# Workshop

<!--

### Principles of Programming

- [ ] [JavaScript for cats](http://jsforcats.com/)

animate_css.html
callback_duration.html
bezier_path_animation.html

https://daneden.github.io/animate.css/

-->

We're going to use [Animate.css](https://daneden.github.io/animate.css/) and [ScrollMagic](http://scrollmagic.io) to add some *magical scroll interactions* to our [previous demo](../01#workshop).

Here's [all the code for the finished thing](../../resources/scroll-magic).

### Step by step

1. [Download the zip]() containing all the required files.
* Open `index.html`.   
  
	Notice in the `head` we're loading a bunch of CSS files (eg: `<link href="css/normalize.css" rel="stylesheet">`) and JS files (eg: `<script src="js/lib/jquery.min.js"></script>`).
* In `body` notice
	
	```html
	<div id="triggerDrone1" class="trigger"></div>
		<section id="two" class="full">
			<div class="spacer one-of-three"></div>
			<div class="drone one-of-three" id="drone1">
				<img src="images/drone.png" alt="Describe this image!">
			</div>
			<div class="spacer one-of-three"></div>
		</section>
	```	
* Create a new CSS file and add it to the `head`  
  
	`<link href="css/scrollmagic.css" rel="stylesheet">`  
  
  Style the element to pin.
	```css 
	.drone 
	{
		width: 320px;
		height: 320px;
		margin: auto;
	}
	
	.drone img 
	{
		width: 100%;
	}
	```
	
	Style the elements creating space around it.
	```css 
	.spacer
	{
		display: block;
	}
	
	.spacer.one-of-three
	{
		height: 33.333333%;
	}
	
	.spacer.one-of-two
	{
		height: 50%;
	} 
	```
* JavaScript!
	```js
	// start a new ScrollMagic controller
	var controller = new ScrollMagic.Controller()

	// let's pin the drone
	var sceneOptions = {}
	sceneOptions.triggerElement = '#triggerDrone1'

	// sceneOptions.duration = 0 // 0 will keep the element pinned indefinitely	
	// sceneOptions.duration = 782 // will keep the element pinned for X pixels
	sceneOptions.duration = '100%' // will keep the element pinned for X% of the browser's height

	// sceneOptions.offset = -782/2 // moves the element up (negative number) or down (positive). Pixels only, no percentages
	
	sceneOptions.triggerHook = 0 // from 0 (top) to 1 (bottom), default to center (0.5)

	var scene = new ScrollMagic.Scene(sceneOptions)
	scene.setPin('#drone1' {pushFollowers: false })
	// scene.addIndicators({name: 'drone1'}) // add indicators 
	scene.addTo(controller)
	```	 

# Project

### Sharing is caring

This project is about using code (HTML, CSS and a dash of JavaScript) creatively to communicate and advocate a cause you care about.

All the project material is [here](../../projects/sharing-is-caring).

In small groups, review your concepts and storyboards:

1. What is your ***call to action***?
* What **story** does your page tell?  
* How can you **visualise information** make a stronger argument? Refer to [Visualising information for advocacy](http://visualisingadvocacy.org/).
* How can you **translate your idea into code**? Re-using code from our workshops and/or code you found online (for instance on [Codrops](http://tympanus.net/codrops/category/tutorials/) or [CodePen](http://codepen.io/)).  


# Homework

### Blog 