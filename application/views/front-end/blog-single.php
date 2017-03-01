                <div class="main-content">
                    <!-- Blog detail-->
                    <div class="breadcrumb">
                        <div class="container">
                            <div class="breadcrumb-wrapper">
                                <div class="breadcrumb-text">Travel Blog</div>
                                <ol class="breadcrumb-content">
                                    <li class="breadcrumb-list"><a href="index.html" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-list"><a href="index.html" class="breadcrumb-link">Travel</a></li>
                                    <li class="breadcrumb-list"><a href="index.html" class="breadcrumb-link">Travel Blog</a></li>
                                    <li class="breadcrumb-list active"> <span>Blog Single</span></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <?php foreach($news as $rows):?>
                    <div class="main-blog-detail-wrapper padding-top-60 padding-bottom-60">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-xs-12">
                                    <div class="blog-detail-wrapper">
                                        <div class="news-content"><a class="title-detail"><?php echo $rows->post_title; ?></a>
                                            <div class="list-info clearfix">
                                                <ul class="info">
                                                    <li><a href="#" class="link">By <?php echo $rows->post_author; ?></a></li>
                                                    <li><a href="#" class="link"><?php echo date('d-M-Y',strtotime($rows->post_modified)); ?></a></li>
                                                    <li><a href="#" class="link"><?php echo $rows->post_comment_count;?> comments</a></li>
                                                </ul>
                                                <ul class="view list-unstyled">
                                                    <li>
                                                        <a href="#" class="link"> <i class="fa fa-eye"></i><?php echo $rows->post_view;?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a class="news-image"><img src="<?php echo base_url(); ?>gambar/<?php echo $rows->post_name?>.jpg" alt="" class="responsive"></a>
                                            <div class="post-single-content">
                                                <?php echo $rows->post_content; ?>
                                            </div>
                                            <div id="comments" class="comments clearfix">
                                                <h3 class="comment-respond-title"><span><?php echo $rows->post_comment_count; ?></span>&nbsp;Comments</h3>
                                            <?php foreach ($this->MKomentar->get_testimony($rows->post_id) as $key):
                                                if($key->feed_parent == $rows->post_id)
                                                {?>
                                                    <!-- Comments List ============================================= //-->
                                                    <ol id="commentlist" class="commentlist list-unstyled clearfixtravel">
                                                        <li id="li-comment-1" class="li-comment">
                                                            <div id="comment-1" class="comment-wrap clearfix">
                                                                <div class="comment-meta">
                                                                    <div class="comment-author"><span class="comment-avatar clearfix"><img alt="" src="<?php echo base_url(); ?>swlabs.co/assets/images/people/comment-1.png" class="avatar img-responsive"></span></div>
                                                                </div>
                                                                <div class="comment-content clearfix">
                                                                    <div class="comment-author"><a href="#" class="url"><?php echo $key->feed_author; ?></a>
                                                                        <ul class="info">
                                                                            <li><a href="#" class="link"><?php echo date('M d, Y',strtotime($key->feed_date));?></a></li>
                                                                        </ul>
                                                                        <title="reply" class="reply" id="button-mail"><i class="fa fa-reply"></i>Reply </a></title="reply">
                                                                    </div>
                                                                    <div class="description"><?php echo $key->feed_content; ?></div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <div class="contact-form-wrapper clearfix hide" style="padding-top:3%;">
                                                                    <div class="title-topic">Leave a comment</div>
                                                                    <form action="<?php echo base_url('komentar/CKomentar/Komentar/'.$key->feed_id.'/'.$rows->post_name);?>" method="post" class="contact-form">
                                                                        <div class="form-group width-100per"><textarea id="textarea" rows="3" placeholder="Comment" name="comments" class="form-control form-textarea"></textarea></div>
                                                                        <div class="btn-wrapper"><button type="submit" class="btn btn-style-1">Submit</button></div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <?php foreach($this->MKomentar->get_komentar($key->feed_id) as $key2):
                                                                if($key2->feed_parent == $key->feed_id)
                                                                {?>
                                                                    <ul class="children list-unstyled">
                                                                        <li id="li-comment-3" class="li-comment">
                                                                            <div id="comment-3" class="comment-wrap clearfix">
                                                                                <div class="comment-meta">
                                                                                    <div class="comment-author"><span class="comment-avatar clearfix"><img alt="" src="<?php echo base_url(); ?>swlabs.co/assets/images/people/comment-2.png" class="avatar img-responsive"></span></div>
                                                                                </div>
                                                                                <div class="comment-content clearfix">
                                                                                    <div class="comment-author"><a href="#" class="url"><?php echo $key2->feed_author; ?></a>
                                                                                        <ul class="info">
                                                                                            <li><a href="#" class="link"><?php echo date('M d, Y',strtotime($key2->feed_date));?></a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="description"><?php echo $key2->feed_content; ?></div>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <?php
                                                                }
                                                            endforeach;
                                                            ?>
                                                    </ol>
                                                    <?php
                                                }
                                            endforeach;
                                        ?>
                                                <?php endforeach; ?>
                                                <div class="contact-form-wrapper hide clearfix" id="form-comment">
                                                    <div class="title-topic">Leave a testimony</div>
                                                    <form action="<?php echo base_url('komentar/CKomentar/Testimony/'.$rows->post_id.'/'.$rows->post_name);?>" method="post" class="contact-form">
                                                        <div class="form-group width-100per"><textarea id="textarea" rows="3" placeholder="Testimony" name="testimony" class="form-control form-textarea"></textarea></div>
                                                        <div class="btn-wrapper"><button type="submit" class="btn btn-style-1">Submit</button></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12 sidebar">
                                    <div class="sidebar-wrapper">
                                        <div class="col-2">
                                            <div class="recent-post-widget widget">
                                                <div class="title-topic-2">Recent Posts</div>
                                                <?php $i=0;foreach ($this->MPosting->get() as $rec) {?>
                                                    <div class="layout-list-news">
                                                        <div class="single-recent-post-widget">
                                                            <a href="#" class="thumb"><img src="<?php echo base_url('gambar/'.$rec->post_name.'_thumb.jpg'); ?>" alt="" class="img-wrapper"></a>
                                                            <div class="post-info"><a href="#" class="title"><?php echo $rec->post_title;?></a>
                                                                <ul class="info">
                                                                    <li><a href="#" class="link">By <?php echo $rec->post_author;?></a></li>
                                                                    <li><a href="#" class="link"><?php echo date('M d, Y', strtotime($rec->post_modified)); ?></a></li>
                                                                    <li><a href="#" class="link"><?php echo $rec->post_comment_count?> comments</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php $i++;if($i==5){break;}
                                                    } ?>
                                            </div>
                                            <div class="category-widget widget">
                                                <div class="title-topic-2">Category</div>
                                                <ul class="category-list list-unstyled">
                                                <?php foreach ($this->MCategory->get() as $cat){?>
                                                    <li class="category wow fadeInUp"><a href="#" class="category-link"><?php echo $cat->category_name; ?><i class="fa fa-angle-double-right"></i></a></li>
                                                <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-box post-right"><a href="javascript:void(0)" class="close">×</a>
                            <div class="single-recent-post-widget">
                                <a href="#" class="thumb"><img src="<?php echo base_url(); ?>swlabs.co/assets/images/news/small-news-20.jpg" alt="" class="img-wrapper"></a>
                                <div class="post-info"><a href="#" class="title">Nevada G.O.P. Caucuses Are Test of Strength For Trump</a>
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