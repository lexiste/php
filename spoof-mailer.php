<?php
   $to = "target@domain";
   $subject = "test message";
   $txt = "this could contain a link to a malicious site";
   $headers = "From:privacy@domain.com";
   mail($to,$subject,$txt,$headers);
?>
