
<?php
if((int)$urlParam[1]){
    $post = $con->createComand("SELECT 'direction' FROM 'cities' WHERE 'direction like 'A%' . 'id' = param;",['param'=>$urlParam[1]])->findOne();
}
?>
