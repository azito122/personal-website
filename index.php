<!DOCTYPE html>

<html>

<?php include 'head.php' ?>

<body>
<div class="screen">
<header>

  <div class="wrapper wrapper-table">
    <a class="follow" href="#about-me">
      <div class="row-first column-first">
        Andy
      </div>
      <div class="row-first column-second">
        <span class="follow-text">About me <i class="fa fa-angle-double-right"></i></span>
        <span class="main">(That's me)</span>
      </div>
    </a>
    <a class="follow" href="#skillsets">
      <div class="row-second column-first">
        Codes
      </div>
      <div class="row-second column-second">
        <span class="follow-text">Skillsets <i class="fa fa-angle-double-right"></i></span>
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
        <span class="follow-text">Portfolio <i class="fa fa-angle-double-right"></i></span>
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
  <a href="#about-me">
    <i class="fa fa-angle-down" aria-hidden="true"></i>
  </a>
</div>

</div>

<section id="about-me">

  <div class="resume-download-wrapper">
    <a class="resume-download" href="resources/files/andrew_zito_resume.doc"><i class="fa fa-download" aria-hidden="true"></i> Resume</a>
    <ul>
      <li><a href="resources/files/andrew_zito_resume.doc">Single page</a></li>
      <li><a href="resources/files/andrew_zito_resume_full.doc">Full</a></li>
    </ul>
  </div>
  <h1 class="section-title">About Me</h1>
  <div class="section-content">
    <p class="content"><?php print($V->render_text($C->get_text('about-me'))); ?></p>
  </div>

</section>

<div class="section-sep second">
</div>

<section id="skillsets">
  <h1 class="section-title">Skillsets</h1>
  <div class="section-content">

    <div class="tile languages">
      <i class="fa fa-code"></i>
      <h2 class="tile-title">Languages</h2>
      <ul>
        <li><i class="devicon-html5-plain colored"></i> HTML5</li>
        <li><i class="devicon-css3-plain colored"></i> CSS3</li>
        <li><i class="devicon-javascript-plain colored"></i> JavaScript</li>
        <li><i class="devicon-jquery-plain colored"></i> jQuery</li>
        <li><i class="devicon-php-plain colored"></i> PHP</li>
        <li><i class="devicon-python-plain colored"></i> Python</li>
      </ul>
    </div>

    <div class="tile systems">
      <i class="fa fa-list-alt"></i>
      <h2 class="tile-title">Systems</h2>
      <ul>
        <li><i class="devicon-git-plain colored"></i> Git</li>
        <li><i class="devicon-mysql-plain colored"></i> MySQL</li>
        <li><i class="devicon-moodle-plain colored"></i> Moodle</li>
        <li><i class="devicon-drupal-plain colored"></i> Drupal</li>
        <li>LaTeX</li>
        <li>Vagrant</li>
      </ul>
    </div>

    <div class="tile teamwork">
      <i class="fa fa-users"></i>
      <h2 class="tile-title">Teamwork Tools</h2>
      <ul>
        <li><i class="devicon-gitlab-plain colored"></i> GitLab</li>
        <li><i class="devicon-slack-plain colored"></i> Slack</li>
        <li><i class="devicon-trello-plain colored"></i> Trello</li>
      </ul>
    </div>

  </div>
</section>

<div class="section-sep second third">
</div>

<section id="portfolio">

  <h1 class="section-title">Portfolio
    <a class="icon-link" href="http://github.com/azito122">
      <i class="devicon-github-plain colored"></i>
    </a>
  </h1>

  <div class="tiles-wrapper">
    
  <?php print($V->render_portfolio_tile($C->get_portfolio_tile('syntree'))); ?>
  <?php print($V->render_portfolio_tile($C->get_portfolio_tile('diviiportfolio'))); ?>
  <?php print($V->render_portfolio_tile($C->get_portfolio_tile('picam'))); ?>
  <?php print($V->render_portfolio_tile($C->get_portfolio_tile('number-game'))); ?>

</section>

</body>
<footer>
<div>Icons made by <a href="https://www.flaticon.com/authors/picol" title="Picol">Picol</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
<a href='http://www.freepik.com/free-vector/city-skylines_787669.htm'>Designed by Freepik</a>
</footer>
</html>
