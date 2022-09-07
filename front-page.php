<?php
get_header();

$contact_form = get_posts(array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1))[0];

?>

<section class="front-mv" id="front-mv">
  <div class="front-mv-image1"></div>
  <div class="front-mv-image2"></div>
  <div class="front-mv-cover"></div>
  <div class="front-mv-title-area">
    <p class="front-mv-title">心の科学的な強化で</p>
    <p class="front-mv-subtitle">あなたの目標達成と<br class="sp-only" />実力発揮に向けて<br/>サポートする</p>
  </div>
  <a href="https://lin.ee/dMoTajd">
    <p class="front-contact-linkbtn front-mv-button"><span>LINEでお問合せ</span></p>
  </a>
</section>

<section class="front-trouble section-scroll-fade">
  <div class="front-trouble-title">
    <p class="front-trouble-title-en free-slide-show-target" data-direction="135" data-speed="2">Trouble</p>
    <p class="front-trouble-title-jp">こんなお悩みはありませんか？</p>
  </div>
  <div class="front-trouble-content">
    <div class="front-trouble-item">
      <div class="front-trouble-item-content left">
        <p class="front-trouble-item-title-en left">Mental</p>
        <p class="front-trouble-item-title-jp left">勝負にメンタルが<br/>左右されてしまう</p>
        <p class="front-trouble-item-text left">練習・スポーツへのやる気にばらつきはありませんか？<br/>それぞれの目標に強い想いでスポーツに臨めるように、メンタルトレーニングが必要です。</p>
      </div>
      <div class="front-trouble-item-image right">
        <div class="front-trouble-item-image-inner right">
          <div class="front-trouble-item-image-dark"><img src="<?php echo get_theme_file_uri('/assets/img/front/trouble-1.jpg'); ?>" /></div>
          <div class="front-trouble-item-image-float right">
            <div class="front-trouble-item-image-shadow"></div>
            <img class="front-trouble-item-image-floatimage" src="<?php echo get_theme_file_uri('/assets/img/front/trouble-1.jpg'); ?>" />
          </div>
        </div>
      </div>
    </div>
    <div class="front-trouble-item">
      <div class="front-trouble-item-content right">
        <p class="front-trouble-item-title-en right">Pressure</p>
        <p class="front-trouble-item-title-jp right">いざという時に、<br/>実力が発揮できない</p>
        <p class="front-trouble-item-text right">プレッシャーや過緊張によって実力が発揮できなかった経験はありませんか？<br/>アスリートの大一番に向けて、パフォーマンスを最大限引き出すために最適なサポートを展開します。</p>
      </div>
      <div class="front-trouble-item-image left">
        <div class="front-trouble-item-image-inner left">
          <div class="front-trouble-item-image-dark"><img src="<?php echo get_theme_file_uri('/assets/img/front/trouble-2.jpg'); ?>" /></div>
          <div class="front-trouble-item-image-float left">
            <div class="front-trouble-item-image-shadow"></div>
            <img class="front-trouble-item-image-floatimage" src="<?php echo get_theme_file_uri('/assets/img/front/trouble-2.jpg'); ?>" />
          </div>
        </div>
      </div>
    </div>
    <div class="front-trouble-item">
      <div class="front-trouble-item-content left">
        <p class="front-trouble-item-title-en left">Communication</p>
        <p class="front-trouble-item-title-jp left">チームのコミュニケーションが<br/>円滑にならない</p>
        <p class="front-trouble-item-text left">チーム内のコミュニケーション不足から、人間関係に問題を抱えていませんか？<br/>チームビルディングやコミュニケーションスキルを通して、チームワークを高めることが可能です。</p>
      </div>
      <div class="front-trouble-item-image right">
        <div class="front-trouble-item-image-inner right">
          <div class="front-trouble-item-image-dark"><img src="<?php echo get_theme_file_uri('/assets/img/front/trouble-3.jpg'); ?>" /></div>
          <div class="front-trouble-item-image-float right">
            <div class="front-trouble-item-image-shadow"></div>
            <img class="front-trouble-item-image-floatimage" src="<?php echo get_theme_file_uri('/assets/img/front/trouble-3.jpg'); ?>" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="front-contact-banner-1 section-scroll-fade">
  <div class="front-contact-banner-1-content">
    <div class="front-contact-banner-1-inner">
      <div class="free-slide-show-target" data-direction="135" data-speed="2">
        <p class="front-contact-banner-1-title">Please feel free to contact us.</p>
        <p class="front-contact-banner-1-text">そのお悩み、スポーツメンタル<br class="sp-only" />トレーニングの<br class="pc-only" />専門家に<br class="sp-only" />相談してみませんか？</p>
      </div>
    </div>
  </div>
  <a href="https://lin.ee/dMoTajd">
    <p class="front-contact-linkbtn front-contact-banner-1-button"><span>LINEでお問合せ</span></p>
  </a>
