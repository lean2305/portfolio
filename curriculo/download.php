<?php
$filename = 'Curriculo_Colorido_com_Gradiente_e_Fotografia_para_Designer_2.pdf';

header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="' . $filename . '"');
readfile($filename);
header("Location: ../index.html");
?>
