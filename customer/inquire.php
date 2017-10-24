<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400" rel="stylesheet">
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/customer.css" rel="stylesheet">
</head>
<body class="customer">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/top_nav.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>
	<main id="content" class="inquire">
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
                    <form action="#">
                        <div class="table-warp">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th><label for="u-name">이름</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-name" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-area">기관 및 지역</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-area" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-phone">연락처</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-phone" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-mail">이메일</label></th>
                                        <td class="e-mail">
                                            <div class="form-group">
                                                <input type="email" id="u-mail" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="v-align">멸균희망구역</th>
                                        <td>
                                            <div class="form-group">
                                                <ul>
                                                    <li>
                                                        <dl>
                                                            <dt>구역명</dt>
                                                            <dd>
                                                                <select class="form-control">
                                                                    <option>선택</option>
                                                                </select>
                                                            </dd>
                                                        </dl>
                                                    </li>
                                                    <li>
                                                        <dl>
                                                            <dt><label for="surface">면적(M2)</label></dt>
                                                            <dd><input type="text" id="surface" class="form-control"></dd>
                                                        </dl>
                                                    </li>
                                                    <li>
                                                        <dl>
                                                            <dt><label for="floor-height">층고(M)</label></dt>
                                                            <dd><input type="text" id="floor-height" class="form-control"></dd>
                                                        </dl>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="subject">문의제목</label></th>
                                        <td class="subject">
                                            <div class="form-group">
                                                <input type="text" id="subject" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="v-align"><label for="u-content">문의내용</label></th>
                                        <td class="u-content">
                                            <div class="form-group">
                                                <textarea id="u-content" class="form-control"></textarea>
                                            </div>
                                        </td>
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
                            <p class="attention">도면을 첨부해 주시면 더욱 정확한 견적 상담이 가능합니다.</p>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-sm btn-gray" role="button">취소하기</a>
                                <button type="submit" class="btn btn-sm btn-orange">등록하기</button>
                            </p>
                        </div>
                    </form>
		        </div>
		    </div>
		</article>
	</main>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
</body>
</html>