</section>

<section class="front-animation section-scroll-fade">
  <p class="front-animation-title">スポーツメンタルトレーニング紹介動画</p>
  <div class="front-animation-video">
    <p class="front-animation-play"></p>
    <video src="<?php echo get_theme_file_uri('/assets/video/front-animation.mp4'); ?>" />
  </div>
</section>

<section class="front-reason section-scroll-fade" id="front-reason">
  <div class="front-section-title">
    <p class="front-section-title-en front-reason-title-en free-slide-show-target" data-direction="135" data-speed="2">Reason</p>
    <p class="front-section-title-jp front-reason-title-jp">選ばれる理由</p>
  </div>
  <div class="front-reason-content">
    <div class="front-reason-item">
      <div class="front-reason-item-content left">
        <p class="front-reason-item-no left">01</p>
        <p class="front-reason-item-title left">熱心なスポーツ現場に<br/>寄り添ったサポート</p>
        <p class="front-reason-item-text left">スポーツ現場は、常に様々なことが起こることは十分理解しています。<br/>そして、一度きりの競技人生ですので、徹底的に柔軟に、想いを持ったサポートをさせて頂きます。<br/>ご本人以上に、覚悟を持つ所存です。</p>
      </div>
      <div class="front-reason-item-image right">
        <img class="pc-only" src="<?php echo get_theme_file_uri('/assets/img/front/pc-reason-1.png'); ?>" />
        <img class="sp-only" src="<?php echo get_theme_file_uri('/assets/img/front/sp-reason-2.png'); ?>" />
      </div>
    </div>
    <div class="front-reason-item">
      <div class="front-reason-item-content right">
        <p class="front-reason-item-no right">02</p>
        <p class="front-reason-item-title right">科学的な内容で安心</p>
        <p class="front-reason-item-text right">メンタルトレーニングはスポーツ心理学の研究に基づいた科学的に根拠があるものです。そのため、メンタルトレーニングにおいて〇〇式や〇〇メソッドというものは存在しません。スポーツ心理学の理論に基づいたサポートを展開しています。</p>
      </div>
      <div class="front-reason-item-image left">
        <img class="pc-only" src="<?php echo get_theme_file_uri('/assets/img/front/pc-reason-2.png'); ?>" />
        <img class="sp-only" src="<?php echo get_theme_file_uri('/assets/img/front/sp-reason-2.png'); ?>" />
      </div>
    </div>
    <div class="front-reason-item">
      <div class="front-reason-item-content left">
        <p class="front-reason-item-no left">03</p>
        <p class="front-reason-item-title left">心理面の分析も実施</p>
        <p class="front-reason-item-text left">スポーツ心理学では、心理テストなどを用いてメンタル面を数値化して評価する方法と、選手や指導者に対するヒアリングを用いて評価する２つの方法があります。一概にメンタルと言っても、チームや選手によってメンタル面の課題は異なります。そのため、客観的な評価・分析を行い、選手やチームの課題を明らかにした上でオーダーメイドのプログラムを構築します。</p>
      </div>
      <div class="front-reason-item-image right">
        <img class="pc-only" src="<?php echo get_theme_file_uri('/assets/img/front/pc-reason-3.png'); ?>" />
        <img class="sp-only" src="<?php echo get_theme_file_uri('/assets/img/front/sp-reason-2.png'); ?>" />
      </div>
    </div>
    <div class="front-reason-item">
      <div class="front-reason-item-content right">
        <p class="front-reason-item-no right">04</p>
        <p class="front-reason-item-title right">海外のトップレベルも<br class="pc-only" />実践する<br class="sp-only" />メンタル<br class="pc-only" />トレーニング</p>
        <p class="front-reason-item-text right">メンタルの問題は、自分で対処しなければいけないと抱え込んでいませんか？ <br/>メンタルトレーニングはより高い目標達成のために行うプログラムで、病院や治療ではありません。<br/>海外では、一流ほど、専門家を付けて、高みを目指しています。<br/>日本のメンタルに対する認識とは大きく違うのです。</p>
      </div>
      <div class="front-reason-item-image left">
        <img class="pc-only" src="<?php echo get_theme_file_uri('/assets/img/front/pc-reason-4.png'); ?>" />
        <img class="sp-only" src="<?php echo get_theme_file_uri('/assets/img/front/sp-reason-2.png'); ?>" />
      </div>
    </div>
  </div>
