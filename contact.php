<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

    <section class="team">
        <div class="section-head">
            <div class="container">
                <?php the_breadcrumb(); ?>
                <h1 class="section-headline"><?php the_title(); ?></h1>
            </div>
        </div>

        <div class="team-body">
            <div class="row">

                <?php $i = 0;
                if (have_rows('persons')):
                    while (have_rows('persons')) : the_row();
                        if ($i % 2 == 0) $class = 'odd'; else $class = 'even'; ?>
                        <article class="team-person team-person--<?php echo $class; ?>">
                            <figure class="team-person-photo">
                                <img id="team-<?php the_sub_field('name'); ?>" src="<?php the_sub_field('photo'); ?>"
                                     width="285" height="3705"
                                     alt="<?php the_sub_field('name'); ?> <?php the_sub_field('surname'); ?>">
                            </figure>
                            <div class="team-person-details">
                                <h1 class="team-person-name"><?php the_sub_field('name'); ?><br>
                                    <?php the_sub_field('surname'); ?></h1>

                                <p class="team-person-position">
                                    <?php the_sub_field('position'); ?>
                                </p>

                                <div class="team-person-description">
                                    <p>
                                        <?php the_sub_field('description'); ?>
                                    </p>
                                </div>
                        </article>
                        <?php $i++; endwhile; endif; ?>

                <div class="team-hire">
                    <h2 class="team-hire-title">Dołącz<br>
                        do nas</h2>

                    <p>
                        Jesteśmy pasjonatami otwartego rządu i wykorzystywania nowych technologii do tworzenia
                        społeczeństwa obywatelskiego. <strong>Myślisz w podobny sposób?</strong>
                    </p>
                    <a href="" class="team-hire-link">Napisz do nas <i>&rarr;</i></a>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>