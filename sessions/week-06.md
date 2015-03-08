# Week 6

### Today, Monday 16th February 2015

1. Wireframes critique 
* CSS quiz
* Responsive Web Design (RWD) 
* Beyond media queries 



# Wireframes critique

1. Hang your drafts on the wall
2. Grab a pen and some post-its 
3. Let's *critique* each other's drafts

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/wireframes-critique.jpg)

For this first session we'll all be around the same project and critique one project at a time. 

In future sessions we'll do it more informally.

### Critiquette

All comments must be `KASH`:

* **Kind** 
	
	Focus on the work. No sarcasm or personal comments. 
	
	Your comments can be challenging but the creator of the work should feel that your feedback is work-oriented and happy to receive it.
	
* **Actionable**	
	
	Your comments should include **suggestions** or **instructions**, which the creator of the work can simply take away and use.
	
* **Specific** 

	Don't just state `It's (not) good` or `I (don't) like it`. Explain why.
	
	Comment on specific aspects or details of the work, eg: `Navigation labels are unconventional but I wonder if most people would get what they stand for..`
	
* **Helpful** 

	If it doesn't benefit the work, its creator or the class, don't share it.

In a nutshell:
 
> Be hard on content and soft on people!

<!-- From http://reflectionsofmyteaching.blogspot.co.uk/2013/04/creating-culture-of-critique.html?m=1-->

### Banned words

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/thumbs-down.png)

* *Like it* / *Don't like it*
* Clean
* Dynamic
* Empty
* Minimal(istic)
* Modern
* Poor
* Professional
* Simpl(istic)
* Static
* XYZ font
* XYZ colour / background


### Bullshit wireframes

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/wireframe-bullshit.jpg)

What's wrong with the wireframes above?

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/wireframes-bullshit.jpg)

What's wrong with the wireframes above?


### Better wireframes

Proposed re-design of an online space for topical political debates that aims to promote political awareness and participation amongst young people. 

Used both as a teaching tool in the classroom and by 11-18 year olds in their own time.

Commissioned by the [Hansard Society](http://www.hansardsociety.org.uk) in 2011.

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/headsup-wireframes/1-home.png)

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/headsup-wireframes/2-navigation.png)

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/headsup-wireframes/3-prepare.png)

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/headsup-wireframes/4-dashboard-student.png)

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/headsup-wireframes/5-profile.png)

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/headsup-wireframes/6-dashboard-teacher.png)

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/headsup-wireframes/7-class-registration-form.png)


### Leading questions

* Is anything important missing from this page?
* Is the most important content the first thing you notice?
* Is there anything on this page that shouldn't be there?
* Do you know what all of the elements on this page are?
* Can you get to all of the major sections of the site from here? Should you be able to?
* Do all of the labels make sense?



# Redraft

Reflect on the feedback and suggestions that you received, ask any clarifications and start redrafting your work.

Drafting and redrafting, making improvements after improvements, is a vital part of the **design process**. Nothing is perfect the first time.

<!--You wouldn't put on a school production without practising it over and over again until it was perfect. -->

**Keep every copy of your drafts**. We'll ask you to present them during the formative and summative assessments, and they'll be part of the body of work on which you'll be marked.



# Quiz time!

15. A CSS declaration is terminated by 

	1. `.` period
	2. `!` exclamation mark
	3. `;` semi-colon
	4. `:` colon


12. `style1.css` is parsed before `style2.css` [ true / false ]
	
	```html
	<head>
    	<link href="style1.css" rel="stylesheet">
    	<link href="style2.css" rel="stylesheet">
	</head> 
	```	
3. How do you insert a comment in a CSS file?

	1. `// this is a CSS comment //`
	2. `// this is a CSS comment`
	3. `/* this is a CSS comment */`

5. How do you display hyperlinks without an underline?

	1. `a { text-decoration: none; }`
	2. `a { text-decoration: no-underline; }`
	3. `a { underline: none; }`
	
6. This media query applies to screens 600px wide and up [ true / false ] 

	`@media (min-width: 600px)` 

7. This media query applies to screens 599px wide and up [ true / false ] 

	`@media (max-width: 599px)`

