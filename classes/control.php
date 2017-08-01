<?php

class Control {
  public function get_text($name) {
    return file_get_contents("content/text/$name");
  }

  public function get_tile_list($name) {
    $contents = file_get_contents("content/tile_list/$name");
    $data = $this->parse_file($contents);
    return $data;
  }

  public function get_portfolio_tile($name) {
    $contents = file_get_contents("content/portfolio_tile/$name");
    $data = $this->parse_file($contents);
    $data['name'] = $name;
    return $data;
  }

  private function parse_file($contents) {
    $data = array();
    foreach(preg_split("/((\r?\n)|(\r\n?))/", $contents) as $line){
      $m = array();
      if (preg_match('/^@(\w*)\s:\s(.*)$/', $line, $m)) {
        $key = $m[1];
        $val = $m[2];
        $data[$key] = $val;
      }
    }

    return $data;
  }
}
