<?php

class Control {
  public function get_piece($name) {
    $string = file_get_contents("content/pieces/$name");
    $data = $this->parse_file($string);
    $data['name'] = $name;
    return $data;
  }

  public function get_pieces_by_type($type) {
    $pieces = array();
    $dir = new DirectoryIterator('content/pieces');
    foreach ($dir as $fileinfo) {
      if (!$fileinfo->isDot()) {
        $string = file_get_contents($fileinfo->getPathname());
        $data = $this->parse_file($string);
        if ($data['type'] == $type) {
          $data['name'] = $fileinfo->getFilename();
          array_push($pieces, $data);
        }
      }
    }
    return $pieces;
  }


  public function get_section($name) {
    $string = file_get_contents("content/sections/$name");
    $data = $this->parse_file($string);
    $data['name'] = $name;
    if (array_key_exists('pieces', $data)) {
      $data['pieces'] = array($this->get_piece($data['pieces']));
    } else if (array_key_exists('pieces_of_type', $data)) {
      $temp = $this->get_pieces_by_type($data['pieces_of_type']);
      foreach ($temp as $x) {
        if (!array_key_exists('weight', $x)) {
          $x['weight'] = 0;
        }
      }
      usort($temp, function($a, $b) {
        return $a['weight'] > $b['weight'];
      });
      $data['pieces'] = $temp;
    }
    return $data;
  }

  private function parse_file($contents) {
    $data = array();
    $m = array();
    preg_match_all('/@@(\w*) : (.*?)\s*(?=@@|$)/s', $contents, $m);
    for ($i=0; $i < count($m[1]); $i++) {
      $key = $m[1][$i];
      $val = $m[2][$i];
      $data[$key] = $val;
    }
    return $data;
  }
}
