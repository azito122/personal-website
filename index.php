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
<?php print($V->render($C->get_section('about-me'))); ?>
</section>

<div class="section-sep second">
</div>

<section id="skillsets">
  <?php print($V->render($C->get_section('skillsets'))); ?>
</section>

<div class="section-sep second third">
</div>

<section id="portfolio">
  <?php print($V->render($C->get_section('portfolio'))); ?>
</div>
</section>

</body>
<footer>
<div>Icons made by <a href="https://www.flaticon.com/authors/picol" title="Picol">Picol</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
<a href='http://www.freepik.com/free-vector/city-skylines_787669.htm'>Designed by Freepik</a>
<a href="http://www.freepik.com/free-vector/forest-banners_793671.htm">Designed by Freepik</a>
</footer>
</html>
