		
<div class="wrapper">
		<!--Breadcrumb Tow Start-->
		<div class="breadcrumb-tow mb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-title">
                            <h1>Login - Register</h1>
                        </div>
                        <div class="breadcrumb-content breadcrumb-content-tow">
                            <ul>
                                <li><a href="<?=base_url()?>">Home</a></li>
                                <li class="active">Login-Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--Breadcrumb Tow End-->
		<!--Login Register Area Strat-->
		<div class="login-register-area mb-80">
		    <div class="container">
		        <div class="row">
                    <!--Login Form Start-->
		            <div class="col-md-6 col-sm-6">
		                <div class="customer-login-register">
		                    <div class="form-login-title">
		                        <h2>Login</h2>
		                    </div>
		                    <div class="login-form">
		                        <form action="#">
		                            <div class="form-fild">
		                                <p><label>Username or email address <span class="required">*</span></label></p>
		                                <input name="username" value="" type="text">
		                            </div>
		                            <div class="form-fild">
		                                <p><label>Password <span class="required">*</span></label></p>
		                                <input name="password" value="" type="password">
		                            </div>
		                            <div class="login-submit">
		                                <button type="submit" class="form-button">Login</button>
		                                <label>
		                                    <input class="checkbox" name="rememberme" value="" type="checkbox">
		                                    <span>Remember me</span>
		                                </label>
		                            </div>
		                            <div class="lost-password">
		                                <a href="<?=base_url('lost-password')?>">Lost your password?</a>
		                            </div>
		                        </form>
		                    </div>
		                </div>
		            </div>
		            <!--Login Form End-->
		            <!--Register Form Start-->
		            <div class="col-md-6 col-sm-6">
		                <div class="customer-login-register register-pt-0">
		                    <div class="form-register-title">
		                        <h2>Register</h2>
		                    </div>
		                    <div class="register-form">
		                        <form action="#">
		                            <div class="form-fild">
		                                <p><label>Username or email address <span class="required">*</span></label></p>
		                                <input name="username" value="" type="text">
		                            </div>
		                            <div class="form-fild">
		                                <p><label>Password <span class="required">*</span></label></p>
		                                <input name="password" value="" type="password">
		                            </div>
		                            <div class="register-submit">
		                                <button type="submit" class="form-button">Register</button>
		                            </div>
		                        </form>
		                    </div>
		                </div>
		            </div>
		            <!--Register Form End-->
		        </div> 
		    </div>
		</div>
		<!--Login Register Area End-->
</div>
