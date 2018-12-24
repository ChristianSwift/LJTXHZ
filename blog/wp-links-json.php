<?php
ini_set('display_errors',1);
header("Content-type:text/html;charset=utf-8");//字符编码设置
$servername = "127.0.0.1";
$username = "ljtxhz.com";
$password = "ljtxhz.com.password";
$dbname = "ljtxhz.com";

// 创建连接  
$con =mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT link_id AS ID,link_name AS NAME,link_url AS URL,link_image AS IMAGE FROM lcp_terms JOIN lcp_term_relationships ON lcp_term_relationships.term_taxonomy_id=lcp_terms.term_id JOIN lcp_links ON lcp_term_relationships.object_id=lcp_links.link_id WHERE lcp_term_relationships.term_taxonomy_id=".$_GET["link_catagory"]; 

$result = mysqli_query($con,$sql);  
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

$jarr = array();
while ($rows=mysqli_fetch_array($result,MYSQL_ASSOC)){
    $count=count($rows);//不能在循环语句中，由于每次删除 row数组长度都减小  
    for($i=0;$i<$count;$i++){  
        unset($rows[$i]);//删除冗余数据  
    }
    array_push($jarr,$rows);
}
$jobj=new stdclass();
foreach($jarr as $key=>$value){
    $jobj->$key=$value;
}
echo json_encode($jobj);//打印编码后的json字符串
mysqli_close($con);
?>