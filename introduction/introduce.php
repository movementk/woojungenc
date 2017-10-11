<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/introduction.css" rel="stylesheet">
</head>
<body class="introduction">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/top_nav.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>
	<main id="content" class="introduce">
		<div class="page-header">
			<div class="container">
				<h2>회사소개</h2>
				<a class="prev" href="/introduction/location.php">
				    <span class="sr-only">이전 메뉴</span>
				</a>
				<a class="next" href="/introduction/business.php">
				    <span class="sr-only">다음 메뉴</span>
				</a>
			</div>
		</div>
		<div class="overview">
            <div class="container">
                <h3>Equipment, Engineering<br class="visible-xs">&amp; Construction</h3>
                <p>
                    우정E&amp;C는 1989년 창립된 이래로 국내 병원,<br class="visible-xs">
                    제약회사 같은 곳에 공간 멸균<br class="hidden-xs"> 서비스를 제공하고<br class="visible-xs">
                    앞선 발전을 위해 선구자 역할을 해왔습니다.
                </p>
            </div>
		</div>
		<article class="future">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <figure>
                            <img src="/assets/images/introduction/future_xs_img.jpg" class="img-responsive visible-xs" alt="">
                            <img src="/assets/images/introduction/future_sm_img.png" class="img-responsive visible-sm visible-md" alt="">
                            <img src="/assets/images/introduction/future_lg_img.png" class="img-responsive visible-lg" alt="">
                        </figure>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <div class="article-content">
                            <h4>미래를 생각하는<br> 우정E&amp;C</h4>
                            <hr>
                            <p>
                                전 세계적으로 인정받은 고품질 장비부터<br> 
                                합리적이고 효율적인 국내 제작 장비 및 소모품까지<br>
                                E&amp;C 전문가가 꼼꼼하게 확인하여 규모와<br> 
                                사용목적에 가장 적합한 장비를 제안해드립니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
		</article>
		<article class="life-science">
		    <div class="container">
		        <div class="row">
		            <div class="col-xs-12 col-lg-6">
		                <div class="article-content">
		                    <h4>생명과학분야를<br> 선도하는 우정E&amp;C</h4>
		                    <hr>
		                    <p>
		                        설계, 시공 사업 등 전반적인 서비스를<br>
		                        위한 One stop Turn-Key 솔루션을 제공합니다.<br>
		                        생명과학연구분야의 든든한 동반자가될 수 있도록 <br>
		                        노력하고 함께 배워 나가겠습니다. 
		                    </p>
		                </div>
		            </div>
		            <div class="col-xs-12 col-lg-6">
		                <figure>
                            <img src="/assets/images/introduction/life_science_xs_img.jpg" class="img-responsive visible-xs" alt="">
                            <img src="/assets/images/introduction/life_science_sm_img.png" class="img-responsive visible-sm visible-md" alt="">
                            <img src="/assets/images/introduction/life_science_lg_img.png" class="img-responsive visible-lg" alt="">
                        </figure>
		            </div>
		        </div>
		    </div>
		</article>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>