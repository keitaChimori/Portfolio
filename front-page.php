<!-- **************************************** -->
<!-- ************  トップページ  ************ -->
<!-- **************************************** -->

<!-- ヘッダー読み込み -->
<?php get_header(); ?>

<!-- home -->
<section id="home">
  <div class="wrapper">
    <div class="home-flex">
      <div class="flex-left">
        <h4>Web Enginer</h4>
        <h2>Keita Chimori</h2>
        <p>Keita Chimoriのポートフォリオサイトです</p>
      </div><!-- /.flex-left -->
      <div class="flex-right">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimage_s.jpg" alt="Keita Chimoriホーム画像" class="pc-image">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/teddy-bear-g8754fa68c_1920.jpg" alt="Keita Chimoriホーム画像" class="sp-image">
      </div><!-- /.flex-right -->
    </div><!-- /.home-flex -->
  </div><!-- ./wrapper -->
</section><!-- /#home  -->


<!-- About -->
<section id="about">
  <!-- タイトル -->
  <h2 class="h2-title">About</h2>
  <div class="subtitle-center">
    <h4 class="sub-title">私について</h4>
  </div>

  <div class="about-flex">
    <!-- アイコン画像(左カラム) -->
    <div class="flex-left">
      <img src="<?php bloginfo('template_url'); ?>/images/image_6483441.JPG" alt="プロフィール画像">
    </div><!-- /.flex-left -->

    <!-- Aboutテキスト(右カラム) -->
    <div class="flex-right">
      <p>
        はじめまして!!<br>エンジニアのKeita Chimoriです。<br><br>お相手の要望や気持ちに耳を傾けて「共感」し、最適な提案ができるよう心がけています。<br>プログラミング・デザインを通して、皆さんのお力になれるよう、自分自身も成長できるようがんばります。<br><br>よろしくお願いします!!
      </p>
      <div class="button1">
        <a href="<?php bloginfo('url'); ?>/about">view more<div class="arrow"></div></a>
      </div><!-- /.button1 -->
    </div><!-- /.flex-right -->

  </div><!-- /.about-flex -->
</section><!-- /#about -->

<!-- works -->
<section id="works" class="wrapper">
  <!-- タイトル -->
  <h2 class="h2-title">Works</h2>
  <div class="subtitle-center">
    <h4 class="sub-title">制作物</h4>
  </div>

  <div class="grid">
    <!-- サブクエリ【制作実績(カスタム投稿タイプ)】の表示 -->
    <?php
    $args = array(
      'post_type' => 'works',
      'post_per_page' => 6,
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
    ?>
        <div class="item">
          <a href="<?php the_permalink(); ?>">
            <img src="<?php echo CFS()->get('thumbnail'); ?>" alt="制作物の画像">
            <p><?php echo CFS()->get('title'); ?></p>
          </a>
        </div>
        <?php wp_reset_postdata(); ?>
    <?php endwhile;
    endif; ?>
  </div><!-- /.grid -->

  <div class="works-button">
    <a href="<?php echo get_post_type_archive_link('works'); ?>" class="button2">view more</a>
  </div><!-- /.works-button -->
</section><!-- /#works /.wrapper -->

<!-- Contact -->
<section id="contact">
  <div class="wrapper">
    <!-- タイトル -->
    <h3 class="h2-title">Contact</h3>
    <div class="subtitle-center">
      <h4 class="sub-title">お問い合わせ</h4>
    </div>

    <p>お仕事のご依頼やご質問など、<br>下記フォームまたはSNSからお気軽にご連絡ください!!
    
    <!-- <br><span class="text-red">*</span>は必須入力です。 -->
  </p>

    <!-- form -->
    <!-- <form action="" method="post">
        <div>
          <label for="name">お名前</label>
          <input type="text" name="name" id="name">
        </div>
        <div>
          <label for="email">メールアドレス</label>
          <input type="email" name="email" id="email">
        </div>
        <div>
          <label for="message">メッセージ</label>
          <textarea name="message" id="message"></textarea>
        </div>
        <div class="button2">
          <input type="submit" name="btn_submit" value="送信する">
          <i class="far fa-envelope"></i>
        </div>
      </form> -->
    <div class="form">
      <?php echo do_shortcode('[contact-form-7 id="10" title="Contact"]'); ?>
    </div>
  </div><!-- /.wrapper -->
</section><!-- #contact -->

<!-- SNS -->
<section id="sns">
  <div class="wrapper">
    <!-- タイトル -->
    <h3 class="h2-title">SNS</h3>
    <div class="subtitle-center">
      <h4 class="sub-title">Instagram</h4>
    </div>
    
    </div><!-- /.wrapper -->
</section><!-- #sns -->

<!-- フッター読み込み -->
<?php get_footer(); ?>