<?php
/* @var $this MembershipController */
/* @var $model Membership */

$this->breadcrumbs=array(
	'Memberships'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Membership', 'url'=>array('index')),
	array('label'=>'Create Membership', 'url'=>array('create')),
	array('label'=>'Update Membership', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Membership', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Membership', 'url'=>array('admin')),
);
?>

<h1>View Membership #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'membership_name',
		'days',
		'rate',
		'created_at',
		'updated_at',
	),
)); ?>
