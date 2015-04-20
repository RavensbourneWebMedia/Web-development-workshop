# Week 4

## Today, Monday 26th January 2015

<!--- [ ] Make sure people accept invitations to join the GitHub team -->

1. The *dress code*: **CSS** 1 / 3 
* CSS quiz
* CSS *selectors*
* CSS *specificity*
* Thinking inside the **box** (model)
* Sizes matter
* Web types
* Style your recipe


# The *dress code*

CSS allows you to define the **visual style** of HTML content.

##### 1. **HTML** → content and structure

## 2. **CSS** → style and design 

##### 3. **JS** → behaviour and logic

With CSS you can (hopefully) make your Web content clearer, easier to read and more appealing.

## Learning CSS

1. Learn how to write CSS rules.
2. Understand how CSS rules apply to HTML.
3. Play around with CSS properties! **Inspect** > **copy** > **hack**


# Quiz time!

1. `CSS` stands for Content Styling System [ true / false ]
	<!-- Cascading Style Sheets. CSS rules cascade from general to specific (like a waterfall) -->

2. `CSS` can only be used for styling `HTML` [ true / false ]
    <!-- can be used for XML, for example SVG -->

3. The best way to style an HTML element is by adding CSS in its `style` attribute [ true / false ]
    <!--<link rel="stylesheet" href="path/to/your-style.css">-->

        <p style="color:red;">This bloody text</p>

    

4. Every CSS file has to end in `.css` [ true / false ]

5. What's wrong with the following CSS line? 

        <p> { color: red; }
        
6. What's wrong with the following CSS line? 

        p { colour: red; }      

7. What's wrong with the following CSS line? 

        p { color red; }  
        
8. These two CSS declarations achieve the same effect [ true / false ]        
                
        p { color: red; }  
        
        p 
        { 
        	color: red; 
        }         
        
9. There are 123 CSS properties and you should [learn them all](http://css-tricks.com/almanac/) [ true / false ]  


## The CSS banana quiz

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/andy-warhol-banana.jpg)   
  
         
10. The colour of the text _bananas_ is yellow [ true / false ]

        <ul class="shopping-list">
        	<li>toilet paper</li>
        	<li>bananas</li>
        </ul>	
		
		ul { color: red; }	
		li { color: yellow; }

11. The colour of the text _bananas_ is yellow [ true / false ]

        <ul class="shopping-list">
        	<li>toilet paper</li>
        	<li class="must-buy">bananas</li>
        </ul>	
		
		ul li { color: red; }
        .must-buy { color: yellow; }

12. The colour of the text _bananas_ is yellow [ true / false ]

        <ul class="shopping-list">
        	<li>toilet paper</li>
        	<li class="must-buy" id="favourite">bananas</li>
        </ul>	
		
		ul.shopping-list .must-buy { color: red; }
        #favourite { color: yellow; }

13. The colour of the text _bananas_ is yellow [ true / false ]

        <ul class="shopping-list" id="the-list">
        	<li>toilet paper</li>
        	<li>bananas</li>
        </ul>	
		
		#the-list { color: red; }
        ul.shopping-list li { color: yellow; }
        
14. The colour of the text _bananas_ is yellow [ true / false ]

        <ul class="shopping-list" id="the-list">
        	<li>toilet paper</li>
        	<li>bananas</li>
        </ul>	
		
		#the-list { color: red; }
        ul { color: yellow !important; }       



# CSS diner

To understand **CSS selector**, let's play the [CSS Diner](http://flukeout.github.io) game.

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/CSS-diner.png)



# Specificity Wars

In CSS, **specific** rules take precedence over the general ones. 

But how do you work out which rules are more specific than others?

