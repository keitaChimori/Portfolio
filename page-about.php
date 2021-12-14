<!-- **************************************** -->
<!-- ************   Aboutページ  ************ -->
<!-- **************************************** -->

  <!-- ヘッダー読み込み -->
  <?php get_header(); ?>

  <!-- about-top -->
  <section id="about-top">
    <div class="wrapper">
      <!-- タイトル -->
      <h3 class="h2-title">About</h3>
      <div class="subtitle-center">
        <h4 class="sub-title">私について</h4>
      </div>
  
      <!-- AboutFlex -->
      <div class="flex">
        <!-- アイコン画像(左カラム) -->
        <div class="flex-left">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_6483441.JPG" alt="プロフィール画像">
        </div><!-- /.flex-left -->

        <!-- Aboutテキスト(右カラム) -->
        <div class="flex-right">
          <div class="myname">
            <small>Keita Chimori</small>
            <h3>千守 啓太</h3>
          </div>
          <p>
            はじめまして!!<br>エンジニアの千守です。<br>「千を守る」と書いて「ちもり」と読みます。<br><br>東京都八王子市生まれ、愛媛県松山市育ちの２４歳。趣味は、サッカー観戦・温泉めぐり・ドライブ・深夜ラジオです。<br><br>プログラミング・デザインを通して,皆さんのお力になれるよう、自分自身も成長できるようにがんばります。<br>よろしくお願いします‼︎
          </p>
        </div><!-- .flex-right -->
      </div><!-- /.flex -->
    </div><!-- ./wrapper -->
  </section>

  <!-- career -->
  <section id="career">
    <div class="wrapper">
      <!-- タイトル -->
      <h3 class="h2-title">Career</h3>
      <div class="subtitle-center">
        <h4 class="sub-title">今までのこと</h4>
      </div>

      <!-- キャリア表 -->
      <dl class="career-flex">
        <dt class="career-left">2015年</dt>
        <dd class="career-right">
          <h4>大学進学のため愛媛から上京</h4>
          <p>まちづくりに興味があり、社会福祉系の学部に進学。東京で初めて見たホームレス状態の方々を見て関心を持ち、大阪のホームレス支援のNPO法人で実習を行うなどホームレス問題について学ぶ。
          </p>
        </dd>
      </dl>
      <dl class="career-flex">
        <dt class="career-left">2019年</dt>
        <dd class="career-right">
          <h4>大学卒業後、地元企業に営業職として就職</h4>
          <p>地元の企業へUターン就職し、産業車両(フォークリフト)・物流機器の法人営業を担当する。
          </p>
        </dd>
      </dl>   
      <dl class="career-flex">
        <dt class="career-left">2019年</dt>
        <dd class="career-right">
          <h4>愛知の生産工場へ出向</h4>
          <p>愛知県の生産世界一の生産工場へ半年間出向し、ライン作業を担当する。製造業の大変さ・品質管理の徹底・社会人としての基礎を学ぶ。
          </p>
        </dd>
      </dl>   
      <dl class="career-flex">
        <dt class="career-left">2020年</dt>
        <dd class="career-right">
          <h4>プログラミングに出会い、勉強をはじめる</h4>
          <p>新型コロナウイルス流行をきっかけに、自分にスキルを身につけて働きたいと思うようになり、プログラミングを学び始める。
          </p>
        </dd>
      </dl>
      <dl class="career-flex">
        <dt class="career-left">2021年</dt>
        <dd class="career-right">
          <h4>サンプルテキスト</h4>
          <p>サンプルテキスト</p>
        </dd>
      </dl><!-- /.career-flex -->
    </div><!-- ./wrapper -->
  </section>

  <!-- skills -->
  <section id="skills">
    <div class="wrapper">
      <!-- タイトル -->
      <h3 class="h2-title">Skills</h3>
      <div class="subtitle-center">
        <h4 class="sub-title">今できること</h4>
      </div>

      <div class="grid">
        <div class="item">
          <img src="<?php bloginfo('template_url'); ?>/images/testimage_s.jpg" alt="スキル画像">
          <h3>Coding/Back</h3>
          <p>PHPのフレームワーク(Laravel・CodeIgniter)を使った開発を主に行っています。<br><br>使用言語・ソフト<br>PHP(Laravel・CodeIgniter)/MySQL</p>
        </div><!-- /.item -->
        <div class="item">
          <img src="<?php bloginfo('template_url'); ?>/images/testimage_s.jpg" alt="スキル画像">
          <h3>Coding/Front</h3>
          <p>XDでのWEBデザインから、HTML・CSS・jQueryでのコーディングをいたします。レスポンシブ・動的なサイトも対応します。Wordpressでのサイト構築も可能です。<br><br>使用言語・ソフト<br>HTML/CSS(Bootstrap)/JavaScript<br>(jQuery)/WordPress
          </p>
        </div><!-- /.item -->
        <div class="item">
          <img src="<?php bloginfo('template_url'); ?>/images/testimage_s.jpg" alt="スキル画像">
          <h3>Design</h3>
          <p>Illustrator・Photoshopを使ってチラシやパンフレット、カード等の印刷物をデザインをしています。<br>依頼者の「こうしたい!」「これを伝えたい!」というご要望や意図を汲み取り、カタチにできるよう心がけています。<br><br>使用言語・ソフト<br>Illustrator/Photoshop/XD</p>
        </div><!-- /.item -->
      </div><!-- /.grid -->
    </div><!-- /.wrapper -->
  </section>

  <!-- future -->
  <section id="future">
    <div class="wrapper">
      <!--  タイトル -->
      <h3 class="h2-title">Future</h3>
      <div class="subtitle-center">
        <h4 class="sub-title">これからのこと</h4>
      </div>
      
      <div class="flex">
        <!-- 画像(左カラム) -->
        <div class="flex-left">
          <img src="<?php bloginfo('template_url'); ?>/images/testimage_s.jpg" alt="画像">
        </div><!-- /.flex-left -->
        <!-- テキスト(右カラム) -->
        <div class="flex-right">
          <p>ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。</p>
        </div><!-- /.flex-right -->
      </div><!-- /.flex -->
      
    </div><!-- /.wrapper -->
  </section>
    
  <!-- フッター読み込み -->
  <?php get_footer(); ?>

</body>
</html>