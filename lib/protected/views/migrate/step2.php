<?php $this->pageTitle = $step->title . ' - ' . Yii::app()->name; ?>

<h1 class="page-header"> Step <?php echo $step->sorder?>: <?php echo $step->title?> </h1>

<form role="form" method="post" action="<?php echo Yii::app()->createUrl("migrate/step{$step->sorder}"); ?>">

<div id="step-content">
    <blockquote> <p class="tip"> <?php echo Yii::t('frontend', $step->descriptions); ?> </p> </blockquote>

    <?php $this->renderPartial('_frmButtons', array('step' => $step)); ?>
    
    <?php
    //get migrated website ids from session if has
    $migrated_website_ids = isset(Yii::app()->session['migrated_website_ids']) ? Yii::app()->session['migrated_website_ids'] : array();
    ?>
    <?php foreach ($websites as $website): ?>
    <ul class="list-group">
        <li class="list-group-item">
            <h4 class="list-group-item-heading">
                <?php if ($checked = in_array($website->website_id, $migrated_website_ids)): ?>
                    <span class="glyphicon glyphicon-ok-sign text-success"></span>
                <?php endif; ?>
                <label class="checkbox-inline">
                    <input type="checkbox" id="website-<?php echo $website->website_id; ?>" <?php echo ($checked) ? "checked" : ''; ?> name="website_ids[]" value="<?php echo $website->website_id?>" />
                    <?php echo $website->name; ?>
                </label>
            </h4>

            <?php
                //Get list store groups of current website
                $storeGroups = Mage1StoreGroup::model()->findAll("website_id = {$website->website_id}");
                // Get migrated store group ids from session
                $migrated_store_group_ids = isset(Yii::app()->session['migrated_store_group_ids']) ? Yii::app()->session['migrated_store_group_ids'] : array();
            ?>

            <?php if ($storeGroups): ?>
            <ul class="list-group">
                <?php foreach ($storeGroups as $storeGroup): ?>
                    <li class="list-group-item">
                        <h5 class="list-group-item-heading">
                            <?php if ($checked = in_array($storeGroup->group_id, $migrated_store_group_ids)): ?>
                                <span class="glyphicon glyphicon-ok-sign text-success"></span>
                            <?php endif; ?>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="store-group-<?php echo $storeGroup->group_id; ?>" <?php echo ($checked) ? "checked" : ''; ?> name="store_group_ids[<?php echo $website->website_id; ?>][]" class="store-group-<?php echo $website->website_id; ?>" value="<?php echo $storeGroup->group_id?>" />
                                <?php echo $storeGroup->name; ?>
                            </label>
                        </h5>

                        <?php
                            //Get list stores of current store group
                            $stores = Mage1Store::model()->findAll("website_id = {$website->website_id} AND group_id = {$storeGroup->group_id}");
                            //Get migrated store ids from session
                            $migrated_store_ids = isset(Yii::app()->session['migrated_store_ids']) ? Yii::app()->session['migrated_store_ids'] : array();
                        ?>
                        <?php if ($stores): ?>
                            <ul class="list-group">
                                <?php foreach ($stores as $store): ?>
                                    <li class="list-group-item">
                                        <?php if ($checked = in_array($store->store_id, $migrated_store_ids)): ?>
                                            <span class="glyphicon glyphicon-ok-sign text-success"></span>
                                        <?php endif; ?>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="store-<?php echo $store->store_id; ?>" <?php echo ($checked) ? "checked" : ''; ?> name="store_ids[<?php echo $storeGroup->group_id; ?>][]" class="store-<?php echo $storeGroup->group_id; ?>" value="<?php echo $store->store_id?>" />
                                            <?php echo $store->name; ?>
                                        </label>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </li>
    </ul>
    <?php endforeach; ?>

    <?php $this->renderPartial('_frmButtons', array('step' => $step)); ?>
</div>

</form>