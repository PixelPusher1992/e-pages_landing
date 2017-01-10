<?php
/**
 * @var array $arParams
 * @var array $arResult
 */
?>
<div class="achieve">
    <div class="achieve__header">
        <div class="noskew">
                <img src="<?=SITE_TEMPLATE_PATH.'/img/svg/achievements.svg'?>" alt="" class="achieve__header-icon img-responsive">
            <div class="achieve__header-text heading-text text-uppercase text__main">
                Наши достижения
            </div>
        </div>
    </div>
    <div class="container">
        <?php foreach ($arResult as $achievements_data) :?>
        <div class="achieve__content">
            <?php includeComponent('hexagon', '', $achievements_data) ?>
            <div class="achieve__content-text text__main">
                <?= $achievements_data['TEXT'] ?>
                <div class="subtext"><?= $achievements_data['SUB_TEXT'] ?></div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>