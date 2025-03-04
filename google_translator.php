
<?php
if (session_status() == PHP_SESSION_NONE) {
session_start();
}
if(isset($_SESSION['fullname'])){
    $fullname = $_SESSION['fullname']; 
    $member_id = $_SESSION['member_id'];
} else
{

}
?>

<script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
<script>
function loadGoogleTranslate(){
    new google.translate.TranslateElement("main-body")
}
</script>

<div id="main-body" class="d-flex justify-content-end">     
</div>
    