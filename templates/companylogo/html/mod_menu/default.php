﻿<?php
defined('_JEXEC') or die;
?>
<ul class="menu">
<?php
foreach ($list as $i => &$item) {
    $curent = FALSE;
    if ($item->id == $active_id) {
        $curent = TRUE;
    }
    echo "<li>";
    if ($curent) {
        echo "<a href='".$item->flink."' class='active'>".$item->title."</a>";
    } else {
        echo "<a href='".$item->flink."'>".$item->title."</a>";
    }
}
?>
</ul>