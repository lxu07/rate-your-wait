<!DOCTYPE html>
<html>
	<head>
		<title> omgplzwurk </title>
	</head>
	
	<body>
		<p> This is a test. </p>
	</body>
	<?php
	// Include the AWS SDK using the Composer autoloader.
	require 'vendor/autoload.php';

	$s3 = Aws\S3\S3Client::factory();
	$bucket = getenv('S3_BUCKET');
	$keyname = 'test.txt';
	try {
		// Upload data.
		$result = $s3->putObject(array(
			'Bucket' => $bucket,
			'Key'    => $keyname,
			'Body'   => 'Hello, world!',
			'ACL'    => 'public-read'
		));
		// Print the URL to the object.
		echo $result['ObjectURL'] . "\n";
	} catch (S3Exception $e) {
		echo $e->getMessage() . "\n";
	}
	?>
</html>
