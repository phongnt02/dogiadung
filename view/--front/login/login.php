<?php 
    require '../../../layout/--front/header.php'; 
	require "handle.php"
?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="" method="post">
							<input type="text" name="username" placeholder="Name"/>
							<div class="has_error">
								<span> <?php echo (isset($error['username']))?$error['username']:''?> </span>
							</div>
							<input type="password" name="password" placeholder="Password"/>
							<div class="has_error">
								<span> <?php echo (isset($error['password']))?$error['password']:''?> </span>
							</div>
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" name="login" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="" method="post">
							<input type="text" name="username" placeholder="Name"/>
							<div class="has_error">
								<span> <?php echo (isset($err['username']))?$err['username']:''?> </span>
							</div>
							<input type="email" name="email_address" placeholder="Email Address"/>
							<div class="has_error">
								<span> <?php echo (isset($err['email_address']))?$err['email_address']:''?> </span>
							</div>
							<input type="password" name="password" placeholder="Password"/>
							<div class="has_error">
								<span> <?php echo (isset($err['password']))?$err['password']:''?> </span>
							</div>
							<button type="submit" name ="signup" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->


<?php
    require "../../../layout/--front/footer.php"
?>