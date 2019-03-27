<?php get_header(); ?>
    <div class="content">
        <div id="page">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="container"><h1><?php the_title(); ?></h1></div>
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
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