<?php
$file = 'innerchat.php';
$newfile = 'chat/innerchat.php';

if (!copy($file, $newfile)) {
    echo "Error restoring the chat. The file '$file'\nfailed to transfer to $newfile...\n";
}
?>