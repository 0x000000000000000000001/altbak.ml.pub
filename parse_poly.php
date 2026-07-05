<?php
$json = json_decode(file_get_contents('bak/php/output/Test.Polymorphism/corefn.json'), true);
foreach($json['decls'] as $decl) {
  if ($decl['identifier'] === 'sub') {
    echo "Found sub:\n";
    print_r($decl);
  }
}
