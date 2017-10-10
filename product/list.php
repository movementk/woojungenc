<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/product.css" rel="stylesheet">
</head>
<body class="product">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/top_nav.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>
	<main id="content">
		<div class="page-header">
			<div class="container">
				<h2>실험동물실 솔루션</h2>
				<a class="prev" href="#"><span class="sr-only">이전 메뉴</span></a>
				<a class="next" href="#"><span class="sr-only">다음 메뉴</span></a>
			</div>
		</div>
		<div class="search-area">
			<div class="container">
				<div class="keyword">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="제품명을 입력해주세요.">
						<button class="btn btn-link btn-search" type="submit"><span class="sr-only"></span></button>
					</div>
				</div>
				<div class="category">
					<ul class="nav" role="tablist">
						<li role="presentation" class="active"><a href="#equipment" aria-controls="equipment" role="tab" data-toggle="tab">장비</a></li>
						<li role="presentation"><a href="#expendables" aria-controls="expendables" role="tab" data-toggle="tab">소모품</a></li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="equipment">
							
						</div>
						<div role="tabpanel" class="tab-pane" id="expendables">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="product-list">
			<div class="container">
				<h4><span class="bar"></span>개별환기 케이지</h4>
				<ul class="row">
					<li class="col-xs-12 col-sm-6 col-lg-4">
						<a href="#">
							<figure>
								<p>
									<img class="img-responsive" src="/assets/images/sub/img_product.jpg">
								</p>
								<figcaption>
									<h5>GM500</h5>
									<p class="category">그린라인</p>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="col-xs-12 col-sm-6 col-lg-4">
						<a href="#">
							<figure>
								<p>
									<img class="img-responsive" src="/assets/images/sub/img_product_2.jpg">
								</p>
								<figcaption>
									<h5>ML+&amp;MML+</h5>
									<p class="category">그린라인</p>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="col-xs-12 col-sm-6 col-lg-4">
						<a href="#">
							<figure>
								<p>
									<img class="img-responsive" src="/assets/images/sub/img_product_3.jpg">
								</p>
								<figcaption>
									<h5>DGM</h5>
									<p class="category">그린라인</p>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="col-xs-12 col-sm-6 col-lg-4">
						<a href="#">
							<figure>
								<p>
									<img class="img-responsive" src="/assets/images/sub/img_product_4.jpg">
								</p>
								<figcaption>
									<h5>GR900</h5>
									<p class="category">그린라인</p>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="col-xs-12 col-sm-6 col-lg-4">
						<a href="#">
							<figure>
								<p>
									<img class="img-responsive" src="/assets/images/sub/img_product_5.jpg">
								</p>
								<figcaption>
									<h5>더블데커</h5>
									<p class="category">그린라인</p>
								</figcaption>
							</figure>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>