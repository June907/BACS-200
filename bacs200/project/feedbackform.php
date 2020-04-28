<? php
    
if (isset($_POST['subit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom= $_POST['mail'];
    $message = $_POST['message'];
    
    $mailTo = "huan0887@bears.unco.edu";
    $headers = "From: My website";
    $txt = "You have received an email from: my website"."\n\n".$message;
    
    mail($mailTo,$subject,$txt,$headers);
    header("Location: feedback.html?mailsend");
    
}