<?php
/**
 * @var array $arParams
 * @var array $arResult
 */
?>
<div class="hex-main <?= $arParams['MODIFIER'] ?>">
    <div class="hexagon" >
        <span></span>
        <svg class="hexagon__icon">
            <use xlink:href="#<?= $arParams['ICON']?>"></use>
        </svg>
    </div>
</div>