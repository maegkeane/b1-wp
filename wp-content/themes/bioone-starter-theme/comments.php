<div class="comments">
  <hr />
  <?php if (post_password_required()) : ?>
  <p>Post is password protected. Enter the password to view any comments.</p>
</div>

  <?php return; endif; ?>

<?php if (have_comments()) : ?>

  <span class="comments__title">Discussion about &ldquo;<?php the_title(); ?>&rdquo;</span>  

  <ul>
    <?php wp_list_comments('type=comment'); // Custom callback in functions.php ?>
  </ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

  <!-- Comments are closed -->

<?php endif; ?>

<?php comment_form(); ?>

</div>
