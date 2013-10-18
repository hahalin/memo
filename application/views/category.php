<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap 101 Template</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap 
		
		-->
		<link href="<?php echo base_url()?>assets/css/slidingmenu.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url()?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">

		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>

		<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/bootstrap-tab.js"></script><!--
		
		-->

	</head>
	<body>
		<h1>Hello, world!</h1>
		
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span2">
					<img src="http://placehold.it/140x140" class="img-polaroid" alt="140x140" />
				</div>
				<div class="span10">
					<div class="row-fluid">
						<p><h3>company name</h3></p>
						<div class="span4">
							<legend>Legend</legend>
							<p>
								<a href=#><span class="label label-success">企業分類</span></a>
								<i class="icon-envelope"></i><strong>Email:</strong>aaa@a.b.c</br>
								<i class="icon-globe"></i><strong>網址:</strong>www.aaa.bbb.ccc</br>
								
							</p>
						</div>
						<div class="span1"></div>
						<div class="row-fluid">
							<div class="span6">
								<legend>Legend</legend>
								<strong>區域:</strong><a href=#><span class="label label-info">華東</span></a>
								<strong>省份:</strong><a href=#><span class="label">江蘇</span></a></br>
								<strong>地址:</strong><a href=#><span>江蘇xxxxxxxxxxxxxxxxxxxxxxxxxxx</span></a>
							</div>
						</div>
						<div class="row-fluid">
							&nbsp;&nbsp;
						</div>
					</div>
					<div class="row-fluid">
							<p></p>	
							<div class="span6">
								
							<legend>Detail</legend>
							<div class="">
								<ul class="nav nav-tabs" id="company_tab" >
								  <li><a href="#home" data-toggle="tab">聯絡人</a></li>
								  <li><a href="#profile" data-toggle="tab">經營商品</a></li>
								</ul>
								<div class="tab-content" >
									
									<div class="tab-pane active in " id="home">
										<table class="table table-striped">
											<thead>
								                <tr>
								                  <th>#</th>
								                  <th>姓名</th>
								                  <th>性別</th>
								                  <th>職稱</th>
								                  <th>Tel</th>
								                </tr>
								             </thead>
								             <tbody>
								             	<tr>
								             		<td><span class="label label-important">主要</span></td>
								             		<td>name</td>
								             		<td>man</td>
								             		<td>manager</td>
								             		<td>223441</td>
								             	</tr>
								             	<tr>
								             		<td></td>
								             		<td>name</td>
								             		<td>man</td>
								             		<td>manager</td>
								             		<td>223441</td>
								             	</tr>
								             	<tr>
								             		<td></td>
								             		<td>name</td>
								             		<td>man</td>
								             		<td>manager</td>
								             		<td>223441</td>
								             	</tr>
								             </tbody>
										</table>
									</div>
								
									<div class="tab-pane " id="profile">
										<div>
											<address>
											  <strong>Twitter, Inc.</strong><br>
											  795 Folsom Ave, Suite 600<br>
											  San Francisco, CA 94107<br>
											  <abbr title="Phone">P:</abbr> (123) 456-7890
											</address>
										</div>		
									</div>
								</div>
								</div>

							</div>					

						</div>					
				</div>
			</div>
			<div class="row-fluid">
				<script></script>
				<div class="span9 row">
					<div class="span3">
						<div class="slashc-sliding-menu" id="menua">
							<h1 id="inbox-menu-header-js"><span>test</span><a title="Slide Back Home" href="javascript:void(0);" class="slashc-sliding-menu-home btn btn-inverse"> <i class="icon-angle-left"></i> </a></h1>
							<ul >
								<li>
									<a href="javascript:void(0);" tag=1><span>aa</span></a>
									<ul>
										<li>
											<a href="javascript:void(0);" tag=11><span>aa1</span></a>
											<ul>
												<li>
													<a href="javascript:void(0);" tag=12><span>aa21</span></a>
												</li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0);" tag=12><span>aa2</span></a>
											<ul>
												<li>
													<a href="javascript:void(0);" tag=12><span>aa21</span></a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0);" tag=2><span>bb</span></a>
								</li>

							</ul>
						</div>

					</div>
					<div class="span3">
						<div class="btn-group">
							<button class="btn btn-primary">
								Action
							</button>
							<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li>
									<a href=#>setting</a>
								</li>
								<li id="rfq">
									<a href=#>rfq<span class="badge">1xx</span></a>
								</li>
							</ul>
						</div>
						<span id="loading">loading...</span>
					</div>
				</div>
				<div class="span9">
					<div class="hero-unit">
						hero unit
					</div>
					<div id="listgrid" class="row-fluid">
						<div class="span4">
							<p>
								aaa
							</p>
							<p>
								<a class="btn" href=# pid="1">a1</a>
							</p>
						</div>
						<div class="span4">
							<p>
								bb
							</p>
							<p>
								<a class="btn" href=# pid="2">b1</a>
							</p>
						</div>
						<div class="span4">
							<p>
								cc
							</p>
							<p>
								<a class="btn" href=# pid="3">c1</a>
							</p>
						</div>

					</div>
				</div>
			</div>
		</div>

		<script src="<?php echo base_url()?>assets/js/slashc-sliding-menu.js"></script>
		<script src="<?php echo base_url()?>assets/js/slimScroll.min.js"></script>

				

		<script>
			function getcount() {
				$.get('app/getcount', {
					para1 : 1
				}, function(data, textStatus) {
					//alert(data);
					$('#rfq a span.badge').text(data);
					$('#loading').hide();
				}
				//,"json"
				);
			}

			function hide_inbox_menu_header() {
				$('#inbox-menu-header-js').animate({
					"top" : "-42px"
				}, 250);
				$('#menua ul').animate({
					"top" : "-42px"
				}, 250);
			}

			function show_inbox_menu_header() {
				$('#inbox-menu-header-js').animate({
					"top" : "0px"
				}, 250);
				$('#menua ul').animate({
					"top" : "0px"
				}, 250);
			}

			$(function() {

				
				$('#company_tab a').click(function (e) {
								  e.preventDefault();
								  $(this).tab('show');
				});
				

				
				$(function () {
				    $('#company_tab a:first').tab('show');
				});
				
				$('#loading').hide();

				$('#loading').show();

				getcount();

				$('#listgrid a.btn').click(function() {
					$('#loading').hide();
					$.post('app/add', {
						'pid' : $(this).attr('pid')
					}).done(function(data) {
						//alert(data);
						var o = $.parseJSON(data);
						if (!o.success) {
							alert(o.msg);
						}
						//alert('done');
						getcount();
					}, "json");

				});

				$('#menua a.slashc-sliding-menu-home').click(function() {
					//hide_inbox_menu_header();
				});
				$('#menua >ul > li > a').click(function(event) {
					//$('#menua a.slashc-sliding-menu-home').text($(this)
					//alert($(this).parent().find('ul li').size());
					show_inbox_menu_header();
				});

				return;
				$('#menua').slimScroll({
					height : '518px',
					width : '249',
					disableFadeOut : true,
					distance : 3,
					size : 7
				});
				hide_inbox_menu_header();

				/*
				 $('#inbox-loading-panel-js').slimScroll({
				 height : '518px',
				 width : 'auto',
				 disableFadeOut : true,
				 distance : 5,
				 size : 7
				 });*/
			});
		</script>

	</body>
</html>