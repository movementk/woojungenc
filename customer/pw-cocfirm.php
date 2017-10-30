<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400" rel="stylesheet">
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/customer.css" rel="stylesheet">
</head>
<body class="customer">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/top_nav.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/side_nav.php"); ?>
	<main id="content">
		<article class="pw-confirm">
            <div class="container">
                <div class="article-content">
                    <form action="#">
                        <h4>
                            게시글 작성 시 입력하신<br class="visible-xs">
                            비밀번호를 입력해주세요.
                        </h4>
                        <div class="form-group">
                            <label for="u-pw" class="sr-only">비밀번호 확인</label>
                            <input type="password" id="u-pw" class="form-control">
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-orange">확인</button>
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