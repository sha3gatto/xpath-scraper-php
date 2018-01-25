<?php

/*
https://bluebook.insightsassociation.org/marketing_research_firms_and_services.cfm?PageNum_results=$i&state=&country=&coname=&keyword=&bt=&spec=

http://bluebook.insightsassociation.org/listing.cfm?+kam&cid=5777&locid=1

http://bluebook.insightsassociation.org/listing.cfm?icanmakeitbetter &cid=5011&locid=3
*/

// for ( $i=1; $i<=13; $i++ ) {

// 	$doc = new DOMDocument();

// 	$doc->preserveWhiteSpace = false;
// 	$doc->validateOnParse = false;

// 	libxml_use_internal_errors(true);
// 	libxml_clear_errors();

// 	$html = @file_get_contents( "https://bluebook.insightsassociation.org/marketing_research_firms_and_services.cfm?PageNum_results=$i&state=&country=&coname=&keyword=&bt=&spec=" );
// 	file_put_contents("testBB/$i", $html);
// }



for ( $i=1; $i<=13; $i++ ) {

	echo $i, "\n";

	for ( $j=1; $j<=50; $j++ ) {

		$queryLink = "//div[@id='resultsDet'][$j]/*/*/*/*/*/a[@class='linkContact']/@href";
		$queryCompanyName = "//div[@id='resultsDet'][$j]/div[@id='listInfo']/table/*/*/*/a/@title";

		list( $contactData[$i][$j][ 'addressCompany' ],
			  $contactData[$i][$j][ 'phoneFaxCompany' ],
			  $contactData[$i][$j][ 'emailCompany' ],
			  $contactData[$i][$j][ 'mainContactNames' ],
			  $contactData[$i][$j][ 'mainContactEmail' ] ) = xpathSearchDetail( xpathSearchLink( $queryLink, $i ) );

		$contactData[$i][$j][ 'companyName' ] = xpathSearchLink( $queryCompanyName, $i );
	}
}

$list = array (	array( 'company name', 'address company', 'phone or fax company', 'email company', 'main contact names', 'main contact email' ) );

$fp = fopen('reportBlueBook.csv', 'a');

foreach ($list as $fields) {
 	fputcsv($fp, $fields);
}
fclose( $fp );

$fp = fopen( 'reportBlueBook.csv', 'a' );

$time_start = microtime_float();

foreach( $contactData as $keys ) {

	foreach ( $keys as $fields ) {

		$results = array( $fields['companyName'], $fields['addressCompany'], $fields['phoneFaxCompany'], $fields["emailCompany"], $fields["mainContactNames"], $fields["mainContactEmail"] );
		fputcsv( $fp, $results );
	}
}

$time_end = microtime_float();
$time = $time_end - $time_start;

echo "time elapsed: $time seconds\n";

fclose( $fp );

function xpathSearchDetail( $link2detail ) {

	$doc = new DOMDocument();

	$html = file_get_contents( "http://bluebook.insightsassociation.org" . str_replace( ' ', '%20', $link2detail ) );

	@$doc->loadHTML( $html );
	$xpath = new DOMXPath( $doc );

	$queryAddressCompany = "//table[@id='companycontactstable2']/tr/td[1]/div/p[1]";
	$queryPhoneEmailSale = "//table[@id='companycontactstable2']/tr/td[1]/div/p[2]";
	$queryMainContactNames = "//table[@id='companycontactstable2']/tr/td[2]/p/span[@id='bld']/text()";
	$queryMainContactEmail = "//table[@id='companycontactstable2']/tr/td[2]/p/*[@title]/text()";

	$addressCompany = $xpath->query( $queryAddressCompany );
	$phoneSale = $xpath->query( $queryPhoneEmailSale );
	$mainContactNames = $xpath->query( $queryMainContactNames );
	$mainContactEmail = $xpath->query( $queryMainContactEmail );

	$emailCompanyT = $addressCompanyT = $phoneSaleT = $mainContactNamesT = $mainContactEmailT = false;

	foreach ($addressCompany as $node) {

		$pattern = '/(\s+)/i';
		$replacement = ' ';
		$addressCompanyT =  preg_replace($pattern, $replacement, $node->nodeValue);
	}

	foreach ($phoneSale as $node) {

		$t = explode( ":", $node->nodeValue );

		if ( count( $t ) < 4 ) {

			$phoneS = strip_tags( $t[1] );
			$phoneS = trim( strstr($phoneS, 'EM', true) );
			$emailS = trim( strip_tags( $t[2] ) );

			if ( empty( $phoneS ) ) {

				$phoneSaleT = "brak";
			} else {

				$phoneSaleT = "phone " . $phoneS;
			}

			if ( empty( $emailS ) ) {

				$emailCompanyT = "brak";
			} else {

				$emailCompanyT = $emailS;
			}
		} elseif ( count( $t ) > 4 ) {

			$faxS = strip_tags( $t[1] );
			$faxS = trim( strstr($faxS, 'P2', true) );

			$phone1S = strip_tags( $t[2] );
			$phone1S = trim( strstr($phone1S, 'FX', true) );

			$phone2S = strip_tags( $t[3] );
			$phone2S = trim( strstr($phone2S, 'EM', true) );

			$emailS = trim( strip_tags( $t[4] ) );

			if ( empty( $faxS ) || empty( $phone1S ) || empty( $phone2S ) ) {

				$phoneSaleT = "brak";
			} else {

				$phoneSaleT = "fax " . $faxS . ", phone 1 " . $phone1S . ", phone 2 " . $phone2S;
			}

			if ( empty( $emailS ) ) {

				$emailCompanyT = "brak";
			} else {

				$emailCompanyT = $emailS;
			}
		} else {

			$faxS = trim( strip_tags( $t[1] ) );
			$faxS = strstr($faxS, 'FX', true);
			$phoneS = trim( strip_tags( $t[2] ) );
			$phoneS = strstr($phoneS, 'EM', true);
			$emailS = trim( strip_tags( $t[3] ) );

			if ( empty( $faxS ) || empty( $phoneS ) ) {

				$phoneSaleT = "brak";
			} else {

				$phoneSaleT = "fax " . $faxS . ", phone " . $phoneS;
			}

			if ( empty( $emailS ) ) {

				$emailCompanyT = "brak";
			} else {

				$emailCompanyT = $emailS;
			}
		}
	}

	foreach ($mainContactNames as $node) {

		$mainContactNamesT .= $node->nodeValue . " ";
	}

	foreach ($mainContactEmail as $node) {

		if ( strlen( $node->nodeValue ) > 0 ) {

			$mainContactEmailT .= $node->nodeValue . " ";
		}
	}

	return array( $addressCompanyT, $phoneSaleT, $emailCompanyT, $mainContactNamesT, $mainContactEmailT );
}

function xpathSearchLink( $queryLink, $i ) {

	$doc = new DOMDocument();

	$doc->preserveWhiteSpace = false;
	$doc->validateOnParse = false;

	libxml_use_internal_errors(true);
	libxml_clear_errors();

	$html = @file_get_contents( "blueBook_$i.html" );
	@$doc->loadHTML( $html );

	$xpath = new DOMXPath( $doc );

	$entriesCD = $xpath->query($queryLink);

	$string = false;

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