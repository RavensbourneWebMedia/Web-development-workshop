# Week 2

## Today, Monday 12th January 2015

1. Review learning goals
* Marking things up (bit of theory)
* Keeping projects tidy: MarkDown and Git
* Research bad websites



# Learning goals review

1. Form **groups** of 3 people.

2. **Compare and review** your learning goals with your group. You can use the following questions ([taken from your blog assignment](https://github.com/RavensbourneWebMedia/Blogging/blob/master/what-are-my-learning-goals.md)) to guide your group discussion. 

	* What do you want to get out of this unit/project?
	* Why are these goals important to you?
	* Where do you currently stand?
	* Who do you admire? What can you learn from them?
	* How do you intend to achieve your goals?
	* How do you learn best? What hinders your learning?
	* Are your goals [SMART](https://github.com/RavensbourneWebMedia/Blogging/blob/master/what-are-my-learning-goals.md#smart-goals)?
	
3. **Present** each other's learning goals to the rest of the class.

4. Let's take a look at the [general learning goals](https://github.com/RavensbourneWebMedia/WEB14104#learning-goals) for this unit.



# Marking things up

## Signs

**Why** do we need to mark things (roads, manuscripts, code) up? <!--To **make sense** of them.-->

![Abbey Road: arguably the World's most famous zebra crossing](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/abbey-road-crossing.jpg)

What do white stripes across the road mean? Is that meaning universal? 

What does the picture above *denote*? What does it *connote*?

If you're interested in learning more about *semiotics*, the theory of signs, [This means this, this means that](http://www.worldcat.org/title/this-means-this-this-means-that-a-users-guide-to-semiotics/oclc/154688644) is a good book to start.

<!-- Semiotics for beginners http://www.slideshare.net/MediaStudiesSaltash/semiotics-for-beginners-as-level -->

## Content and meta-content

Compare this ..

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/brief-no-meta.png)

.. with this

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/brief-with-meta.png)

Same content, different *meta-content*.

***Meta-content*** is information or annotations about the content itself. For example, if you want the word `Brief` to become big and bold, to *signify* its importance, you need to add that *meta-content* to your text/code.

Can you think of meta-content that we use everyday when speaking?

## MarkUp vs MarkDown

How do we add meta-content to text and code?

> A **markup language** is a modern system for annotating a document in a way that is syntactically distinguishable from the text. The idea and terminology evolved from the *marking up* of paper manuscripts: the revision instructions by editors, traditionally written with a blue pencil on authors' manuscripts.

> From [Wikipedia](http://en.wikipedia.org/wiki/Markup_language)


![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/printer-markup-signs.png)

All your **digital texts** are marked up, whether you see the **markup** or not. That is, they contain both content and meta-content.

**HTML** is one of many markup languages, the one used to mark up documents (aka *hypertexts*) on the WWW. [html5Doctor has a good HTML dictionary](http://html5doctor.com/element-index/).

Writing HTML can be quite cumbersome ..

	<ul>
		<li>All this fuss for a bullet point</li>
	</ul>	

.. so a guy called John Gruber came up with [**MarkDown**](http://daringfireball.net/projects/markdown/) (an open-source project) to let people focus on writing, and not worry about the HTML meta-content.



# Try it! 

Write your learning goals in MarkDown.

You can use [this free app](http://25.io/mou/) to craft <abbr title="MarkDown">MD</abbr> files on Macs, or [this free one](http://markdownpad.com/) for Windows. Or you can work on MD online using [StackEdit](https://stackedit.io)!

Here is an [easy guide (3 minutes)](https://guides.github.com/features/mastering-markdown) on writing MarkDown.



# GitHub

It's not a *hub of gits*. 

**What is it then?** It's a **distributed version control system**. It allows teams to work on the same documents (often code) at the same time, and without stepping on each other's toes. 

**Why do we need it?** Because when you think it's time to back up your files, it's too late.

Can we not use DropBox instead? Yes, however Git is more powerful. It allows you to **collaborate**, by solving *conflicts* for you.

[Learn more about it here](https://try.github.io/)

Using Terminal (or any other command-line tool) is very cool, in a Matrix-like way. However it's easier to have a visual interface sometimes. Most of the times. For that, you can use [SourceTree](http://www.sourcetreeapp.com/)

1. Sign up (or log in) to [GitHub](https://github.com/)
2. Download [SourceTree](http://www.sourcetreeapp.com/), it's free!
3. If you're on a Mac, clean up the global `.gitignore` (add `.DS_Store` so that files that are generated by Mac OSX will not be pushed to the *mothership*)
4. **Fork** [this repository](https://github.com/RavensbourneWebMedia/WEB14104)
5. **Clone** it to your computer
6. Put your stuff inside the `students > {yourName}` folder ([follow these instructions](https://github.com/RavensbourneWebMedia/WEB14104/tree/master/students))

## The Git workflow

### 1. Commit

First, you edit your files on your computer (aka *Working Copy*). 

When you’re ready to save a copy of the current state of the project, you *stage* changes and *commit* them to the project history.

Whenever you commit a bunch of changes to your files, you will need to add a *commit message*. It can be anything, however it helps if you write something meaningful and descriptive of the changes you've made.

It's good practice to **make lots of small commits** rather than one massive push at the end of the day.

### 2. Pull

Before you can upload your new/modified files to the mothership (aka *origin repository*), you need to **pull** the latest version from the mothership into your working copy. 

**Pull = download**

### 3. Push

The **push** command tells Git where to put your local changes (aka *commits*) when you're ready to upload them to the mothership (aka *origin repository*).

The name of our remote is *origin* and the default local branch name is *master*. 

**Push = upload**

### 4. Pull request

Pull requests let you tell others about changes you've pushed to a Git repository. Once a pull request is sent, other people can review your changes, discuss potential modifications, and even push follow-up commits if necessary.

We'll [learn more about pull requests](https://help.github.com/articles/using-pull-requests/) later on in the unit.



# Research

## What makes a website bad?

Spotting a bad website is quite easy. You'll know when you find one.

However, it's not so easy to pinpoint **why** it is bad.

Sometimes bad websites are **not so obviously bad**. Their badness emerges as you use them, and cracks start to appear in what may be a pleasing layout.

This list of principles (aka heuristics) is based on [good ol' Jakob Nielsen's 10 general principles for interaction design](http://www.nngroup.com/articles/ten-usability-heuristics), and should help you work out **what** makes a website bad.

1. **Invisibility of system status**

	*The system doesn't keep users informed about what is going on, through appropriate feedback within reasonable time.*
	
	> Is it loading something? Did it get that I clicked/tapped this button? Who knows..
	
2. **Mismatch between system and the real world**

	*The system doesn't speak the users' language, using words, phrases and concepts not familiar to the user. It doesn't follow real-world conventions, making information appear in an innatural or illogical order.*
	
	> Is that a button? Can I click it? If I click "Say hello" will I find their contact info? What does that icon mean? Can I see the "menu" before I order my "food"? Why should I signup for this newsletter when I have barely read the title of this article?

3. **Punish mistakes**

	*Users often choose system functions by mistake but the system doesn't offer an "emergency exit" to leave the unwanted state without having to go through an extended dialogue. It doesn't support undo and redo.*
	
	> How do I cancel this?
	
4. **Inconsistency**

	*Users have to wonder whether different words, situations, or actions mean the same thing. The system doesn't follow conventions.*
	
	> Is "Jobs" going to take me to the same page as "Careers"? Why is this link red while all other are green? That button was here in the previous page, where has it gone now?

5. **Error induction**

	*The system features error-prone conditions, and it doesn't present users with a confirmation option before they commit to an action.*
	
	> Oh no, I just deleted all my text messages!

6. **Recall rather than recognition**

	*The system maximises the user's memory load by making objects, actions, and options invisible. The user has to remember information from one part of the system to another.*
	
	> I can't remember, did I choose the right size?
	
	> Where am I? Where have I been? Where can I go next?
	
7. **Mystery Meat Navigation**

	*This term refers to user interfaces in which it is extremely difficult for users to discern the destinations of navigational hyperlinks or, in some cases, even to determine where the hyperlinks are. For example, a menu made of icons that are replaced with text only when you click them / hover over them.*
	
	> To find out what option #1 is, press 1. To find out what option #2 is, press 2. Makes sense.
	
	![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/mystery-meat-navigation.png)	

8. **Inflexibility and inefficiency of use**

	*The system cannot cater to both inexperienced and experienced users. It doesn't allow users to tailor frequent actions.*
	
	> Why isn't there a shortcut for this? Why can't I "clone this template"? Why can't it remember my settings?

9. **Pointless information**

	*The interface contains information which is irrelevant or rarely needed.*
	
	> What's the point of this animation? How many different fonts does this have? How can I turn this music off?
	
	> `It occurred to me just the other day that it might be the case that everyone is officially crazy now.` How about simply `Maybe everyone's officially crazy now.`?

10. **Lack of help and documentation**

	*Help and documentation are not provided. If present, they are not easy to search, are not focused on the user's task, don't list concrete steps to be carried out, or are too large.*
	
	> I need a guide for this, it's too complicated. 

11. **Visual inaccessibility**

	*Information is not easy to read, because of colour contrast and text sizes*

	> This is jarring, I can't read it. Why did they write this so small?
		
12. **Content updatedness**

	*Content is not updated to reflect the current state of the system (or the business/organisation behind it)*

	> When was the content for this page/section last updated? Is it important to know when this was published? 

 
13. **S-tone of voice**	

	*Inconsistent language and/or tone of voice*
	
	> This sounds like it's different people speaking. Why do they use 5 different words to say the same thing?

14. **Loading time**

	*The system is loading unneccessary resources, possibly blocking users from interacting while those are being loaded. There may also be necessary resources that are not loaded using best practices*

	> Why is this taking ages to load? Is it my connection or what? Why are those images so big?
	
	
An [interesting read from WebPagesThatSuck](http://www.webpagesthatsuck.com/biggest-mistakes-in-web-design-1995-2015.html).	

## Your turn

Pick and **review** at least 3 bad websites.

Write it in MarkDown, then push it to your fork of this project on GitHub.



# Assignment for next week!

Out of the 3 bad websites you chose (see above), pick one and review it in more depth. 

Why is it bad? What do you think makes a website bad? 

Explain it using the **principles** above.

Make sure to add **images**! One image is worth 1000 words they say.. 

Write it in **MarkDown**, then push it to your fork of this project on GitHub (inside the `students > {yourName}` folder).
