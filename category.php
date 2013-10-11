<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap 101 Template</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url()?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">

	</head>
	<body>
		<h1>Hello, world!</h1>
		
		<div class="container-fluid">
			<div class="row-fluid">
				
				<div class="span9 row">
					
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

		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
		
		<script>
			function getcount()
			{
				$.get(
					'app/getcount',
					{
						para1:1
					},
					function(data,textStatus)
					{
						//alert(data);
						$('#rfq a span.badge').text(data);
						$('#loading').hide();
					}
					//,"json"
				);
			}
			$(function() {
				
				//alert('jquery');
				$('#loading').hide();
				
				$('#loading').show();
				
				getcount();
				
				$('#listgrid a.btn').click(function(){
					$('#loading').hide();
					$.post(
						'app/add',
						{
							'pid':$(this).attr('pid')
						}).done(
						function(data)
						{
							//alert(data);
							var o=$.parseJSON(data);
							if (!o.success)
							{
								alert(o.msg);
							}
							//alert('done');
							getcount();
						},
						"json"
					);
					
				});
				
			});
		</script>
		

	</body>
</html>