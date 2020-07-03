<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Test</title>
  </head>

<?php
  session_start();
  if (!session_start()) {
    echo 'セッション開始失敗！';
  }
//phpinfo();
//require_once(validation.php);
?>
<!--
<head>
  <title>Test</title>
  <link rel="stylesheet" type="text/css" href="./stylesheet.css">
</head>
-->

<body>
  <div class="header">
    <div class="header-left">Test</div>
    <div class="header-right">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li class="selected">お問い合わせ</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="contact-form">
      <div class="form-title">お問い合わせ</div>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
            <form method="post" action="./confirm.php">
        
              <!-- <div class="form-item">氏名</div> -->
              <div class="form-group">
                <lavel for=name>氏名</lavel>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
        
              <div class="form-group">
                <label for="form-item">メールアドレス</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>

              <div class="form-check form-check-inline">性別
                <input class="form-check-input" type="checkbox" id="gender" name="gender" value="0">
                <label class="form-check-label" for="gender">男性</label>
                <input class="form-check-input" type="checkbox" id="gender" name="gender" value="1">
                <label class="form-check-label" for="gender">女性</label>
              </div>
          
              <div class="form-group">
                <label for="age">年齢</label>
                <select class="form-control" id="age" name="age">
                <option value="未選択">選択してください</option>
                <?php
                  for($i=6; $i<=100; $i++){
                    echo "<option value='{$i}'>{$i}</option>";
                  }
                ?>
                </select>
              </div>
          
              <div class="form-group">
                <label for="category">お問い合わせの種類</label>
                <select class="form-control" id="category" name="category">
                <option value="未選択">選択してください</option>
                <?php 
                  $types = array('弊社に関するお問い合わせ', '弊社に対する意見', '採用に関するお問い合わせ', '取材・メディア関連のお問い合わせ', '料金に関するお問い合わせ', 'その他');
                  foreach($types as $type){
                    echo "<option value='{$type}'>{$type}</option>";
                  }
                ?>
                </select>
              </div>
        
              <div class="form-group">
                <label for="body">内容</label>
                <textarea class="form-control" id="body" name="body" rows="3"></textarea>
              </div>

              <input class="btn btn-info" type="submit" value="確認">
        
              <?php
              if(!isset($_SESSION['$csrfToken'])){
                $csrfToken = bin2hex(random_bytes(32));
                $_SESSION['$csrfToken'] = $csrfToken;
              }
              $token = $_SESSION['$csrfToken'];
              //var_dump($_SESSION) ;
              ?>
              <input type="hidden" name="$csrfToken" value="<?php echo $token; ?>"/>
            </form>
          </div><!-- md-6 -->
        </div>
      </div>
    </div>
  
    <div class="footer">
      <div class="footer-left">
        <ul>
          <li>会社概要</li>
          <li>採用</li>
          <li>お問い合わせ</li>
        </ul>
      </div>
    </div>
  
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>