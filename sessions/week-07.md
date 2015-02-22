# Week 7

### Today, Monday 23rd February 2015

1. Wireframes critique
* Animations and transitions with CSS
* Tutorials


# A reminder

This is a [checklist](https://github.com/RavensbourneWebMedia/WEB14104/blob/master/sessions/week-09.md#checklist-for-presentations) of what we want you to present during your formative assessment (in 2 weeks' time).



# Wireframes critique

Let's jot down links, notes and feedback on [this Google Doco](https://docs.google.com/document/d/1uyNXHq_kSXdq3yOMidOq9yI9rISGsglXYJifeqN-wTs/edit?usp=sharing) 

Remember:
 
> Be hard on content and soft on people!

### Leading questions

* Is anything important missing from this page?
* Is the most important content the first thing you notice?
* Is there anything on this page that shouldn't be there?
* Do you know what all of the elements on this page are?
* Can you get to all of the major sections of the site from here? Should you be able to?
* Do all of the labels make sense?



# Animations and transitions with CSS

CSS animation boils down to two properties:

* [`transition`](http://tympanus.net/codrops/css_reference/transition)
* [`animation`](http://tympanus.net/codrops/css_reference/animation)

Which properties can be animated? [These ones](http://www.w3.org/TR/css3-transitions/#animatable-properties).

Check out [Animate.css](http://daneden.github.io/animate.css), a library of CSS animations that you can include in your projects (use as a starting point for common animations like *fade*, *bounce*, *shake* etc.)

### Let's put animation and transition into practice

We are going to make a list of people (but they could be products, meals, whatever).

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/transanimation-demo.jpg)

1. Download [HTML5 Boilerplate](https://html5boilerplate.com/) (so we don't start from scratch)

2. Open the `HTML5 Boilerplate` folder in a code editor like Brackets or Sublime

3. Start editing `index.html`

4. Create an `<ul></ul>` (it's going to be a list of people / products)

5. Craft the basic content for `<li>` with images from [RandomUser](https://randomuser.me)

6. Create a new stylesheet `style.css` inside the `css` folder and link it inside the html's `head`

7. Style `ul` 

	`list-style: none; ` to remove the bullet points

	Reset `padding` and `margin` for `ul`

8. Give `li` a bit of padding. 

	Use `em` instead of `px` whenever possible

9. Style `img` 

	Centre it horizontally with `display: block; margin: auto;`

	Make it `img` round with `max-width: 50%; border-radius: 50%;`

10. Style `a.button`

11. Give `li` a background colour and some borders

12. And **finally** add the first `transition`! A subtle change on hover

	```css
	li
	{
		/* animatable properties will change smoothly over half second */
		transition: .5s; 
	}

	li:hover
	{
		background: #ddd;
	}
	```

13. Can you animate the `a.button` on hover?

14. And now `animation`. Let's make the profile picture *shake* when we hover over it.

	Define the `@keyframes shake` and `@-webkit-keyframes shake` (or [copy-paste from Animate.css](https://github.com/daneden/animate.css/blob/master/source/attention_seekers/shake.css)) 

	```css
	img:hover
	{
		/* for Chrome and Safari*/
		-webkit-animation-name: shake;
		-webkit-animation-duration: 1s;
		
		/* for all other browsers? */
		animation-name: shake;
		animation-duration: 1s;
		
		/* more properties to tweak your animations */
		/*-webkit-animation-timing-function: ease-in-out;*/
		/*-webkit-animation-delay: 1s;*/
		/*-webkit-animation-iteration-count: infinite;*/
	}
	```


And [here's code for the finished thing](https://github.com/RavensbourneWebMedia/WEB14104/tree/master/sessions/html5-boilerplate-animation-transition).


### Hungry for more CSS tutorials?

You can find loads of animation [tutorials on Codrops](http://tympanus.net/codrops/category/tutorials), using a mix of CSS and SVG (scalable vector graphics).



# Assignment

### 1. HTML & CSS wireframes

Remember wireframes are not about the final design. 

Keep them *unfinished* and focus on real content and navigation, flesh out as many pages as possible.

You can use a framework like [Skeleton](http://getskeleton.com), [Bootstrap](http://getbootstrap.com) or [Foundation](http://foundation.zurb.com/prototyping.html).

### 2. Blog about one of the following webdesign *myths*

* [People don't scroll](http://uxmyths.com/post/654047943/myth-people-dont-scroll)

* [White space is wasted](http://uxmyths.com/post/2059998441/myth-28-white-space-is-wasted-space)
	
- [ ] Any others? 

- [ ] Leading questions? 





## TODO