[Specificity Wars](http://www.stuffandnonsense.co.uk/archives/css_specificity_wars.html)!

CSS Selector	| Specificity	| Sith power
---------------	| -------------	| --------------------
element 		| **1**			| 0, 0, 1 
class 			| **10**		| 0, 1, 0
id 				| **100**		| 1, 0, 0 		

![](http://www.stuffandnonsense.co.uk/archives/images/specificitywars-05v2.jpg)



# Thinking inside the Box

Imagine that there is an **invisible box** around every HTML element. 

<!--Use Web Inspector to demonstrate it-->

Your browser likes to put code into boxes, boxes inside boxes inside boxes inside boxes...

Each HTML box has:

* margin
* border
* padding

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/box-model.gif)



# Sizes matter

CSS is mostly two-dimensional, so we work with `width` and `height`.

Sizes can be expressed in:

* `px` pixels (absolute length)
* `%` percentage,  relative to the width/height of the element
* `em` relative to the font-size of the element
* [other units](http://www.w3schools.com/cssref/css_units.asp)

### But wait, what's the *actual* width of the box?

Is it the content's width?

Or content + padding?

Or content + padding + border?

Or content + padding + border + margin?

It's a mess.

Using the [box-sizing](http://www.paulirish.com/2012/box-sizing-border-box-ftw/) property you can control that mess.



# CSS is not just for decoration

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/data-information.jpg)

> Banana bread by [Minimalist Baker](http://minimalistbaker.com/one-bowl-gluten-free-banana-bread/)

For information to become *knowledge*, it must be easy to find, simple to use, and immediately understandable. 

That is, **information needs to be designed**.


## A quick experiment

1. List three websites that you visit regularly. 
2. Now imagine them without text. 
3. What *design* would be left?

<!--![](http://s3.amazonaws.com/37assets/svn/1147-Twitter.jpg)

> From [Design is still about words](https://signalvnoise.com/posts/3404-reminder-design-is-still-about-words)-->

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/twitter-no-text.gif)

[Web design is 95% typography](https://ia.net/know-how/the-web-is-all-about-typography-period).

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/95-percent-typography.png)

## How people read

![From http://blog.typekit.com/2013/03/28/setting-type-for-user-interfaces/](http://typekit.files.wordpress.com/2013/03/img_2.png)

Let's read more about [how people read (on the Web)](https://www.gov.uk/guidance/content-design/writing-for-gov-uk#how-people-read).

> * By the time a child is 5 or 6 years old, they’ll use 2,500 to 5,000 **common words**. 
> * Children quickly learn to read common words (the 5000 words they use most). They then stop reading these words and start **recognising their shape**. 
> * Children already read like this by the time they’re 9 years old. Your vocabulary will grow but this reading skill stays with you as an adult. 
> * As writers **we don’t want people to read**. We want people to recognise the shape of the word and understand. It’s a lot faster.
> * Your brain can **drop up to 30%** of the text and still understand. 
> * When you use a longer word (8 or 9 letters), people are more likely to skip **shorter words** (3, 4 or 5 letters) that follow it.
> * **Capital letters** are 13 to 18% harder for people to read. 
> * People read very differently online than on paper. People [only read about 20 to 28% of a web page](http://www.nngroup.com/articles/how-little-do-users-read)
> * People tend to *scan* a webpage in an **F** shape pattern. They look across the top, then down the side, reading further across when they find what they need.

<!--http://webdesign.tutsplus.com/articles/understanding-the-f-layout-in-web-design--webdesign-687-->

<!--![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/f-shaped-heatmap.jpg)-->

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/directional-cues.jpg)

> [Directional cues](https://blog.kissmetrics.com/eye-tracking-studies/) heatmaps from Kissmetrics



# Web types

1. Go to [Typecast](http://typecast.com/) and sign up for it.

2. Paste your recipe's content.

3. **Pair fonts**, using [this tool](http://www.typeconnection.com/), or [this one](http://www.typegenius.com/). 

	Try several combinations. 
	
	You can [read this short guide](http://blog.typekit.com/2013/03/28/setting-type-for-user-interfaces/) on how to choose fonts, or [this one](http://opentype.info/blog/2011/08/01/what-makes-letters-legible/) on *what makes letters legible*.

5. Working in black&white, set the **space proportions** for different elements (headings, body copy, lists etc.)
	* font sizes, using [TypeScale](http://type-scale.com/)
	* letter spacing
	* word spacing
	* line height
	* alignments

6. Choose **colours**, using [this tool](http://snook.ca/technical/colour_contrast/colour.html) to make sure there's enough difference and contrast between background colour and text colour

## Useful links 

<!-- http://webdesign.tutsplus.com/articles/typography-basics-for-developers--webdesign-14025 -->

* Two **games** to get familiar with [font shapes](http://shape.method.ac/) and [text kerning](http://type.method.ac/)
* A [Chrome extension](https://chrome.google.com/webstore/detail/whatfont/jabopobgcpjmedljpbcaablpmlmfcogm/related?hl=en) that tells you the font-family of any Web site 
* **Web-font libraries**: [TypeKit](https://typekit.com/) (owned by Adobe), [Google Fonts](http://www.google.com/fonts) and [FontSquirrel](http://www.fontsquirrel.com/)
* Go *typo-crazy* with [FitText](http://fittextjs.com/) and [LetteringJS](http://letteringjs.com/)
* [What screens want](http://frankchimero.com/talks/what-screens-want/transcript/) by Frank Chimero
* [2014 shortlist of *sites with nice typography*](http://www.typewolf.com/blog/favorite-sites-of-2014) by Typewolf



# Exercise

Style your [HTML recipe](https://github.com/RavensbourneWebMedia/WEB14104/blob/master/sessions/week-03.md#your-brief) using CSS. 

This exercise is about making your **texts** easy to scan and easy to read, informative and usable.

Today we're focusing on:

* good **typography**, use this [Web typography checklist](http://www.merttol.com/articles/web/checklist-for-better-web-typography.html)
* **colours**, use [this colour contrast and difference checker](http://snook.ca/technical/colour_contrast/colour.html)

Next week we're going to:

* add images and style them
* use grid layouts

### CSS properties you can play around with

#### Text

* `font-family` 
* `font-size`
* `font-weight`
* `font-style`
* `line-height`
* `letter-spacing`
* `word-spacing`
* `text-align`
* `text-decoration`
* `text-transform`
* `text-indent`

#### Box 

* `margin`
* `border`
* `padding`
* `width`
* `max-width`

#### Colours

* `color`
* `background-color`



# Assignment

Create a *moodboard* for your website re-design.

* Use [Pinterest](https://www.pinterest.com) to assemble all your inspirations and ideas
* Include at least 3 websites that you consider *worth copying* (and explain in the comments what you're going to *steal* from them and why)
* Post screenshots of both macro-views (entire pages) as well as micro-views (details)
* You can also post your own sketches, photos or any other material that can help you and us understand and talk about which direction your design is moving towards

There are tons of [moodboards on Pinterests tagges as *webdesign*](https://www.pinterest.com/search/boards/?q=webdesign).

Also, check out [SiteInspire](http://www.siteinspire.com) and [Panda](https://usepanda.com)!

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/site-inspire.png)



# Resources

[Learn Layout](http://learnlayout.com/) teaches the CSS fundamentals that are used in any website's layout.
