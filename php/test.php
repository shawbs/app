
	<?php
$name=$_GET['name'];
$json=array(
		'result'=>true,
		'data' => array(
			array(
				'name' => 'xiaoxinwu1',
				'age' => 16
			),
		array(
				'name' => 'xiaoxinwu2',
				'age' => 17
			),
		array(
				'name' => 'xiaoxinwu3',
				'age' => 18
			),
		array(
				'name' => 'xiaoxinwu4',
				'age' => 19
			)
		)
	);
// $data=json_encode($json,true);
foreach ($json['data'] as $value) {
	if($value['name'] == $name){
		$data = $value['age'];
	}
}
echo json_encode($data);
exit;
	?>

