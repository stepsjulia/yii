<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->Title=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Create Page', 'url'=>array('create')),
	array('label'=>'View Page', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<h1>Update Page <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>