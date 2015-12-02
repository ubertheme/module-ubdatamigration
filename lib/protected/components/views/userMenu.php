<ul class="nav nav-pills nav-stacked">
    <?php if (is_array($steps)): ?>
        <?php foreach ($steps as $step): ?>
            <?php
                $action = Yii::app()->controller->action->id;
                $class = ($action == $step->code) ? "active" : (($step->status != MigrateSteps::STATUS_DONE) ? "disabled" : "");
                $title = $step->sorder." - ".$step->title;
                if ($step->status == MigrateSteps::STATUS_DONE){
                    $title = '<span class="glyphicon glyphicon-ok-sign text-success"></span> '.$title;
                }
            ?>
            <li class="<?php echo $class?>">
                <?php echo CHtml::link($title, array("migrate/{$step->code}")); ?>
            </li>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>

<div class="progress">
    <?php
    $totalSteps = MigrateSteps::model()->count();
    $totalStepsFinished = MigrateSteps::model()->count("status = ".MigrateSteps::STATUS_DONE);
    $percent = round(($totalStepsFinished/$totalSteps)*100);
    ?>
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $percent?>"
         aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percent?>%">
        <?php echo $percent?>% Completed
    </div>
</div>

<div id="btn-reset">
    <?php
        if(MigrateSteps::model()->count("status =".MigrateSteps::STATUS_DONE) > 0){
            $class = "btn btn-danger";
        }else{
            $class = "btn btn-danger disabled";
        }
    ?>
    <a href="<?php echo Yii::app()->createUrl("migrate/resetAll"); ?>" title="<?php echo Yii::t('frontend', 'Click to reset all steps.'); ?>" class="<?php echo $class; ?>"><span class="glyphicon glyphicon-refresh"></span> <?php echo Yii::t('frontend', 'Reset All'); ?></a>
</div>