<?php 
include ('PdfToText-master\PdfToText.phpclass');
    $pdf = new PdfToText ('test.pdf');
    $string = "Developer"
    $data = $pdf ->Text;
    if(strops($data,$string) !== false){
        echo $string;
    }
    else{
        echo "failed to search";
    }
?>