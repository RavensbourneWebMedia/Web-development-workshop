# WP deploy

It's always been [a pain](http://schurpf.com/wordpress-deploy/)! But it shouldn't be..

Let's try a few solutions.

### The Grunt way

[AUTOMATED WP deployment with Grunt](http://timrourke.com/blog/tutorials/automated-wordpress-deployment-with-grunt/)

I'm not sure I like this, because:

1. It work with SSH only 
2. It requires to run things like `rsync`, `mysql`, `mysqldump`, etc. from the SSH terminal
3. afaik the JS files where I'm supposed to store FTP & MySQL passwords could be accessed by anyone via HTTP?

### The Ruby way

#### Pre-requisites

For the Windows people, get [RubyInstaller](http://rubyinstaller.org/) before you go any further.

For everyone: you need to make sure that **Ruby** and **Gem** are installed on your machine

* Ruby: `ruby -v`
* Gem: `gem -v`

Install [lftp](https://github.com/welaika/wordmove/wiki/Install-lftp-on-OSX-yosemite)

#### Install [WordMove](https://github.com/welaika/wordmove)

`sudo gem install wordmove`

Then init, then edit Movefile.. hmm problem with lftp :(


