<?php

include_once("parser.inc.php");

$parser = new Parser();
$result = $parser->parseCoursePage();
$courseInfo = array();

$courseInfo["terms"] = $result["terms"];

foreach($result['depts'] as $dept) {
	$data = $parser->parseCoursePage("https://w5.hkust-gz.edu.cn".$result['terms'][0]['href']."subject/".$dept);
	foreach($data['courses'] as $course) {
		$courseInfo[$course->code] =  $course;
	}
}
$last_updated = date("j F, Y, g:i a");
$courseInfo["lastUpdated"] = $last_updated;
file_put_contents("../data/courseInfo.json", json_encode($courseInfo));

print "DONE";

?>