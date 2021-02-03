<?php
/* Template Name: What We Do*/
get_header();
?>
<?php $hero_section = get_field('hero_section');?>
<?php $leaders_section = get_field('leaders_section');?>

<section class="hero is-primary is-medium">
        <div class="hero-body">
            <div class="container">
            <h1 class="title"><?php echo $hero_section['title'];?></h1>
            <h2 class="subtitle"><?php echo $hero_section['subtitle'];?></h2>
            </div>
        </div>
    </section>
    <section class="section">
        <h1 class="title"><?php echo $leaders_section['section_title'];?></h1>
        <div class="tile is-ancestor">
            <div class="tile is-parent">
              <article class="tile is-child box has-background-primary">
                <p class="title"><?php echo $leaders_section['card_title_1'];?></p>
                <p class="subtitle"><?php echo $leaders_section['card_subtitle_1'];?></p>
                <div class="content"><?php echo $leaders_section['card_content_1'];?></div>
              </article>
            </div>
            <div class="tile is-parent is-8 ">
              <article class="tile is-child box has-background-info">
                <p class="title"><?php echo $leaders_section['card_title_2'];?></p>
                <p class="subtitle"><?php echo $leaders_section['card_subtitle_2'];?></p>
                <div class="content">
                  <p><?php echo $leaders_section['card_content_2'];?></p>
                </div>
              </article>
            </div>
          </div>
        <div class="tile is-ancestor">
            <div class="tile is-parent is-8">
                <article class="tile is-child box has-background-danger">
                  <p class="title"><?php echo $leaders_section['card_title_3'];?></p>
                  <p class="subtitle"><?php echo $leaders_section['card_subtitle_3'];?></p>
                  <div class="content">
                    <p><?php echo $leaders_section['card_content_3'];?></p>
                  </div>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child box has-background-light">
                  <p class="title"><?php echo $leaders_section['card_title_4'];?></p>
                  <p class="subtitle"><?php echo $leaders_section['card_subtitle_4'];?></p>
                  <div class="content">
                    <p><?php echo $leaders_section['card_content_4'];?></p>
                  </div>
                </article>
              </div>
        </div>
        <div class="tile is-ancestor">
            <div class="tile is-parent">
              <article class="tile is-child box has-background-success">
                <p class="title"><?php echo $leaders_section['card_title_5'];?></p>
                <p class="subtitle"><?php echo $leaders_section['card_subtitle_5'];?></p>
                <div class="content">
                  <p><?php echo $leaders_section['card_content_5'];?></p>
                </div>
              </article>
            </div>
            <div class="tile is-parent is-8">
              <article class="tile is-child box has-background-warning">
                <p class="title"><?php echo $leaders_section['card_title_6'];?></p>
                <p class="subtitle"><?php echo $leaders_section['card_subtitle_6'];?></p>
                <div class="content">
                  <p><?php echo $leaders_section['card_content_6'];?></p>
                </div>
              </article>
            </div>
          </div>
        </div>
    </section>
<?php get_footer();?>