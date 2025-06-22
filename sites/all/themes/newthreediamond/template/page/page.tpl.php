<?php
/**
* @file
* stargrace's theme implementation to display a single Drupal page.
*/
?>

<header>
    <section class="container">
        <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="logo left wow fadeIn" data-wow-duration="1000ms" >
            <?php if ($logo) : ?>
                <a href="<?php print $front_page;?>" title="<?php print t('Home');?>" rel="home">
                    <img src="<?php print $logo;?>" id="logo" alt="<?php print t('Home');?>" />
                </a>        
            <?php endif;?>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-sm-12 nopadding">
            <section id="navbar">
                <!-- button -->
                <div class="fm-button">
                    <span class="fm-bar"></span>
                    <span class="fm-bar"></span>
                    <span class="fm-bar"></span>
                </div>
                <!-- end button -->
                <div class="navigation">
                    <?php if (isset ($page['menu'])) {print render($page['menu']);}?>
                </div>
            </section>
        </div>

    </section>
</header>

<section class="before_content_no_wrapper">
    <?php if (isset ($page['before_content_no_wrapper'])) : ?>
          <!-- BEFORE CONTENT BLOCK REGION -->
          <?php print render($page['before_content_no_wrapper']);?>
          <!-- END BEFORE CONTENT BLOCK REGION -->
    <?php endif;?>
</section>

<div class="innerpage-title">
    <div class="midpadding container">
        <div class="row">
        <div class="col-md-12 col-sm-12 nopadding">
            <?php print render($title_prefix);?>
                <h1 class="page_title"><?php print $title;?></h1>
            <?php print render($title_suffix);?>
        </div>
        </div>
    </div>
</div>


<section class="wow fadeIn" data-wow-duration="1500ms">
    <div class="container">
        <div class="row midpadding">
            <?php if (($page['sidebar_left'])) : ?>
                <div class="<?php if ($page['sidebar_right']) {echo "col-md-5 col-lg-5";}else {echo "col-md-5 col-lg-5";}?>">
                    <?php print render($page['sidebar_left']);?>
                </div>
            <?php endif;?>

            <div class="<?php if (($page['sidebar_right']) AND ($page['sidebar_left'])) {echo "col-md-6 col-lg-6";}elseif (($page['sidebar_right']) OR ($page['sidebar_left'])) {echo "col-md-7 col-lg-7";}else {echo "col-md-12 col-lg-12";}?>">
                    <?php print $messages;?>

                    <?php if ($tabs = render($tabs)) : ?>
                        <div id="drupal_tabs" class="tabs ">
                            <?php print render($tabs);?>
                        </div>
                    <?php endif;?>

                    <?php print render($page['help']);?>

                    <?php if ($action_links) : ?>
                        <ul class="action-links">
                            <?php print render($action_links);?>
                        </ul>
                    <?php endif;?>

                    <?php if (isset ($page['content'])) {print render($page['content']);}?>
            </div>

            <?php if (($page['sidebar_right'])) : ?>
                <div class="<?php if ($page['sidebar_left']) {echo "col-md-5 col-lg-5";}else {echo "col-md-5 col-lg-5";}?>">
                    <?php print render($page['sidebar_right']);?>
                </div>
            <?php endif;?>
        </div>
    </div>
</section>

<section class="wow fadeInDown" data-wow-duration="1500ms">
	<div data-stellar-background-ratio="0.1">
			<?php if (isset ($page['after_content'])) : ?>
				  <!-- BEFORE CONTENT BLOCK REGION -->
				  <?php print render($page['after_content']);?>
				  <!-- END BEFORE CONTENT BLOCK REGION -->
				<?php endif;?>
	</div>
</section>

<footer>
    <div class="footer-top">
        <div class="container midpadding">
                <div class="col-sm-12 col-md-5 col-lg-5">
                  <?php if (isset ($page['footer_top_left'])) : ?>
                        <?php print render($page['footer_top_left']);?>
                      <?php endif;?>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-7">
                  <?php if (isset ($page['footer_top_middle'])) : ?>
                        <?php print render($page['footer_top_middle']);?>
                      <?php endif;?>
                </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container smallpadding">
                <p>@2017 New Three Diamonds Company Limited, All right reserved.</p>
        </div>
    </div>
</footer>
<script>
        wow = new WOW(
            {
                animateClass: 'animated',
                offset:       100,
                callback:     function(box) {
                    console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                }
            }
        );
        wow.init();
        document.getElementById('moar').onclick = function() {
            var section = document.createElement('section');
            section.className = 'section--purple wow fadeInDown';
            this.parentNode.insertBefore(section, this);
        };
</script>