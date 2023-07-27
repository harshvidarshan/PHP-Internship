<?php 
echo "cookie is used to store information of user in web pages itself"."<br/>";
setcookie("Category","Books",time()+86400,"/");
echo "the cookie is set";
?>