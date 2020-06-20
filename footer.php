<?php
    //获取版本号
    $ver_file = FCPATH.'data/version.txt';
    if(is_file($ver_file)){
        @$version = file_get_contents($ver_file);
    }
?>
		<footer class="footer section">
			<div class="container">
				<p class="copyright text-center mb-0"><?php echo $footer; ?>  | Theme by<a href="https://www.boxmoe.com" target = "_blank" title = "盒子萌"> Boxmoe</a><!-- Copyright © 2017-2019 Powered by <a href="https://imgurl.org/" target = "_blank" title = "ImgURL是一个开源免费的图床程序">ImgURL</a> | Author <a href="https://www.xiaoz.me/" target = "_blank" title = "小z博客">xiaoz.me</a> | Theme by<a href="https://www.xiaoz.me/" target = "_blank" title = "小z博客">boxmoe</a>   --></p>
			</div>
		</footer>
	</div>	
	<script src="/boxmoe_assets/js/parallax.min.js"></script>
	<script src="/boxmoe_assets/js/boxmoe.js"></script>
	<script src="/static/layui/layui.js"></script>
	<script src="/static/embed.js"></script>
</body>
</html> 