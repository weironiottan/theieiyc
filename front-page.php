<?php get_header();?>
<?php $hero_section = get_field('hero_section');?>
<?php $card_section = get_field('card_section');?>
<?php $latest_happenings_section = get_field('latest_happenings_section');?>
<section class="hero is-primary is-medium">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    <?php echo $hero_section['primary_title'];?>
                </h1>
                <h2 class="subtitle"> <?php echo $hero_section['sub_title'];?>
                </h2>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h1 class="title"><?php echo $card_section['title'];?></h1>
            <h2 class="subtitle"><?php echo $card_section['subtitle'];?></h2>

            <div class="columns">
                <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-header">
                            <div class="card-header-title"><?php echo $card_section['card_title_1'];?></div>
                        </div>
                        <div class="card-content">

                            <div class="content"><?php echo $card_section['card_content_1'];?></div>
                        </div>
                        <div class="card-footer">
                            <div class="card-footer-item">
                                <a href="<?php echo $card_section['card_button_link_1'];?>" class="button is-ghost"><?php echo $card_section['card_button_text_1'];?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-header">
                            <div class="card-header-title"><?php echo $card_section['card_title_2'];?></div>
                        </div>
                        <div class="card-content">

                            <div class="content"><?php echo $card_section['card_content_2'];?></div>
                        </div>
                        <div class="card-footer">
                            <div class="card-footer-item">
                                <a  href="<?php echo $card_section['card_button_link_2'];?>" class="button is-success is-outlined"><?php echo $card_section['card_button_text_2'];?></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-header">
                            <div class="card-header-title"><?php echo $card_section['card_title_3'];?></div>
                        </div>
                        <div class="card-content">

                            <div class="content"><?php echo $card_section['card_content_3'];?></div>
                        </div>
                        <div class="card-footer">
                            <div class="card-footer-item">
                                <a href="<?php echo $card_section['card_button_link_3'];?>" class="button is-primary"><?php echo $card_section['card_button_text_3'];?></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-header">
                            <div class="card-header-title"><?php echo $card_section['card_title_4'];?></div>
                        </div>
                        <div class="card-content">

                            <div class="content"><?php echo $card_section['card_content_4'];?></div>
                        </div>
                        <div class="card-footer">
                            <div class="card-footer-item">
                                <a href="<?php echo $card_section['card_button_link_4'];?>" class="button is-ghost button is-white"><?php echo $card_section['card_button_text_4'];?></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <section class="section">
        <div class="container">
            <h1 class="title"><?php echo $latest_happenings_section['title'];?></h1>
            <h2 class="subtitle"><?php echo $latest_happenings_section['subtitle'];?></h2>
            <h2><?php echo $latest_happenings_section['content'];?></h2>
        </div>
    </section>
    <?php get_footer();?>