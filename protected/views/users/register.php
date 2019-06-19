<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Register',
);

// $this->menu=array(
// 	array('label'=>'List Users', 'url'=>array('index')),
// 	array('label'=>'Manage Users', 'url'=>array('admin')),
// );
?>

<h1>Registration Form</h1>

<?php $this->renderPartial('_registerform', array('model'=>$model)); ?>