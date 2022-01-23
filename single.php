<?php get_header(); ?>
<main>
  <!-- interview-list -->
  <div class="interview-list">
    <img class="interview-list__img" src="<?php echo get_template_directory_uri(); ?>/img/interview1.png" alt="">
    <h2 class="interview-list__ttl">インタビュー</h2>
    <div class="interview-list__content1">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <!-- メインループ開始 -->
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img class="interview-list__member-img1" src="<?php echo get_template_directory_uri(); ?>" alt=""><?php endif; ?>
          <!-- サムネイルの出力 -->
          <p class="interview-list__member-name1">
            <?php the_title(); ?>
            <!-- タイトルの出力 -->
          </p>
          <a class="interview-list__link1" href="<?php the_permalink(); ?>">詳しく見る</a>
          <!-- 個別記事へのリンクの出力 -->
    </div>
  </div>
<?php endwhile; ?>
<?php else : ?>
  <p>投稿が見つかりません。</p>
<?php endif; ?>
</main>
<?php get_footer(); ?>