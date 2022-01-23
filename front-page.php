<?php get_header(); ?>
<div class="top-view">
  <div class="wrap">
    <p class="top-view__main-copy">Commit to the growth for everyone</p>
    <p class="top-view__sub-copy">〜全ての人の成長にコミットする〜</p>
  </div>
</div>
<main>
  <div class="top-about">
    <h2 class="top-about__ttl">About</h2>
    <h2 class="top-about__ttl-2">Technology × Coaching</h2>
    <div class="top-about__content">
      <p class="top-about__txt">
        株式会社estraはデジタル化が遅れている教育業界に<br>
        最新のテクノロジーを導入することによって教育のDXを実現します。<br>
        <br>
        独自のオペレーションとコーチングを融合した新しい教育仕組みに<br>
        より、一人ひとりに合わせた最適な教育を提供します。
      </p>
      <img class="top-about__img" src="<?php echo get_template_directory_uri(); ?>/img/Top2.png" alt="">
    </div>
    <a href="about.html" class="top-about__btn">Aboutページはこちら</a>
  </div>
  <div class="top-news">
    <h2 class="top-news__ttl">NEWS</h2>
    <div class="top-news__list">
      <article class="top-news__item">
        <?php
        $posts = new WP_Query(
          array(
            'post_type' => 'news',
            'posts_per_page' => 3
          )
        );
        if (have_posts()) : while ($posts->have_posts()) : $posts->the_post();
        ?>
            <!-- ニュースというカスタム投稿タイプのサブループ開始 -->
            <span class="top-news__item-new">
              <?php
              $days = 3;
              $today = date_i18n('U');
              $entry_day = get_the_time('U');
              $keika = date('U', ($today - $entry_day)) / 86400;
              if ($days > $keika) :
                $limit = 3;
                $num = $wp_query->current_post;
                if ($limit > $num) :
                  echo 'New';
                endif;
              endif;
              ?>
              <!-- 3日以内に投稿されている投稿にはNewと表示をする -->
            </span>
            <span class="top-news__item-date"><?php echo get_the_date('Y/m/d'); ?></span>
            <a href="<?php the_permalink(); ?>" class="top-news__item-link">
              <h3 class="top-news__item-ttl"><?php the_title(); ?></h3>
              <!-- タイトルの出力 -->
            </a>
        <?php endwhile;
        endif;
        wp_reset_query(); ?>
        <!-- サブループ終了 -->
      </article>
    </div>
    <a href="<?php echo get_post_type_archive_link('news'); ?>" class="top-news__btn">NEWSページはこちら</a>
    <!-- ニュースアーカイブページへのリンク -->
  </div>
  <div class="top-service">
    <h2 class="top-service__ttl">Service</h2>
    <div class="top-service__content">
      <div class="top-service__flex-item">
        <div class="top-service__txt">
          <p class="top-service__txt-1">
            フリーランス特化型プログラミングスクール<br>
            「COACHTECH」
          </p>
          <p class="top-service__txt-2">
            COACHTECH(コーチテック)はフリーランス特化型のオンラインコーチングプログラミングスクールです。<br>
            プログラミング未経験の方でも、「独自の学習ノウハウ」でフリーランスエンジニアを目指すことができます。
          </p>
        </div>
        <div class="top-service__txt">
          <p class="top-service__txt-3">
            教育機関向け業務効率化支援ツール<br>
            「Stageee」
          </p>
          <p class="top-service__txt-4">
            COACHTECH(コーチテック)はフリーランス特化型のオンラインコーチングプログラミングスクールです。<br>
            プログラミング未経験の方でも、「独自の学習ノウハウ」でフリーランスエンジニアを目指すことができます。
          </p>
        </div>
      </div>
      <a href="<?php echo home_url(); ?>/service" class="top-service__btn">Serviceページはこちら</a>
      <div class="top-service__margin"></div>
    </div>
  </div>
  <div class="top-recruit">
    <h2 class="top-recruit__ttl">Recruit</h2>
    <div class="top-recruit__content">
      <img class="top-recruit__img" src="<?php echo get_template_directory_uri(); ?>/img/Top4.png" alt="">
      <p class="top-recruit__txt">日本の教育を変革する最前線で活躍する人材に<br><br>
        全員がリスクを恐れずにチャレンジし、社員一人一人が活躍できる環境をみんなで作り上げる</p>
      <a href="<?php echo home_url(); ?>/recruit" class="top-recruit__btn">Recruitページはこちら</a>
    </div>
  </div>
</main>
<?php get_footer(); ?>