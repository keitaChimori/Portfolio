<!-- **************************************** -->
<!-- **********   Work-list ページ   ******** -->
<!-- **************************************** -->
<!-- ヘッダー読み込み -->
<?php get_header(); ?>

<!-- works -->
<section id="works" class="works-list">
  <div class="wrapper">
    <!-- タイトル -->
    <h3 class="h2-title">Works</h3>
    <div class="subtitle-center">
      <h4 class="sub-title">制作物</h4>
    </div>

    <!-- カテゴリー選択 -->
    <div class="category">
      <a href="#coding">Coding</a> / <a href="#design">Design</a>
    </div>

    <!-- conding -->
    <div class="work-category">
      <h4 id="coding">Coding</h4>
    </div>

    <div class="grid">
      <?php
        $args = [
          'post_type' => 'works',
          'post_status' => 'publish',
          'tax_query' => array(
            array(
              'taxonomy' => 'works_category',
              'field'    => 'slug',
              'terms'    => 'coding',
            ),
          ),
        ];
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
        ?>
            <div class="item">
              <a href="<?php the_permalink(); ?>">
                <img src="<?php echo CFS()->get('thumbnail'); ?>" alt="制作物の画像">
                <p><?php echo CFS()->get('title'); ?></p>
              </a>
            </div>
        <?php endwhile; endif; ?>
    </div><!-- /.grid -->

    <!-- designe -->
    <div class="work-category">
      <h4 id="design">Design</h4>
    </div>

    <div class="grid">
      <?php
      $args = [
        'post_type' => 'works',
        'post_status' => 'publish',
        'tax_query' => array(
          array(
            'taxonomy' => 'works_category',
            'field'    => 'slug',
            'terms'    => 'design',
          ),
        ),
      ];
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
      ?>
          <div class="item">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php echo CFS()->get('thumbnail'); ?>" alt="制作物の画像">
              <p><?php echo CFS()->get('title'); ?></p>
            </a>
          </div>
      <?php endwhile;
      endif; ?>
    </div><!-- /.grid -->

  </div><!-- /.wrapper -->
</section>

<!-- フッター読み込み -->
<?php get_footer(); ?>