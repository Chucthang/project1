<?php
require('data.php'); 

 ?>
<!DOCTYPE html>
<html>
<head>
        <title>cau5</title>
</head>
<body>
        <table>
                <tr>
                        <td>STT</td>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Gmail</td>
                        <?php for ($i=0; $i < 4; $i++) {?>
                                <tr></tr>
                                <td> <?php echo $i+1; ?> </td>
                                <td> <?php echo $users[$i]['id']; ?> </td>
                                <td> <?php echo $users[$i]['name']; ?> </td>
                                <td> <?php echo $users[$i]['email']['gmail']; ?> </td>
                                <tr></tr>

                        <?php } ?> 

                </tr>
        </table>
        <tr> Câu b) Search:
                        <?php for ($i=0; $i < 4; $i++) { 
                                $key=4;
                                if ($users[$i]['id']==$key) {
                                        echo 'Tim thay id la ';
                                        echo $key;
                                        echo " Ten la ";
                                        echo $users[$i]['name'];
                                        break;
                                }else{
                                        echo "Không Tìm Thấy ID";
                                        echo $key;
                                        break;
                                }
                        } ?>
        </tr>
        <div>
                Câu c)
                <?php  for ($i=0; $i < 3; $i++) { 
                        for ($j=$i+1; $j < 4 ; $j++) { 
                                if($users[$i]['id']>$users[$j]['id']){
                                        $temp = $users[$j];
                                        $users[$j] = $users[$i];
                                        $users[$i] = $temp;
                                }
                        }
                } ?>
        </div>
         <table>
                <tr>
                        <td>STT</td>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Gmail</td>
                        <?php for ($i=0; $i < 4; $i++) {?>
                                <tr></tr>
                                <td> <?php echo $i+1; ?> </td>
                                <td> <?php echo $users[$i]['id']; ?> </td>
                                <td> <?php echo $users[$i]['name']; ?> </td>
                                <td> <?php echo $users[$i]['email']['gmail']; ?> </td>
                                <tr></tr>

                        <?php } ?> 
                </tr>
        </table>
        <form>
            ID <input type="text" name="id">
            <input type="submit" value="search">
        </form>
        <?php if(!empty($_GET)) {
          
          
                
                $flag = -1;
                for ($i=0; $i < 4; $i++) { 
                    if ($users[$i]['id'] == $_GET['id']) {
                        $flag = $i;
                        break;
                    }
                }
           
            if ($flag == -1) {
                echo "khong tim thay ";
                }else{?> <?php
                   echo 'Tim thay' ?> <br>
                   <table>
                       <tr></tr>
                                <td> <?php echo $i+1; ?> </td>
                                <td> <?php echo $users[$i]['id']; ?> </td>
                                <td> <?php echo $users[$i]['name']; ?> </td>
                                <td> <?php echo $users[$i]['email']['gmail']; ?> </td>
                                <tr></tr>

                   </table>

                    <?php
                } 
            } ?>


       



</body>
</html>