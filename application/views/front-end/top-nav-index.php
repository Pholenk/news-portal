        <header>
            <div class="header-main news">
                <div class="header-middle fixed-header">
                    <div class="container">
                        <div class="header-middle-wrapper">
                            <div class="wrapper-logo-menu">
                                <div class="hamburger-menu">
                                    <i class="icons fa fa-bars"></i>
                                </div>
                                <div class="logo-wrapper" style="padding-left:20px;padding-right:20px;">
                                    <a href="<?php echo base_url();?>" class="logo"><img src="<?php echo base_url(); ?>swlabs.co/assets/images/logo/logo-news.png" alt="" class="img-responsive" /></a>
                                </div>
                            </div>
                            <ul class="sub-navigation list-inline">
                                <li class="dropdown"><a href="#" class="link"><span class="title">latest</span><span class="description">Recent Article</span></a>
                                    <ul class="dropdown-menu dropdown-menu-1">
                                    <?php $i=0;foreach ($this->MPosting->get() as $rec) 
                                    {?>
                                        <li><a href="index.html" class="link-page"><?php echo $rec->post_title;?></a></li>
                                        <?php $i++;if($i==5){break;}
                                    }?>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="link"><span class="title">category</span><span class="description">News subjects</span></a>
                                    <ul class="dropdown-menu dropdown-menu-1">
                                    <?php foreach ($this->MCategory->get() as $cat){?>
                                        <li><a href="index.html" class="link-page"><?php echo $cat->category_name; ?></a></li>
                                    <?php } ?>
                                    </ul>
                                </li>
                                <?php
                                if(empty($this->session->userdata('username')))
                                {?>
                                <li class="dropdown">
                                    <a href="<?php echo base_url();?>pengguna/CPengguna" class="link">
                                        <span class="title">Log In</span>
                                        <span class="description">Take more featured</span>
                                    </a>
                                </li>
                            <?php }
                                else
                                {?>
                                    <li class="dropdown">
                                        <a href="<?php echo base_url();?>auth/CAuth/logout" class="link">
                                            <span class="title">Log Out</span>
                                            <span class="description">Are you sure?</span>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                            <div class="more-infomation">
                                <div class="button-search" style="padding-left:4px;"><i class="icons fa fa-search" style="font-size:28px;"></i>
                                    <div class="nav-search hide">
                                        <form action="<?php echo base_url();?>search/CSearch/Cari" method="post">
                                            <input type="text" placeholder="Search" class="searchbox" name="data" /><button type="submit" class="searchbutton fa fa-search"></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mega-menu-mobile">
                        <div class="more-infomation-mobile">
                            <div class="nav-search">
                                <form action="<?php echo base_url();?>search/CSearch/Cari" method="post"><input type="text" placeholder="Search" class="searchbox" /><button type="submit" class="searchbutton fa fa-search"></button></form>
                            </div>
                        </div>
                        <ul class="nav navbar-nav menu-mobile">
                            <li class="list-item"><a href="index.html" class="link"> Latest</a>
                                <ul class="nav sub-menu-mobile open">
                                    <li>
                                        <a href="index.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Latest 02</span></a>
                                    </li>
                                    <li>
                                        <a href="index.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Latest 03</span></a>
                                    </li>
                                    <li>
                                        <a href="index.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Latest 04</span></a><span class="icons-dropdown-wrapper"><i class="icons-dropdown fa fa-plus"></i></span>
                                        <ul class="nav sub-menu-mobile">
                                            <li>
                                                <a href="index.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Latest 05</span></a>
                                            </li>
                                            <li>
                                                <a href="index.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Latest 06</span></a>
                                            </li>
                                            <li>
                                                <a href="index.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Latest 07</span></a>
                                            </li>
                                            <li>
                                                <a href="index.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Latest 11</span></a>
                                                <span class="icons-dropdown-wrapper"><i class="icons-dropdown fa fa-plus"></i></span>
                                                <ul class="nav sub-menu-mobile">
                                                    <li>
                                                        <a href="index.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Latest 08</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="index.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Latest 09</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="index.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Latest 10</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item"><a href="index.html" class="link">Popular</a>
                                <ul class="nav sub-menu-mobile open">
                                    <li>
                                        <a href="home-sport.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Popular 1</span></a>
                                    </li>
                                    <li>
                                        <a href="home-tech.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Popular 2</span></a>
                                    </li>
                                    <li>
                                        <a href="home-travel.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Popular 3</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item"><a href="index.html" class="link">Pages</a>
                                <ul class="nav sub-menu-mobile open">
                                    <li>
                                        <a href="index.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Home Pages</span></a><span class="icons-dropdown-wrapper"><i class="icons-dropdown fa fa-plus"></i></span>
                                        <ul class="nav sub-menu-mobile">
                                            <li>
                                                <a href="index.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Home Default</span></a>
                                            </li>
                                            <li>
                                                <a href="home-dark.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Home Dark</span></a>
                                            </li>
                                            <li>
                                                <a href="home-travel.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Home Travel</span></a>
                                            </li>
                                            <li>
                                                <a href="home-sport.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Home Sport</span></a>
                                            </li>
                                            <li>
                                                <a href="home-business.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Home business</span></a>
                                            </li>
                                            <li>
                                                <a href="home-fashion.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Home fashion</span></a>
                                            </li>
                                            <li>
                                                <a href="home-tech.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Home tech</span></a>
                                            </li>
                                            <li>
                                                <a href="home-game.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Home game</span></a>
                                            </li>
                                            <li>
                                                <a href="home-lifestyle.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Home lifestyle</span></a>
                                            </li>
                                            <li>
                                                <a href="home-politics.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Home politics</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="index.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Other Pages</span></a><span class="icons-dropdown-wrapper"><i class="icons-dropdown fa fa-plus"></i></span>
                                        <ul class="nav sub-menu-mobile">
                                            <li>
                                                <a href="about-us.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">About Us</span></a>
                                            </li>
                                            <li>
                                                <a href="category-1-col.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Category 1 Column</span></a>
                                            </li>
                                            <li>
                                                <a href="category-2-col.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Category 2 Column</span></a>
                                            </li>
                                            <li>
                                                <a href="blog-list.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Blog List</span></a>
                                            </li>
                                            <li>
                                                <a href="author-list.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Author List</span></a>
                                            </li>
                                            <li>
                                                <a href="faq.html" class="link-page"><i class="icons fa fa-angle-double-right"></i><span class="text">Faq</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </header>