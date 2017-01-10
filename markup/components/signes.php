<?php
/**
 * @var array $arParams
 * @var array $arResult
 */
?>
<div class="signes">
    <div class="block-main-header">
        <div class="container">
            <img src="<?=SITE_TEMPLATE_PATH.'/img/svg/signes.svg'?>" alt="" class="block-main-header__img img-responsive">
            <div class="block-main-header__text heading-text text__main">
                Шесть признаков хорошей поддержки
            </div>
            <div class="block-main-header__pattern"></div>
        </div>
    </div>
    <div class="container">
        <div class="signes__content">
            <?php foreach ($arResult as $signes_data) :?>
                <div class="signes__item">
                    <?php includeComponent('hexagon', '', $signes_data) ?>
                    <div class="signes__item-text text__main text-center">
                        <?=$signes_data['TEXT']?>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>

