<!-- **************************************** -->
<!-- ************    404ページ   ************ -->
<!-- **************************************** -->

<!-- ヘッダー読み込み -->
<?php get_header(); ?>

<div class="error">
  <h5>４０４Not Found<br>ページが見つかりません</h5>
  <p>お探しのページは一時的にアクセスができない状況にあるか、移動もしくは削除された可能性があります。</p>
  <ul>
    <li><a href="<?php echo home_url(); ?>">Home</a></li>
    <li><a href="<?php echo home_url(); ?>/about">About</a></li>
    <li><a href="<?php echo home_url(); ?>/works">Works</a></li>
    <li><a href="<?php echo home_url(); ?>/#contact">Contact</a></li>
  </ul>
</div>





<!-- フッター読み込み -->
<?php get_footer(); ?>