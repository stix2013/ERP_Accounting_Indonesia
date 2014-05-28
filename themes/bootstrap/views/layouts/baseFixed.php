<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<title><?php echo isset($this->pageTitle) ? $this->pageTitle : Yii::app()->name; ?></title>

    </head>

	<?php
	if (isset($this->message)) {
		Yii::app()->getClientScript()
				->registerScriptFile(Yii::app()->baseUrl . "/css/ifightcrime-bootstrap-growl/jquery.bootstrap-growl.min.js");
				//->registerCssFile(Yii::app()->baseUrl . '/css/bootstrap-lightbox/jquery.simple.lightbox.css');

		Yii::app()->clientScript->registerScript('lightbox', "
					$.bootstrapGrowl('".$this->message."', {
					  ele: 'body', // which element to append to
					  type: 'info', // (null, 'info', 'error', 'success')
					  offset: {from: 'top', amount: 2}, // 'top', or 'bottom'
					  align: 'center', // ('left', 'right', or 'center')
					  width: 'auto', // (integer, or 'auto')
					  delay: 4000,
					  allow_dismiss: false,
					  stackup_spacing: 10 // spacing between consecutively stacked growls.
					});
		
				");
	}

	?>

<?php if (!Yii::app()->user->isGuest) { ?>
    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }

        @media (max-width: 980px) {

            body{
                padding-top: 0px;
            }
        }

    </style>
<?php } else { ?>
    <style>
        body {
            padding-top: 30px; /* 60px to make the container go all the way to the bottom of the topbar */
        }

        @media (max-width: 980px) {

            body{
                padding-top: 0px;
            }
        }
    </style>

<?php } ?>


    <body>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <?php $this->renderPartial('/layouts/_bootNavBar'); ?>
                </div>
                <?php /*
                  <div class="span12">
                  <?php $this->renderPartial('/layouts/_bootNavBarBottom'); ?>
                  </div>
                 */ ?>
            </div>

            <?php echo $content; ?>
        </div>

        <?php
        if (Yii::app()->user->isGuest) {
            $this->renderPartial('//layouts/_footer');
        }
        else
            $this->renderPartial('//layouts/_footerAuth');
        ?>
        <?php //Yii::app()->translate->renderMissingTranslationsEditor();  ?>

    </body>
</html>


