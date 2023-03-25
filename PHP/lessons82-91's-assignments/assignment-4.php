<?php

function change_permissions($fileName){
    if(is_dir($fileName))
    {
        return "This Is Directory And Only Files Allowed";
    }
    else
    {
        if(mime_content_type($fileName)== "text/plain")
        {
            chmod($fileName,0700);
            clearstatcache();
            echo fileperms($fileName). "<br>";
            return "Permissions Changed";
        }
        else
        {
            return "File Extension Is Not Txt";
        }
    }
}
echo change_permissions("mahmoud.txt");



// Test Cases

// echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
// echo change_permissions("Work.docx"); // File Extension Is Not Txt
// echo change_permissions("Result.txt"); // Permissions Changed
?>