</section>

<section class="front-case section-scroll-fade" id="front-case">
  <div class="front-section-title">
    <p class="front-section-title-en front-case-title-en free-slide-show-target" data-direction="135" data-speed="2">Case</p>
    <p class="front-section-title-jp front-case-title-jp">導入事例</p>
  </div>
  <div class="front-case-content">
    <div class="front-case-item">
      <div class="front-case-info">
        <div class="front-case-image left">
          <img src="<?php echo get_theme_file_uri('/assets/img/front/case-1.jpg'); ?>" />
        </div>
        <div class="front-case-name right"><p class="front-case-name-inner">島津 玲奈選手</p></div>
        <p class="front-case-position right">東京五輪 近代五種日本代表</p>
      </div>
      <p class="front-case-text">小林先生との出会いは、5年前のリオデジャネイロ五輪に出場できず挫折していた時です。私は競技と向き合うのすら無理な状態の時に出会いました。弱音ばかり吐いていたし、自分自身の自信を失っていたので本当に今振り返ってみれば、あんな状態からのオリンピック出場は奇跡だと思います。もう一度、五輪を目指す気持ちになれたのは、最初は自分の力では本当に無理だったので先生にメンタルのコントロール方法をサポートして頂けなければ立ち上がることはなかったと思います。<br/>気が付けば5年前のマイナス考えの自分が嘘かのように、先生のメンタルのサポートのおかげで、自分でもわかるほど考え方の変化を感じました。五輪でも、たくさんの心理サポートのおかげで、モチベーションの保ち方、更に戦う思考を身につけることができました。競技の実力を上げることはもちろんのこと、メンタル(心)を鍛えることで、どんな困難でも立ち向かう力を付けることができたと思います。<br/>私も最初はメンタルトレーニングの意味がわかりませんでしたが、やっていくうちにメンタルトレーニングに大切さに気付きました。新しい事に挑戦する事はとても勇気のいることですが、大切な事だと思います。やらずに後悔するのはもったいないので、いろんな事に挑戦し良いものは自分のものにし、更にレベルアップに繋げて行ってほしいです。<br/>そして最後に私は本当に先生との出会い（メンタルトレーニングとの出会い）に感謝しています。</p>
    </div>
    <div class="front-case-item">
      <div class="front-case-info">
        <div class="front-case-image right">
          <img src="<?php echo get_theme_file_uri('/assets/img/front/case-2.jpg'); ?>" />
        </div>
        <div class="front-case-name left"><p class="front-case-name-inner">関谷 正徳さん</p></div>
        <p class="front-case-position left">TGR-DC Racing School 校長</p>
      </div>
      <p class="front-case-text">私が指導するTOYOTAの育成ドライバーには、十数年前から科学的根拠があるメンタルトレーニングを導入し、成果に繋げてきました。選手ともうまくコミュニケーションを図り、選手やチームの課題に沿ったサポートをしてくれるので、信頼して長年に渡り継続しています。日本の多くのトップドライバーもこのメンタルトレーニング・プログラムを実施し、それぞれの舞台で活躍しています。目標達成に向けて、メンタルトレーニングを導入してみてはいかがでしょうか。</p>
    </div>
  </div>
</section>

