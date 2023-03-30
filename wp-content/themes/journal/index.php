<!-- Affiche le header -->
<?php get_header(); ?>

<main>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- Articles -->
    <article>


        <?php if ( has_post_thumbnail() ) : ?>

        <div class="container">
            <div class="text-center">

                <h2 class="pb-5 font-weight-bold"> <?php the_title_attribute(); ?><h2>
                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID() ); ?>"
                            alt="<?php the_title_attribute(); ?>" width="400">
            </div>
        </div>


        <?php endif; ?>
        <?php the_content(); ?>
    </article>
    <?php endwhile; endif; ?>
</main>

<!-- Librairie Bootsrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<!-- Afficher le footer -->
<?php get_footer(); ?>