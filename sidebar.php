<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="col-mb-12 col-4 kit-hidden-tb" id="secondary" role="complementary">
    <section class="widget">
        <div class="info-header" style="background-image:url(http://jashshor.fun/pictures/蓝鲸.jpg)">
            <span class="info-header-img">
                <a href="<?php $this->options->adminUrl(); ?>" target="_blank">
                    <img src="http://jashshor.fun/pictures/head.jpg">
                </a>
            </span>
        </div>
        <div class="follow-me">
            <a href="https://space.bilibili.com/381848081" target="_blank">Bilibili</a>
            <a href="https://github.com/Jashshor" target="_blank">Github</a>
            <a href="mailto:jashshor@qq.com" target="_blank">E-mail</a>
        </div>
    </section>
    <?php if(isset($this->options->plugins['activated']['Views'])): ?>
        <section class="widget">
            <h3 class="widget-title"><?php _e('随机文章'); ?></h3>
            <ul class="widget-list">
                <?php Views_Plugin::theMostViewed(); ?>
            </ul>
        </section>
    <?php endif; ?>
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('文章分类'); ?></h3>
        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
	</section>
    <?php endif; ?>
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('文章归档'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y年m月')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
	</section>
    <?php endif; ?>
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowFriends', $this->options->sidebarBlock)): ?>
    <?php if(isset($this->options->plugins['activated']['Links'])): ?>
        <section class="widget">
            <h3 class="widget-title"><?php _e('友情链接'); ?></h3>
            <ul class="widget-list">
                <?php Links_Plugin::output('<li><a href="{url}" title="{title}" target="_blank">{name}</a><span style="font-size: 70%"></span> </li>'); ?>
            </ul>
        </section>
    <?php endif;?>
    <?php endif;?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
	<section class="widget">
		<h3 class="widget-title"><?php _e('管理功能'); ?></h3>
        <ul class="widget-list">
            <?php if($this->user->hasLogin()): ?>
				<li class="last"><a href="<?php $this->options->adminUrl(); ?>" target='_blank'><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出账户'); ?></a></li>
            <?php else: ?>
               <li class="last"><a href="<?php $this->options->adminUrl('register.php'); ?>" target='_blank'><?php _e('注册账户'); ?></a></li>
                <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>" target='_blank'><?php _e('登录账户'); ?></a></li>
            <?php endif;?>
            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
        </ul>
	</section>
    </section>
    <?php endif; ?>
</div><!-- end #sidebar -->