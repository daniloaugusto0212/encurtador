<?php

$selectOldUrl = Query::selectWhere('translate', 'new_link = ?', array($url))['link'];
if (!empty($selectOldUrl)) {
    header("Location: http://" . $selectOldUrl);
} else {
    header("Location: " . INCLUDE_PATH . 'erro404');
}