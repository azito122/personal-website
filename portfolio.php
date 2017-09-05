<!DOCTYPE html>

<html>

<?php include 'head.php' ?>

<body class="portfolio">

<div class="block-menu">
  <div class="wrapper">
    <a class="back" href="/" title="Back">
      <i class="fa fa-angle-double-left"></i>
      <span>Back</span>
    </a>
    <a class="github" href="https://github.com/azito122" title="GitHub Profile">
      <i class="fa fa-github"></i>
      <span>GitHub Profile</span>
    </a>
  </div>
</div>

<section id="section_syntree" class="section-1 syntree">
  <h1 class="section-title">Syntree
    <div class="github-link">
      <a href="https://github.com/azito122/syntree" title="GitHub Repository">
    <i class="fa fa-github"></i>GitHub Repository</a></div>
</h1>
  <div cass="section-content">
    <div class="portfolio-screenshots">
      <div class="img portfolio-screenshot first">
        <span class="screenshot-title">Splash Page</span>
        <a class="site-link" title="Syntree Splash Page" href="http://syntree.andycodesthings.com/"></a>
      </div>
      <div class="img portfolio-screenshot second">
        <span class="screenshot-title">Main App</span>
        <a class="site-link" title="Syntree App" href="http://syntree.andycodesthings.com/pages/app-page.php"></a>
      </div>
      <div class="img portfolio-screenshot third">
        <span class="screenshot-title">Docs</span>
        <a class="site-link" title="Syntree Docs" href="http://syntree.andycodesthings.com/docs/"></a>
      </div>
    </div>
    <div class="technologies-used">JavaScript, PHP, Git, SASS, Gulp, SVG</div>
    <p class="content">Syntree is a JavaScript based web application that allows users to draw syntax trees using a GUI interface. For more in depth information, see <a href="http://syntree.andycodesthings.com/pages/help.php">the user docs</a> and <a href="http://syntree.andycodesthings.com/docs">the developer docs</a>.</p>
  </div>
</section>

<div class="section-sep first">
</div>

<section id="section_diviiportfolio" class="section-2 diviiportfolio">
  <h1 class="section-title">Academic E-Portfolio
    <div class="github-link">
      <a href="https://github.com/azito122/diviiportfolio" title="GitHub Repository">
    <i class="fa fa-github"></i>GitHub Repository</a></div>
  </h1>
  <div cass="section-content">
    <div class="portfolio-screenshots">
      <div class="img portfolio-screenshot first">
        <span class="screenshot-title">Splash Section</span>
        <a class="site-link" title="Syntree Splash Page" href="http://diviiportfolio.andycodesthings.com/"></a>
      </div>
      <div class="img portfolio-screenshot second">
        <span class="screenshot-title">Fall Semester</span>
        <a class="site-link" title="Syntree App" href="http://diviiportfolio.andycodesthings.com/#fall-main"></a>
      </div>
      <div class="img portfolio-screenshot third">
        <span class="screenshot-title">Spring Semester</span>
        <a class="site-link" title="Syntree Docs" href="http://syntree.andycodesthings.com/#spring-main"></a>
      </div>
    </div>
    <div class="technologies-used">PHP, JavaScript, CSS, HTML, Git</div>
    <p class="content">This portfolio serves two purposes: to demonstrate my (early) skills as a web developer, and to showcase the work I did during those two years (academic work, that is).

    Note: For those not familiar with the Hampshire College system, Division II corresponds to the middle two years of your undergraduate education.
    </p>
  </div>
</section>

<div class="section-sep second">
</div>

<section id="section_picam" class="section-3 picam">
  <h1 class="section-title">Picam Security Script
    <div class="github-link">
      <a href="https://github.com/azito122/hamp-picam" title="GitHub Repository">
    <i class="fa fa-github"></i>GitHub Repository</a></div>
  </h1>
  <div cass="section-content">
    <div class="portfolio-screenshots">
      <div class="img portfolio-screenshot first">
        <span class="screenshot-title">Source Code</span>
        <a class="site-link" title="Hampshire Picam Source Code" href="https://github.com/azito122/hamp-picam"></a>
      </div>
    </div>
    <div class="technologies-used">Python, Raspberry Pi</div>
    <p class="content">A Raspberry Pi + Picamera (Python library) security camera script.

    This script integrates an existing motion detection script with code that uploads taken photos to a remote directory structure.
  </div>
</section>

<div class="section-sep third">
</div>

<section id="section_monkeys" class="section-4 monkeys">
  <h1 class="section-title">Monkeys Typing Shakespeare
    <div class="github-link">
      <a href="https://github.com/azito122/monkeys_typing_shakespeare" title="GitHub Repository">
    <i class="fa fa-github"></i>GitHub Repository</a></div>
  </h1>
  <div cass="section-content">
    <div class="portfolio-screenshots">
      <div class="img portfolio-screenshot first">
        <span class="screenshot-title">Source Code</span>
        <a class="site-link" title="Source Code" href="https://github.com/azito122/monkeys_typing_shakespeare/blob/master/monkeys.py"></a>
      </div>
      <div class="img portfolio-screenshot second">
        <span class="screenshot-title">Project Proposal</span>
        <a class="site-link" title="Project Proposal" href="https://github.com/azito122/monkeys_typing_shakespeare/blob/master/final_project_proposal.pdf"></a>
      </div>
      <div class="img portfolio-screenshot third">
        <span class="screenshot-title">Graphs</span>
        <a class="site-link" title="Graphs" href="https://github.com/azito122/monkeys_typing_shakespeare/tree/master/graphs"></a>
      </div>
    </div>
    <div class="technologies-used">Python, Numpy, Matplotlib</div>
    <p class="content">This Python script attempts to 'evolve' English letter frequences via a relatively small scale evolutionary simulation. It iterates generating random strings via weighted random letter choice, and mutates the letter frequencies/weights on each iteration.

    The letter weights/frequencies are judged based on how many words they produce in the random strings, and "better" frequency sets have a higher chance to propagate to the next generation.</div>
</section>

</body>
<?php include 'footer.php' ?>
</html>
