<body class="show-megamenu overflow-hidden">
        <div class="body-wrapper">
            <div class="wrapper-content">
                <div class="main-content">
                        <div class="block-main-1-wrapper">
                            <div class="container">
                                <div class="banner-news-wrapper">
                                    <div class="main-news" style="width:100%;">
                                        <div class="main-slide owl-carousel">
                                            <div data-item="item-1" class="item">
                                                <div class="block-item news-layout-3 big"><a href="#" class="news-image"><span class="mask-gradient style-4"></span><img src="<?php echo base_url(); ?>swlabs.co/assets/images/news/block-main-1.jpg" alt="" class="img-responsive"></a>
                                                    <div class="news-content"><a href="#" class="title">GoFundMe campaign launched to help raise $53 milion for Kanye West</a>
                                                        <ul class="info">
                                                            <li><a href="#" class="link">By timothy</a></li>
                                                            <li><a href="#" class="link">May 15, 2016</a></li>
                                                            <li><a href="#" class="link">15 likes</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-item="item-2" class="item">
                                                <div class="block-item news-layout-3 big"><a href="#" class="news-image"><span class="mask-gradient style-4"></span><img src="<?php echo base_url(); ?>swlabs.co/assets/images/news/block-main-2.jpg" alt="" class="img-responsive"></a>
                                                    <div class="news-content"><a href="#" class="title">GoFundMe campaign launched to help raise $53 milion for Kanye West</a>
                                                        <ul class="info">
                                                            <li><a href="#" class="link">By timothy</a></li>
                                                            <li><a href="#" class="link">May 15, 2016</a></li>
                                                            <li><a href="#" class="link">15 likes</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-item="item-3" class="item">
                                                <div class="block-item news-layout-3 big"><a href="#" class="news-image"><span class="mask-gradient style-4"></span><img src="<?php echo base_url(); ?>swlabs.co/assets/images/news/block-main-3.jpg" alt="" class="img-responsive"></a>
                                                    <div class="news-content"><a href="#" class="title">GoFundMe campaign launched to help raise $53 milion for Kanye West</a>
                                                        <ul class="info">
                                                            <li><a href="#" class="link">By timothy</a></li>
                                                            <li><a href="#" class="link">May 15, 2016</a></li>
                                                            <li><a href="#" class="link">15 likes</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-item="item-5" class="item">
                                                <div class="block-item news-layout-3 big"><a href="#" class="news-image"><span class="mask-gradient style-4"></span><img src="<?php echo base_url(); ?>swlabs.co/assets/images/news/block-main-1.jpg" alt="" class="img-responsive"></a>
                                                    <div class="news-content"><a href="#" class="title">GoFundMe campaign launched to help raise $53 milion for Kanye West</a>
                                                        <ul class="info">
                                                            <li><a href="#" class="link">By timothy</a></li>
                                                            <li><a href="#" class="link">May 15, 2016</a></li>
                                                            <li><a href="#" class="link">15 likes</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-item="item-6" class="item">
                                                <div class="block-item news-layout-3 big"><a href="#" class="news-image"><span class="mask-gradient style-4"></span><img src="<?php echo base_url(); ?>swlabs.co/assets/images/news/block-main-3.jpg" alt="" class="img-responsive"></a>
                                                    <div class="news-content"><a href="#" class="title">GoFundMe campaign launched to help raise $53 milion for Kanye West</a>
                                                        <ul class="info">
                                                            <li><a href="#" class="link">By timothy</a></li>
                                                            <li><a href="#" class="link">May 15, 2016</a></li>
                                                            <li><a href="#" class="link">15 likes</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-news-wrapper padding-top-60 padding-bottom-60">
                            <div class="container">
                                <div class="main-news-wrapper padding-bottom-60">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-12 main-news">
                                                <div class="row catelogy-topic">
                                                <?php foreach ($category as $row): ?>
                                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                                        <div class="block-news-3 business">
                                                            <div class="news-layout-1"><a href="index.html" class="label-topic-1"><span><?php echo $row->category_name; ?></span></a></div>
                                                            <div class="block-news-content">
                                                                <div class="layout-main-news">
                                                                    <div class="news-layout-1">
                                                                        <a href="#" class="news-image"><img src="<?php echo base_url(); ?>swlabs.co/assets/images/news/news-3.jpg" alt="" class="img-responsive"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="layout-list-news">
                                                                    <!-- Tab panes-->
                                                                    <div class="tab-content">
                                                                        <div role="tabpanel" class="tab-pane fade in active">
                                                                        <?php 
                                                                            $id=$row->category_id;
                                                                            foreach ($this->MCategory->get_terms() as $key)
                                                                            {
                                                                                if($key->category_id == $id)
                                                                                {
                                                                                    foreach($this->MPosting->get_terms($key->post_id)->result() as $rows)
                                                                                    {
                                                                                        echo '<div class="single-recent-post-widget">';
                                                                                            echo '<a href="#" class="thumb"><img src="'.base_url().'gambar/'.$rows->post_name.'_thumb.jpg" alt="'.$rows->post_name.'_thumb.jpg" class="img-wrapper"></a>';
                                                                                            echo '<div class="post-info"><a href="'.base_url('posting/CPosting/baca/'.$rows->post_name).'" class="title">'.$rows->post_title.'</a>';
                                                                                                echo '<ul class="info">';
                                                                                                    echo '<li><a href="#" class="link">By '.$rows->post_author.'</a></li>';
                                                                                                    echo '<li><a href="#" class="link">'.date('d M Y',strtotime($rows->post_modified)).'</a></li>';
                                                                                                    echo '<li><a href="#" class="link">'.$rows->post_comment_count.' comments</a></li>';
                                                                                                echo '</ul>';
                                                                                            echo '</div>';
                                                                                        echo '</div>';
                                                                                    }
                                                                                }
                                                                            }
                                                                        ?>  
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row"></div>
                    </div>
        <!-- FOOTER-->
                    <footer>
                        <div class="footer-main news">
                            <div class="container">
                                <div class="footer-top">
                                    <div class="logo-wrapper">
                                        <a href="index.html" class="logo"><img src="<?php echo base_url(); ?>swlabs.co/assets/images/logo/logo-news.png" alt="" /><span class="text">The Template for News - Magazine</span></a>
                                    </div>
                                </div>
                                <div class="footer-middle padding-bottom-60">
                                    <!-- <div class="row"> -->
                                        <div class="about-us-widget widget">
                                            <div class="title-widget">about us</div>
                                            <div class="content-widget">
                                                <p class="text">Please contact our web master if you found some bugs. cheers</p>
                                                <ul class="about-us-info-list" style="padding:0">
                                                    <li>
                                                        <div class="button-mail">
                                                            <i class="icons fa fa-envelope-o"></i>
                                                            <p class="link">hello@directnews.com</p>
                                                            <div class="form-mail hide">
                                                                <form action="<?php echo base_url(); ?>contact_us/CContact_us/Tambah" method="post">
                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                                                                            <p>Your Name</p>
                                                                        </div>
                                                                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
                                                                            <input type="text" name="nama" autofocus />
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                                                                            <p>Your Email</p>
                                                                        </div>
                                                                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
                                                                            <input type="text" name="email" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                                                                            <p>Your Messages</p>
                                                                        </div>
                                                                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
                                                                            <input type="text" name="content" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="pull-right" style="margin-top:2%;">
                                                                        <?php echo $captcha; ?>
                                                                    </div>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                                                        <button type="submit" class="btn btn-flat btn-primary" style="margin-left:45%;margin-top:2%;">Send</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li><i class="icons fa fa-phone"></i><p class="link">P: 3333 222 1111</p></li>
                                                    <li><i class="icons fa fa-map-marker"></i><p class="link">2050 Main St, P.O. Box 1234 Anytown, MA 12345</p></li>
                                                </ul>
                                            </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="footer-bottom">
                                    <div class="name-company">&copy; MAGANG AMIKOM</div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <div class="btn-wrapper back-to-top"><a href="" class="btn btn-transparent"><i class="fa fa-angle-double-up"></i></a></div>
                </div>
            </div>
        