<?php 
/*
    Template Name: O-kompanii
*/
?>
<?php get_header(); ?>
<div class="container">
    <div class="content">
        <div id="page">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row my-5">
        <div class="col-12 bckg1 py-2 pl-5">
            <a href="wp-content/themes/truby/files/1089_86.doc" class="gost-txt" download>ГОСТ Р 50838-95 Государственный стандарт Российской Федерации на трубы из полиэтилена для газопроводов</a>
        </div>
        <div class="col-12 py-2 pl-5">
            <a href="wp-content/themes/truby/files/1089_87.doc" class="gost-txt" download>ГОСТ 16336-77 Межгосударственный стандарт на композиции полиэтилена для кабельной промышленности</a>
        </div>
        <div class="col-12 bckg1 py-2 pl-5">
            <a href="wp-content/themes/truby/files/1089_88.doc" class="gost-txt" download>ГОСТ 16337-77 Межгосударственный стандарт на полиэтилен высокого давления</a>
        </div>
        <div class="col-12 py-2 pl-5">
            <a href="wp-content/themes/truby/files/1089_89.doc" class="gost-txt" download>ГОСТ 16338-85 Межгосударственный стандарт на полиэтилен низкого давления</a>
        </div>
        <div class="col-12 bckg1 py-2 pl-5">
            <a href="wp-content/themes/truby/files/1089_90.zip" class="gost-txt" download>ГОСТ 18599-2001 (2003) Межгосударственный стандарт на трубы напорные из полиэтилена</a>
        </div>
        <div class="col-12 py-2 pl-5">
            <a href="wp-content/themes/truby/files/1089_92.doc" class="gost-txt" download>ГОСТ Р 50838-2009 Национальный стандарт Российской Федерации на трубы из полиэтилена для газопроводов</a>
        </div>
        <div class="col-12 bckg1 py-2 pl-5">
            <a href="wp-content/themes/truby/files/1089_93.doc" class="gost-txt" download>Химическая стойкость полиэтилена</a>
        </div>
        <div class="col-12 py-2 pl-5">
            <a href="wp-content/themes/truby/files/1089_94.doc" class="gost-txt" download>ГОСТ 12820-80 Фланцы стальные плоские приварные</a>
        </div>
        <div class="col-12 bckg1 py-2 pl-5">
            <a href="wp-content/themes/truby/files/1089_95.doc" class="gost-txt" download>ГОСТ Р 51613-2000 Трубы напорные из непластифицированного поливинилхлорида</a>
        </div>
    </div>
</div>

<div class="bckg">
    <div class="container">
        <div class="row py-4 justify-content-center">
            <div class="col-12 txt1 text-center color-page">Закажите обратный звонок</div>
            <div class="col-md-6">
                <form class="form" id="form" name="form">
                    <div class="form-group">
                        <input type="text" class="form-control my-3" name="name" placeholder="Ваше имя" required>
                        <input type="phone" class="form-control my-3" name="phone" placeholder="Ваш телефон" required>
                        <textarea type="text" class="form-control my-3" name="text"rows="3" placeholder="Ваше сообщения"></textarea>
                        <button type="submit" class="btn btn-primary btn-md btn-block">Отправить</button>
                        <div class="my-3 color-page">
                            <input type="checkbox" id="gridCheck" checked required>
                            <label class="form-check-label check" for="gridCheck">
                                Я даю согласие на обработку <a target="new" href="/politika-konfidencialnosti">персональных данных.</a>
                            </label>
                        </div>
                    </div>
                </form>
                <div class="overlay js-overlay-thank-you">
                    <div class="popup js-thank-you">
                        <p>Ваше сообщение отправлено. Мы ответим вам в ближайшее время.</p>
                        <div class="close-popup js-close-thank-you"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>