<?php
function dd($param){
    echo '<pre>';
    echo print_r($param);
    echo '</pre>';
}
function goUri($uri){
    echo '<script language="JavaScript">
        document.location.href = \''.$uri.'\'</script>';
}

function showAlert($text){
    echo '<script language="JavaScript">
    alert( \''.$text.'\' );
</script>';
}
?>
