<?php
 $hi = 'hello';
 $$hi = "world";
 echo "$hi ${$hi}<br/>";  //hello world
 echo "$hi $hello<br/>";  //hello world
 echo "$hi $$hi<br/>";    //hello $hi