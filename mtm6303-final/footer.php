
<!-- Footer Style -->
<?php do_shortcode("[mtm63030finalplugin_slider]"); ?>

        <footer>
            <div class="section-container footer-container">
                <div class="container">
                    <div class="row">
                            <div class="col-md-4">
                                <h4>About us</h4>
                                <?php if (is_active_sidebar('mtm6303final-sidebar-footer')){
                                dynamic_sidebar('mtm6303final-sidebar-footer'); 
                                }
                                ?> 
                            </div>

                            <div class="col-md-4">
                                <h4>Do you like ? Share this !</h4>
                                <!-- Social Media Menu -->
                                <?php $social_menu_items = mtm6303final_getnav("social"); 
                                ?>
                                <p>
                                    <?php foreach ($social_menu_items as $social_menu_item) { ?>
                                    <a href="<?php echo $social_menu_item['url'] ?>" class="social-round-icon white-round-icon fa-icon">
                                        <i class="fa <?php echo $social_menu_item['classes'] ?>" aria-hidden="true"></i>
                                    </a>
                                    <?php } ?>
                                <!--<a href="https://facebook.com/" class="social-round-icon white-round-icon fa-icon" title="">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a> 
                                    <a href="https://twitter.com/" class="social-round-icon white-round-icon fa-icon" title="">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.linkedin.com/" class="social-round-icon white-round-icon fa-icon" title="">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a> -->
                                </p>
                                <p><small>© Untitled 2022| <a href="http://www.unsplash.com/" class="link-like-text" title="Beautiful Free Images">Unsplash</a></small></p>    
                            </div>

                            <div class="col-md-4">
                                <h4>Subscribe to newsletter</h4>
                                
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control footer-input-text">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-primary btn-newsletter ">OK</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <?php wp_footer(); ?>
    </body>
    <!-- Body Tag end -->
</html>

<?php
   unset($_SESSION["page_title"]);
?>