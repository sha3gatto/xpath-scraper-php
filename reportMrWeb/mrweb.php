<?php

/*
//table//table[1]/tr[2]/td[2]/span[4] | //table//table[1]/tr[2]/td[2]/span[6] | //table//table[1]/tr[2]/td[2]/span[8]

link
//table//table[1]/tr[2]/td[2]/a[1]

contact name
//table//table[1]/tr[2]/td[2]/span[4]

address
//table//table[1]/tr[2]/td[2]/span[6]

tel
//table//table[1]/tr[2]/td[2]/span[8]

details
//div[@class='rtcol_container']/a[2]/@href

body/div/div/div[@class='rtcol_container']/a[2]/@href


*/

for ( $i=1; $i<=944; $i++ ) { // 944

	echo $i, ", ";

	// przyklad wolnego xpatha
	// $queryLink = "//table//table[$i]/tr[2]/td[2]/a[1]/@href";
	// $queryCompanyName = "//table//table[$i]/tr[2]/td[2]/span[2]";
	// $queryContactName = "//table//table[$i]/tr[2]/td[2]/span[4]";
	// $queryAddress = "//table//table[$i]/tr[2]/td[2]/span[6]";
	// $queryPhone = "//table//table[$i]/tr[2]/td[2]/span[8]";

	$queryLink = "//table[@class='contactX'][$i]/tr[2]/td[2]/a[1]/@href";
	$queryCompanyName = "//table[@class='contactX'][$i]/tr[2]/td[2]/span[2]";
	$queryContactName = "//table[@class='contactX'][$i]/tr[2]/td[2]/span[4]";
	$queryAddress = "//table[@class='contactX'][$i]/tr[2]/td[2]/span[6]";
	$queryPhone = "//table[@class='contactX'][$i]/tr[2]/td[2]/span[8]";

	$contactData[$i][ 'companyName' ] = xpathSearchText( $queryCompanyName );
	$contactData[$i][ 'contactName' ] = xpathSearchText( $queryContactName );
	$contactData[$i][ 'address' ] = xpathSearchText( $queryAddress );
	$contactData[$i][ 'phone' ] = xpathSearchText( $queryPhone );
	$contactData[$i][ 'email' ] = xpathSearchLink( $queryLink );
}

$list = array (	array( 'company name', 'contact name', 'address', 'phone', 'email' ) );

$fp = fopen('reportMrWeb.csv', 'a');

foreach ($list as $fields) {
 	fputcsv($fp, $fields);
}
fclose( $fp );

$fp = fopen( 'reportMrWeb.csv', 'a' );

$time_start = microtime_float();

foreach( $contactData as $fields ) {

	$results = array( $fields['companyName'], $fields['contactName'], $fields["address"], $fields["phone"], $fields["email"] );

	fputcsv( $fp, $results );
}

$time_end = microtime_float();
$time = $time_end - $time_start;

echo "time elapsed: $time seconds\n";

fclose( $fp );

function xpathSearchLink( $queryLink ) {

	$doc = new DOMDocument();

	libxml_use_internal_errors(true);
	libxml_clear_errors();

	$doc->preserveWhiteSpace = false;
	$doc->validateOnParse = false;

	$html = @ file_get_contents( "mrweb_html.php" );
	@$doc->loadHTML( $html );

	$xpath = new DOMXPath( $doc );
	
	$entriesLink = $xpath->query($queryLink);

	foreach ($entriesLink as $entry) {

		$tmp = explode( "=", $entry->nodeValue );
		$idLink = $tmp[1];
	}

	$html = @ file_get_contents( "http://www.mrweb.com/agencies/spd$idLink.htm" );
	@$doc->loadHTML( $html );
	$xpath = new DOMXPath( $doc );
	$queryEmail = "//div[@class='rtcol_container']/a[2]/@href";
	$emailData = $xpath->query($queryEmail);

	foreach ($emailData as $entry) {

		$tmp = explode( ":", $entry->nodeValue );
		$email = $tmp[1];
	}
	return $email;
}

function xpathSearchText( $queryLink ) {

	$doc = new DOMDocument();

	$doc->preserveWhiteSpace = false;
	$doc->validateOnParse = false;

	libxml_use_internal_errors(true);
	libxml_clear_errors();

	$html = @ file_get_contents( "mrweb_html.php" );
	@$doc->loadHTML( $html );

	$xpath = new DOMXPath( $doc );

	$entriesCD = $xpath->query($queryLink);

	foreach ($entriesCD as $entry) {

		$string = strip_tags( $entry->nodeValue );
	}
	return $string;
}

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
?>
