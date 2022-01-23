<?php
/*
Template Name: サービス
*/
?>
<?php get_header(); ?>
<main>
  <!-- service -->
  <div class="service">
    <img class="service__img" src="<?php echo get_template_directory_uri(); ?>/img/service1.png" alt="">
    <h2 class="service__ttl">サービス</h2>
    <h3 class="service__head">COACHTECH</h3>
    <div class="service__coachtech1">
      <img class="service__item-img1" src="<?php echo get_template_directory_uri(); ?>/img/service2.png" alt="">
      <p class="service__item-text1">フリーランス特化型プログラミングスクール<span class="service__color-blue">COACHTECH</span><br>
        <br>
        オンラインプログラミングスクールの中でも挫折率が<span class="service__color-red">3%</span>と圧倒的に低い実績を残しています。生徒様に応じた学習カリキュラムは基礎学習と応用学習を用意しており、フリーランスへの道を歩むことができます。
      </p>
    </div>
    <div class="service__coachtech2">
      <p class="service__item-text2">数字で見る「<span class="service__color-blue">COACHTECH</span>」</p>
      <ul class="service__item-list1">
        <li>累計生徒様数<span class="service__color-red">200名突破</span></li>
        <li>挫折率<span class="service__color-red">3%</span></li>
        <li>話題のプログラミングスクール<span class="service__color-red">1位</span></li>
      </ul>
      <img class="service__item-img2" src="<?php echo get_template_directory_uri(); ?>/img/service3.png" alt="">
    </div>
    <div class="service__coachtech3">
      <img class="service__item-img3" src="<?php echo get_template_directory_uri(); ?>/img/service4.png" alt="">
      <p class="service__item-text3"><span class="service__color-blue">COACHTECH</span>3つの特徴</p>
      <ol class="service__item-list2">
        <li>スキルレベルを最短で高める<span class="service__color-red">オーダーメイドカリキュラム</span></li>
        <li>現役エンジニアの<span class="service__color-red">専属コーチ</span>が学習サポート</li>
        <li>エラーや疑問点をすぐに解決できる<span class="service__color-red">質問チャットサポート</span></li>
      </ol>
    </div>
    <h3 class="service__head">Stageee</h3>
    <div class="service__stageee">
      <img class="service__item-img4" src="<?php echo get_template_directory_uri(); ?>/img/service5.png" alt="">
      <p class="service__item-text4"><span class="service__color-blue">Stageee</span><br><br>
        日本の教育課題は民間企業だからこそ解決できるものがあると信じています。<br>
        <br>
        <span class="service__color-blue">Stageee</span>はestra創業前からずっと同じサービス名で開発を進め、何度もピボットを繰り返しています。<br>
        <br>
        弊社はCOACHTECHで理想の教育モデルを構築し、「<span class="service__color-blue">Stageee</span>」でそのモデルの普及をすることで日本の教育業界を変革します。
      </p>
    </div>
    <p class="service__item-text5">Comming soon...</p>
  </div>
</main>
<?php get_footer(); ?>