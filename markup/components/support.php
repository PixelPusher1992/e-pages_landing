<?php
/**
 * @var array $arParams
 * @var array $arResult
 */
?>
<div class="support">
    <div class="block-main-header">
        <div class="container">
            <img src="<?=SITE_TEMPLATE_PATH.'/img/svg/support.svg'?>" alt="" class="block-main-header__img img-responsive">
            <div class="block-main-header__text heading-text text__main">
                Интернет-магазины у нас на поддержке
            </div>
            <div class="block-main-header__pattern"></div>
        </div>
    </div>
    <div class="container">
        <div class="support__content">
            <!--Первый элемент пустой и скрывается, так как на 768+ устройствах первая строка начинается
            со второго элемента-->
            <div class="support__content-item text-center no-logo">
            </div>
            <?php foreach ($arResult as $support_data) :?>
                <div class="support__content-item text-center">
                    <img src="<?=SITE_TEMPLATE_PATH.'/img/proj-logos/'.$support_data['IMG'].'.png'?>">
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
