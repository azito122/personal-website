<!DOCTYPE html>

<html>
<head>

<link href="https://fonts.googleapis.com/css?family=Questrial|Raleway|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
<link rel="stylesheet" href="style/normalize.css">
<link rel="stylesheet" href="style/main.css">

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="js/main.js"></script>

</head>

<body>
<div class="screen">
<header>

  <div class="wrapper wrapper-table">
    <a class="follow" href="#about-me">
      <div class="row-first column-first">
        Andy
      </div>
      <div class="row-first column-second">
        <span class="follow-text">About me -></span>
        <span class="main">(That's me)</span>
      </div>
    </a>
    <a class="follow" href="#skillsets">
      <div class="row-second column-first">
        Codes
      </div>
      <div class="row-second column-second">
        <span class="follow-text">Skillsets -></span>
        <span class="main">With
          <ul>
            <li>JavaScript</li>
            <li>PHP</li>
            <li>Python</li>
            <li>HTML5</li>
            <li>CSS3</li>
          </ul></span>
      </div>
    </a>
    <a class="follow" href="#portfolio">
      <div class="row-third column-first">
        Things
      </div>
      <div class="row-third column-second">
        <span class="follow-text">Portfolio -></span>
        <span class="main"><ul>
          <li><span>A syntax tree drawing web app</span></li>
          <li><span>A custom Moodle module for temporary enrolments</span></li>
          <li><span>A bit of JavaScript to improve date input</span></li>
          <li><span>A custom Drupal theme for a graduate student's personal website</span></li>
          <li><span>A Python script for evolving English letter frequencies</span></li></span>
      </div>
    </a>
  </div>

</header>

<div class="section-sep">
</div>
</div>
<section id="about-me">
  <h1 class="section-title">About Me</h1>
  <div class="section-content">
    <p class="content"><?php include 'content/about.php' ?></p>
  </div>
</section>

<section id="skillsets">
  <h1 class="section-title">Skillsets</h1>
  <div class="section-content">

    <div class="_3-col col-1">
      <h2>Languages</h2>
      <ul>
        <li><i class="devicon-html5-plain colored"></i> HTML5</li>
        <li><i class="devicon-css3-plain colored"></i> CSS3</li>
        <li><i class="devicon-javascript-plain colored"></i> JavaScript</li>
        <li><i class="devicon-jquery-plain colored"></i> jQuery</li>
        <li><i class="devicon-php-plain colored"></i> PHP</li>
        <li><i class="devicon-python-plain colored"></i> Python</li>
      </ul>
    </div>
    <div class="_3-col col-2">
      <h2>Systems/<br>Frameworks</h2>
      <ul>
        <li><i class="devicon-git-plain colored"></i> Git</li>
        <li><i class="devicon-mysql-plain colored"></i> MySQL</li>
        <li><i class="devicon-moodle-plain colored"></i> Moodle</li>
        <li><i class="devicon-drupal-plain colored"></i> Drupal</li>
        <li>LaTeX</li>
        <li>Vagrant & VirtualBox</li>
      </ul>
    </div>

    <div class="_3-col col-3">
      <h2>Teamwork<br>Tools</h2>
      <ul>
        <li><i class="devicon-gitlab-plain colored"></i> GitLab</li>
        <li><i class="devicon-slack-plain colored"></i> Slack</li>
        <li><i class="devicon-trello-plain colored"></i> Trello</li>
      </ul>
    </div>

  </div>
</section>

<section id="portfolio">

  <h1 class="section-title">Portfolio
    <a class="icon-link" href="http://github.com/azito122">
      <i class="devicon-github-plain colored"></i>
    </a>
  </h1>

  <div class="tile syntree">
    <div class="overlay"></div>
    <h3 class="tile-title">Syntree</h3>
    <a class="tile-link" href="http://syntree.andycodesthings.com">Syntree</a>
    <p class="tile-description">A JavaScript web app for drawing syntax trees.</p>
  </div>

  <div class="tile diviiportfolio">
    <div class="overlay"></div>
    <a class="tile-link" href="http://diviiportfolio.andycodesthings.com">Academic E-Portfolio</a>
    <h3 class="tile-title">Academic E-Portfolio</h3>
    <p class="tile-description">An e-portfolio of academic work.</p>
  </div>

  <div class="tile number-game">
    <div class="overlay"></div>
    <a class="tile-link" href="https://repl.it/D4ey/2">Number Guessing Game</a>
    <h3 class="tile-title">Number Guessing Game</h3>
    <p class="tile-description">A simple number guessing game in Python.</p>
  </div>

</section>

</body>
<footer>
<div>Icons made by <a href="https://www.flaticon.com/authors/picol" title="Picol">Picol</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
<a href='http://www.freepik.com/free-vector/city-skylines_787669.htm'>Designed by Freepik</a>
</footer>
</html>
