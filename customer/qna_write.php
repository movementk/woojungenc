<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400" rel="stylesheet">
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/customer.css" rel="stylesheet">
</head>
<body class="customer">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/top_nav.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>
	<main id="content" class="common-write qna-write">
		<div class="page-header">
			<div class="container">
				<h2>Q&amp;A</h2>
			</div>
		</div>
		<article>
		    <div class="article-content">
                <div class="container">
                    <form action="#">
                        <div class="table-warp">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th><label for="u-subject">제목</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-subject" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-name">이름</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-name" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="v-align"><label for="u-content">내용</label></th>
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