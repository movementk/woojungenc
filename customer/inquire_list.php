<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400" rel="stylesheet">
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/customer.css" rel="stylesheet">
</head>
<body class="customer">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/top_nav.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>
	<main id="content" class="inquire-list">
		<div class="page-header">
			<div class="container">
				<h2 class="visible-xs">문의</h2>
				<h2 class="hidden-xs">문의 견적요청/건축솔루션컨설팅/기타문의</h2>
				<a class="prev" href="/customer/download.php"><span class="sr-only">이전 메뉴</span></a>
				<a class="next" href="/customer/notice_list.php"><span class="sr-only">다음 메뉴</span></a>
			</div>
		</div>
		<article>
		    <div class="article-header">
		        <p>
		            궁금하신 사항이 있으시다면 문의해주세요!<br>
		            빠르고 친절하게 답변드리겠습니다.
		        </p>
		    </div>
            <div class="article-content">
                <div class="container">
                    <ul class="list">
                        <li class="visible-lg">
                            <ul class="list-header">
                                <li>번호</li>
                                <li>제목</li>
                                <li>작성일</li>
                                <li>조회수</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        공고합방 및 주권제출공고
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        합병승인 임시주주총회 소집통지 공고
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        주주명부폐쇄 기준일 공고
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        결과분석에서 논문데이터까지 단 한번의 실험으로 해결하세요!
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        CROWISE 효능/안전성 평가
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        CROWISE 유전독성시험서비스(Genetic Toxicology)
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        CROWISE 위탁사육관리 
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        CROWISE 비만효력시험
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        CROWISE 병리평가
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        CROWISE 당뇨 효력시험
                                    </a>
                                </li>
                                <li class="date">2017-04-01</li>
                                <li class="hit">123</li>
                            </ul>
                        </li>
                    </ul>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-orange" role="button">글쓰기</a>
                        </p>
                    </div>
                    <nav class="page-nav">
                        <ul class="pagination">
                            <li class="first"><a href="#"><i class="icon-angle-double-left"></i></a></li>
                            <li class="prev"><a href="#"><i class="icon-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="next"><a href="#"><i class="icon-angle-right"></i></a></li>
                            <li class="last"><a href="#"><i class="icon-angle-double-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </article>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>