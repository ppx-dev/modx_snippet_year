<?php
if ($modx->user->hasSessionContext('mgr')) {
$output = '<div style="position: fixed; bottom: 5px; right: 5px; color: black; text-align: left; background: white; padding: 10px; z-index: 999; font-size: 14px; line-height: 1.3;">Время:   [^t^]<br>Память:   '.round((memory_get_peak_usage(true) / 1024 / 1024),2).' Мб<br>Источник:   [^s^]<br>Запросы:   [^q^]<br>Время базы:   [^qt^]</div>';
}
return $output;