8. This media query applies to screens 640px wide and up [ true / false ] 

	`@media (min-width: 40em)`
		
9. With media queries, you can check against a device's `height` [ true / false ]

10. With media queries, you can check against a device's `orientation` [ true / false ]

11. With media queries, you can check against a device's `resolution` [ true / false ]

12. With media queries, you can check against a device's `bandwidth` [ true / false ]

13. With media queries, you can check against a device's `local date and time` [ true / false ]



# Responsive Web Design

2007: computing becomes really personal, as computers start to fit in our pockets (known as **smartphones**).

We (designers) had to design different sites for different devices (variable capabilities and screen sizes). In one word: **fragmentation**.

New developments in CSS came to the rescue, by offering a technology to target specific media and screen sizes: **media queries**.

Rather than developing multiple resources, we can create a single site which reshapes for different devices and **responds** to the available screen space.

[Learn more about RWD](http://responsivedesign.is).

### Media queries

RWD hinges on media queries.

Here's an example from [LearnLayout](http://learnlayout.com/media-queries.html).

```css	
@media (min-width:600px) /* this line is the query */
{
	/* if the query is true, then the following rules are applied.. */
	
	nav 
	{
		float: left;
		width: 25%;
	}
	  
	section 
	{
		margin-left: 25%;
	}
	
	/* ..up to here */
}

@media (max-width:599px) 
{
	nav li 
	{
	    display: inline;
	}
}
```

When a media query is true, the corresponding style sheet or style rules are applied, following the normal cascading rules. 

To get smartphone browsers to listen to media queries, you need to use `meta viewport` tag

```html 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
```

[Mediaqueri.es](http://mediaqueri.es/) is a collection of sites that make good use of media queries.

**Breakpoints** are the points at which our RWD layouts change. The breakpoints we use currently relate almost exclusively to screen size. 

But [this should change in the near future](http://www.smashingmagazine.com/2014/07/08/breakpoints-and-the-future-websites). 

> The websites of tomorrow have to be more than responsive — they have to be contextual, too. These concepts of flexibility and fluidity have to transcend screen size.


### Beyond media queries

RWD is not just about media queries.

People access the Web from different **devices**, that have different **capabilities**, on different **connections**, in different **contexts**, doing different **tasks**!

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/bradfrost-futureweb.png)

The vast majority of RWD sites weigh the same in both *small screen* and *large screen* versions: **performance** is not an afterthought.

**Progressive enhancement**: start from the small, less capable devices and build "richer" experiences for the "richer" devices.

Let's take a look at a [demo page](http://bradfrost.com/demo/mobile-first) which puts these principles into practice. 

_Show slides from [this presentation](http://www.slideshare.net/bradfrostweb/beyond-media-queries-an-anatomy-of-an-adaptive-web-design-at-smashing-conference) (from 75 onwards)._

This is the [tutorial to build that page](http://www.html5rocks.com/en/mobile/responsivedesign).



# Assignments

### 1. Redraft your wireframes

**Continue redrafting your wireframes in a digital format.** 

Consider a *mobile-first approach* (see the RWD section above).

Two options:

1. Use [Moqups](http://moqups.com) and then upload your screens to [InVision](http://www.invisionapp.com) to make them clickable.

	**or**

2. To save yourself work in the long run, start translating your wireframes into **HTML + CSS** using a framework like [Skeleton](http://getskeleton.com), [Bootstrap](http://getbootstrap.com) or [Foundation](http://foundation.zurb.com/prototyping.html)

### 2. Blog about this film

Watch [The Internet's Own Boy](http://www.bbc.co.uk/iplayer/episode/b051wkry/storyville-20142015-11-the-internets-own-boy), a film about Aaron Swartz: wiz-kid, co-founder of Reddit and activist for social justice and freedom of information. 

Heads up! This will be available on BBC iPlayer until the **4th of March 2015**, so you better watch it before then.

Questions that may guide your blog post (in no particular order):

* How do you feel about freedom of information?
* What do you think constitutes *digital theft*?
* How do you feel about [Net Neutrality](http://www.vox.com/cards/network-neutrality/whats-network-neutrality)?
* If you had magical powers, would you use them for good or to make you mountains of cash?