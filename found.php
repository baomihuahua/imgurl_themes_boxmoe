<?php
    // 很无奈的将逻辑写到这里
    // 写一个获取缩略图的函数
    $this->load->helper('basic');
    //载入常用类
    //$this->load->library('basic');
?>
<div class="page-wrapper">
<section class="section">
<div id="scene">
    			<img data-depth="0.1" class="shape1" src="/boxmoe_assets/images/decor1.png" alt="Scene Images1">
    			<img data-depth="0.1" class="shape4" src="/boxmoe_assets/images/decor4.png" alt="Scene Images1">
    			<img data-depth="0.1" class="shape5" src="/boxmoe_assets/images/shape5.svg" alt="Scene Images1">
    			<img data-depth="0.1" class="shape6" src="/boxmoe_assets/images/shape6.svg" alt="Scene Images1">
    			<img data-depth="0.2" class="shape2" src="/boxmoe_assets/images/decor2.png" alt="Scene Images2">
    			<img data-depth="0.4" class="shape3" src="/boxmoe_assets/images/decor3.png" alt="Scene Images3">
    			<img data-depth="0.2" class="shape7" src="/boxmoe_assets/images/shape7.svg" alt="Scene Images3">
    			<img data-depth="0.1" class="shape8" src="/boxmoe_assets/images/shape8.svg" alt="Scene Images3">
    		</div>
    		<div class="container">
				<div class="section-head">
					<span>explore</span>
					<h2>探索发现</h2>
				</div>
				<div class="row"><div class="col-md-12">
<div class="alert alert-default" role="alert">
    <strong>注意!</strong> 此图片来自网友上传，不代表本站立场，若有侵权，请联系管理员删除！
</div></div>
        <?php 
                foreach ($imgs as $img)
                {
                    //var_dump($img);
                    //一些简单的逻辑处理 
                    //获取缩略图地址
                    $thumbpath = thumbnail($img);
                    //判断图像类型
                    switch ($img['storage']) {
                        case 'localhost':
                            //缩略图地址
                            $thumburl = $domain.$thumbpath;
                            //源图像地址
                            $img_url = $domain.$img['path'];
                            break;
                        case 'backblaze':
                            //缩略图地址
                            $thumburl = $b2_domain.$img['thumb_path'];
                            //源图像地址
                            $img_url = $b2_domain.$img['path'];
                            break;
                        case 'cos':
                            //缩略图地址
                            $thumburl = $cos_domain.$img['thumb_path'];
                            //源图像地址
                            $img_url = $cos_domain.$img['path'];
                            break;
                        case 'ftp':
                            //缩略图地址
                            $thumburl = $ftp_domain.$img['thumb_path'];
                            //源图像地址
                            $img_url = $ftp_domain.$img['path'];
                            break;
                        case 'qiniu':
                            //缩略图地址
                            $thumburl = $qiniu_domain.$img['thumb_path'];
                            //源图像地址
                            $img_url = $qiniu_domain.$img['path'];
                            break;
                        default:
                            # code...
                            break;
                    }
                    
            ?>
			<div class="col-sm-6 col-lg-3 boxmoepiclist" id = "img<?php echo $img['id']; ?>">
						<div class="blog-list d-block mb-5">
							<div class="blog-list--img">
								<img src="<?php echo $thumburl; ?>" alt="<?php echo $img['client_name']; ?>" class="img-fluid">
								<div class="blog-list--details d-flex justify-content-center align-items-center">
									<div class="blog-list--details-in">										
										<span class="blog-cat"><a href="<?php echo $img_url; ?>"  data-fancybox="images" class="fancybox" data-fancybox-group="button">点击查看</a></span>
									</div>
								</div>
							</div>
							<div class="blog-list--desc p-4" id="imgcon<?php echo $img['id']; ?>" style="text-align: center;">
								<span class="blog-cat badge badge-primary"> <a href="javascript:;" data-toggle="modal" data-target="#imglink" title="图片链接"  data-toggle="tooltip" data-placement="top" onclick = "showlinks('<?php echo $img_url; ?>','<?php echo $thumburl; ?>')"><i class="fa fa-link"></i></a></span>
								<span class="blog-cat badge badge-success"><a href="/img/<?php echo $img['imgid']; ?>" title="图片详情"  data-toggle="tooltip" data-placement="top" target = "_blank" ><i class="fa fa-globe"></i></a></span>
							    <!-- 用户已登录才显示删除按钮 -->
                        <?php
                            if($is_login){
                        ?><span class="blog-cat badge badge-danger"><a  title = "删除这张图片"  data-toggle="tooltip" data-placement="top" onclick = "del_id(<?php echo $img['id']; ?>)"> <i class="fa fa-trash-o"></i></a> </span>
                        <?php } ?>
                        <!-- 删除按钮end -->
							</div>
							</div>
					</div>

            <?php
            } 
        ?>
    </div>
        
    <!-- 分页按钮 -->
    <div class="container">
					<nav class="mt-5 d-flex justify-content-center" id = "paging">
						<?php echo $page; ?>
					</nav>
				</div>
    <!-- 分页按钮 -->

    
