{"filter":false,"title":"sent.php","tooltip":"/sent.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":52,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html>","<head>","  <meta charset=\"utf-8\">","  <title>Progate</title>","  <link rel=\"stylesheet\" type=\"text/css\" href=\"stylesheet.css\">","</head>","<body>","  <div class=\"header\">","    <div class=\"header-left\">Progate</div>","    <div class=\"header-right\">","      <ul>","        <li>会社概要</li>","        <li>採用</li>","        <li class=\"selected\">お問い合わせ</li>","      </ul>","    </div>","  </div>","","  <div class=\"main\">","    <div class=\"thanks-message\">お問い合わせいただきありがとうございます。</div>","    <div class=\"display-contact\">","      <div class=\"form-title\">入力内容</div>","","      <div class=\"form-item\">■ 名前</div>","      <?php echo $_POST['name']; ?>","","      <div class=\"form-item\">■ 年齢</div>","      <?php echo $_POST['age']; ?>","","      <div class=\"form-item\">■ お問い合わせの種類</div>","      <!-- この下でcategoryを受け取りechoしましょう -->","      <?php echo $_POST['category']; ?>","      ","      <div class=\"form-item\">■ 内容</div>","      <?php echo $_POST['body']; ?>","    </div>","  </div>","","  <div class=\"footer\">","    <div class=\"footer-left\">","      <ul>","        <li>会社概要</li>","        <li>採用</li>","        <li>お問い合わせ</li>","      </ul>","    </div>","    <div class=\"like-box\">","      <iframe src=\"https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539&amp;show_faces=false\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden; height:300px;\" allowTransparency=\"true\"></iframe>","    </div>","  </div>","</body>","</html>"],"id":1}],[{"start":{"row":31,"column":0},"end":{"row":31,"column":41},"action":"remove","lines":["      <!-- この下でcategoryを受け取りechoしましょう -->"],"id":2},{"start":{"row":30,"column":46},"end":{"row":31,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":525,"scrollleft":0,"selection":{"start":{"row":30,"column":46},"end":{"row":30,"column":46},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1591864345458,"hash":"a6488a0829e07dbfc6d92919d6159219f0845a6d"}