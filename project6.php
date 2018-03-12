<?php
include ("projectlayout/header.php");
?>


<div class="container sections-wrapper">
    <div class="row">
        <div class="primary col-md-8 col-sm-12 col-xs-12">
            <section class="about section">
                <div class="section-inner">
                    <h2 class="heading">About Home</h2>
                    <div class="content">
                        <p>做这个网站的初衷是因为想用来做论文答辩，正好在第一家公司实习的时候学习了一些服务器的知识，于是萌生了做一个个人展示主页来答辩的想法。</p>

                        <p> 这个项目，最难的是搭建服务器的部分，作为一个新手，从域名到服务的环境让我一脸萌比，不过好在经过一次次的失败之后成功了，原来的服务器环境是运行在阿里云ecs+linux环境下的，因为大学生有优惠，一个g的大小只要十元每个月，非常划算，可是毕业之后也就是现在这个版本，同样的服务器配置，上升到了接近200每月，所以我把站点迁移到了一个相对经济的共享云主机上。</p>

                    </div><!--//content-->
                </div><!--//section-inner-->
            </section><!--//section-->

            <section class="latest section">
                <div class="section-inner">
                    <h2 class="heading">Projects Introduction</h2>
                    <div class="content">

                        <div class="item featured text-center">
                            <h3 class="title"><a href="http://www.ihuibo.cn" target="_blank">Mr Robot</a></h3>
                            <p class="summary">基于艺术框架的个人主页</p>
                            <div class="featured-image">
                                <a href="http://www.ihuibo.cn" target="_blank">
                                    <img class="img-responsive project-image" src="images/projects/project-featured.png" alt="project name" />
                                </a>
                                <div class="ribbon">
                                    <div class="text">New</div>
                                </div>
                            </div>

                            <div class="desc text-left">
                                <p>这个网站全程为我个人完成，从服务器到网页，网站还在完善当中，我本来预计能很快写完前台部分开始写后台，可是临近毕业事情很多，所以到现在也只是前台部分，后台只有登录功能，后期慢慢完善吧。</p>
                                <p>这个个人主页一开始使用laravel写的，关于在liunx下配置laravel环境当时简直让我费尽心血，因为这方面网上相关的教程比较少，最后反反复复的做快照回滚，最后终于成功在linux下搭建了laravel，但是毕业的时候，那个服务器停了，共享云主机没办法控制配置文件，无法搭建出laravel环境，只能在弄了一份没有任何框架的版本，本网站目前只是展示项目阶段，后期会完善后台部分。</p>
                            </div><!--//desc-->
                            <img class="img-responsive project-image" src="images/projects/project-featured.png" alt="project name" />

                            <a class="btn btn-cta-secondary" href="http://www.ihuibo.cn" target="_blank"><i class="fa fa-thumbs-o-up"></i> 前往项目</a>
                        </div><!--//item-->


                    </div><!--//content-->
                </div><!--//section-inner-->
            </section><!--//section-->

            <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>

            <section class="projects section">
                <div class="section-inner">
                    <h2 class="heading">Other Projects</h2>
                    <div class="content">
                        <div class="item">
                            <h3 class="title"><a href="project2.php">微推广平台</a></h3>
                            <p class="summary">本项目我负责维护和增加新功能，本项目同样分为前台后后台部分，前台用户根据不同的权限可以获得不同的发表广告数量，使用天数等，用户数据后台代理均可显示，功能很强大。</p>
                            <p><a class="more-link" href="#website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                        </div><!--//item-->
                        <div class="item">
                            <h3 class="title"><a href="#">企业网站开发</a></h3>
                            <p class="summary">基于laravel框架的优雅项目，旨在推广公司，内部条理清晰，使用的关键技术包括，ajax，php，mysql，阿里云oss，服务器运行环境为linux+apache+mysql。</p>
                            <p><a class="more-link" href="project.html" target="_blank"><i class="fa fa-external-link"></i> 了解更多 </a></p>
                        </div><!--//item-->
                        <div class="item">
                            <h3 class="title"><a href="project3.php">08cms下的旺屋</a> <span class="label label-theme">旺屋</span></h3>
                            <p class="summary">本网站我负责管理后台部分和增加新的页面，在这个过程当中熟悉了这个框架，这个框架当中有标记来控制网站识别页面，路由功能，结构比起微擎可以说清晰很多。</p>
                            <p><a class="more-link" href="#website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> View on GitHub</a></p>
                        </div><!--//item-->

                        <a class="btn btn-cta-secondary" href="#">More on CoderWall <i class="fa fa-chevron-right"></i></a>

                    </div><!--//content-->
                </div><!--//section-inner-->
            </section><!--//section-->

            <section class="experience section">
                <div class="section-inner">
                    <h2 class="heading">Work Experience</h2>
                    <div class="content">
                        <div class="item">
                            <h3 class="title">软件工程师 <span class="place"><a href="#">青岛一零二四科技有限公司</a></span> <span class="year">(2016 - 2017)</span></h3>
                            <p>在该公司我主要负责项目开发，架构设计，开发语言为php，开发环境多变根据客户服务器不同而不同，使用框架为thinkphp和laravel，利用svn+git来实现团队协作，熟悉lanmp以及wamp的环境部署。</p>
                        </div><!--//item-->
                        <div class="item">
                            <h3 class="title">软件工程师 - <span class="place"><a href="#">山东拉米网络科技有限公司</a></span> <span class="year">(2017 - 至今)</span></h3>
                            <p>在该公司我的工作以二次开发和服务器维护为主，二次开发的范围包括微信的微擎框架，08cms的门户框架，原生的PHP代码，laravel框架，二开的功能包括经纪人邀请码生成，身份验证，广告软件的用户分级，发布限制，以及嫁编辑器包括keditor等等
                                ，在这个过程当中我熟悉了很多的框架，扩展了视野，服务器维护主要负责公司服务器维护功能，公司服务器有两个，环境一个是windows server2008 一个是windowserver 2012，2018使用的环境和2012不同为iis+mysql+php5.6，我负责维护网站应用池、对网站环境配置、建立ftp连接、建立数据库、测试网站环境，2012使用的phpstuday，环境为apache+mysql+php7.0管理方便。本站点使用的是cents os，环境为自己搭建。
                            </p>
                        </div><!--//item-->


                    </div><!--//content-->
                </div><!--//section-inner-->
            </section><!--//section-->

        </div><!--//primary-->
        <div class="secondary col-md-4 col-sm-12 col-xs-12">
            <aside class="info aside section">
                <div class="section-inner">
                    <h2 class="heading sr-only">Basic Information</h2>
                    <div class="content">
                        <ul class="list-unstyled">
                            <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>Shandong Weifang</li>
                            <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><a href="#">huibo@huibo.cn</a></li>
                            <li><i class="fa fa-link"></i><span class="sr-only">Website:</span><a href="#">http://www.ihuibo.cn</a></li>
                        </ul>
                    </div><!--//content-->
                </div><!--//section-inner-->
            </aside><!--//aside-->

            <aside class="skills aside section">
                <div class="section-inner">
                    <h2 class="heading">Skills</h2>
                    <div class="content">
                        <!-- <p class="intro">
                             Intro about your skills goes here. Keep the list lean and only show your primary skillset. You can always provide a link to your Linkedin or Coderwall profile so people can get more info there.</p>
                         -->
                        <div class="skillset">

                            <div class="item">
                                <h3 class="level-title">Html<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="You can use the tooltip to add more info...">Expert</span></h3>
                                <div class="level-bar">
                                    <div class="level-bar-inner" data-level="60%">
                                    </div>
                                </div><!--//level-bar-->
                            </div><!--//item-->

                            <div class="item">
                                <h3 class="level-title">Js &amp; jQuery<span class="level-label">Expert</span></h3>
                                <div class="level-bar">
                                    <div class="level-bar-inner" data-level="70%">
                                    </div>
                                </div><!--//level-bar-->
                            </div><!--//item-->

                            <div class="item">
                                <h3 class="level-title">CSS<span class="level-label">Expert</span></h3>
                                <div class="level-bar">
                                    <div class="level-bar-inner" data-level="70%">
                                    </div>
                                </div><!--//level-bar-->
                            </div><!--//item-->

                            <div class="item">
                                <h3 class="level-title">Php<span class="level-label">Pro</span></h3>
                                <div class="level-bar">
                                    <div class="level-bar-inner" data-level="80%">
                                    </div>
                                </div><!--//level-bar-->
                            </div><!--//item-->

                            <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Coderwall</a></p>
                        </div>
                    </div><!--//content-->
                </div><!--//section-inner-->
            </aside><!--//section-->

            <!--   <aside class="testimonials aside section">
                   <div class="section-inner">
                       <h2 class="heading">Testimonials</h2>
                       <div class="content">
                           <div class="item">
                               <blockquote class="quote">
                                   <p><i class="fa fa-quote-left"></i>James is an excellent software engineer and he is passionate about what he does. You can totally count on him to deliver your projects!</p>
                               </blockquote>
                               <p class="source"><span class="name">Tim Adams</span><br /><span class="title">Curabitur commodo</span></p>
                           </div><!--//item-->

            <!--    <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Linkedin</a></p>

            </div><!--//content-->
            <!--          </div><!--//section-inner-->
            <!--      </aside><!--//section-->


            <aside class="education aside section">
                <div class="section-inner">
                    <h2 class="heading">Education</h2>
                    <div class="content">
                        <div class="item">
                            <h3 class="title"><i class="fa fa-graduation-cap"></i> 电子信息科学与技术</h3>
                            <h4 class="university">潍坊科技学院 <span class="year">(2013-2017)</span></h4>
                        </div><!--//item-->
                        <div class="item">
                            <h3 class="title"><i class="fa fa-graduation-cap"></i> 整站建设</h3>
                            <h4 class="university"> 兄弟连视屏 <span class="year">(2014-2016)</span></h4>
                        </div><!--//item-->
                    </div><!--//content-->
                </div><!--//section-inner-->
            </aside><!--//section-->




            <!--
                       <aside class="list music aside section">
                           <div class="section-inner">
                               <h2 class="heading">Favourite coding music</h2>
                               <div class="content">
                                   <ul class="list-unstyled">
                                       <li><i class="fa fa-headphones"></i> <a href="#">Etiam hendrerit urna nunc</a></li>
                                       <li><i class="fa fa-headphones"></i> <a href="#">Ut sollicitudin in mauris non auctor</a></li>
                                       <li><i class="fa fa-headphones"></i> <a href="#">Etiam hendrerit urna nunc</a></li>
                                       <li><i class="fa fa-headphones"></i> <a href="#">Duis et felis bibendum</a></li>
                                   </ul>
                               </div><!--//content-->
            <!--          </div><!--//section-inner-->
            <!--    </aside><!--//section-->





        </div><!--//secondary-->
    </div><!--//row-->
</div><!--//masonry-->

<!-- ******FOOTER****** -->
<?php
include ("projectlayout/footer.php");
?>
</body>
</html>

