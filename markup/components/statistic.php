<div class="statistic">
    <div class="container">
        <div class="statistic__header heading-text text-center text-uppercase text__main">
            Наша статистика
        </div>
        <div class="statistic__content">
            <?php for ($i=1; $i<7; $i++) { ?>
            <div class="statistic__content-item">
                <?php includeComponent('hexagon', '', array('MODIFIER' => 'hexagon--blue'))?>
                <div class="statistic__content-item-text text-uppercase text__main">
                    Интернет-магазинов на поддержке
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>