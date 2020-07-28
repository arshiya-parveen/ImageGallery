<?php
    $con = new mysqli("localhost","root","","gallery");
    $query = "SELECT * FROM image";
    $result = $con->query($query);
    $data = $result->fetch_object();
    $name= $_GET['nama']; //admin/uploads/i.jpg
    download($name);
    function download($name) {
        // global $file;
        global $data;
        //$file = "admin/uploads/".$data->i_image;
        if (file_exists($name)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename='.basename($name));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($name));
            ob_clean();
            flush();
            readfile($name);
            exit;
        }
    }
?>





