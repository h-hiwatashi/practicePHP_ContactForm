<?php

function validation($data){
    $error = [];
    //氏名
    if(empty($data['name']) || 20 < mb_strlen($data['name'])){
        $error[] = '氏名は20文字以内で入力してください';
    }
    
    //mail
    if(empty($data['email']) || !fileter_var($data['email'], FILTER_VALIDATE_EMAIL)){
        $error[] = '正しい形式でメールアドレスを入力してください';
    }
    
    //gender
    
    
    //age
    
    
    //問い合わせ内容
    if(empty($data['contact']) || 200 < mb_strlen($data['contact'])){
        $error[] = '氏名は200文字以内で入力してください';
    }
    
    return $error;
}