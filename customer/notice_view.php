<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400" rel="stylesheet">
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/customer.css" rel="stylesheet">
</head>
<body class="customer">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/top_nav.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>
	<main id="content" class="common-view notice-view">
		<div class="page-header">
			<div class="container">
				<h2>공지사항</h2>
				<a class="prev" href="/customer/inquire.php"><span class="sr-only">이전 메뉴</span></a>
				<a class="next" href="/customer/qna_list.php"><span class="sr-only">다음 메뉴</span></a>
			</div>
		</div>
        <div class="view-content">
            <div class="container">
                <article>
                    <div class="article-header">
                        <h3>공고합병 및 주권제출공고</h3>
                        <ul>
                            <li><i class="icon-clock"></i>2017-09-15</li>
                            <li><i class="icon-eye"></i>250</li>
                        </ul>
                    </div>
                    <div class="article-content">
                        <p>
                            한화엠지아이기업인수목적 주식회사(갑)는 2017년 3월 7일 개최한 임시 주주총회에서 주식회사 우정비에스씨(을)은 2017년 3월 7일 개최한 임시 주주총회에서 각각 합병을 결의하고 그 결과로 (갑)은 (을)을 합병하여 그 권리의무를 승계하고, (갑)은 존속하며 (을)은 해산하기로 결의하였으므로,이 합병에 대하여 이의가 있는 채권자는 이 공고일 익일부터 1개월 이내에 관계회사에 이의를 제출하시고 주권을 가지고 있는 분은 관계회사에 주권을 제출하여 주시기 바라와 이에 공고 합니다.
                        </p>
                        <figure>
                            <img src="/assets/images/customer/document_img.jpg" class="img-responsive" alt="">
                        </figure>
                    </div>
                    <div class="article-foot">
                        <a href="#">20170510_181656_687.jpg</a>
                    </div>
                </article>
                <div class="link-area">
                    <ul>
                        <li>
                            <dl>
                                <dt>다음글</dt>
                                <dd><a href="#">다음글이 없습니다.</a></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>이전글</dt>
                                <dd><a href="#">합병승인 임시주주총회 소집통지 공고</a></dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <div class="btn-area">
                    <p>
                        <a href="/customer/notice_list.php" class="btn btn-lg btn-orange" role="button">목록으로</a>
                    </p>
                </div>
            </div>
        </div>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>