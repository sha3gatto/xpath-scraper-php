<?php

$html = file_get_contents("http://bluebook.insightsassociation.org/listing.cfm?20|20 - Charlotte&cid=1001&locid=2");
$html = file_get_contents("http://bluebook.insightsassociation.org/listing.cfm?20|20%20-%20Charlotte&cid=1001&locid=2");

print_r($html);

?>