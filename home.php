    		<div class="page-wrapper section-dark">
		<section class="section section-home section-home-2 " id="home">
    		<div id="scene">
    			<img data-depth="0.1" class="shape1" src="boxmoe_assets/images/decor1.png" alt="Scene Images1">
    			<img data-depth="0.1" class="shape4" src="boxmoe_assets/images/decor4.png" alt="Scene Images1">
    			<img data-depth="0.1" class="shape5" src="boxmoe_assets/images/shape5.svg" alt="Scene Images1">
    			<img data-depth="0.1" class="shape6" src="boxmoe_assets/images/shape6.svg" alt="Scene Images1">
    			<img data-depth="0.2" class="shape2" src="boxmoe_assets/images/decor2.png" alt="Scene Images2">
    			<img data-depth="0.4" class="shape3" src="boxmoe_assets/images/decor3.png" alt="Scene Images3">
    			<img data-depth="0.2" class="shape7" src="boxmoe_assets/images/shape7.svg" alt="Scene Images3">
    			<img data-depth="0.1" class="shape8" src="boxmoe_assets/images/shape8.svg" alt="Scene Images3">
    		</div>
			
    		<div class="container vh-100">			
    			<div class="row justify-content-center align-items-center section-home-in h-100vh">
    				<div class="col-md-12">
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <i class="fa fa-bell-o" ></i> <strong>注意：</strong><?php echo $notice; ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>				
                <!-- 上传区域 -->
				<div class="card card-frame">
                    <div class="card-body">
					 <div id = "storage"> 
                    <form action="">
                        <?php if(count($storage) == 0){ ?>
                            <span style = "color:#FF5722;font-weight: bold;">游客上传已关闭！</span>
                        <?php }else{ ?>
   
						<div class="custom-control custom-radio custom-control-inline custom-checkbox-success">
                        <label class="fcustom-control-label" for="inlineRadio1">存储方式</label>
                       </div>
                        <!-- 遍历存储引擎 -->
                        <?php
                            $i = 1;
                            // var_dump($storage);
                            // exit;
                            foreach($storage AS $value){
                            if($i == 1){
                                $checked = 'checked';
                            }
                            else{
                                $checked = null;
                            }
                            $i++;
                        ?>

						<div class="custom-control custom-radio custom-control-inline">
                        <input  class="custom-control-input" type="radio"  id="<?php echo $value->engine; ?>" name="storage" value="<?php echo $value->engine; ?>" <?php echo $checked;?> >
						<label class="custom-control-label" for="<?php echo $value->engine; ?>">[ <?php echo $value->name ?> ]</label>
						</div>
                        <?php }} ?>   					
                    </form> 
					</div>
                <div class="layui-form-item">
                <div class="layui-upload-drag" id="upimg">
                    <p><i class="fa fa-cloud-upload"></i> <br>
                    将图片拖拽到此处或者点击选择文件上传，支持Ctrl + V粘贴上传</p>
                </div>
                </div><script src = "/static/js/PasteUpload.js"></script>
				   <script>
	var load1 = document.querySelector("#upimg");

	// 实例化即可
	new ctrlVUtil({
	    uploadUrl: "/upload/parse",
	    targetElement: load1,
		isCompleteImg:false,
	    data:{
	        name:"imgurl",
	    },
	    success:function(data){
	        //转为对象
	        var res = data;
	        //上传成功
	        if(res.code == 200){
		        layer.closeAll('loading'); 
                //layer.closeAll('loading'); 
                $("#img-thumb a").attr('href','/img/' + res.imgid);
                $("#img-thumb img").attr('src',res.thumbnail_url);
                $("#url").val(res.url);
                $("#html").val("<img src = '" + res.url + "' />");
                $("#markdown").val("![](" + res.url + ")");
                $("#bbcode").val("[img]" + res.url + "[/img]");
                $("#dlink").val(res.delete);
                $("#imgshow").show();

                //对图片进行鉴黄识别
                $.get("/deal/identify/" + res.id,function(data,status){
                    var re = JSON.parse(data);
                    //状态码为400，说明该图片存在异常
                    if(re.code == 400){
                        layer.open({
                            title: '警告！'
                            ,content: '您的IP已被记录，请不要上传违规图片！'
                        }); 
                    }
                    else{
                        console.log(re.code);
                    }
                });
	        }
	        else{
		        layer.msg(res.msg);
		        layer.closeAll('loading');
	        }
	    },
		error: function(error){
			layer.closeAll('loading'); 
			layer.msg('上传失败！');
			layer.closeAll('loading');
		}
	});
</script>
				</div>
				</div>
                <!-- 上传区域END -->	
                <!-- 选择按钮 -->
                <!-- 上传地址 -->

                <!-- 选择按钮END -->	
            <!-- 上传进度条 -->
            <div class = "progress" style = "display: none;">
                <div class="layui-progress layui-progress-big" lay-filter="uploadProgress" lay-showPercent="true">
                    <div class="layui-progress-bar" lay-percent="0%"></div>
                </div>
            </div>
            <!-- 上传进度条END -->		
            <!-- 图片显示区域 -->
            <!-- 显示缩略图 -->
<div class="row justify-content-center" id = "imgshow">
<div class="col-md-12" style="text-align: center;">
<div class="card card-frame">
 <div class="card-body">			
<div id = "img-thumb"class="mb-4" ><a href="" target = "_blank"><img src="" alt="点此可查看详情"></a></div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">图片上传成功查看地址</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">图片上传地址</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" id = "links">
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
		<div class="col-md-12">
		<div class="form-group">														
		<label for="url" class="form-control-label">Delete Link（图片删除链接）</label>
		 <div class="input-group">
         <input type="text" class="form-control"  id="dlink" data-cip-id="dlink" aria-describedby="dlinks">
         <div class="input-group-append">
         <button class="btn btn-outline-secondary"  id="dlinks" href="javascript:;" onclick="copydlink()">复制</button>
         </div>
         </div>
		</div>
		</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
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
  </div>
</div>


    			</div>
				</div>
				</div>
    	</section>	
