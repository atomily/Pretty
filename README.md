#![Pretty](https://i.gyazo.com/cb477609a6f864c4e1665252e62ea71e.png)
## Table of Contents  
1. [Why?](#Why)   
2. [Examples](#Examples)
3. [Getting Started](#GetStarted)    
4. [CSS](#CSS)
5. [Supported Libraries](#Support)
6. [Credits](#Credits)
7. [License](#License)

<a name="Why"/>
## Why Should I Use This?
You shouldn't unless your planning on building a portfolio. I made this framework for two reasons.

1. I got tired of seeing the same generic bootstrap portfolio that everyone uses (no hate on bootstrap, you guys are great. )
2. People should have responsive mobile sites in 2016. 

This framework accomplishes both. It allows the creator to change any color they want & add their portfolio relatively quickly. The CSS was built with [SaSS](http://sass-lang.com/) which allows you to quickly change any of the colors to whatever you like. 

<a name="Examples"/>
## Examples
![Pulse](https://i.gyazo.com/df8f0342d16ea9864c4645764838c93d.png)![Pulse](https://i.gyazo.com/89abc68420c3887a976048b36504b059.png)
![Shift](https://i.gyazo.com/af1c62e2597ac8c42ae7c5866ba07681.png)![Shift](https://i.gyazo.com/4e616e815d8e575ef954bdd670d5a8e6.png)
** You can view the live version here [Gleb.io/Pretty](http://www.gleb.io/)
<a name="GetStarted"/>
## Getting Started
### Installation
The first step is to install the framework. You can either download the whole zip or you can just go into the dist folder and choose the version you want. Each version comes with a landing page and example portfolio page. The "Example Project" comes with all the styles combined into 1 style sheet. 

!!! This guide assumes you know how to setup SaSS. You can change everything without SaSS but it's harder !!!

Once your fine with the theme you chose, install it where you typically have your projects. Mine is here (Yours is problably different)

```html
D:\wamp64\www\
```
Once we drag it in there feel free to check it out in your browser!

### Customizing
Ok so chances are the majority of you will want to change the colors of something. Thanks to SaSS, this is easy. Go to 

```html
../assets/css/theme.scss
```
and at the top of the file you should see a bunch of variables. Below is the list of variables used in the framework with a description.

```sass
$background // Simply the background of the page 
$primary // The second color used in contrast to the background. I suggest you use a darker color then the background so people can see the layout clearer 
$secondary // Similar to primary except you should use a lighter tone / darker tone depending on where you are planning on using it. By default this is used on the nav, footer, and background text
$alt // Text color for buttons and titles for the portfolio section. Should use something that pops.
$hOne    ---\
$hTwo    --- | // All these variables are used to create the gradient hover on the text/button/icon
$hThree  --- | // I will explain this in the next section.
$hFour   ---/
...
```

<a name="CSS"/>
## CSS
<a name="Support"/>
## Supported Libraries
(I'm sure the framework supports more libraries but I built it with these two in mind. If you use another library and it works, let me know and I'll add it to the list)

[Font Awesome](http://fontawesome.io/)

[Animate.css](https://github.com/daneden/animate.css/)

[SaSS](http://sass-lang.com/)

<a name="Credits"/>
## Credits
[Font Awesome](http://fontawesome.io/) - For making the framework look really <i>Pretty</i>

[Normalize.css](https://necolas.github.io/normalize.css/) - for making my life easier

[SaSS](http://sass-lang.com/) - Best CSS preprocessor ever

[SkullCrusher](https://github.com/SkullCrusher) - For all the feedback he gave me during the making of the framework :)

<a name="License"/>
## License
The MIT License

Copyright (c) 2016 Michael Golebiewski. http://gleb.io

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
