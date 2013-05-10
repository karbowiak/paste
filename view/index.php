<?php
if($_POST)
{
    $code = "";
    $type = "";
    
    if(isset($_POST["code"]))
        $code = $_POST["code"];
    if(isset($_POST["type"]))
        $type = $_POST["type"];
    
    if($code)
    {
        $hash = Gesh::save($code, $type);
        if($hash)
            $app->redirect("/".$hash."/");
    }
}
$app->render("index.html", array());
