<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
        </div><!-- end .row -->
    </div>
</div><!-- end #body -->
<div class="return-top">
	<a href="javascript:;" class="triangle" title="回顶部">
		<i class="triangle-up"></i>
	</a>
</div>
<footer id="footer" role="contentinfo">
	&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> | Powered by <a href="https://github.com/typecho/typecho">Typecho</a> | Theme <a href="https://github.com/WarnerYang/typecho-theme-Minimalism">Minimalism</a>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
<script src="//cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js"></script>
<script src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
<script src="//cdn.bootcss.com/instantclick/3.0.1/instantclick.min.js" data-no-instant></script> 
<script data-no-instant>InstantClick.init();</script>

<link rel="stylesheet" href="/usr/plugins/player/APlayer.min.css">
<script src="/usr/plugins/player/APlayer.min.js"></script>
<div class="aplayer"
    data-id="2907327648"
    data-fixed="true"
    data-server="netease"
    data-volume="0.4"
    data-type="playlist">
</div>
<script src="/usr/plugins/player/Meting.min.js"></script>

</body>
</html>
