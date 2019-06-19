<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
<a class="trigger_popup_fricc">Click here to show the popup</a>

<div class="hover_bkgr_fricc">
    <span class="helper"></span>
    <div>
        <div class="popupCloseButton">X</div>
        <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/1.1MB.png" alt="Los Angeles" style="height: 300px; width: 200px;">
    </div>
    <div class="carousel-item">
      <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/12.JPG" alt="Chicago" style="height: 300px; width: 200px;">
    </div>
    <div class="carousel-item">
      <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/1MB.png" alt="New York" style="height: 300px; width: 200px;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
    </div>
</div>


<style type="text/css">
	.trigger_popup_fricc{
		display: block;
		position: fixed;
		bottom: 10;
		right: 42%;
		width: 300px;
		border: 3px solid #73AD21;
		z-index: 999;
	}
	/* Popup box BEGIN */
.hover_bkgr_fricc{
    background:rgba(0,0,0,.4);
    cursor:pointer;
    display:none;
    height:100%;
    position: relative;
    text-align:center;
    top:0;
    width:100%;
    z-index:10000;
}
.hover_bkgr_fricc .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
}
.hover_bkgr_fricc > div {
    background-color: #fff;
    box-shadow: 10px 10px 10px #555;
    display: inline-block;
    height: auto;
    max-width: 551px;
    min-height: 100px;
    vertical-align: middle;
    width: 60%;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
}
.popupCloseButton {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: arial;
    font-weight: bold;
    position: absolute;
    top: -20px;
    right: -20px;
    font-size: 25px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton:hover {
    background-color: #ccc;
}
.trigger_popup_fricc {
    cursor: pointer;
    font-size: 20px;
    margin: 20px;
    display: inline-block;
    font-weight: bold;
}
/* Popup box BEGIN */
</style>
<script type="text/javascript">
	$(window).load(function () {
    	$('.trigger_popup_fricc').click(function(){
        	$('.trigger_popup_fricc').hide();
    	});
    	$(".trigger_popup_fricc").click(function(){
       		$('.hover_bkgr_fricc').show();
    	});
    	// $('.hover_bkgr_fricc').click(function(){
    	//     $('.hover_bkgr_fricc').hide();
    	// });
    	$('.popupCloseButton').click(function(){
        	$('.hover_bkgr_fricc').hide();
    	});
	});
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>