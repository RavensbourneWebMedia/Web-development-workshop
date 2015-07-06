# Brief

Design and build a portfolio website for a professional of your choice (not yourself).

Your website must 

* be **online**, not just on your computer
* be **dynamic**: update-able via a CMS
* be **responsive**: adapting to different screen sizes
* be **accessible** for people with disabilities and limited devices
* be visually **cohesive** and coherent
* have **appropriately structured** information
* have a style informed by (but not necessarily following) contemporary trends


### Deadline

**Friday, 28th of August 2015, 23:59**

You will hand-in a `WEB14105-Name-Surname.zip` folder via Moodle (we will send you the upload link via email).

For more details on how to hand-in your project [see here](../sessions/week-18.md#hand-in-package).


### Components

1. **Research** [competitor analysis](#competitor-analysis), [target audience(s)](#target-audiences) and [mood board](#moodboard)
* **Interface design** experimentation and testing of ideas through *wireframes* at various stages, from [paper](#sketch-out-your-ideas-on-paper) to [digital](#digital-wireframes)
* **Front-end code** responsive, cohesive and appropriately structured [HTML & CSS](#html-and-css-wireframes) (bonus: JavaScript)
* **Back-end code** accessible and dynamic web-pages served via [WordPress](../sessions/week-14.md) (bonus: plugins) 
* **Workflow** all your project files on *GitHub* (bonus: action plan)


## Target audiences

Our design process starts with identifying and thinking about **real user needs**. We should design around those.

* Who are the users?
* What are their needs?

Analyse your target audience(s) using the template below. 

### Template

**User type name**

**Definition** Identify your user type in one sentence.

**Differences** What makes this group of people different from the others? What is unique about them?

**Goals** Imagine your site stands between them and their goals. What are they looking for on your site? Where are they going to go next and what can you do to change their direction?

**Verbs** What kind of actions are these people likely to take? How can you facilitate such actions?

**Questions** that your target users are likely to ask in each phase of their journey.

#### *Example*

**Little Red Riding Hood**

**Definition** LRRH is a young girl on a journey to deliver food to her grandmother. She’s interested in flowers and likes to talk to strangers. 

**Differences** Unlike professional delivery boys, LRRH has a relaxed approach to her job: she doesn’t mind taking a longer route or spending some time with strictly not functional tasks.

**Goals** LRRH needs to get food to her grandma. Ultimately she wants to please her grandma, show her how much she loves her.

**Verbs** Walking, talking, collecting.

**Questions** Should I trust this wolf? Will grandma like these flowers?

See more examples [here](https://hackpad.com/We-need-users-G1MdCS7Ry4W).


## Competitor analysis

Analyse at least 3 competitors, using the analysis template below.

### Audience

Write your observations about the competitors’ **audience**(s).

Who is this website for, primarily and secondarily?

Compare them and highlight where yours will fit between them.

### Structure

*   Welcome/about blurb: above or below _the fold_? Think responsive (ie: desktop/laptop/table/mobile)
*   Contact info: above or below _the fold_? Think responsive (ie: desktop/laptop/table/mobile)
*   Contact form: y/n (if y, how prominent), separate page or a discrete box?
*   Search: y/n (if y, how prominent)
*   About: y/n (if y, how prominent), separate page or a discrete box?
*   Portfolio: separate page for each project or all projects in one?
*   Clients: y/n (if y, how prominent), separate page or a discrete box?
*   Services: y/n (if y, how prominent), separate page or a discrete box?
*   Anything you would improve?

### Content

*   Tone: formal - informal, shout - whisper, plain - technical, sophisticated - unpretentious, active - passive
*   Person: _I, we, you, impersonal_
*   [Calls to action](http://en.wikipedia.org/wiki/Call_to_action_(marketing)) (eg: _Buy this_, _Follow me_ etc, usually found in buttons): what is the website asking you to do? Show examples
*   About: what kind of information, what level of detail, pictures (y/n)
*   Clients: list - case studies, pictures (y/n)
*   Services: part of a general "About" section/page or clearly separate, level of detail, does it talk about the process/workflow
*   Portfolio: what information is displayed for each project (short description vs case study, testimonials, slideshows of screenshots, drafts and sketches)? How is it categorised?
*   Workflow: how do you explain to potential customers how their process works and what expectations both parties should have?
*   Contact: form or not? What kind of contact details (email, phone, Twitter etc)
*   Anything you reckon is missing?

### Layout

*   Colour palette: light (neutral), dark (contrasted/bold)
*   Grid layout: 1-4columns, out-of-the-box
*   Body alignment: left, centre or right
*   Navigation alignment: top, left, bottom, right, somewhere else?
*   Navigation: vertical, horizontal
*   Portfolio: how is it laid out? What elements are more prominent?

## Moodboard

Create a *moodboard* for your website design.

* Use [Pinterest](https://www.pinterest.com) to assemble all your inspirations and ideas
* Include at least 3 websites that you consider *worth copying* (and explain in the comments what you're going to *steal* from them and why)
* Post screenshots of both macro-views (entire pages) as well as micro-views (details)
* You can also post your own sketches, photos or any other material that can help you and us understand and talk about which direction your design is moving towards

<!--There are tons of [moodboards on Pinterests tagges as *webdesign*](https://www.pinterest.com/search/boards/?q=webdesign).-->

Also, check out [SiteInspire](http://www.siteinspire.com) and [Panda](https://usepanda.com)!


## Sketch out your ideas on paper

You can print out wireframing templates from [InterfaceSketch](http://www.interfacesketch.com)

![](http://www.interfacesketch.com/previews/web-browser-template.png)

![](http://www.interfacesketch.com/previews/iphone6.png)


## Digital wireframes

Consider a *mobile-first approach*.

Two options:

1. Use [Moqups](http://moqups.com) and then upload your screens to [InVision](http://www.invisionapp.com) to make them clickable.

	**or**

2. To save yourself work in the long run, start translating your wireframes into **HTML + CSS** using a framework like [Skeleton](http://getskeleton.com), [Bootstrap](http://getbootstrap.com) or [Foundation](http://foundation.zurb.com/prototyping.html)


## HTML and CSS wireframes

Start *translating* your **wireframes** into HTML & CSS.

* Make **up to 3 HTML pages**, eg: *checkout*, *about* and *home*. If your project has less than 3 pages, show different *states* for a page, eg: before and after submitting a form

* Use [Skeleton](http://getskeleton.com/) to lay the foundations of your pages

* First, **structure the content** of your chosen pages with HTML. Decide what tags are appropriate for your content: consider [**semantic** tags](http://www.w3schools.com/html/html5_semantic_elements.asp) like `<header>`, `<footer>`, `<section>` and `<nav>`. Use `<div>` elements as your *last resort*

* Then, apply **design and style** with CSS. If you're using a  boilerplate or framework, don't tamper with their CSS files. Instead, create your own separate `style.css` (or whatever you decide to call it). Even better, create many CSS files, eg: `general-rules.css`, `typography.css`, `colours.css`, `slider.css`, `home.css`...