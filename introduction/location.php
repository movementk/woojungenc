<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400" rel="stylesheet">
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/introduction.css" rel="stylesheet">
</head>
<body class="introduction">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/top_nav.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>
	<main id="content" class="location">
		<div class="page-header">
			<div class="container">
				<h2>찾아오시는길</h2>
				<a class="prev" href="/introduction/business.php">
				    <span class="sr-only">이전 메뉴</span>
				</a>
				<a class="next" href="/introduction/introduce.php">
				    <span class="sr-only">다음 메뉴</span>
				</a>
			</div>
		</div>
		<article>
		    <div class="container">
                <div class="article-header">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#headquarters" aria-controls="headquarters" role="tab" data-toggle="tab">본사</a></li>
                        <li role="presentation"><a href="#laboratory" aria-controls="laboratory" role="tab" data-toggle="tab">연구소</a></li>
                    </ul>
                </div>
                <div class="article-content">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- 본사 -->
                        <div role="tabpanel" class="tab-pane active" id="headquarters">
                            <div class="details">
                                <ul>
                                    <li>
                                        <dl>
                                            <dt><i class="icon-location"></i>주소</dt>
                                            <dd>
                                                경기도 수원시 영통구 광교로 145 차세대융합 기술연구원 A동 8층 (주)우정비에스씨
                                            </dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt><i class="icon-phone"></i>대표전화</dt>
                                            <dd>031-888-9369</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt><i class="icon-fax"></i>팩스</dt>
                                            <dd>031-888-9368</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt><i class="icon-mail"></i>이메일</dt>
                                            <dd><a href="mailto:wj@woojungbsc.co.kr">wj@woojungbsc.co.kr</a></dd>
                                        </dl>
                                    </li>
                                </ul>
                            </div>
                            <div class="maps">
                                <img src="/assets/images/introduction/maps.jpg" class="img-responsive" alt="">
                            </div>
                        </div>
                        <!-- 연구소 -->
                        <div role="tabpanel" class="tab-pane" id="laboratory">
                            <div class="details">
                                <ul>
                                    <li>
                                        <dl>
                                            <dt><i class="icon-location"></i>주소</dt>
                                            <dd>
                                                경기도 수원시 영통구 광교로 145 차세대융합 기술연구원 A동 8층 (주)우정비에스씨
                                            </dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt><i class="icon-phone"></i>대표전화</dt>
                                            <dd>031-888-9369</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt><i class="icon-fax"></i>팩스</dt>
                                            <dd>031-888-9368</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt><i class="icon-mail"></i>이메일</dt>
                                            <dd><a href="mailto:wj@woojungbsc.co.kr">wj@woojungbsc.co.kr</a></dd>
                                        </dl>
                                    </li>
                                </ul>
                            </div>
                            <div class="maps">
                                <img src="/assets/images/introduction/maps.jpg" class="img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
		</article>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>