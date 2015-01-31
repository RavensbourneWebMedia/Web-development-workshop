# Week 5

## Today, Monday 2nd February 2015

1. Moving things around: **CSS** 2 / 3
* CSS quiz
* Page layout with CSS
* Grids
* Style your recipe <!--with grids?-->
* Moodboards review
* Wireframing



# Quiz time!


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

### Float

static, relative, absolute, fixed

Hipsteer-like example?


# Floating



# Grid systems

Why do we need a grid? Gestalt

Using a grid framework

Gridlover
960.gs
Skeleton
Foundation
Bootstrap

# Exercise

Pick a grid system and apply it to your recipe.

## CSS properties you can play around with

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



# Assignment

- Sketch out your idea(s)? Wireframes

- [ ] Need to print out the templates