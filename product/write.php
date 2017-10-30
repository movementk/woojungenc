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
        <article class="product-write">
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
                                        <th><label for="subject">제목</label></th>
                                        <td class="subject">
                                            <div class="form-group">
                                                <input type="text" id="subject" class="form-control">
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