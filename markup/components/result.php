<?php
/**
 * @var array $arParams
 * @var array $arResult
 */
?>
<div class="result">
    <div class="result__header">
        <div class="result__header-pattern">
            <img src="<?=SITE_TEMPLATE_PATH.'/img/svg/result.svg'?>" alt="" class="result__header-img img-responsive">
        </div>
    </div>
    <div class="container">
        <div class="result__head-text heading-text text__light text-uppercase">
            Какой результат вы получите?
        </div>
        <?php foreach ($arResult as $result_number => $result_data) :?>
            <div class="result__content text__light">
                <div class="result__content-number">
                    <span>
                        <?= $result_number + 1 ?>
                    </span>
                </div>
                <span class="result__content-text">
                    <?=$result_data['TEXT']?>
                </span>
            </div>
        <?php endforeach;?>
    </div>
</div>


