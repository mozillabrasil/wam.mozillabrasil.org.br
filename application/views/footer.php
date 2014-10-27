                </div>
                <div class="pm-fat-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 pm-widget-footer">
                                <h6 data-l10n-id="WAM_LAST_POSTS"></h6>
                                <ul class="pm-recent-blog-posts">
                                    <?php
                                    if (isset($events)) {
                                        foreach ($events as $key => $event) {
                                            echo '<li>
                                                    <div class="pm-recent-blog-post-thumb" style="background-image:url(' . base_url() . 'assets/images/events/' . $event->getObjectId() . '.jpg);"></div>
                                                    <div class="pm-recent-blog-post-details">
                                                        <a href="' . base_url() . '#events/view/' . $event->getObjectId() . '">' . $event->name . '</a>
                                                    </div>
                                                  </li>';
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 pm-widget-footer">
                                <h6 data-l10n-id="WAM_LAST_PHOTOS"></h6>
                                <div class="flickr_badge_wrapper clearfix">
                                    <!--$this->load->view('instagram', $event->serverData);-->
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="pm-footer-social-info-container">
                                    <h6 data-l10n-id="WAM_WHERE_WE_ARE"></h6>
                                    <ul class="pm-footer-social-icons">
                                        <li title="Facebook" class="pm_tip_static_top"><a href="https://www.facebook.com/pages/wam"><i class="fa fa-facebook fb"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="pm-footer-subscribe-container">
                                    <h6 data-l10n-id="WAM_NEWSLETTERS"></h6>
                                    <div class="pm-footer-subscribe-form-container">
                                        <form action="#" data-action="<?php echo base_url(); ?>#subscribe/add" method="post" id="pm-footer-subscribe">
                                            <input id="email" class="pm-footer-subscribe-field" type="email" name="email" placeholder="Digite seu email" />
                                            <button type="submit" class="pm-footer-subscribe-submit-btn">
                                                <i class="fa fa-paper-plane"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>	
                </footer>
                <div class="pm-footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12 pm-footer-copyright-col"></div>
                            <div class="col-lg-7 col-md-7 col-sm-12 pm-footer-navigation-col">
                                <ul class="pm-footer-navigation" id="pm-footer-nav">
                                    <li><a data-l10n-id="WAM_MENU_HOME" href="<?php echo base_url(); ?>#home"></a></li>
                                    <li><a data-l10n-id="WAM_MENU_APPS" href="<?php echo base_url(); ?>#apps"></a></li>
                                    <!--<li><a data-l10n-id="WAM_MENU_BLOG_WOMOZ" href="<?php echo base_url(); ?>#blog/womoz"></a></li>-->
                                    <li><a data-l10n-id="WAM_MENU_BLOG" href="<?php // echo base_url(); ?>#blog"></a></li>
                                    <li><a data-l10n-id="WAM_MENU_CONTRIBUTE" href="<?php echo base_url(); ?>#contribute"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div id="overlay"></div>
        <div id="fox-loading">
            <div id="fox"></div>
        </div>
        <svg id="svg-image-blur">
            <filter id="blur-effect-1">
                <feGaussianBlur stdDeviation="2" />
            </filter>
        </svg>
        <script src="<?php echo base_url(); ?>assets/js/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/twitter-bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/modernizr/modernizr.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/PMSlider/jquery.PMSlider.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/spritely/jquery.spritely.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/l10n/l10n.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/require.js/require.js" data-main="<?php echo base_url(); ?>assets/js/wam"></script>
    </body>
</html>