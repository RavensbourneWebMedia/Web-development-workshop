# Week 15

### Today, Tuesday 17th May 2016

1. **Formative** presentations 
* **Workshop**: hacking a Bootstrap template and publishing your work to GitHub Pages

<!-- Workshop: Meet PHP, *variables* and *functions* -->

- [ ] HEADS UP! **FREE** [talkwebdesign.co.uk](http://talkwebdesign.co.uk/) 26th of May @ Greenwich University: get your ticket if you haven't already!

Your [homework](#homework) and [blog](#blog)!


# Formative presentations

You'll present your work-in-progress on [**Our space**](../../projects/our-space) to me and a couple of guests (no worries, they're friendly people and you may have seen them around Ravensbourne before ;)

### WTF should we present?

Prepare a pitch presentation:

* Who are your **competitors** and how do they communicate online? 
* Who is your **target audience**? You could start from your **research** (surveys and interviews) and then present your **personas**. 
* How are you going to communicate to your target audience? In other words, what is your **content strategy**? You can show examples of your **copy**, as well as presenting your **content map**.
* What are your inspirations? You can show your **moodboard**  of ideas.
* How are you structuring your content? You can present your **wireframes** at different stages, from paper sketches to digital wireframes, to the HTML + CSS **prototype**.
* What are your **next steps**?

The points above are the bare minimum of what your presentation should include. You're very welcome to present them in a different order and include any other aspects which you consider relevant.

### How long should our presentation be?

Roughly **15 minutes** per team, plus 5 minutes for feedback and questions.

### Collaborative feedback

Let's give each other feedback in this [collaborative Google doc](https://docs.google.com/a/rave.ac.uk/document/d/1QDETyR6BwffMhoyTvSvtJ5Hhzj3K6zzd38py_EymAOw/edit?usp=sharing)!
	
<!--
### Banned words

![](https://raw.githubusercontent.com/RavensbourneWebMedia/WEB14104/master/sessions/assets/thumbs-down.png)

* *Like it* / *Don't like it*
* Empty
* Minimal(istic)
* Modern
* Poor
* Professional
* Simpl(istic)
* Static
-->

# Workshop

Together, we'll learn how to use [Bootstrap](http://getbootstrap.com/) to quickly prototype a Web page and then publish it live on [GitHub Pages](https://pages.github.com/).

<!--
Don't fancy reading the tutorial, want to **download and play with the code** instead? Here it is.
-->

### Tools you'll need

* A browser: Chrome or Firefox (**not** Safari or IE)
* A code editor: [Brackets](http://brackets.io/) or [Atom](https://atom.io/)
* [SourceTree](https://www.sourcetreeapp.com/), a free app to manage Git-based projects. 
* A [GitHub (free) account](https://github.com/join).



<!--
* A Bootstrap builder: there are several, we're going to use [Pingendo](http://pingendo.com)
-->

### Step 0. Set up GitHub Pages

Go to [github.com](https://github.com) and *log in*.

#### One person per team, let's call her person `A`

1. [Create a new *organisation*](https://github.com/organizations/new) for your project team.
* Choose the *Open Source* (free) plan.
* Invite all your teammates to the new organisation.
* Get all your teammates to visit the organisation page (it will be something like `github.com/ORGANISATION_NAME`) click on the `View invitation` button on the top-right and **join** the organisation.
* Once a teammate joined, you can go to the `People` tab of your organisation and make them an **owner**. 

	This will grant them the same privileges as you, because we like everyone to be *equal*.

#### Another person in the team, let's call her person `B`

1. Make sure you have joined the team organisation and person `A` made you an owner of the organisation.
* **Create a new repository** for the *Our space* team project.
* Make sure you `Initialize this repository with a README`.
* Once GitHub has created your new repository, click the branch drop-down on the left-hand side, type in `gh-pages` and press Enter. This will make a new branch, where your project will be published.

	![](assets/create-branch.png)
* Go to the repository settings. In the Branches section, change the default branch to the newly created `gh-pages` branch.	

	![](assets/default-branch.png)
	
#### Everybody

1. Open [SourceTree](https://www.sourcetreeapp.com/).
* **Clone** the *Our space* team repository on your computer.

	`File` > `New / Clone`
	
	The *Source URL* will be your repository URL, something like `https://github.com/YOUR_ORGANISATION/OurSpace`

	![](assets/git-clone.gif)	
* Once the repository is cloned, open it with Finder / Windows and **make a new folder inside it**. 

	Call it with your name, e.g. `matteo`
	
	You'll save all your work for today in that folder.
	
### Step 1. Bootstrapping your page 
	
HTML first, style later.

### Step x. Publish your work

1. In SourceTree **Commit** 

	write a commit message, and commit the new file.
	
	Notice that as soon as you commit, a red `1` appears on top of the `Push` button. In order to upload your images to GitHub you need to *push* all your commits.
* and **push** to GitHub. 	
* …and you're done!
	Open your browser and point it to `http://YOUR_ORGANISATION_NAME.github.io/YOUR_REPOSITORY_NAME/YOUR_NAME.`

