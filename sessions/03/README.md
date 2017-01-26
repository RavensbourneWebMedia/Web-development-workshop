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
Jacob<br>Kevin | Tim Berners-Lee 
Callum<br> | HyperText
Dom<br> | HTTP
Clarenz<br> | DNS
Emma<br> | IP address
Ricardo<br> | Browser
Mayur<br> | Server
Peyman<br> | Internet submarine cables  
Muhammed<br> | Net neutrality


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

[![](assets/pinned-drone.gif)](../../resources/scroll-magic)

Here's [all the code for the finished thing](../../resources/scroll-magic).

## Step by step

### Download the starter kit

[Download the zip](../../resources/week-3-package.zip) containing all the files.

### CSS and JS in `head`

Open `index.html`.   
  
Notice in the `head` we're loading a bunch of CSS files (eg: `<link href="css/style.css" rel="stylesheet">`) and JS files (eg: `<script src="js/lib/jquery.min.js"></script>`).  
 
* **CSS** gives us the style.

* **JS** gives us the fancy logic (eg: `when this scrolls past that, flip it`). 

### Flexbox, remember? 

Open `css/style.css` and find the following code:  
	
```css
.flex-h-centred
{
	display: flex;
	justify-content: center; 
}

.flex-v-centred
{
	display: flex;
	align-items: center;
}

.flex-v-bottom
{
	display: flex;
	align-items: flex-end;
}  
```	

[Remember *Flexbox*](http://flexboxfroggy.com)?

Can you find where the classes above are applied in `index.html`?

### Preparing our HTML for ScrollMagic

In `body` notice
	
```html
<div id="triggerDrone1" class="trigger"></div>
<section id="two" class="full flex-h-centred flex-v-centred">
	<div id="drone1" class="drone">
		<img src="images/drone.png" alt="Describe this image!">
	</div>
</section>
```	  
 
Before `section` there's a `div` identified as `triggerDrone1` which we'll use to trigger *scroll-magic* on the `drone` element to make it stick (and perhaps other fancy stuff) whilst we scroll.
	
### Let the ScrollMagic begin	
	
It's time to write some JavaScript!  
  
Scroll down to the bottom of the `body` and find
```html
<script>

	$(function() 
	{
		// WRITE ALL YOUR JS CODE BETWEEN HERE

		// AND HERE
	})

</script>
```

You'll write your JS code between those two lines that start with	 `//`.

```js
// start a new ScrollMagic controller
var controller = new ScrollMagic.Controller()

/* Let's set the scene */
// 1. We define how in the variable sceneOptions
var sceneOptions = {}

// '#triggerDrone1' will select the element with id="triggerDrone1"
sceneOptions.triggerElement = '#triggerDrone1'

sceneOptions.duration = '100%' // will keep the element pinned for X% of the browser's height
// sceneOptions.duration = 0 // 0 will keep the element pinned indefinitely	
// sceneOptions.duration = 782 // will keep the element pinned for X pixels

sceneOptions.triggerHook = 0 // from 0 (top) to 1 (bottom), default to center (0.5)

// 2. We create a new "scene" with those options
var scene = new ScrollMagic.Scene(sceneOptions)

// 3. We add indicators so that we know when the scroll magic starts and ends 
scene.addIndicators({name: 'drone1'})

// 4. We add this scene to the main controller
scene.addTo(controller)
```

### Tweening

We'll use a [Tween](https://greensock.com/gsap) to animate `#drone1`.

```js
// 5. Let's use a Tween to animate #drone1
var tweenOptions = {}
tweenOptions.scale = 0.2 // 1 is the normal size
tweenOptions.rotation = -360 // a full rotation
tweenOptions.x = '-200%'
tweenOptions.opacity = 0 // 0 = transparent, 1 = opaque
scene.setTween('#drone1', tweenOptions)
```		

### Pinning

With ScrollMagic we can also *pin* elements, ie: make them stick whilst the rest of the page scroll.

```js
// 6. Let's pin the drone (make it stick whilst the rest of the page scroll)
var pinOptions = {}
pinOptions.pushFollowers = false // pushFollowers: if true, ScrollMagic will create a gap equal to sceneOptions.duration after the pinned element 
// ..and activate the pin
scene.setPin('#drone1', pinOptions)
```	

A pin of a scene that has a `duration` (see `sceneOptions.duration`) will be pinned for the respective amount of scrolled pixels and then released.

If no `duration` is defined, the pinned element will never be released unless scrolling back past the trigger position. 

### Animating with CSS

Let's animate the `h1`. We can use [Animate.css](https://daneden.github.io/animate.css/) for that. 

Just add the class names `animated` and `pulse` to it.

If you want to the animation to loop, add `infinite`.
```html
<h1 class="animated pulse infinite">Beesness</h1>
```

See all the built-in animations on [daneden.github.io/animate.css](https://daneden.github.io/animate.css/)

Or hack your own animation, eg:

```css
@keyframes buzz {
	from, to {
		-webkit-transform: translate3d(0, 0, 0);
		transform: translate3d(0, 0, 0);
	}

	5%, 25%, 45%, 65%, 85% {
		-webkit-transform: translate3d(-2px, 0, 0);
		transform: translate3d(-2px, 0, 0);
	}

	15%, 35%, 55%, 75%, 95% {
		-webkit-transform: translate3d(2px, 0, 0);
		transform: translate3d(2px, 0, 0);
	}
}

.buzz {
	-webkit-animation-name: buzz;
	animation-name: buzz;
}
```

	
# Project

### Sharing is caring

This project is about using code (HTML, CSS and a dash of JavaScript) creatively to communicate and advocate a cause you care about.

All the project material is [here](../../projects/sharing-is-caring).

In small groups, review your concepts and storyboards:

1. What is your ***call to action***?
* What **story** does your page tell?  
* How can you **visualise information** make a stronger argument? Refer to [Visualising information for advocacy](http://visualisingadvocacy.org/).
* How can you **translate your ideas into code**? Re-using code from our workshops and/or code you found online (for instance on [Codrops](http://tympanus.net/codrops/category/tutorials/) or [CodePen](http://codepen.io/)).  


# Homework

### Sharing is caring

1. Start translating your **storyboard into code**.  
  
	Re-use code from our workshops and/or code you found online (for instance on [Codrops](http://tympanus.net/codrops/category/tutorials/) or [CodePen](http://codepen.io/)).
* Work on your page **copy** (the written stuff that people read).   
  
	Make it short and sharp.

### Blog 

Make a **drawing** to illustrate *how the Web works*, based on what you learned in today's [peer-learning](#peer-learning) discussion.

* If you weren't in class, gather your classmates' research notes (they should all be on Google docs).

* It can be anything from a technical diagram to a visual analogy (ie, *the Web looks like XYZ*). The more creative the better :art:

* There is no such thing as a *bad drawing*.
 
* You can use any medium and format. 

Make sure you **take pictures** or **scan** your piece and post them to your blog.