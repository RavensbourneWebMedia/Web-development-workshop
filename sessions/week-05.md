# Week 5

## Today, Monday 2nd February 2015

1. Moving things around: **CSS** 2 / 3
* CSS quiz
* Grids
* Style your recipe (modular scale and vertical rhythm)
* Page layout with CSS
* Style your recipe, again (CSS frameworks)
* Moodboards review
* Wireframing



# Quiz time!

1. What is the correct HTML to refer to an external style sheet?

	1. `<style src="style.css">`
	2. `<link rel="stylesheet" type="text/css" href="style.css">`
	3. `<stylesheet>style.css</stylesheet>`

2. Where in an HTML document is the correct place to refer to an external style sheet?

	1. In the `<body>` section
	2. At the end of the document
	3. In the `<head>` section

3. What is the correct CSS syntax to make all the <p> elements bold?

	1. `p { font-weight:bold; }`
	2. `<p style="font-size:bold;">`
	3. `<p style="text-size:bold;">`
	4. `p { text-size:bold; }`

4. Which property is used to change the font of an element?

	1. `font-family`
	2. `font`
	3. Both `font-family` and `font` can be used

5. You can use negative values with the `padding` property [ true / false ]

6. How do you display a margin like this?

	10 pixels 	top
	
	5 pixels 	bottom
	
	20 pixels 	left
	
	1 pixel		right

	1. `margin: 10px 1px 5px 20px;`
	2. `margin: 10px 5px 20px 1px;`
	3. `margin: 10px 20px 5px 1px;`

7. Setting margin-top and margin-bottom has no effect on an inline element [ true / false ]

8. All elements following `#example` will move 5px upwards [ true / false ]

	```html
	<p id="example">Hello</p>
	```
	```css	    
	#example { margin-bottom: -5px; }
	```

9. All elements preceding `#example` will move 5px to the left [ true / false ]

	```html
	<p id="example">Hello</p>
	```
	```css	    
	#example { margin-left: -5px; }
	```

10. The `#` symbol specifies that the selector is?

	1. `class`
	2. `element`
	3. `id`

11. Which snippet of CSS is commonly used to centre elements horizontally?

	1. `site-align: center;`
	2. `margin: center;`
	3. `margin: auto 0;`
	4. `margin: 0 auto;`



# Grid systems

Look around you at all the things that are organised in grids. 

### What is a grid system?

It's a structure comprising a series of **horizontal and vertical lines** which intersect and are then used to **organise** space, text, images, and any other element placed in a design.

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/grid-lover.gif)

### Why do we need it? 

> Designers solve problems. Web designers are faced with finding solutions to visual and organisational problems and one approach to solving these problems is the grid. It’s not the only approach you might take, but it’s one with several important benefits.

