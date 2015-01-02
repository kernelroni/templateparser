<?php


// token and its values
$tokenValues = array();
$tokenValues['name'] = "MY NAME";
$tokenValues['company'] = "MY COMPANY";
$tokenValues['testtoken'] = "TESTTOKEN";

// sample message body
$body = "abc {company} def {name} ijk {name} lmn {company} opq {testtoken} rst {notexists} uvw {name} xyz. ";
echo "before parse <br />";
echo $body . "<br>";

// pattern
$pattern = "/{(.*?)}/";
preg_match_all($pattern, $body, $tokens);


	if($tokens){
		$tokens[0] = array_unique($tokens[0]);
		$tokens[1] = array_unique($tokens[1]);
		foreach($tokens[1] as $key => $token){
			$tokenValue = "";
				if(isset($tokenValues[$token])){
					$tokenValue = $tokenValues[$token];
				}
				$body = str_replace($tokens[0][$key],$tokenValue,$body);
		}
	}
// final message body
	
echo "after parse <br />";
// abc MY COMPANY def MY NAME ijk MY NAME lmn MY COMPANY opq TESTTOKEN rst uvw MY NAME xyz.
echo $body;
