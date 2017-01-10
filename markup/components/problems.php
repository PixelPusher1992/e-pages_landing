<?php
/**
 * @var array $arParams
 * @var array $arResult
 */
?>
<div class="problems">
    <div class="block-main-header">
        <div class="container">
            <img src="<?=SITE_TEMPLATE_PATH.'/img/svg/problems.svg'?>" alt="" class="block-main-header__img img-responsive">
            <div class="block-main-header__text heading-text text__main">
                Распространённые проблемы <span class="no-wrap">E-Commerce</span>
            </div>
            <div class="block-main-header__pattern"></div>
        </div>
    </div>
    <div class="problems__content">
        <div class="container">
            <?php foreach ($arResult as $problems_data) :?>
                <div class="row">
                    <div class="col-md-10 col-xs-12 col-sm-8 problems__content-text-table">
                        <div class="problems__content-text text__dark text-uppercase">
                        <span>
                            <?= $problems_data['TEXT'] ?>
                        </span>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12 col-sm-4 problems__content-img-table">
                        <div class="problems__content-img">
                            <?php includeComponent('hexagon', '', $problems_data) ?>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <div class="form__button">
        <button class="btn btn-default center-block text-uppercase header__button" data-toggle="modal"
                data-target="#callback">
            Решить проблемы
        </button>
    </div>
</div>