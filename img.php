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
					<span>Photo Info</span>
					<h2>图片信息</h2>
				</div>
				<div class="row"><div class="col-md-12">
<div class="alert alert-default" role="alert">
    <strong>注意!</strong> 此图片来自网友上传，不代表本站立场，若有侵权，请联系管理员删除！
</div></div>
<div class="row"> 
<div class="col-md-6"><div class="resume-list b-box p-4 mb-4 ">
<img class="img-fluid" src="<?php echo $url; ?>" alt="<?php echo $title; ?>">
</div>    		</div>		
<div class="col-md-6">				
<div class="resume-list b-box p-4 mb-4 ">
													<div>
														<h5>图片信息</h5>
														<h6 class="badge badge-danger d-inline-block my-3">上传时间：<?php echo $date; ?></h6>
														 <h6 class="badge badge-danger d-inline-block my-3">分辨率：<?php echo $width; ?> x <?php echo $height; ?></h6>
														 <h6 class="badge badge-danger d-inline-block my-3">MIME类型：<?php echo $mime; ?></h6>
														 <h6 class="badge badge-danger d-inline-block my-3">扩展名：<?php echo $ext; ?></h6>
														 <h6 class="badge badge-danger d-inline-block my-3">文件大小：<?php echo $size; ?></h6>
														 <div id="links">
														 <div class="form-group">														
														 <label for="url" class="form-control-label">URL</label>
														 <div class="input-group mb-3">
														 <input type="text" class="form-control" id="url" value = "<?php echo $url; ?>" aria-label="url" aria-describedby="button-addon1">
														 <div class="input-group-append">
														 <button class="btn btn-outline-primary" type="button" id="button-addon1" onclick="copyurls()">复制</button>
														 </div>
														 </div>
														 </div>
														 <div class="form-group">														
														 <label for="html" class="form-control-label">HTML</label>
														 <div class="input-group mb-3">
														 <input type="text" class="form-control" id="html" value = "<img src = '<?php echo $url; ?>' />" aria-label="html" aria-describedby="button-addon2">
														 <div class="input-group-append">
														 <button class="btn btn-outline-primary" type="button" id="button-addon2" onclick="copyhtml()">复制</button>
														 </div>
														 </div>
														 </div>
														  <div class="form-group">														
														 <label for="markdown" class="form-control-label">MarkDown</label>
														 <div class="input-group mb-3">
														 <input type="text" class="form-control" id="markdown" value = "![](<?php echo $url; ?>)" aria-label="markdown" aria-describedby="button-addon3">
														 <div class="input-group-append">
														 <button class="btn btn-outline-primary" type="button" id="button-addon3" onclick="copymarkdown()">复制</button>
														 </div>
														 </div>
														 </div>
														  <div class="form-group">														
														 <label for="bbcode" class="form-control-label">BBcode</label>
														 <div class="input-group mb-3">
														 <input type="text" class="form-control" id="bbcode" value = "[img]<?php echo $url; ?>[/img]" aria-label="bbcode" aria-describedby="button-addon4">
														 <div class="input-group-append">
														 <button class="btn btn-outline-primary" type="button" id="button-addon4" onclick="copybbcode()">复制</button>
														 </div>
														 </div>
														 </div>

                        </div>	
													</div>
												</div>				
</div> 				
				
				
				
				</div>                           
<script type="text/javascript"> 
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