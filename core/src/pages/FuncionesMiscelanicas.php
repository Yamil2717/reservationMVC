<?php

function LoadHtmlContens($file)
{
    $html = file_get_contents($file);

    return $html;
  
}

?>