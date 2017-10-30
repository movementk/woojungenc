<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400" rel="stylesheet">
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/customer.css" rel="stylesheet">
</head>
<body class="customer">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/top_nav.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>
	<main id="content" class="inquire inquire-view">
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
                    <div class="table-warp">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>이름</th>
                                    <td>홍길동</td>
                                </tr>
                                <tr>
                                    <th>기관 및 지역</th>
                                    <td>무브먼트케이</td>
                                </tr>
                                <tr>
                                    <th>연락처</th>
                                    <td>010-0000-0000</td>
                                </tr>
                                <tr>
                                    <th>이메일</th>
                                    <td class="e-mail">mkdesign@movementk.co.kr</td>
                                </tr>
                                <tr>
                                    <th class="v-align">멸균희망구역</th>
                                    <td>
                                        <ul>
                                            <li>
                                                <dl>
                                                    <dt>구역명</dt>
                                                    <dd>무브먼트</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>면적(M2)</dt>
                                                    <dd>1,845</dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>층고(M)</dt>
                                                    <dd>170</dd>
                                                </dl>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="subject">문의제목</label></th>
                                    <td class="subject">문의 제목 입니다.문의 제목 입니다.문의 제목 입니다.</td>
                                </tr>
                                <tr>
                                    <th class="v-align">문의내용</th>
                                    <td class="u-content">문의내용문의내용문의내용문의내용문의내용</td>
                                </tr>
                                <tr>
                                    <th>파일첨부</th>
                                    <td class="file">
                                        <div class="form-group">
                                            <input type="file" id="attach" class="form-control">
                                            <label for="attach">찾아보기</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-lg btn-orange" role="button">목록으로</a>
                            <a href="#" class="btn btn-lg btn-gray" role="button">수정하기</a>
                            <a href="#" class="btn btn-lg btn-gray" role="button">삭제하기</a>
                        </p>
                    </div>
		        </div>
		    </div>
		</article>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>