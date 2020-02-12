<?php
$domOBJ = new DOMDocument();
$domOBJ->load("https://www.bls.gov/feed/empsit.rss");
?>
<h2>Employment Rates</h2>
    <img src="image.jpg" alt="midtermExam" width="1250" height="500">
<?php
$content = $domOBJ->getElementsByTagName("entry");

foreach ($content as $data) {
	$title = $data->getElementsByTagName("title")->item(0)->nodeValue;
	$content = $data->getElementsByTagName("content")->item(0)->nodeValue;
?>
<head>
    
	<link rel="stylesheet" href="style.css">
</head>
<body>
<ul>
	<h1>
	<li><?php echo $title ?></li>
	</h1>
	<ul>
		<li><?php echo $content ?></li>
	</ul>
</ul>
</body>
</style>
<?php } ?>