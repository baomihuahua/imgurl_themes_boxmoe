    		<div class="page-wrapper section-dark">
		<section class="section section-home section-home-2 " id="home">
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
    		<div class="container vh-100">
    			<div class="row justify-content-center align-items-center section-home-in h-100vh">
    				<div class="col-md-12">
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <i class="fa fa-bell-o" ></i> <strong> 注意：</strong><?php echo $notice; ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>	
                <!-- 选择按钮 -->
                <!-- 上传地址 -->
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
                <!-- 选择按钮END -->
                <!-- 上传区域 -->
                <div class="layui-form-item"> 
                <div class="layui-upload-drag" id="multiple">
                    <p><i class="fa fa-cloud-upload"></i> <br>点击这里可选择多张图片，支持拖拽。</p>
                </div>
                </div>
				</div>
				</div>
                <!-- 上传区域END -->        
            <!-- 上传进度条 -->
			<div class="col-md-12">
            <div class = "progress" style = "display: none;">
                <div class="layui-progress layui-progress-big" lay-filter="uploadProgress" lay-showPercent="true">
                    <div class="layui-progress-bar" lay-percent="0%"></div>
                </div>
            </div>
			</div>	
            <!-- 上传进度条END -->
        
        <!-- 多图上传结果 -->
		<div class="card card-frame" id = "multiple-re">
        <div class="card-body">
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-URL-tab" data-toggle="tab" href="#nav-URL" role="tab" aria-controls="nav-URL" aria-selected="true">URL</a>
    <a class="nav-item nav-link" id="nav-HTML-tab" data-toggle="tab" href="#nav-HTML" role="tab" aria-controls="nav-HTML" aria-selected="false">HTML</a>
    <a class="nav-item nav-link" id="nav-Markdown-tab" data-toggle="tab" href="#nav-Markdown" role="tab" aria-controls="nav-Markdown" aria-selected="false">Markdown</a>
	<a class="nav-item nav-link" id="nav-BBCode-tab" data-toggle="tab" href="#nav-BBCode" role="tab" aria-controls="nav-BBCode" aria-selected="false">BBCode</a>
	<a class="nav-item nav-link" id="nav-DeleteLink-tab" data-toggle="tab" href="#nav-DeleteLink" role="tab" aria-controls="nav-DeleteLink" aria-selected="false">DeleteLink</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-URL" role="tabpanel" aria-labelledby="nav-URL-tab"><div id = "re-url"><pre></pre></div></div>
  <div class="tab-pane fade" id="nav-HTML" role="tabpanel" aria-labelledby="nav-HTML-tab"><div id = "re-html"><pre></pre></div></div>
  <div class="tab-pane fade" id="nav-Markdown" role="tabpanel" aria-labelledby="nav-Markdown-tab"><div id = "re-md"><pre></pre></div></div>
  <div class="tab-pane fade" id="nav-BBCode" role="tabpanel" aria-labelledby="nav-BBCode-tab"><div id = "re-bbc"><pre></pre></div></div>
  <div class="tab-pane fade" id="nav-DeleteLink" role="tabpanel" aria-labelledby="nav-DeleteLink-tab"><div id = "re-dlink"><pre></pre></div></div>
</div>
</div>
</div>
        <!-- 多图上传结果END -->
        <!-- 首页主要区域END -->
</div>
				</div>
				</div>
    	</section>	