<?php $this->pageTitle = $step->title . ' - ' . Yii::app()->name; ?>

<h1 class="page-header"> Step <?php echo $step->sorder?>: <?php echo $step->title?> </h1>

<?php
//get migrated category ids
$migrated_category_ids = isset(Yii::app()->session['migrated_category_ids']) ? Yii::app()->session['migrated_category_ids'] : array();
$migrated_type_ids = isset(Yii::app()->session['migrated_product_type_ids']) ? Yii::app()->session['migrated_product_type_ids'] : array();
$migrated_customer_group_ids = isset(Yii::app()->session['migrated_customer_group_ids']) ? Yii::app()->session['migrated_customer_group_ids'] : array();

?>
<form role="form" method="post" action="<?php echo Yii::app()->createUrl("migrate/step{$step->sorder}"); ?>">
    <div id="step-content">
        <blockquote> <p class="tip"> <?php echo Yii::t('frontend', $step->descriptions); ?> </p> </blockquote>

       <?php $this->renderPartial('_frmButtons', array('step' => $step)); ?>

        <ul class="list-group">
            <li class="list-group-item">
                <h3 class="list-group-item-heading">
                    <input type="checkbox" id="select-all" name="select_all_customer_group" title="<?php echo Yii::t('frontend', 'Click here to select all customer groups.')?>" />
                    <?php echo Yii::t('frontend', 'Customer Groups'); ?>
                </h3>
                <?php if (isset($customer_groups) && $customer_groups): ?>
                <ul class="list-group">
                    <?php foreach ($customer_groups as $group): ?>
                    <li class="list-group-item">
                        <h4 class="list-group-item-heading">
                            <?php if ($checked = in_array($group->customer_group_id, $migrated_customer_group_ids)): ?>
                            <span class="glyphicon glyphicon-ok-sign text-success"></span>
                            <?php endif; ?>
                            <label for="customer_group_<?php echo $group->customer_group_id; ?>" class="checkbox-inline">
                                <input type="checkbox" <?php echo ($checked) ? "checked" : ''; ?> id="customer_group_<?php echo $group->customer_group_id; ?>" name="customer_group_ids[]" value="<?php echo $group->customer_group_id; ?>" />
                                <?php echo $group->customer_group_code . " (". MigrateSteps::getTotalCustomersByGroup($group->customer_group_id) .")"; ?>
                            </label>
                        </h4>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </li>
        </ul>
    </div>

    <?php $this->renderPartial('_frmButtons', array('step' => $step)); ?>
</form>