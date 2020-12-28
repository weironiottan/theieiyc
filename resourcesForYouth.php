<?php
/* Template Name: Resources for youth*/
get_header();
?>
<?php $hero_section = get_field('hero_section');?>
<?php $card_section = get_field('card_section');?>
<?php $information_section = get_field('information_section');?>



<section class="hero is-primary is-medium">
        <div class="hero-body">
            <div class="container">
                <h1 class="title"><?php echo $hero_section['title'];?></h1>
                <h2 class="subtitle"><?php echo $hero_section['subtitle'];?></h2>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h1 class="title"><?php echo $card_section['title'];?></h1>
            <h2 class="subtitle"><?php echo $card_section['subtitle'];?></h2>
            <div class="tile is-ancestor">
                <div class="tile is-parent">
                    <a class="pageJumpLinks" href="#knowYourRightsSection">
                        <article class="tile is-child box">
                            <p class="title"><?php echo $card_section['card_title_1'];?></p>
                            <p class="subtitle"><?php echo $card_section['card_content_1'];?></p>
                        </article>
                    </a>
                </div>
                <div class="tile is-parent">
                    <a class="pageJumpLinks" href="#healthAndWellnessSection">
                        <article class="tile is-child box">
                            <p class="title"><?php echo $card_section['card_title_2'];?></p>
                            <p class="subtitle"><?php echo $card_section['card_content_2'];?></p>
                        </article>
                    </a>
                </div>
                <div class="tile is-parent">
                    <a class="pageJumpLinks" href="#higherEdProgramsSection">
                        <article class="tile is-child box">
                            <p class="title"><?php echo $card_section['card_title_3'];?></p>
                            <p class="subtitle"><?php echo $card_section['card_content_3'];?></p>
                        </article>
                    </a>
                </div>
                <div class="tile is-parent">
                    <a class="pageJumpLinks" href="#dacaUpdatesSection">
                        <article class="tile is-child box">
                            <p class="title"><?php echo $card_section['card_title_4'];?></p>
                            <p class="subtitle"><?php echo $card_section['card_content_4'];?></p>
                        </article>
                    </a>
                </div>
                <div class="tile is-parent">
                    <a class="pageJumpLinks" href="#covid19ResponseSection">
                        <article class="tile is-child box">
                            <p class="title"><?php echo $card_section['card_title_5'];?></p>
                            <p class="subtitle"><?php echo $card_section['card_content_5'];?></p>
                        </article>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <section class="section">
        <div class="container">
            <h1 id="knowYourRightsSection" class="title"><?php echo $information_section['title_1'];?></h1>
            <h2 class="subtitle"><?php echo $information_section['subtitle_1'];?></h2>
            <span><?php echo $information_section['content_1'];?></span>

        </div>
    </section>
    <section class="section">
        <div class="container">
            <h1 id="healthAndWellnessSection" class="title"><?php echo $information_section['title_2'];?></h1>
            <h2 class="subtitle"><?php echo $information_section['subtitle_2'];?></h2>
            <span><?php echo $information_section['content_2'];?></span>

        </div>
    </section>
    <section class="section">
        <div class="container">
            <h1 id="higherEdProgramsSection" class="title"><?php echo $information_section['title_3'];?></h1>
            <h2 class="subtitle"><?php echo $information_section['subtitle_3'];?></h2>
            <span><?php echo $information_section['content_3'];?></span>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h1 id="dacaUpdatesSection" class="title"><?php echo $information_section['title_4'];?></h1>
            <h2 class="subtitle"><?php echo $information_section['subtitle_4'];?></h2>
            <span><?php echo $information_section['content_4'];?></span>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h1 id="covid19ResponseSection" class="title"><?php echo $information_section['title_5'];?></h1>
            <h2 class="subtitle"><?php echo $information_section['subtitle_5'];?></h2>
            <span><?php echo $information_section['content_5'];?></span>
        </div>
    </section>

<?php get_footer();?>