From [Why grids?](http://www.vanseodesign.com/web-design/why-grids/)

* **Order** 

	Grids can bring order to a layout and make it easier for users to find and navigate through information.
	
* **Consistency** 

	Consistent layouts can help users absorb the information we’re trying to communicate (they learn where to find it, consistently) and build a sense of familiarity
	
* **Proportion** 

	Grids offer a guide to the placement of information and help generate visual hierarchy. They promote rhythm and consistency in a design and help you develop relationships between elements based on rational proportions.

* **Efficiency** 

	Grids allow designers to quickly add elements to a layout because many layout decisions are addressed while building the grid structure.



# Your turn

1. Go to [Gridlover](http://www.gridlover.net/app). 
2. Paste in your recipe's HTML.
3. Play around with modular scales and vertical rhythms.
4. Copy the suggested CSS back into your project.



# Getting pages laid out

> Laying out content using CSS is easy. You chop your page up and shove the chunks wherever you please...

To become a skilled *CSS bricklayer*, there are only two properties that you should really learn

* `position` (see the [docs on WebPlatform](https://docs.webplatform.org/wiki/css/properties/position))
* `float` (see the [docs on WebPlatform](https://docs.webplatform.org/wiki/css/properties/float))

### Position

* `static` is the default value. 

	Static elements just sit in the normal HTML flow.
	
* `relative` is similar to `static` but the element can be offset from its original position with the properties `top`, `right`, `bottom` and `left`.
 
* `absolute` pulls an element out of the normal HTML flow and other elements will behave as if it's not even there. 

	> The offset values for `top`, `right`, `bottom` and `left` of an absolutely-positioned element will be *relative* to its first *non-static ancestor*. :scream:
	
	For example, `left: 10px` will offset an absolute element 10 px from the left edge of its first ancestor which is not static (it can be the direct parent, or the parent of the parent, or the parent of the parent of the parent... as long as it is the first which is not static).

	Note that without a `width` set, the element will stretch only as wide as the content it contains.

	You can set, for instance, both a `left` and `right` value and the element will stretch to touch both points. So you can fill a screen by setting `top: 0; left: 0; bottom: 0; right: 0;`


* `fixed` behaves like `absolute`, but it will position an element in relation to the browser window.
 
 	Fixed elements stay where they are on the screen even when the page is scrolled.
 	
[Interactive example on CodePen![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/css-position-codepen.png)](http://codepen.io/baddeo/pen/OPxJLP)

[Absolute *inside* relative](http://css-tricks.com/absolute-positioning-inside-relative-positioning/) aha! moment

### Float

Floating an element will allow surrounding content to flow around it.

Using `float` you can 

* `float: left` 
* `float: right`
* `float: none` (default)

Then, if you do not want the next element to wrap around the floating objects, you can apply the `clear` property

* `clear: left` will clear left floated elements
* `clear: right` will clear right floated elements
* `clear: both` will clear both left and right floated elements

Floating is commonly used to create layouts with columns.

[Interactive example on CodePen![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/css-float-codepen.png)](http://codepen.io/baddeo/pen/ZYXEXo)

Learn more about `float` on [CSS Tricks](http://css-tricks.com/almanac/properties/f/float)



# CSS frameworks

Building a grid system from scratch can be a pain.

Better to work on a solid foundation than starting from scratch. 

There are many HTML+CSS+JS frameworks that offer a toolbox of interface components and good practices that you can use in your project, for instance:

* [Skeleton](http://getskeleton.com/#grid) 
* [Foundation](http://foundation.zurb.com/docs/components/grid.html) 
* [Bootstrap](http://getbootstrap.com/css/#grid) 

_Demonstrate how these front-end frameworks create grid layouts, with the common structure `.container > .grid > .column`_

Here is a [detailed comparison of these three frameworks](http://responsive.vermilion.com/compare.php). To summarise, Skeleton is simple and quick to learn, Foundation is the most advanced (and complex), Bootstrap is a middle ground. 

If you're not convinced by any of those three, there are more frameworks [here](http://usablica.github.io/front-end-frameworks/compare.html).



# Your turn

Pick a CSS grid system framework and apply it to your recipe.

### CSS properties you can play around with

If you need a recap of any of the CSS properties below, check the [CSS tricks almanac](http://css-tricks.com/almanac)

#### Box 

* `margin` (including negative values, like `margin-left: -32px;`)
* `border`
* `padding`
* `width`
* `max-width`

#### Positioning

* `position`
* `top`
* `bottom`
* `left`
* `right`
* `float`
* `clear`



# Moodboards review



# Wireframing

Is *this* a wireframe?

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/wireframe-example.png)

Is *this* a wireframe?

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/not-a-wireframe-example.jpg)

Wireframes are about communicating your ideas.

They are about **content**, **context** and **interaction**. Use real content, not *lorem ipsum*. 

They're not about style. When wireframing, don't worry about colours, graphics and typography. 

### Leading questions

When wireframing you should ask yourself:

* What content is going to be on this page?
* How is the content organised on this page?
* Which content is most important on this page?
* Where users will go from this page?
* Where is this page on the site?
* How will users move around the site (navigation)?

[Will Evans](https://twitter.com/semanticwill) defines wireframes as a *thinking device for the setting and exploration of a given problem space*. 

### Three phases

Wireframes are very useful throughout the design process:

1. **Divergence** 

	You're **exploring** alternatives, not looking for defined solutions at this point. 

	The first round of wireframes provide a space to engage in a **dialogue** with other designers, clients, and the wireframes themselves.

	Don't make only one wireframe, only one version of a page. Make many, explore different alternatives for the same goal(s).

  	Don't be precious. **Sketch solutions on paper**, explore alternatives quickly, and if necessary discard them.

2. **Transformation**

	Toss out the bad ideas, start to understand better the more complex requirements of a project.

	Focus on the **content** of each page. 
	
	Interface design is copywriting, every word matters. 

	Use real content, not *lorem ipsum*. 

	If at this point you have no real content, stop wireframing and get it, or ask for it.

	Use **annotations** to empower the wireframe with important information and links to research, conversations, requirements, missing information, missing content, questions etc

3. **Convergence**

	Focus on one solution, **flesh it out** and discuss it with people from your target audience (possibly different user roles), members of your team (other designers, developers etc) and clients. 

	At this point you may want to move away from paper and wireframe with a tool that allow you to tweak more easily.



# Assignments

### 1. **Document** your recipe's evolution

From naked HTML to gridded CSS. 

You can use GitHub commits to track your recipe's history.
	
Use screenshots (and maybe animated gifs) to illustrate how your recipe evolved.


### 2. **Sketch out** your ideas on paper.

You can print out wireframing templates from [InterfaceSketch](http://www.interfacesketch.com)

![](http://www.interfacesketch.com/previews/web-browser-template.png)

![](http://www.interfacesketch.com/previews/iphone6.png)