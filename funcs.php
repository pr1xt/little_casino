<?php
function rand_cell() {
      $items = ["💀","7️⃣","🤡","🍊","💀"];
      $z = rand(0,4);
      
      return $items[$z];
    }
    echo rand_cell();
?>
<!-- 💀,"7️⃣","🍌","🍊" -->