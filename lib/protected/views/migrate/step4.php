<?php $this->pageTitle = $step->title . ' - ' . Yii::app()->name; ?>

<h1 class="page-header"> Step <?php echo $step->sorder?>: <?php echo $step->title?> </h1>

<form role="form" method="post" action="<?php echo Yii::app()->createUrl("migrate/step{$step->sorder}"); ?>">
    <div id="step-content">
        <blockquote> <p class="tip"> <?php echo Yii::t('frontend', $step->descriptions); ?> </p> </blockquote>

        <!--  Form Buttons-->
        <div class="step-controls">
            <?php if ($step->status == MigrateSteps::STATUS_NOT_DONE): ?>
                <button type="submit" class="btn btn-primary"><?php echo Yii::t('frontend', 'Start'); ?></button>
            <?php else: ?>
                <a href="<?php echo Yii::app()->createUrl("migrate/reset/step/" . $step->sorder); ?>" class="btn btn-danger"><?php echo Yii::t('frontend', 'Reset'); ?></a>
                <a href="<?php echo Yii::app()->createUrl("migrate/step" . ($step->sorder+1)); ?>" class="btn btn-primary"><?php echo Yii::t('frontend', 'Next Step'); ?></a>
            <?php endif; ?>
        </div>
        <!--// Form Buttons-->

         <?php
        //get migrated category ids
        $migrated_category_ids = isset(Yii::app()->session['migrated_category_ids']) ? Yii::app()->session['migrated_category_ids'] : array();

        //get all root categories from magento1
        $rootCategories = Mage1CatalogCategoryEntity::model()->findAll("level = 1");
        ?>
        
        <ul class="list-group">
            <li class="list-group-item">
                <h3 class="list-group-item-heading">
                    <?php echo Yii::t('frontend', 'Total Categories'); ?> (<?php echo sizeof($categories); ?>)
                </h3>
                <h4>
                    <?php $checked = ( sizeof($categories) == sizeof($migrated_category_ids) ) ? true : false;  ?>
                    <input type="checkbox" <?php echo ($checked) ? "checked" : ''; ?> id="select_all_categories" name="select_all_categories" />
                    <span> <?php echo Yii::t('frontend', 'Select All');?> </span>
                </h4>

                <?php if ($rootCategories): ?>

                    <?php foreach ($rootCategories as $rootCategory):?>

                        <?php $categoryTree = MigrateSteps::getMage1CategoryTree($rootCategory->entity_id); ?>

                            <div class="tree well">
                                    <?php if ($checked = in_array($rootCategory->entity_id, $migrated_category_ids)): ?>
                                        <span class="glyphicon glyphicon-ok-sign text-success"></span>
                                    <?php endif; ?>
                                    <input type="checkbox" <?php echo ($checked) ? "checked" : ''; ?> id="category_<?php echo $rootCategory->entity_id; ?>" name="category_ids[]" value="<?php echo $rootCategory->entity_id; ?>" />
                                    <span class="root-category"><?php echo MigrateSteps::getMage1CategoryName($rootCategory->entity_id); ?>( <?php echo Yii::t('frontend', 'Root category');?> )</span>
                                <?php if ($categoryTree): ?>
                                <ul>
                                    <?php foreach ($categoryTree as $category): ?>
                                        <li>
                                            <?php if ($checked = in_array($category->entity_id, $migrated_category_ids)): ?>
                                                <span class="glyphicon glyphicon-ok-sign text-success"></span>
                                            <?php endif; ?>
                                            <input type="checkbox" <?php echo ($checked) ? "checked" : ''; ?> id="category_<?php echo $category->entity_id; ?>" name="category_ids[]" value="<?php echo $category->entity_id; ?>" />
                                            <span><i class="icon-folder-open"></i> <?php echo $category->name; ?></span>
                                            <?php if($category->children): ?>
                                                <ul>
                                                    <?php foreach ($category->children as $child1): ?>
                                                        <li>
                                                            <?php if ($checked = in_array($child1->entity_id, $migrated_category_ids)): ?>
                                                                <span class="glyphicon glyphicon-ok-sign text-success"></span>
                                                            <?php endif; ?>
                                                            <input type="checkbox" <?php echo ($checked) ? "checked" : ''; ?> id="category_<?php echo $child1->entity_id; ?>" name="category_ids[]" value="<?php echo $child1->entity_id; ?>" />
                                                            <span><i class="icon-minus-sign"></i><?php echo $child1->name; ?></span>
                                                            <?php if ($child1->children): ?>
                                                                <ul>
                                                                    <?php foreach ($child1->children as $child2): ?>
                                                                        <li>
                                                                            <?php if ($checked = in_array($child2->entity_id, $migrated_category_ids)): ?>
                                                                                <span class="glyphicon glyphicon-ok-sign text-success"></span>
                                                                            <?php endif; ?>
                                                                            <input type="checkbox" <?php echo ($checked) ? "checked" : ''; ?> id="category_<?php echo $child2->entity_id; ?>" name="category_ids[]" value="<?php echo $child2->entity_id; ?>" />
                                                                            <span><i class="icon-leaf"></i> <?php echo $child2->name; ?></span>
                                                                            <?php if ($child2->children): ?>
                                                                                <ul>
                                                                                    <?php foreach ($child2->children as $child3): ?>
                                                                                        <li>
                                                                                            <?php if ($checked = in_array($child3->entity_id, $migrated_category_ids)): ?>
                                                                                                <span class="glyphicon glyphicon-ok-sign text-success"></span>
                                                                                            <?php endif; ?>
                                                                                            <input type="checkbox" <?php echo ($checked) ? "checked" : ''; ?> id="category_<?php echo $child3->entity_id; ?>" name="category_ids[]" value="<?php echo $child3->entity_id; ?>" />
                                                                                            <span><i class="icon-leaf"></i> <?php echo $child3->name; ?></span>
                                                                                            <?php if ($child3->children): ?>
                                                                                                <ul>
                                                                                                    <?php foreach ($child3->children as $child4): ?>
                                                                                                        <li>
                                                                                                            <?php if ($checked = in_array($child4->entity_id, $migrated_category_ids)): ?>
                                                                                                                <span class="glyphicon glyphicon-ok-sign text-success"></span>
                                                                                                            <?php endif; ?>
                                                                                                            <input type="checkbox" <?php echo ($checked) ? "checked" : ''; ?> id="category_<?php echo $child4->entity_id; ?>" name="category_ids[]" value="<?php echo $child4->entity_id; ?>" />
                                                                                                            <span><i class="icon-leaf"></i> <?php echo $child4->name; ?></span>
                                                                                                            <?php if ($child4->children): ?>
                                                                                                                <ul>
                                                                                                                    <?php foreach ($child4->children as $child5): ?>
                                                                                                                        <li>
                                                                                                                            <?php if ($checked = in_array($child5->entity_id, $migrated_category_ids)): ?>
                                                                                                                                <span class="glyphicon glyphicon-ok-sign text-success"></span>
                                                                                                                            <?php endif; ?>
                                                                                                                            <input type="checkbox" <?php echo ($checked) ? "checked" : ''; ?> id="category_<?php echo $child5->entity_id; ?>" name="category_ids[]" value="<?php echo $child5->entity_id; ?>" />
                                                                                                                            <span><i class="icon-leaf"></i> <?php echo $child5->name; ?></span>
                                                                                                                        </li>
                                                                                                                    <?php endforeach; ?>
                                                                                                                </ul>
                                                                                                            <?php endif; ?>
                                                                                                        </li>
                                                                                                    <?php endforeach; ?>
                                                                                                </ul>
                                                                                            <?php endif; ?>
                                                                                        </li>
                                                                                    <?php endforeach; ?>
                                                                                </ul>
                                                                            <?php endif; ?>
                                                                        </li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            <?php endif; ?>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                            </div>

                    <?php endforeach; ?>
                <?php endif; ?>
            </li>
        </ul>
    </div>

    <!--  Form Buttons-->
    <div class="step-controls">
        <?php if ($step->status == MigrateSteps::STATUS_NOT_DONE): ?>
            <button type="submit" class="btn btn-primary"><?php echo Yii::t('frontend', 'Start'); ?></button>
        <?php else: ?>
            <a href="<?php echo Yii::app()->createUrl("migrate/reset/step/" . $step->sorder); ?>" class="btn btn-danger"><?php echo Yii::t('frontend', 'Reset'); ?></a>
            <a href="<?php echo Yii::app()->createUrl("migrate/step" . ($step->sorder+1)); ?>" class="btn btn-primary"><?php echo Yii::t('frontend', 'Next Step'); ?></a>
        <?php endif; ?>
    </div>
    <!--// Form Buttons-->
