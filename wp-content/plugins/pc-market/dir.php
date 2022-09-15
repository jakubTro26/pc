<?php


$handle = opendir('/home4/smakolyk');

while (false !== ($entry = readdir($handle))) {

    if(str_contains($entry,'exp')){

        $entries[]=$entry;
    
    }
}



foreach($entries as $entry){

echo '
<script>
window.csv+='. $entry .'
</script>
';

}

?>