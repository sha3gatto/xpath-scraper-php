<?php
$doc = new DOMDocument();

// $countries = array(
// array( 'code' => "DE", 'id' => 68, 'range' => range( 1, 6) ),
// array( 'code' => "UK", 'id' => 180, 'range' => range( 1, 6) ),
// array( 'code' => "FR", 'id' => 63, 'range' => range( 1, 3) ),
// array( 'code' => "IT", 'id' => 88, 'range' => range( 1, 3) ),
// array( 'code' => "RU", 'id' => 146, 'range' => range( 1, 2) ),
// array( 'code' => "NL", 'id' => 124, 'range' => range( 1, 2) ),
// array( 'code' => "ES", 'id' => 161, 'range' => range( 1, 2) ),
// array( 'code' => "TR", 'id' => 178, 'range' => range( 1, 2) ),
// array( 'code' => "BE", 'id' => 19, 'range' => range( 1, 2) ),
// array( 'code' => "SE", 'id' => 167, 'range' => range( 1, 2) ),
// array( 'code' => "CH", 'id' => 168, 'range' => range( 1, 2) ),
// array( 'code' => "DK", 'id' => 53, 'range' => range( 1, 2) ),
// array( 'code' => "GR", 'id' => 71, 'range' => range( 1, 2) )
// );

