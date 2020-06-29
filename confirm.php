<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Test</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
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
    <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
    <form method="post" action = “thanks.php”>
      <?php
      session_start ();
      var_dump($_SESSION);
      $csrfToken = $_SESSION['$csrfToken'];
      echo $csrfToken;
      echo '<br>';
      echo $_POST['$csrfToken'];
      echo '<br>';
      ?>
      <div class="display-contact">
        <div class="form-title">入力内容</div>
  
        <div class="form-item">■ 名前</div>
        <?php echo $_POST['name']; ?>
        
        <div class="form-item">■ メールアドレス</div>
        <?php echo $_POST['email']; ?>
  
        <div class="form-item">■ 年齢</div>
        <?php echo $_POST['age']; ?>
  
        <div class="form-item">■ お問い合わせの種類</div>
        <?php echo $_POST['category']; ?>
        
        <div class="form-item">■ 内容</div>
        <?php echo $_POST['body']; ?>
          
        
        
        <input type="submit" name="back" value="戻る"/> 
        <input type="submit" value="送信"/>
        
        <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>"/>
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>"/>
        <input type="hidden" name="age" value="<?php echo $_POST['age']; ?>"/>
        <input type="hidden" name="category" value="<?php echo $_POST['category']; ?>"/>
        <input type="hidden" name="body" value="<?php echo $_POST['body']; ?>"/>
        <input type="hidden" name="csrf" value="<?php echo $_POST['csrf']; ?>"/>
      </div>
    </form>

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
</body>
</html>