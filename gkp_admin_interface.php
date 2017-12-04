<!DOCTYPE html>

<html>

<?php include 'head.php' ?>
<meta name="viewport" content="width=1024">
</head>

<body class="portfolio gkp_admin_interface" onresize="positionNotes()">

<div class="block-menu">
  <div class="wrapper">
    <a class="back" href="./portfolio.php" title="Back">
      <i class="fa fa-angle-double-left"></i>
      <span>Back</span>
    </a>
    <a class="github" href="https://github.com/azito122" title="GitHub Profile">
      <i class="fa fa-github"></i>
      <span>GitHub Profile</span>
    </a>
  </div>
</div>

<div class="wrapper">
  <div class="note note-intro"><span>This is a screenshot of the Settings page for the GKP theme. Note the customized Shortcuts menu above, which provides all links needed to alter the site, labelled descriptively.</span></div>
  <div class="note note-colors"><span>This whole section is custom. It mimics the functionality of the core <a href="https://www.drupal.org/docs/8/core/modules/color/">Color module</a>, but with much nicer JavaScript based color inputs.</span></div>
  <div class="note note-othersettings"><span>There are also settings like this one which control visual aspects beyond color.</span></div>
  <div class="note note-colorinput"><span>This color input is from the <a href="https://www.drupal.org/project/jquery_colorpicker">Jquery Colorpicker module</a> .</span></div>
  <div class="note note-customcss"><span>Here the administrator can input custom CSS. This allows for more advanced customization of the theme by a client who knows or is willing to learn a bit of CSS, without requiring them to learn the whole Drupal theming system. Courtesy of the <a href="https://www.drupal.org/project/css_editor">CSS Editor module</a>.</span></div>
  <div class="note note-livepreview"><span>The <a href="https://www.drupal.org/project/css_editor">CSS Editor module</a> also comes with a lovely live preview pane, shown here.</span></div>

  <img src="./resources/img/gkp_screenshot_3.png" width="100%">
</div>

</body>
<footer>
<script>
const notes = {
  intro: [65, 170, 700, 80],
  colors: [480, 200, 500, 80],
  othersettings: [560, 590, 380, 80],
  colorinput: [900, 360, 500, 80],
  customcss: [1380, 80, 700, 100],
  livepreview: [1640, 60, 600, 80]
}
function positionNotes() {
  console.log("repositioning")
  let factor = $('img').width()/1024;
  Object.keys(notes).map(function(item, index) {
    var temp = {};
    temp.top = (factor * notes[item][0]) + "px";
    temp.left = (factor * notes[item][1]) + "px";
    temp.width = (factor * notes[item][2]) + "px";
    temp.maxHeight = (factor * notes[item][3]) + "px";
    // temp.height = (factor * notes[item][3]) + "px";
    temp.fontSize = (factor * 0.9) + "em";
    $('.note-' + item).css(temp);
  });
}
positionNotes();
</script>
</footer>
</html>
