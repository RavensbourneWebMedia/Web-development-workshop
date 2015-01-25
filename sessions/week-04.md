# Session 4

## Today, Monday 26th January 2015

<!--- [ ] Make sure people accept invitations to join the GitHub team-->

1. The *dress code*: **CSS** 1 / 3 
* CSS quiz
* CSS *selectors*
* [Specificity wars](http://www.stuffandnonsense.co.uk/archives/css_specificity_wars.html)
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

http://flukeout.github.io/

# *Thinking inside the Box*

Imagine that there is an invisible box around *every* HTML element (Use Web Inspector to demonstrate it)

The browser likes to put code into boxes, boxes inside boxes inside boxes inside boxes...

Each HTML box has:

* margin
* border
* padding

- [ ] better image here, possibly animated gif..  with [box-sizing](http://www.paulirish.com/2012/box-sizing-border-box-ftw/)



![](http://inserthtml.com/codex/wp-content/uploads/2012/06/box-model1.gif)


# Information is beautiful

A bit of theory?

Data vs information

CSS is not just decoration

[What is information design?](http://www.infodesign.org.uk/What-is-information-design/what-is-information-design)

* [How people read (on the Web)](https://www.gov.uk/guidance/content-design/writing-for-gov-uk#how-people-read)

# Web types

* [Chrome extension that tells you the font-family of any Web site](https://chrome.google.com/webstore/detail/whatfont/jabopobgcpjmedljpbcaablpmlmfcogm/related?hl=en) 
* [TypeKit](https://typekit.com/)
* [Google Fonts](http://www.google.com/fonts)
* [Font shape game](http://shape.method.ac/)
* [Text kerning game](http://type.method.ac/)
* [Typecast!](http://typecast.com/)
* Go *typo-crazy* with [FitText](http://fittextjs.com/) and [LetteringJS](http://letteringjs.com/)

## Inspiring Web typography

Examples here (Frank Chimero, the ginger dude)

http://www.typewolf.com/blog/favorite-sites-of-2014

# Exercise

Style your recipe. 

Can you make it palatable, without using images?

Iconoclasm > go image-less
http://en.wikipedia.org/wiki/Iconoclasm


# Assignment

Create a *moodboard* that highlights colours schemes and fonts you intend to use (or experiment with) on your website re-design.


## Matteo's TODO

- [ ] [Article on web design moodboards](http://www.protofuse.com/blog/how-web-design-mood-board-impacts-ux/)