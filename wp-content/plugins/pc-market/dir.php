<?php


$handle = opendir('/home4/smakolyk');

while (false !== ($entry = readdir($handle))) {

    if(str_contains($entry,'exp')){

        $entries[]=$entry;
    
    }
}



echo '
<script>
window.csv=[];
</script>
';


foreach($entries as $entry){

echo '
<script>
window.csv.push("'. $entry .'");
</script>
';

}

?>