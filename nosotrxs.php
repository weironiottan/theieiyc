<?php
/* Template Name: Nostroxs*/
get_header();
?>
<?php $hero_section = get_field('hero_section');?>
<?php $our_team_section = get_field('our_team_section');?>

   <section class="hero is-primary is-medium">
        <div class="hero-body">
            <div class="container">
                <h1 class="title"><?php echo $hero_section['primary_title'];?></h1>
                <h2 class="subtitle"><?php echo $hero_section['subtitle'];?></h2>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h1 class="title"><?php echo $our_team_section['primary_title'];?></h1>
            <h2 class="subtitle"><?php echo $our_team_section['subtitle'];?></h2>
            <div class="columns my-6 box">
                <div class="column is-narrow">
                    <div class="image is-128x128">
                        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                    </div>
                </div>
                <div class="column is-align-self-center"><?php echo $our_team_section['card_content_1'];?></div>
            </div>
            <div class="columns my-6 box">
                <div class="column is-narrow">
                    <div class="image is-128x128">
                        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                    </div>
                </div>
                <div class="column is-align-self-center"><?php echo $our_team_section['card_content_2'];?></div>
            </div>
            <div class="columns my-6 box">
                <div class="column is-narrow">
                    <div class="image is-128x128">
                        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                    </div>
                </div>
                <div class="column  is-align-self-center"><?php echo $our_team_section['card_content_3'];?></div>
            </div>
            <div class="columns my-6 box">
                <div class="column is-narrow">
                    <div class="image is-128x128">
                        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                    </div>
                </div>
                <div class="column is-align-self-center"><?php echo $our_team_section['card_content_4'];?></div>
            </div>
        </div>
    </section>
<?php get_footer();?>