<div class="process">
    <div class="process__header">
        <div class="process__header-pattern">
            <img src="<?=SITE_TEMPLATE_PATH.'/img/svg/process.svg'?>" alt="" class="process__header-img img-responsive">
        </div>
    </div>
    <div class="container">
        <div class="process__head-text text-uppercase text__light heading-text">
            Как у нас строится рабочий процесс?
        </div>
        <div class="process__content">
            <?php for ($i=1; $i<7; $i++) { ?>
                <div class="process__content-item">
                    <div class="center-block">
                        <?php includeComponent('hexagon', '', array('MODIFIER' => 'hexagon--no-back')) ?>
                    </div>
                    <div class="process__text-semi text__light text-uppercase text-center">
                        Сдача проекта:
                    </div>
                    <div class="process__text text__light text-uppercase text-center">
                        Передаем вам настроенную систему
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>