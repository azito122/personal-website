<?php

class View {
  public function render_portfolio_tile($parameters) {
    $name = $parameters['name'];
    $title = $parameters['title'];
    $description = $parameters['description'];
    $info_link = $parameters['info_link'];
    $visit_link = $parameters['visit_link'];
    $source_link = $parameters['source_link'];

    $o = "<div class=\"tile $name\">";
    $o .= "<div class=\"overlay\"></div>";
    $o .= "<h3 class=\"tile-title\">$title</h3>";
    $o .= "<p class=\"tile-description\">$description</p>";
    $o .= "<div class=\"tile-links\">";
    $o .= "<a class=\"info\" href=\"$info_link\">More info<i class=\"fa fa-info-circle\"></i></a>";
    $o .= "<a class=\"visit\" href=\"$visit_link\">Visit<i class=\"fa fa-angle-double-right\"></i></a>";
    $o .= "<a class=\"source\" href=\"$source_link\">Source code<i class=\"fa fa-github\"></i></a>";
    $o .= "</div></div>";

    return $o;
  }
}
