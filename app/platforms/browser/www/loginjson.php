
    <?php
    header("Content-Type:text/html; charset=utf-8");
  header("Access-Control-Allow-Origin: *");
        $link=mysqli_connect('localhost','103021017','bppbpg');
    $db=mysqli_select_db($link,'103021017_');
mysqli_query($link,"SET NAMES 'utf8'");
    $sql="SELECT * FROM member";
    $result=mysqli_query($link,$sql);   
        $count=0;
        while($row=mysqli_fetch_assoc($result))
     { 
         $data_array[$count]= array("id"=>$row['id'],
                                    "password"=>$row['password'],
                                    "email"=>$row['email']
                                    )
                                   ;
            $count++;
         
         
     }
   echo  json_encode($data_array, JSON_UNESCAPED_UNICODE);
//       
      ?>