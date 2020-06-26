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
    <div class="contact-form">
      <div class="form-title">お問い合わせ</div>
      <form method="post" action="sent.php">
        <div class="form-item">名前</div>
        <input type="text" name="name">
        
        <div class="form-item">メールアドレス</div>
        <input type="email" name="email">

        <div class="form-item">年齢</div>
        <select name="age">
          <option value="未選択">選択してください</option>
          <?php 
            for($i=6; $i<=100; $i++){
              echo "<option value='{$i}'>{$i}</option>";
            }
          ?>
        </select>

        <div class="form-item">お問い合わせの種類</div>
        <?php 
          $types = array('弊社に関するお問い合わせ', '弊社に対する意見', '採用に関するお問い合わせ', '取材・メディア関連のお問い合わせ', '料金に関するお問い合わせ', 'その他');
         ?>
        <select name="category">
          <option value="未選択">選択してください</option>
          
          <?php
            foreach($types as $type){
              echo "<option value='{$type}'>{$type}</option>";
            }
          ?>
        </select>
        
        <div class="form-item">内容</div>
        <textarea name="body"></textarea>

        <input type="submit" value="送信">
      </form>
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
</body>
</html>