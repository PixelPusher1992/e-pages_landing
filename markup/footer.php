<footer class="footer">
    <div class="container">
        <div class="footer__logo text-center">
            <img src="<?=SITE_TEMPLATE_PATH.'/img/svg/logo-e-white.svg'?>" alt="" class="img-responsive">
        </div>
        <div class="footer__contacts center-block">
            <div class="row">
                <div class="col-md-6 col-xs-12 text__light footer__contacts-left" >
                    <div>
                        <a class="footer__contacts-item" href="mailto:sales@epages.su">sales@epages.su</a>
                    </div>
                    <div>
                        <a class="footer__contacts-item" href="mailto:manager@epages.su">manager@epages.su</a>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 text__light footer__contacts-right">
                    <div>
                        <a class="footer__contacts-item" href="tel:+74952151340">+7 (495) 215-13-40</a>
                    </div>
                    <div>
                        <a class="footer__contacts-item" href="skype:epages_online">skype: epages_online</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__adress text-center text__light">
            г.Москва ул. Семеновский вал, д. 10А
        </div>
    </div>
</footer>

<!-- Modal -->
<?php includeComponent('pop-up') ?>
<?php includeComponent('pop-up-confirm') ?>


<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<![endif]-->

<script src="<?=SITE_TEMPLATE_PATH.'/js/lib.min.js'?>"></script>
<script src="<?=SITE_TEMPLATE_PATH.'/js/local.js'?>"></script>
</body>
</html>
