<?php get_header(); ?>
<!-- start contents -->
            <main class="contents">
                <div class="contents-inner">
                    <div class="keyvisual">
                            <div class="keyvisual-image-1 js-keyvisual-1 is-active"></div>
                            <div class="keyvisual-image-2 js-keyvisual-2 is-next"></div>
                            <div class="keyvisual-image-3 js-keyvisual-3 is-prev"></div>

                        <p class="keyvisual-maintext">
                            人財 協働 貢献
                        </p>
                    </div>
                    <section class="company">
                        <h2>
                            <span class="company-headMain">Company</span>
                            <span class="company-headSub">会社について</span>
                        </h2>
                        <p class="company-text">川崎で創業してから130年を超えて経営を続けてきました。<br>時代に合わせて姿を変えながら、お客様のニーズに合わせて革新してきました。</p>
                        <div class="moreButton"><a href="https://itoya1889.com/company/">more</a></div>
                    </section>
                    <section class="service">
                        <h2>
                            <span class="service-headMain">Service</span>
                            <span class="service-headSub">サービス</span>
                        </h2>
                        <p class="service-text">伊藤屋はドトールコーヒーショップ、大戸屋ごはん処、CAFFÈ & BAR PRONTO等のフランチャイズ事業、「焼肉＆BAR 十炭」のオリジナルブランドの運営をしています。</p>
                        <ul>
                            <li class="service-list">
                                <a href="https://itoya1889.com/service-doutor/">
                                <img src="<?php bloginfo('template_directory'); ?>/images/service-1.jpg" alt="">
                                <p>ドトールコーヒーショップ</p>
                                </a>
                            </li>
                            <li class="service-list">
                                <a href="https://itoya1889.com/service-otoya/">
                                <img src="<?php bloginfo('template_directory'); ?>/images/service-2.jpg" alt="">
                                <p>大戸屋ごはん処</p>
                                </a>
                            </li>
                            <li class="service-list">
                                <a href="https://itoya1889.com/service-pronto/">
                                <img src="<?php bloginfo('template_directory'); ?>/images/service-3.jpg" alt="">
                                <p>CAFFÈ & BAR PRONTO</p>
                                </a>
                            </li>
                            <li class="service-list">
                                <a href="https://itoya1889.com/service-jittan/">
                                <img src="<?php bloginfo('template_directory'); ?>/images/service-4.jpg" alt="">
                                <p>焼肉&BAR 十炭</p>
                                </a>
                            </li>
                        </ul>
                    </section>
                    <section class="news">
                        <h2>
                            <span class="news-headMain">News</span>
                            <span class="news-headSub">お知らせ</span>
                        </h2>
                        <ul>
                            <?php query_posts('posts_per_page=5'); ?>
                            <?php if(have_posts()): while(have_posts()):the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                <time datatime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
                                <h3>
                                    <?php
                                        if(mb_strlen($post->post_title, 'UTF-8')>10){
                                            $title= mb_substr($post->post_title, 0, 10, 'UTF-8');
                                            echo $title.'...';
                                        }else{
                                            echo $post->post_title;
                                        }
                                    ?>
                                    <span class="arw"></span></h3>
                                </a>
                            </li>
                        <?php endwhile; endif; ?>
                        <?php wp_reset_query(); ?>
                        </ul>
                        <div class="moreButton"><a href="https://itoya1889.com/news/">more</a></div>
                    </section>
                    <section class="recruit">
                        <div class="recruit-bg"></div>
                            <h2>
                                <span class="recruit-headMain">Recruit</span>
                                <span class="recruit-headSub">採用情報</span>
                            </h2>
                            <p class="recruit-text">伊藤屋では、一緒に働く仲間を募集しています。</p>

                        <ul>
                            <li>
                                <a href="https://itoya1889.com/recruit-message/">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/recruit-1.svg" alt=""><span>採用メッセージ</span><span class="arw arw-bottom"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://itoya1889.com/recruit-itoya12/">
                                <img src="<?php bloginfo('template_directory'); ?>/images/recruit-2.svg" alt=""><span>伊藤屋を知る12のコト</span><span class="arw arw-bottom"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://itoya1889.com/recruit-interview/">
                                <img src="<?php bloginfo('template_directory'); ?>/images/recruit-3.svg" alt=""><span>社員インタビュー</span><span class="arw arw-bottom"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://itoya1889.com/recruit-requirement/">
                                <img src="<?php bloginfo('template_directory'); ?>/images/recruit-4.svg" alt=""><span>募集要項</span><span class="arw arw-bottom"></span>
                                </a>
                            </li>
                        </ul>
                    </section>
                </div>
            </main>
            <!-- end contents -->
<?php get_footer(); ?>
