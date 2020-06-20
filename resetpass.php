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
					<span>Resetpass</span>
					<h2>找回密码</h2>
				</div>
<div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card  border-0 mb-0">
            <div class="card-header bg-transparent">
              <H3 class="text-muted text-center mt-2 "><small>找回密码</small></H3>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
			<div class="text-center text-muted mb-4">
                <small>当前用户名为: <code style = "color:#FF5722;"><?php echo $username; ?></code>，请设置新密码。</small>
              </div>
              <form role="form">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-key"></i></span>
                    </div>
                    <input class="form-control" placeholder="设置新密码"  id = "password1" type="password" name="title" required lay-verify="required" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-key"></i></span>
                    </div>
                    <input class="form-control" id = "password2" type="password" name="password" required lay-verify="required" placeholder="确认新密码">
                  </div>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4 layui-btn" lay-submit lay-filter="formDemo" onclick = "resetpass()">登录</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
</section>	

