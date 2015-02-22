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

Two CSS properties to animate stuff:

* [`animation`](http://tympanus.net/codrops/css_reference/animation)
* [`transition`](http://tympanus.net/codrops/css_reference/transition)

Which properties can be animated? [These ones](http://www.w3.org/TR/css3-transitions/#animatable-properties).

Let's put animation and transition into practice

1. Download [HTML5 Boilerplate](https://html5boilerplate.com/) (so we don't start from scratch)

2. Open the `HTML5 Boilerplate` folder in a code editor like Brackets or Sublime

3. Start editing `index.html`

4. Create an `<ul></ul>` (it's going to be a list of people / products)

5. Craft the basic content for `<li>`, using images from [RandomUser](https://randomuser.me)

6. Create a new stylesheet `style.css` inside the `css` folder and link it inside the html's `head`

7. `ul { list-style: none; }` to remove the bullet points

8. Reset `padding` and `margin` for `ul`

9. Give `li` a bit of padding. 

	Use `em` instead of `px` whenever possible

10. Centre `img` horizontally with `display: block; margin: auto;`

11. Make `img` round with `max-width: 50%; border-radius: 50%;`

12. Style `a.button`

13. Give `li` a background colour and some borders

14. And **finally** add the first transition! A subtle change on hover

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

## Want more CSS tutorials?

You can find loads of animation [tutorials on Codrops](http://tympanus.net/codrops/category/tutorials), using a mix of CSS and SVG (scalable vector graphics).

## More animations?

http://daneden.github.io/animate.css/

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

