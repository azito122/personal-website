<?php

class Control {
  private function handler_list_items($data) {
    $string = $data['list_items'];
    $items = explode(',', $string);
    $items = array_map(function($item) {
      return trim($item);
    }, $items);
    $data['list_items'] = $items;
    return $data;
  }

  private function handler_content($data) {
    $result = array();
    $names = explode(',', $data['content']);
    foreach($names as $name) {
      // echo "<pre>" . var_dump($this->get($name)) . "</pre>";
      $result[$name] = $this->get($name);
    }
    $data['content'] = $result;
    return $data;
  }

  private function handler_content_of_type($data) {
    // print("getting content of type" . $data['content_of_type'] . "\n");
    $temp = $this->get_by_type($data['content_of_type']);
    foreach ($temp as $x) {
      if (!array_key_exists('weight', $x)) {
        $x['weight'] = 0;
      }
    }
    usort($temp, function($a, $b) {
      return $a['weight'] > $b['weight'];
    });
    $data['content'] = $temp;
    return $data;
  }

  public function get($name) {
    // print("getting $name\n");
    $string = file_get_contents(DATA_DIR . "/content/$name");
    $data = $this->parse_file($string);
    $data['name'] = $name;
    foreach($data as $k => $v) {
      if (method_exists($this, "handler_$k")) {
        // echo "$k\n";
        $f = "handler_$k";
        $data = $this->$f($data);
      }
    }
    // var_dump($data);
    return $data;
  }

  public function get_by_type($type) {
    $pieces = array();
    $dir = new DirectoryIterator(DATA_DIR . '/content');
    foreach ($dir as $fileinfo) {
      if (!$fileinfo->isDot()) {
        // var_dump()
        // $data = $this->get($fileinfo->getFilename());
        $string = file_get_contents($fileinfo->getPathname());
        $data = $this->parse_file($string);
        if ($data['type'] == $type) {
          $data = $this->get($fileinfo->getFilename());
          array_push($pieces, $data);
        }
        // $string = file_get_contents($fileinfo->getPathname());
        // $data = $this->parse_file($string);
        // if ($data['type'] == $type) {
        //   $data['name'] = $fileinfo->getFilename();
        //   array_push($pieces, $data);
        // }
      }
    }
    // var_dump($pieces);
    return $pieces;
  }

  // public function get_section($name) {
  //   $string = file_get_contents(DATA_DIR . "/sections/$name");
  //   $data = $this->parse_file($string);
  //   $data['name'] = $name;
  //   if (array_key_exists('pieces', $data)) {
  //     $data['pieces'] = array($this->get_piece($data['pieces']));
  //   } else if (array_key_exists('pieces_of_type', $data)) {
  //     $temp = $this->get_pieces_by_type($data['pieces_of_type']);
  //     foreach ($temp as $x) {
  //       if (!array_key_exists('weight', $x)) {
  //         $x['weight'] = 0;
  //       }
  //     }
  //     usort($temp, function($a, $b) {
  //       return $a['weight'] > $b['weight'];
  //     });
  //     $data['pieces'] = $temp;
  //   }
  //   return $data;
  // }

  private function parse_file($contents) {
    $data = array();
    $m = array();
    preg_match_all('/@@(\w*) :\s(.*?)\s*(?=@@|$)/s', $contents, $m);
    for ($i=0; $i < count($m[1]); $i++) {
      $key = $m[1][$i];
      $val = $m[2][$i];
      $data[$key] = trim($val);
    }
    return $data;
  }
}