$countries = array(
	array( 'continent' => 'Europe', 			'code' => "Germany", 								'id' => 68, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "United-Kingdom-GB", 						'id' => 180, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "France", 								'id' => 63, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Italy", 									'id' => 88, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Russian-Federation", 					'id' => 146, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Netherlands", 							'id' => 124, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Spain", 									'id' => 161, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Turkey", 								'id' => 178, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Belgium", 								'id' => 19, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Sweden", 								'id' => 167, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Switzerland", 							'id' => 168, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Denmark", 								'id' => 53, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Greece", 								'id' => 71, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Albania", 								'id' => 2,  	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Austria", 								'id' => 11, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Belarus", 								'id' => 18, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Bosnia-Herzegovina", 					'id' => 27, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Bulgaria", 								'id' => 31, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Croatia", 								'id' => 46, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Cyprus", 								'id' => 50, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Czech-Republic", 						'id' => 51, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Estonia", 								'id' => 58, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Finland", 								'id' => 62, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Hungary", 								'id' => 80, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Iceland", 								'id' => 81, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Ireland", 								'id' => 86, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Latvia", 								'id' => 99, 	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Lithuania", 								'id' => 105,	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Luxembourg", 							'id' => 106,	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Macedonia", 								'id' => 214,	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Malta", 									'id' => 112,	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Norway", 								'id' => 131,	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Poland", 								'id' => 140,	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Portugal", 								'id' => 141,	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Romania", 								'id' => 145,	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Serbia", 								'id' => 152,	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Slovakia", 								'id' => 156,	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Slovenia", 								'id' => 157,	'page' => 1 ),
	array( 'continent' => 'Europe', 			'code' => "Ukraine", 								'id' => 183,	'page' => 1 ),
	array( 'continent' => 'North America',		'code' => "Canada",									'id' => 36,		'page' => 1 ),
	array( 'continent' => 'North America',		'code' => "United-States-USA",						'id' => 181,	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Afghanistan",          					'id' => 1,  	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Australia",            					'id' => 10, 	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Azerbaijan",           					'id' => 12, 	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Bangladesh",           					'id' => 15, 	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "China",                					'id' => 42, 	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Fiji-Islands",         					'id' => 61, 	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Georgia",              					'id' => 37, 	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Hong-Kong", 								'id' => 79, 	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "India", 									'id' => 82, 	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Indonesia", 								'id' => 83, 	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Japan", 									'id' => 91, 	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Kazakhstan", 							'id' => 93, 	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Korea-Republic-of", 						'id' => 95, 	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Malaysia", 								'id' => 110,	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Mongolia", 								'id' => 118,	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Myanmar", 								'id' => 32, 	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "New-Caledonia", 							'id' => 125,	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "New-Zealand", 							'id' => 127,	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Pakistan", 								'id' => 133,	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Papua-New-Guinea", 						'id' => 126,	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Philippines", 							'id' => 139,	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Singapore", 								'id' => 155,	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Sri-Lanka", 								'id' => 163,	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Taiwan", 								'id' => 170,	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Thailand", 								'id' => 173,	'page' => 1 ),
	array( 'continent' => 'Asia Pacific',		'code' => "Vietnam", 								'id' => 189,	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "Argentina", 								'id' => 7,  	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "Bolivia", 								'id' => 24, 	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "Brazil", 								'id' => 29, 	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "Chile", 									'id' => 41, 	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "Colombia", 								'id' => 43, 	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "Costa-Rica", 							'id' => 45, 	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "Dominican-Republic", 					'id' => 54, 	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "Ecuador", 								'id' => 55, 	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "El-Salvador", 							'id' => 57, 	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "Guatemala", 								'id' => 74, 	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "Honduras", 								'id' => 78, 	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "Jamaica", 								'id' => 90, 	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "Mexico", 								'id' => 115,	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "Nicaragua", 								'id' => 128,	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "Panama", 								'id' => 135,	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "Paraguay", 								'id' => 136,	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "Peru", 									'id' => 138,	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "Saint-Lucia", 							'id' => 149,	'page' => 1 ),
	array( 'continent' => 'South America',		'code' => "Venezuela", 								'id' => 188,	'page' => 1 ),
	array( 'continent' => 'Middle East',		'code' => "Iran-Islamic-Republic-of", 				'id' => 84, 	'page' => 1 ),
	array( 'continent' => 'Middle East',		'code' => "Iraq", 									'id' => 85, 	'page' => 1 ),
	array( 'continent' => 'Middle East',		'code' => "Israel", 								'id' => 87, 	'page' => 1 ),
	array( 'continent' => 'Middle East',		'code' => "Jordan", 								'id' => 92, 	'page' => 1 ),
	array( 'continent' => 'Middle East',		'code' => "Kuwait", 								'id' => 97, 	'page' => 1 ),
	array( 'continent' => 'Middle East',		'code' => "Lebanon", 								'id' => 100,	'page' => 1 ),
	array( 'continent' => 'Middle East',		'code' => "Qatar", 									'id' => 143,	'page' => 1 ),
	array( 'continent' => 'Middle East',		'code' => "Saudi-Arabia", 							'id' => 150,	'page' => 1 ),
	array( 'continent' => 'Middle East',		'code' => "United-Arab-Emirates", 					'id' => 179,	'page' => 1 ),
	array( 'continent' => 'Africa',				'code' => "Algeria", 								'id' => 3,  	'page' => 1 ),
	array( 'continent' => 'Africa',				'code' => "Cameroon", 								'id' => 35, 	'page' => 1 ),
	array( 'continent' => 'Africa',				'code' => "Congo-Democratic-People-s-Republic", 	'id' => 144,	'page' => 1 ),
	array( 'continent' => 'Africa',				'code' => "Egypt", 									'id' => 56, 	'page' => 1 ),
	array( 'continent' => 'Africa',				'code' => "Ethiopia", 								'id' => 59, 	'page' => 1 ),
	array( 'continent' => 'Africa',				'code' => "Ghana", 									'id' => 69, 	'page' => 1 ),
	array( 'continent' => 'Africa',				'code' => "Kenya", 									'id' => 94, 	'page' => 1 ),
	array( 'continent' => 'Africa',				'code' => "Madagascar", 							'id' => 108,	'page' => 1 ),
	array( 'continent' => 'Africa',				'code' => "Mauritius", 								'id' => 114,	'page' => 1 ),
	array( 'continent' => 'Africa',				'code' => "Morocco", 								'id' => 119,	'page' => 1 ),
	array( 'continent' => 'Africa',				'code' => "Nigeria", 								'id' => 130,	'page' => 1 ),
	array( 'continent' => 'Africa',				'code' => "Senegal", 								'id' => 151,	'page' => 1 ),
	array( 'continent' => 'Africa',				'code' => "South-Africa", 							'id' => 159,	'page' => 1 ),
	array( 'continent' => 'Africa',				'code' => "Tanzania", 								'id' => 171,	'page' => 1 ),
	array( 'continent' => 'Africa',				'code' => "Tunisia", 								'id' => 177,	'page' => 1 ),
	array( 'continent' => 'Africa',				'code' => "Zambia", 								'id' => 194,	'page' => 1 ),
);

foreach( $countries as $c ) {

	$html = @ file_get_contents( "https://directory.esomar.org/results.php?countries={$c['id']}&alpha=0&page=" . $c['page'] );
	@$doc->loadHTML( $html );
	$xpath = new DOMXPath( $doc );
	$links = $xpath->query( '//div[@class="bg-eso-lightblue p1-5 mb1 onmobile-mb0-5"]/div/div/h2/a' );
	foreach( $links as $link ) {

		$urls[] = array( 'continent' => $c['continent'], 'code' => $c['code'], 'link' => trim( $link->getAttribute( 'href' ) ) );
	}
}

$i = 0;

foreach( $urls as $data ) {

	$html = @ file_get_contents( $data['link'] );
	$doc->preserveWhiteSpace = true;
	$doc->validateOnParse = false;
	@$doc->loadHTML( $html );
	$xpath = new DOMXPath( $doc );
	$addressData = $xpath->query( '//div[@class="col w13e autotablet"]/p' );
	$companyName = $xpath->query( '//div[@class="row w100 automobile mt1"]/div/h1' );

	$cn = $doc->saveHTML( $companyName->item( 0 ) );
	$cn = strip_tags( $cn );
	$cn = trim( $cn );

	$t = $doc->saveHTML( $addressData->item( 0 ) );
	$t = strip_tags( $t, "<br>" );
	$t = trim( $t );
	$t = explode( '<br>', $t );
	array_pop( $t );
	$details[ 'addressData' ][] = $t;

	$details[ 'addressData' ][$i][ 'companyName' ] = $cn;

	$email2 = $xpath->query( '//div[@class="col automedium w20e"]/div/div/p/a[2]' );
	if ( empty( $email2->item( 0 )->getAttribute( 'data-ga-label' ) ) ) {

		$email1 = $xpath->query( '//div[@class="col automedium w20e"]/div/div/p/a[@data-ga-category="email"]' );
		$details[ 'addressData' ][$i]['email'] = $email1->item( 0 )->getAttribute( 'data-ga-label' );
	} else {
		$details[ 'addressData' ][$i]['email'] = $email2->item( 0 )->getAttribute( 'data-ga-label' );
	}

	$details[ 'addressData' ][$i]['continent'] = $data['continent'];
	$details[ 'addressData' ][$i]['code'] = $data['code'];
	$i++;
}

// print_r($details[ 'addressData' ]);

for( $i = 0; $i < count( $details[ 'addressData' ] ); $i ++  ) {

	for( $j = 0; $j < count( $details[ 'addressData' ][ $i ] ); $j ++  ) {

		if( strpos( $details[ 'addressData' ][ $i ][ $j ], 'Fax:' ) !== false ) {

			$details[ 'addressData' ][ $i ][ 'fax' ] = $details[ 'addressData' ][ $i ][ $j ];
		} elseif( strpos( $details[ 'addressData' ][ $i ][ $j ], 'Phone:' ) !== false ) {

			$details[ 'addressData' ][ $i ][ 'phone' ] = $details[ 'addressData' ][ $i ][ $j ];
		} else {

			$details[ 'addressData' ][ $i ][ 'address' ] .= $details[ 'addressData' ][ $i ][ $j ] . " ";
		}
	}
}

// var_dump($details);

$list = array (	array( 'company name', 'continent', 'country', 'address', 'email', 'phone', 'fax' ) );

$fp = fopen('reportEsomar.csv', 'a');

foreach ($list as $fields) {
 	fputcsv($fp, $fields);
}
fclose( $fp );

$fp = fopen( 'reportEsomar.csv', 'a' );

foreach( $details[ 'addressData' ] as $fields ) {

	$results = array( $fields['companyName'], $fields['continent'], $fields["code"], $fields["address"], $fields["email"], $fields["phone"], $fields["fax"] );

	fputcsv( $fp, $results );
}
fclose( $fp );