<section class="front-trainer section-scroll-fade" id="front-trainer">
  <div class="front-section-title">
    <p class="front-section-title-en front-trainer-title-en free-slide-show-target" data-direction="135" data-speed="2">Trainer</p>
    <p class="front-section-title-jp front-trainer-title-jp">責任者</p>
  </div>
  <div class="front-trainer-content">
    <img class="pc-only" src="<?php echo get_theme_file_uri('/assets/img/front/pc-trainer.png'); ?>" />
    <img class="sp-only" src="<?php echo get_theme_file_uri('/assets/img/front/sp-trainer.png'); ?>" />
    <div class="front-trainer-info free-slide-show-target" data-direction="135" data-speed="2">
      <p class="front-trainer-position">スポーツメンタルトレーニング<br class="sp-only" />指導士修士（体育学）</p>
      <p class="front-trainer-name">小林玄樹<span class="small">（Kobayashi Genju）</span></p>
    </div>
    <p class="front-trainer-text">自衛隊体育学校やボクシングジムでトップアスリートの指導を実施。<br/>高校生の時にメンタル指導者を志し、すでに10年以上。<br/>それぞれが目指す目標に対して、寄り添う指導のため、紹介や継続者も多い。<br/>選手だけでなく、指導者・保護者からの信頼もあり、講演なども多数開催。</p>
  </div>
</div>

<section class="front-price section-scroll-fade" id="front-price">
  <div class="front-section-title">
    <p class="front-section-title-en front-price-title-en free-slide-show-target" data-direction="135" data-speed="2">Price</p>
    <p class="front-section-title-jp front-price-title-jp">料金表</p>
  </div>
  <div class="front-price-content">
    <div class="front-price-list">
      <div class="front-price-item">
        <img src="<?php echo get_theme_file_uri('/assets/img/front/price-1.jpg'); ?>" />
        <div class="front-price-inner free-slide-show-target" data-direction="135" data-speed="2">
          <p class="front-price-name">講演</p>
          <p class="front-price-price"><span class="number">30,000</span><span class="small"> 円 ~</span></p>
        </div>
      </div>
      <div class="front-price-item">
        <img src="<?php echo get_theme_file_uri('/assets/img/front/price-2.jpg'); ?>" />
        <div class="front-price-inner free-slide-show-target" data-direction="135" data-speed="2">
          <p class="front-price-name">個別指導</p>
          <p class="front-price-price"><span class="number">15,000</span><span class="small"> 円~ / 1時間</span></p>
        </div>
      </div>
      <div class="front-price-item">
        <img src="<?php echo get_theme_file_uri('/assets/img/front/price-3.jpg'); ?>" />
        <div class="front-price-inner free-slide-show-target" data-direction="135" data-speed="2">
          <p class="front-price-name">帯同</p>
          <p class="front-price-price"><span class="small">要相談</span></p>
        </div>
      </div>
      <div class="front-price-item">
        <img src="<?php echo get_theme_file_uri('/assets/img/front/price-4.jpg'); ?>" />
        <div class="front-price-inner free-slide-show-target" data-direction="135" data-speed="2">
          <p class="front-price-name">オンライン集団指導</p>
          <p class="front-price-price"><span class="small">月額 </span><span class="number">4,000</span><span class="small"> 円</span></p>
        </div>
      </div>
    </div>
    <p class="front-price-text">ハイクラスは、費用の問題にできる限り善処します。<br/>まずは、遠慮なくご相談ください！</p>
  </div>
</section>

<section class="front-contact-banner-2 section-scroll-fade">
  <div class="front-contact-banner-2-content">
    <img class="pc-only" src="<?php echo get_theme_file_uri('/assets/img/front/pc-contact-banner-2.png'); ?>" />
    <img class="sp-only" src="<?php echo get_theme_file_uri('/assets/img/front/sp-contact-banner-2.png'); ?>" />
    <div class="front-contact-banner-2-text">
      <p class="free-slide-show-target" data-direction="135" data-speed="2">まずは無料でご相談ください！<br/>一歩踏み出す勇気で変わっていきます！</p>
    </div>
    <a href="https://lin.ee/dMoTajd">
      <p class="front-contact-linkbtn black front-contact-banner-2-button"><span>LINEでお問合せ</span></p>
    </a>
  </div>
</section>

<section class="front-contact section-scroll-fade" id="front-contact">
  <div class="front-section-title">
    <p class="front-section-title-en front-contact-title-en free-slide-show-target" data-direction="135" data-speed="2">Contact</p>
    <p class="front-section-title-jp front-contact-title-jp">お問い合わせ</p>
  </div>
  <div class="front-contact-content">
    <div class="front-contact-inner">
      <?php echo do_shortcode( '[contact-form-7 id="'.$contact_form->ID.'" title="'.$contact_form->post_title.'"]' ); ?>
    </div>
  </div>
</section>

<?php
get_footer();
