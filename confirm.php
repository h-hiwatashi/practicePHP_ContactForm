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
require_once("validation.php");
?>

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
            <div class="col-md-6" style="margin-top:30px; margin-bottom:30px;">
            <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
            <form method="post" action="./thanks.php">
              <?php //var_dump($_SESSION); ?>
              <?php if ($_POST['$csrfToken'] === $_SESSION['$csrfToken']): ?>
              <?php $error = validation($_POST); ?>
              
              <?php if(!empty($error)): ?>
              <ul>
              <?php foreach($error as $value): ?>
                <li><?php echo $value; ?></li>
              <?php endforeach; ?>
              </ul>
              <?php endif; ?>
              
              <div class="display-contact">
                <div class="form-title">入力内容</div>
          
                <div class="form-group">
                  <div class="name">■ 氏名</div>
                  <?php echo $_POST['name']; ?>
                </div>
                
                <div class="form-group">
                <div class="email">■ メールアドレス</div>
                <?php echo $_POST['email']; ?>
                </div>
                
                <div class="form-group">
                <div class="gender">■ 性別</div>
                <?php if($_POST['gender'] === '0'){echo '男性';} ?>
                <?php if($_POST['gender'] === '1'){echo '女性';} ?>
                </div>
                
                <div class="form-group">
                <div class="age">■ 年齢</div>
                <?php echo $_POST['age']; ?>
                </div>
          
                <div class="form-group">
                <div class="category">■ お問い合わせの種類</div>
                <?php echo $_POST['category']; ?>
                </div>
                
                <div class="form-group">
                <div class="body">■ 内容</div>
                <?php echo $_POST['body']; ?>
                </div>
                
                <div class="form-group">
                <input class="btn btn-info" type="button" value="戻る" onClick="history.back()">
                <input class="btn btn-info" type="submit" value="送信">
                </div>
                
                <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>"/>
                <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>"/>
                <input type="hidden" name="age" value="<?php echo $_POST['age']; ?>"/>
                <input type="hidden" name="category" value="<?php echo $_POST['category']; ?>"/>
                <input type="hidden" name="body" value="<?php echo $_POST['body']; ?>"/>
                <input type="hidden" name="$csrfToken" value="<?php echo $_POST['$csrfToken']; ?>"/>
              </div>
            </form>
            <?php else: ?>
            <div>セッションが無効です。</div>
            <?php endif; ?>
            </div>
          </div>
        </div>
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
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>