</form>

<script type="text/javascript">
    //for category tree
    (function($){

        $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
        $('.tree li.parent_li > span').on('click', function (e) {
            var children = $(this).parent('li.parent_li').find(' > ul > li');
            if (children.is(":visible")) {
                children.hide('fast');
                $(this).attr('title', 'Expand this branch').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
            } else {
                children.show('fast');
                $(this).attr('title', 'Collapse this branch').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');
            }
            e.stopPropagation();
        });

        //show/hide root block
        $('.tree span.root-category').on('click', function(){
            var children = $(this).siblings('ul');
            if (children.is(":visible")) {
                children.hide('fast');
            } else {
                children.show('fast');
            }
        });

        //check/un-check
        $('.tree INPUT[name="category_ids[]"]').on('change', function(){
            var value = this.checked;
            //update children status
            var $children = $(this).siblings('ul');
            if ($children.length){
                $children.children('li').each(function(i){
                    $(this).find('input').prop("checked", value);
                });
            }
            //update parent status
            var $parent = $(this).parent().parent().siblings('input');
            if ($parent.length && value){ //if checked
                if (!$parent.prop("checked")){
                    $parent.prop("checked", value);
                }
            }
        });
        
        $('INPUT[name="select_all_categories"]').on('change', function(){
            var value = this.checked;
            $('.tree INPUT[name="category_ids[]"]').prop("checked", value);
            $('.tree INPUT[name="category_ids[]"]').trigger('change');
        });

    })(jQuery);
</script>
