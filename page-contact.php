<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>
<main>
  <!-- contact -->
  <img class="contact-img" src="<?php echo get_template_directory_uri(); ?>/img/contact1.png" alt="">
  <h2 class="contact-ttl">お問い合わせ</h2>
  <h2 class="contact-ttl2">Contact</h2>
  <h2 class="contact-ttl3">フォームからのお問い合わせ</h2>
  <p class="contact-text">記入内容の確認後、2~3営業日以内にご連絡させていただきます。</p>
  <div class="contact">
    <form class="contact-form" action="index.html" method="post">
      <?php echo apply_filters('the_content', '[contact-form-7 id="10" title="お問い合わせフォーム"]'); ?>
    </form>
  </div>
</main>
<?php get_footer(); ?>