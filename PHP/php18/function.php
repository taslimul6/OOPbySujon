<?php

function usrlog(){
   if( isset($_SESSION['caalo']) || isset($_COOKIE["calu"])){
       return true;
   }
   else {
       return false;
   }
}


?>