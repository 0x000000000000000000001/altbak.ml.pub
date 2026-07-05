<?php
$json = json_decode(file_get_contents('bak/php/output/Data.Ring/corefn.json'), true);
foreach($json['decls'] as $decl) {
  if ($decl['identifier'] === 'sub' || $decl['identifier'] === 'ringInt') {
    echo $decl['identifier'] . ":\n";
    print_r($decl['expression']);
  }
}