<!-- 这个div是container结束那部分 -->
<div class="modal fade" id="imglink" tabindex="-1" role="dialog" aria-labelledby="imglinks" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imglinks">图片上传地址</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" id = "links"><div class="col-md-12">
        <div id = "img-thumb"><a href="" target = "_blank"><center><img src="" alt=""></center></a></div>
    </div>
		<div class="col-md-12"> 
		<div class="form-group">														
		<label for="url" class="form-control-label">URL</label>
		 <div class="input-group">		
         <input type="text" class="form-control"  id="url" data-cip-id="url" aria-describedby="urls">
         <div class="input-group-append">
         <button class="btn btn-outline-secondary" type="button" id="urls" onclick="copyurls()">复制</button>
         </div>
         </div>
		 </div>
		</div>
		<div class="col-md-12">
		<div class="form-group">														
		<label for="url" class="form-control-label">HTML</label>
		 <div class="input-group">
         <input type="text" class="form-control"  id="html" data-cip-id="html" aria-describedby="htmls">
         <div class="input-group-append">
         <button class="btn btn-outline-secondary"  id="htmls" href="javascript:;" onclick="copyhtml()">复制</button>
         </div>
         </div>
		</div>
		</div>
		<div class="col-md-12">
		<div class="form-group">														
		<label for="url" class="form-control-label">MarkDown</label>
		 <div class="input-group">
         <input type="text" class="form-control"  id="markdown" data-cip-id="markdown" aria-describedby="markdowns">
         <div class="input-group-append">
         <button class="btn btn-outline-secondary"  id="markdowns" href="javascript:;" onclick="copymarkdown()">复制</button>
         </div>
         </div>
		</div>
		</div>
		<div class="col-md-12">
		<div class="form-group">														
		<label for="url" class="form-control-label">BBcode</label>
		 <div class="input-group">
         <input type="text" class="form-control"  id="bbcode" data-cip-id="bbcode" aria-describedby="bbcodes">
         <div class="input-group-append">
         <button class="btn btn-outline-secondary"  id="bbcodes" href="javascript:;" onclick="copybbcode()">复制</button>
         </div>
         </div>
		</div>
		</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>
	<script type="text/javascript"> 
	function showlinks(url,thumburl){
    $("#img-thumb a").attr('href', thumburl);
    $("#img-thumb img").attr('src',thumburl);
    $("#url").val(url);
    $("#html").val("<img src = '" + url + "' />");
    $("#markdown").val("![](" + url + ")");
    $("#bbcode").val("[img]" + url + "[/img]");
 
}

    function copyurls() {
      var e = document.getElementById("url");
      e.select();
      document.execCommand("copy"); 
      alert("恭喜！复制成功【URL】，现在可以去粘贴了哦！");
    }
	    function copyhtml() {
      var e = document.getElementById("html");
      e.select();
      document.execCommand("copy"); 
      alert("恭喜！复制成功【html代码】，现在可以去粘贴了哦！");
    }
	    function copymarkdown() {
      var e = document.getElementById("markdown");
      e.select();
      document.execCommand("copy"); 
      alert("恭喜！复制成功【markdown代码】，现在可以去粘贴了哦！");
    }
	    function copybbcode() {
      var e = document.getElementById("bbcode");
      e.select();
      document.execCommand("copy"); 
      alert("恭喜！复制成功【bbcode代码】，现在可以去粘贴了哦！");
    }
	    function copydlink() {
      var e = document.getElementById("dlink");
      e.select();
      document.execCommand("copy"); 
      alert("恭喜！复制成功【dlink的URL】，现在可以去粘贴了哦！");
    }
	
</script> 

</div>
</section>
