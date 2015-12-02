<?php $this->pageTitle = $step->title . ' - ' . Yii::app()->name; ?>

<h1 class="page-header"> Step <?php echo $step->sorder?>: <?php echo $step->title?> </h1>

<?php
//get migrated sales objects ids
$migrated_sales_object_ids = isset(Yii::app()->session['migrated_sales_object_ids']) ? Yii::app()->session['migrated_sales_object_ids'] : array();
?>

<form role="form" method="post" action="<?php echo Yii::app()->createUrl("migrate/step{$step->sorder}"); ?>">
    <div id="step-content">
        <blockquote> <p class="tip"> <?php echo Yii::t('frontend', $step->descriptions); ?> </p> </blockquote>

        <?php $this->renderPartial('_frmButtons', array('step' => $step)); ?>

        <ul class="list-group">
            <li class="list-group-item">
                <h3 class="list-group-item-heading">
                    <?php echo Yii::t('frontend', 'Sales Data Objects'); ?><br/>
                </h3>
                <h4>
                    <?php $checked = (sizeof($migrated_sales_object_ids) == sizeof($sale_objects)) ? true : false; ?>
                    <input type="checkbox" <?php echo ($checked) ? 'checked="checked"' : ''; ?> id="select-all" name="select_all_sales_object" title="<?php echo Yii::t('frontend', 'Click here to select all sales objects.')?>" />
                    <label for="select-all">Select all</label>
                </h4>
                <?php if (isset($sale_objects) && $sale_objects): ?>
                <ul class="list-group">
                    <?php foreach ($sale_objects as $id => $label): ?>
                        <?php if ($id != 'bestseller'): ?>
                            <li class="list-group-item">
                                <h4 class="list-group-item-heading">
                                    <?php if ($checked = in_array($id, $migrated_sales_object_ids)): ?>
                                    <span class="glyphicon glyphicon-ok-sign text-success"></span>
                                    <?php endif; ?>
                                    <input type="checkbox" <?php echo ($checked) ? "checked" : ''; ?> id="sales_object_<?php echo $id; ?>" name="selected_objects[]" value="<?php echo $id; ?>" />
                                    <span> <?php echo $label . " (". MigrateSteps::getTotalSalesChildObject($id) .")"; ?> </span>
                                </h4>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </li>
        </ul>
    </div>

    <?php $this->renderPartial('_frmButtons', array('step' => $step)); ?>
</form>