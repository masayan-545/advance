<?php
/*
Template Name: interview-individual
*/
?>
<?php get_header(); ?>
<main>
  <!-- interview-individual -->
  <div class="interview-individual">
    <img class="interview-individual__img" src="<?php echo get_template_directory_uri(); ?>/img/interview1.png" alt="">
    <h2 class="interview-individual__ttl">インタビュー</h2>
    <div class="interview-individual__content1">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <!-- メインループ開始 -->
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img class="interview-individual__member-img1" src="<?php echo get_template_directory_uri(); ?>" alt=""><?php endif; ?>
          <!-- サムネイルの出力 -->
          <p class="interview-individual__member-name1">
            <?php the_title(); ?>
            <!-- タイトルの出力 -->
          </p>
          <p class="interview-individual__text">働きやすい環境を全力で作る</p>
    </div>
  </div>
<?php endwhile; ?>
<?php else : ?>
  <p>投稿が見つかりません。</p>
<?php endif; ?>
<div class="interview-individual__btn">
  <a href="#" class="interview-individual__btn-back">前の記事へ</a>
  <?php previous_post_link('%link', '古い記事へ'); ?>
  <a href="interview-list.html" class="interview-individual__btn-list">インタビュー記事一覧に戻る</a>
  <a href="#" class="interview-individual__btn-next">次の記事へ</a>
  <?php next_post_link('%link', '新しい記事へ'); ?>
</div>
</main>
<?php get_footer(); ?>