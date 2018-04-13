<?php
header('Content-disposition: attachment; filename=srtreportmed.pdf');
header('Content-type: application/pdf');
readfile('srtreportmed.pdf');
?>
