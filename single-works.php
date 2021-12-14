<!-- **************************************** -->
<!-- ************   Work ページ  ************ -->
<!-- **************************************** -->
<!-- ヘッダー読み込み -->
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!-- 制作物画像・タイトルパート -->
    <section id="work" class="single-work">
      <div class="wrapper">
        <div class="work-category">
          <?php
          $values = CFS()->get('category');
          foreach ($values as $key => $label) :
          ?>
            <h4><?php echo $label; ?></h4>
          <?php endforeach; ?>
        </div><!-- /.work-category -->

        <!-- 制作物画像 -->
        <div class="work-img">
          <img src="<?php echo CFS()->get('thumbnail'); ?>" alt="制作物の画像">
        </div>

        <!-- 制作物タイトル -->
        <h3><?php echo CFS()->get('title'); ?></h3>
      </div><!-- /.wrapper -->
    </section><!-- /.single-work -->

    <!-- 制作物説明パート -->
    <section id="work-explain">
      <div class="wrapper">

        <dl class="workexplain-flex">
          <dt class="workexplain-left">説明</dt>
          <dd class="workexplain-right">
            <p><?php echo CFS()->get('explain'); ?></p>
          </dd>
        </dl><!-- /.workexplain-flex -->

        <dl class="workexplain-flex">
          <dt class="workexplain-left">担当範囲</dt>
          <dd class="workexplain-right">
            <p><?php echo CFS()->get('territory'); ?></p>
          </dd>
        </dl><!-- /.workexplain-flex -->

        <dl class="workexplain-flex">
          <dt class="workexplain-left">言語・<span class="sp-br"></span>ツール</dt>
          <dd class="workexplain-right">
            <p><?php echo CFS()->get('tool'); ?></p>
          </dd>
        </dl><!-- /.workexplain-flex -->

        <!-- 詳細ボタン -->
        <div class="button3">
          <?php echo CFS()->get('link_url'); ?>
        </div>
        <!-- もどるリンク -->
        <div class="back">
          <a href="<?php echo home_url(); ?>/works">一覧にもどる</a>
        </div>
      </div><!-- ./wrapper -->

    </section><!-- /#work-explain -->
<?php endwhile;
endif; ?>

<!-- フッター読み込み -->
<?php get_footer(); ?>