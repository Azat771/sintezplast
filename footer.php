<footer>
<div class="bckg-foot">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="row">
                    <?php if(is_front_page() || is_home() ){ ?>
                        <img class="img-foot mb-4 ml-3" src="/logo-companii-tacoy" alt="1" title="" />
                    <?php } else { ?>  
                        <a href="<?php echo home_url(); ?>" class="mb-4 ml-3 img-foot"><img class="img-foot" src="/logo-companii-tacoy" alt="1" title="" /></a>
                    <?php } ?>
                    <div class="col-12 my-1 num"><a href="tel:+79872964324">+7(987)296-43-24</a></a></div>
                    <div class="col-12 my-1 num"><a href="tel:+78435254205">+7(843)525-42-05</a></a></div>
                    <div class="col-12 my-1 num"><i class="fas fa-map-marker-alt"></i> 420132, г. Казань, Адоратского 63а</div>
                    <div class="col-12 my-1 num"><a href="mailto:sintez-plast@mail.ru"><i class="far fa-envelope"></i>sintez-plast@mail.ru</a></div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="row">
                    <button type="button" class="btn btn-outline-primary btn-block mb-md-4 my-md-0 my-3 mx-3 mx-md-none" data-toggle="modal" data-target="#popup">
                        Заказать звонок
                    </button>
                    <div class="col-6 col-md-3">
                        <div class="text"><a href="o-kompanii">О компании</a></div>
                        <ul class="sub-text">
                            <li><a href="ustavnye-dokumenty">Уставные документы</a></li>
                            <li><a href="rekvizity">Реквизиты</a></li>
                            <li><a href="#">Договор потсавки</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-9 d-md-flex">
                        <div class="text mx-md-auto"><a href="#">Каталог</a></div>
                        <div class="text mx-md-auto"><a href="#">Прайс-листы</a></div>
                        <div class="text mx-md-auto"><a href="gosty">ГОСТы</a></div>
                        <div class="text mx-md-auto"><a href="kontakty">Контакты</a></div>
                        <div class="text mx-md-auto"><a href="#">Услуги</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-md-4 justify-content-center justify-content-md-start">
            <div class="col-auto d-flex">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-vk"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-auto">
                <div class="text-foot">© <?php echo date ( 'Y' ) ; ?> "КАЗАНЬОРГСИНТЕЗ" Все права защищены.</div>
            </div>
            <div class="col-auto">
                <a href="#" class="text-foot mx-md-5">Карта сайта</a>
            </div>
            <div class="w-100 d-block d-md-none"></div>
            <div class="col-auto">
                <a href="politika-konfidencialnosti" class="text-foot">Политика конфиденциальности</a>
            </div>
        </div>
        <div class="row mt-md-4">
            <div class="col foot-adres">
                <?php if(is_front_page() || is_home() ){ ?>
                    <a class="foot-adres" href="https://web-onpromo.ru" title="Разработка сайтов">Разработка сайтов</a> и <a class="foot-adres" href="https://seo-onpromo.ru" title="SEO-продвижение сайтов">SEO-продвижение сайтов</a> - <img src="<?php bloginfo('template_url'); ?>/images/logo-online-promo.png" style="height: 12px;width: auto;margin-left: 5px;" alt="Логотип онлайн промо">
                <?php } else { ?>
                    <p>Разработка сайтов и SEO-продвижение сайтов</span> - <img src="<?php bloginfo('template_url'); ?>/images/logo-online-promo.png" style="height: 12px;width: auto;" alt="Логотип онлайн промо">
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>