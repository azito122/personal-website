<?php

class View {
  public function render($data) {
    $type = $data['type'];
    if ($type == 'section') {
      $temp = "";
      foreach($data['pieces'] as $piece) {
        $temp .= $this->render($piece);
      }
      $data['pieces'] = $temp;
    }
    if (file_exists("content/templates/$type")) {
      $template = file_get_contents("content/templates/$type");
      $replace = array();
      foreach ($data as $key => $val) {
        $replace["{\$$key}"] = $val;
      }
      $str = strtr($template, $replace);
      $str = preg_replace('/{\$\w*}/', '', $str);
      return $str;
    }
  }
}
