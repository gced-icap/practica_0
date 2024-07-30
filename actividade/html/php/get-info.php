<?php
  $id = exec('uname -nrs');
  $cpu = exec('cat /proc/cpuinfo | grep "model name" | head -1 | cut -d ":" -f 2');
  echo "<p>Ubuntu $ver $id</p>";
  echo "<p>$cpu</p>";
?>
