<?php
require 'database.class.php';
require 'function.php';
    if(isset($_POST['submitted'])) {
        if(trim($_POST['contactName']) === '') {
            $nameError = 'Please enter your name.';
            $hasError = true;
        } else {
            $contect_name = trim($_POST['contactName']);
        }

        if(trim($_POST['telephone']) === '')  {
            $emailError = 'Please enter your telephone.';
            $hasError = true;
        } else {
            $contect_telephone = trim($_POST['telephone']);
        }

        if(trim($_POST['wechats']) === '')  {
            $emailError = 'Please enter your wechat.';
            $hasError = true;
        }  else {
            $contect_wechat = trim($_POST['wechats']);
        }
     
     
        if(!isset($hasError)) {

            $data = array(6=>$contect_name,7=>$contect_telephone,8=>$contect_wechat)  ;
        //     $data['contect_name']= $contect_name;
        //     $data['contect_email']=$contect_email;
        //     $data['contect_telephone']=$contect_telephone;
        //    // data['contect_wechat']=$contect_wechat;
        //     $data['contect_comments']=$contect_comments;
            $data = serialize($data);
            $Mysql = new MMysql(array('dbname'=>'ljtxhz.com'));
            $Func = new Extend_func();
            $ip = $Func->GetIP();
            $time = date('Y-m-d h:i:s', time());
            //var_dump($Mysql->_connect());
            $data_all = array(
                'form_id'=>2,
                'data_info'=>$data,
                'addtime'=>$time,
                'addip'=>$ip,
                'data_status'=>0
            
        );
        
           $insert = $Mysql->insert('lcp_yang_form_data',$data_all);
            
            $arr = array('a'=>'您已提交');
            $json = json_encode($arr,TRUE);
            echo $json;
        }else{

            $arr = array('a'=>'提交失败，请检查您的内容是否填写正确');
            $json = json_encode($arr,TRUE);
            echo $json;
        }
     
    } 

?>