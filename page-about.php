<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>
<!-- top-mv -->
<div class="top-view">
  <div class="wrap">
    <p class="top-view__main-copy">新しい教育の常識を作り</p>
    <p class="top-view__sub-copy">多くの人々に幸せを届ける。</p>
  </div>
</div>
<!-- top-mv end -->
<main>
  <!-- about -->
  <div class="about">
    <h2 class="about__ttl">About</h2>
    <div class="about__content">
      <p class="about__txt">
        estraが大切にすることは、教育のDX化で<br>
        日本の教育を変革すること。<br>
        日本の教育にコーチングを普及し、自発的に<br>
        目標達成ができる人材を育成する。
      </p>
      <img class="about__img" src="<?php echo get_template_directory_uri(); ?>/img/About1.png" alt="">
    </div>
    <div class="about__belief">
      <h3 class="about__belief-ttl">私たちが大切にしている３つの事</h3>
      <div class="about__belier-content">
        <h4 class="about__belief-item">失敗を恐れない</h4>
        <p class="about__belief-text">私たちが大切にしている「成長」のためには失敗は必要です。</p>
        <h4 class="about__belief-item">オープンなコミュニケーション</h4>
        <p class="about__belief-text">組織の成長のためなら、時には厳しいことも発言することが重要です。<br>
          若いメンバーで構成されていることもあり、気軽に誰とでも話せる環境です。</p>
        <h4 class="about__belief-item">メンバーの多様性</h4>
        <p class="about__belief-text">男女問わず、学生〜社会人まで様々なバックグラウンドを持ったメンバーが働いています</p>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>