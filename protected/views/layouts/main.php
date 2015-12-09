<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/css/favicon.ico" type="image/x-icon">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Início', 'url'=>array('/site/index')),
				//array('label'=>'Sobre', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Doadores', 'url'=>array('/giver'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Presentes', 'url'=>array('/gift'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(!Yii::app()->user->isGuest && isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<br/>
	<?php
	    foreach(Yii::app()->user->getFlashes() as $key => $message) {
	        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
	    }
	?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

<script type="text/javascript">
	$(document).ready(function() {
		//Deixando título colorido.
		var blackSiteName = document.querySelector("#logo").innerHTML;
		var coloredSiteName = [], colored = true, i = 0;
		$.each(blackSiteName, function() {
			coloredSiteName[i] = (this != ' ' && colored)
				? '<font color="FF80CE">' + this + '</font>' : this;
			colored = (this != ' ') ? !colored : colored;
			i++;
		});
		document.querySelector("#logo").innerHTML = coloredSiteName.join('');
		//Ajustando imagem de background.
		var selector = "#page.container";
		document.querySelector(selector).style.backgroundSize = $(selector).width() + "px " + $(selector).height() + "px";
	});
</script>

</body>
</html>
