<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en" class="ie6 ielt7 ielt8 ielt9"><![endif]--><!--[if IE 7 ]><html lang="en" class="ie7 ielt8 ielt9"><![endif]--><!--[if IE 8 ]><html lang="en" class="ie8 ielt9"><![endif]--><!--[if IE 9 ]><html lang="en" class="ie9"> <![endif]--><!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en"><!--<![endif]--> 
	<head>
		<meta charset="utf-8">
		<title>管理员</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="__PUBLIC__/front/css/bootstrap.min.css" rel="stylesheet">
		<link href="__PUBLIC__/front/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="__PUBLIC__/front/css/site.css" rel="stylesheet">
		<link href="__PUBLIC__/js/jquery.min.js" rel="stylesheet">
		<link href="__PUBLIC__/js/bootstrap.min.js" rel="stylesheet">
		
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="navbar">
				<div class="navbar-inner">
				<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#">Note</a>
						<div class="nav-collapse">
							<ul class="nav">
								<li class="active">
									<a href="">主页</a>
								</li>
								<!---<li>
									<a href="__APP__/Settings/index.html">账户设置</a>
								</li>--->
								<!--<li>
									<a href="__APP__/Help/index.html">帮助</a>
								</li>-->
								<!--<li class="dropdown">
									<a href="help.php" class="dropdown-toggle" data-toggle="dropdown">Tours <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li>
											<a href="help.php">Introduction Tour</a>
										</li>
										<li>
											<a href="help.php">Project Organisation</a>
										</li>
										<li>
											<a href="help.php">Task Assignment</a>
										</li>
										<li>
											<a href="help.php">Access Permissions</a>
										</li>
										<li class="divider">
										</li>
										<li class="nav-header">
											Files
										</li>
										<li>
											<a href="help.php">How to upload multiple files</a>
										</li>
										<li>
											<a href="help.php">Using file version</a>
										</li>
									</ul>
								</li>---->
							</ul>
							<!--<form class="navbar-search pull-left" action="">
								<input type="text" class="search-query span2" placeholder="Search" />
							</form>-->
							<!--<ul class="nav pull-right">
								<li>
									<a href="__APP__/Profile/index.html">@username</a>
								</li>
								<li>
									<a href="__APP__/Profile/index.html">Logout</a>
								</li>
							</ul>-->
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span3">
					<div class="well" style="padding: 8px 0;">
						<ul class="nav nav-list">
							<li class="nav-header">
								社团管理系统
							</li>
							<li class="active">
								<a href="__APP__/Message/index.html"><i class="icon-white icon-home"></i>编辑社团信息</a>
							</li>
							<li>
								<a href="__APP__/Members/index.html"><i class="icon-folder-open"></i>社团成员管理</a>
							</li>
						<li>
								<a href="__APP__/Change/index.html"><i class="icon-folder-open"></i>成员换届</a>
							</li>
							<li>
								<a href="__APP__/Tasks/index.html"><i class="icon-check"></i>社团活动添加</a>
							</li>
							<li>
								<a href="__APP__/Check/index.html"><i class="icon-user"></i>社员申请管理</a>
							</li>
							<li>
								<a href="__APP__/Messages/index.html"><i class="icon-envelope"></i>社团资料编辑</a>
							</li>
							<!--<li>
								<a href="__APP__/Data/index.html"><i class="icon-file"></i>上传文件</a>
							</li>-->
							<!--<li>
								<a href="__APP__/Activity/index.html"><i class="icon-list-alt"></i>活动</a>
							</li>--->
							<li class="nav-header">
								你的账户
							</li>
							<li>
								<a href="__APP__/Profile/index.html"><i class="icon-user"></i>个人信息</a>
							</li>
							<li>
								<a href="__APP__/Settings/index.html"><i class="icon-cog"></i>账户设置</a>
							</li>
							<li>
								<a href="__APP__/Password/index.html"><i class="icon-info-sign"></i>修改密码</a>
							</li>
							<li class="divider">
							</li>
							
							<!--<li class="nav-header">
								Bonus Templates
							</li>-->
							<li>
								<a href="__APP__/Show/index.html"><i class="icon-picture"></i>活动管理</a>
							</li>
							<!--<li>
								<a href="__APP__/Blank/index.html"><i class="icon-stop"></i> Blank Slate</a>
							</li>--->
						</ul>
					</div>
				</div>
				<div class="span9">
				
				
					<h2>
					成员换届
					</h2>

					<!---<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									Name
								</th>
								<th>
									Client
								</th>
								<th>
									Tasks
								</th>
								<th>
									Messages
								</th>
								<th>
									Files
								</th>
								<th>
									Progress
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									Nike.com Redesign
								</td>
								<td>
									Monsters Inc
								</td>
								<td>
									<span class="badge">11</span>
								</td>
								<td>
									<span class="badge">2</span>
								</td>
								<td>
									<span class="badge">4</span>
								</td>
								<td>
									<div class="progress">
										<div class="bar" style="width: 60%;"></div>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									Twitter Server Consulting
								</td>
								<td>
									Bad Robot
								</td>
								<td>
									<span class="badge">7</span>
								</td>
								<td>
									<span class="badge">3</span>
								</td>
								<td>
									<span class="badge">0</span>
								</td>
								<td>
									<div class="progress">
										<div class="bar" style="width: 90%;"></div>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									Childrens Book Illustration
								</td>
								<td>
									Evil Genius
								</td>
								<td>
									<span class="badge">10</span>
								</td>
								<td>
									<span class="badge">2</span>
								</td>
								<td>
									<span class="badge">1</span>
								</td>
								<td>
									<div class="progress">
										<div class="bar" style="width: 20%;"></div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>--->
					<a class="toggle-link" href="#new-project"><i class="icon-plus"></i> 我要换届</a>
					<form id="new-project" class="form-horizontal hidden" action="__URL__/do_change" method="post">
						<fieldset>
							<legend>我要换届</legend>
							<div class="control-group">
								<label class="control-label" for="input01">下届时间</label>
								<div class="controls">
									<input type="text"  name="sign" class="input-xlarge" id="input01" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="select01">指定管理员</label>
								<div class="controls" >
									<select name="select">
									<?php if(is_array($person)): $i = 0; $__LIST__ = $person;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["mname"]); ?>"><?php echo ($vo["mname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
									 
									</select>
								</div>
							</div>
						
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">确定</button> <button class="btn">取消</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<script src="__PUBLIC__/front/js/jquery.min.js"></script>
		<script src="__PUBLIC__/front/js/bootstrap.min.js"></script>
		<script src="__PUBLIC__/front/js/site.js"></script>
	</body>
</html>