<?php

class View {
  private function handler_list_items($data) {
    $data['list_items'] = array_map(function($item) {
      return "<li>" . $item . "</li>\n";
    }, $data['list_items']);
    $data['list_items'] = implode($data['list_items']);
    return $data;
  }

  private function handler_content($data) {
    $content = $data['content'];
    $o = "";
    foreach ($content as $c) {
      $o .= $this->render($c);
    }
    $data['content'] = $o;
    return $data;
  }

  public function render($data) {
    // Recurse through any sub arrays of data
    foreach ($data as $k => $v) {
      if (gettype($v) == 'array') {
        if (method_exists($this, "handler_$k")) {
          $handler = "handler_$k";
          $data = $this->$handler($data); // For things like '@@content', which require special operations
        } else if (!array_key_exists('type', $v)) {
          $v['type'] = $k; // for non-standalone content types, like list_items
          $data[$k] = $this->render($v);
        }
      }
    }
    $type = $data['type'];
    if (file_exists(DATA_DIR . "/templates/$type")) {
      $template = file_get_contents(DATA_DIR . "/templates/$type");
      return $this->template($data, $template);
    }
  }

  private function template($data, $template) {
    $replace = array();
    foreach ($data as $key => $val) {
      $replace["{\$$key}"] = $val;
    }
    $str = strtr($template, $replace);
    $str = preg_replace('/{\$\w*}/', '', $str); // Remove any unused variables in the template
    return $str;
  }
}
