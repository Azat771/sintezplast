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
<div class="bckg">
    <div class="container py-5">
        <div class="row">
        <div class="col-12 col-md-4 align-self-center">
            <p class="news">Еще новости</p>
            <a href="#"><button type="button" class="btn btn-primary">
                Смотреть все
            </button></a>
        </div>
        <div class="col-11 col-md-8 ml-3 ml-md-0 mt-3 mt-md-0">
            <div class="row">
                <?php if ( have_posts() ) : ?>
                <?php while (have_posts()) : the_post();?>
                <div class="col-12 my-2 my-md-1">
                    <div class="post">
                        <div class="post-date"><?php echo get_the_date('j F Y'); ?></div>
                        <div class="post-txt">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?> 
                <?php else: ?>
                <p>Нет постов в цикле.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
</div>
<div class="bckg1">
    <div class="container">
        <div class="row py-4 justify-content-center">
            <div class="col-12 txt1 text-center">Закажите обратный звонок</div>
            <div class="col-md-6">
                <form class="form" id="form" name="form">
                    <div class="form-group">
                        <input type="text" class="form-control my-3" name="name" placeholder="Ваше имя" required>
                        <input type="phone" class="form-control my-3" name="phone" placeholder="Ваш телефон" required>
                        <textarea type="text" class="form-control my-3" name="text"rows="3" placeholder="Ваше сообщения"></textarea>
                        <button type="submit" class="btn btn-dark btn-md btn-block">Отправить</button>
                        <div class="my-3 color">
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