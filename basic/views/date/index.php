<?php

use yii\helpers\Html;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */


?>
<h3>Select date:</h3>
<?php 
	echo DatePicker::widget([
		'language' => 'ru',
		'name' => 'country',
		'clientOptions' => [
		'dateFormat' => 'yy-mm-dd',
		],
	]);
?>