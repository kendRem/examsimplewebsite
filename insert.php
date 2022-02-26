<?php
$mongo = new MongoClient();
$db = $mongo->register;
$collection = $db->help;
if($_post)
{
	$insert=> array{
	'name'=> $_POST['name'];
	'email'=> $_POST['email'];
	}
	if ($collection->insert($insert))
	{
		echo "data inserted";
	}
	else{
		echo "some issue";
	}
}
else{
	echo "no data to store";
}

?>