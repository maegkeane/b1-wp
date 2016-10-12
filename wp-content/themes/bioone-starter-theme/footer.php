<footer>
  <div id="footer-rule"></div>
  <div class="page-footer_content">
    <section class="flex_footer-logo">
      <img id="footer-logo" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo" />
    </section>  
    <section>
      <h6>Physical</h6> 
      <address>
      21 Dupont Circle NW<br />
        Suite 800<br />
        Washington, DC 20036<br />
        202.296.1605<br />
      </address>
    </section>
    <section>
      <h6>Digital</h6>
      <ul>
        <li>
          <a href="#">about.bioone.org</a>
        </li>
        <li>
          <a href="mailto:hello@bioone.org">hello@bioone.org</a>
        </li>
        <li>
          <a class="image" href="https://twitter.com/BioOneNews" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/img/twitter.png" alt="twitter" />
          </a>
          <a class="image" href="https://www.facebook.com/bioone.org/" target="_blank">
              <img src="<?php bloginfo('template_url'); ?>/img/fb.png" alt="facebook" />
          </a>
          <a class="image" href="https://www.linkedin.com/company/bioone-" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/img/linkedin.png" alt="linkedin" />
          </a>
        </li>
      </ul>
    </section>
    <section class="footer-copyright">Copyright &copy; <?php echo date('Y'); ?><br/>
      <a href="http://www.bioone.org/page/terms_of_use" target="_blank">Terms of Use</a> | <a href="http://www.bioone.org/page/privacy_policy" target="_blank">Privacy Policy
      </a>
    </section>
  </div>
</footer>
		
		</div>

		<?php wp_footer(); ?>
		<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
		<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
		<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/twitter/jquery.tweet.js"></script> -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

	</body>
</html>