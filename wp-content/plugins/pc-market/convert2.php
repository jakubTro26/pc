<?php


ini_set('memory_limit', -1); // no limit

$fields = array("towar_id","kod","cku","do_usuniecia","czy_opakowanie","nazwa","skrot","typ_towaru","vat_id","pkwiu","sww_indeks","asortyment_id","jm_id","waga","wysokosc","szerokosc","glebokosc","il_w_zgrzewce","il_paleta","il_warstwa","il_kg_litrow","kod_CN","podlega_OO","podlega_MPP","status_do_zamowien","nowosc_od","nowosc_przez","koszty_transportu","koszty_przechowywania","koszty_inne","min_cena_sprzedazy_PCPOS","aktywny_w_SI","nazwa_w_SI","cena_zakupu","cena_detal","cena_hurtowa","cena_nocna","cena_dodatkowa","cena_detal_przed_prom","cena_hurtowa_przed_prom","cena_nocna_przed_prom","cena_dodatkowa_przed_prom","marza_suger","narzut_nocny","rabat_hurtowy","rabat_dodatkowy","status_ceny","opakowanie_id","ilosc_w_opakowaniu","czy_tandem","czy_karton","czy_artykul","artykul_id","kategoria_id","producent_id","dostawca_id","dost_id","opis1","opis2","opis3","opis4","notatki","uwagi_do_dostaw","nr_drukarki","folder_zdjec","plik_zdjecia","magazyn_id","stan_magazynu","stan_magazynu_min","stan_magazynu_max","blokada_stanu","rezerwacja_ilosci","magazyn_id","stan_magazynu","stan_magazynu_min","stan_magazynu_max","blokada_stanu","rezerwacja_ilosci","magazyn_id","stan_magazynu","stan_magazynu_min","stan_magazynu_max","blokada_stanu","rezerwacja_ilosci","kody_dodatkowe","parametry","data_aktualizacji");


$columns = array();
global $columns;
global $data;
$data = array();
global $list;
$list=array();
global $stan;
$stan=array();
global $pols;
$pols = array();
global $wiersz;
global $kolumny;
$kolumny = array();
global $entries;
$entries = array();
global $csvs;
$csvs = array();
global $count;
$count=0;


class input{
    public $my_sku;
    public $towar_id;
    public $kod;
    public $cku;
    public $attribute_1_name="do_usuniecia";
    public $attribute_1_value;
    public $attribute_1_visible;
    public $attribute_2_name="czy_opakowanie";
    public $attribute_2_value;
    public $attribute_2_visible;
    public $nazwa;
    public $skrot;
    public $attribute_3_name="typ_towaru";
    public $attribute_3_value;
    public $attribute_3_visible;
    public $attribute_4_name="vat_id";
    public $attribute_4_value;
    public $attribute_4_visible;
    public $attribute_5_name="pkwiu";
    public $attribute_5_value;
    public $attribute_5_visible;
    public $attribute_6_name="sww_indeks";
    public $attribute_6_value;
    public $attribute_6_visible;
    public $attribute_7_name="asortyment_id";
    public $attribute_7_value;
    public $attribute_7_visible;
    public $attribute_8_name="jm_id";
    public $attribute_8_value;
    public $attribute_8_visible;
    public $waga;
    public $wysokosc;
    public $szerokosc;
    public $glebokosc;
    public $attribute_9_name="jm_id";
    public $attribute_9_value;
    public $attribute_9_visible;
    public $attribute_10_name="il_w_zgrzewce";
    public $attribute_10_value;
    public $attribute_10_visible;
    public $attribute_11_name="il_paleta";
    public $attribute_11_value;
    public $attribute_11_visible;
    public $attribute_12_name="il_warstwa";
    public $attribute_12_value;
    public $attribute_12_visible;
    public $il_kg_litrow;
    public $kod_CN;
    public $podlega_OO;
    public $podlega_MPP;
    public $status_do_zamowien;
    public $nowosc_od;
    public $nowosc_przez;
    public $koszty_transportu;
    public $koszty_przechowywania;
    public $koszty_inne;
    public $min_cena_sprzedazy_PCPOS;
    public $aktywny_w_SI;
    public $nazwa_w_SI;
    public $cena_zakupu;
    public $cena_detal;
    public $cena_hurtowa;
    public $cena_nocna;
    public $cena_dodatkowa;
    public $cena_detal_przed_prom;
    public $cena_hurtowa_przed_prom;
    public $cena_nocna_przed_prom;
    public $cena_dodatkowa_przed_prom;
    public $marza_suger;
    public $narzut_nocny;
    public $rabat_hurtowy;
    public $rabat_dodatkowy;
    public $status_ceny;
    public $opakowanie_id;
    public $ilosc_w_opakowaniu;
    public $czy_tandem;
    public $czy_karton;
    public $czy_artykul;
    public $artykul_id;
    public $kategoria_id;
    public $producent_id;
    public $dostawca_id;
    public $dost_id;
    public $dost_id2;
    public $opis1;
    public $opis2;
    public $opis3;
    public $opis4;
    public $notatki;
    public $uwagi_do_dostaw;
    public $nr_drukarki;
    public $folder_zdjec;
    public $plik_zdjecia;
    public $magazyn_id2;
    public $stan_magazynu2;
    public $stan_magazynu_min2;
    public $stan_magazynu_max2;
    public $blokada_stanu2;
    public $rezerwacja_ilosci2;
    public $magazyn_id3;
    public $stan_magazynu3;
    public $stan_magazynu_min3;
    public $stan_magazynu_max3;
    public $blokada_stanu3;
    public $rezerwacja_ilosci3;
    public $magazyn_id4;
    public $stan_magazynu4;
    public $stan_magazynu_min4;
    public $stan_magazynu_max4;
    public $blokada_stanu4;
    public $rezerwacja_ilosci4;
    public $magazyn_id;
    public $stan_magazynu;
    public $stan_magazynu_min;
    public $stan_magazynu_max;
    public $blokada_stanu;
    public $rezerwacja_ilosci;
    public $kod2;
    public $ilosc_w_kodzie2;
    public $opis5;
    public $poziom_cen2;
    public $kod3;
    public $ilosc_w_kodzie3;
    public $opis6;
    public $poziom_cen3;
    public $kod4;
    public $ilosc_w_kodzie;
    public $opis;
    public $poziom_cen;
    public $parametry;
    public $data_aktualizacji;
    public $visibility = 1;
    public $type = 'Simple';

   
}



class wiersz {

    public $my_sku;
    public $towar_id;
    public $kod;
    public $cku;
    public $attribute_1_name="do_usuniecia";
    public $attribute_1_value;
    public $attribute_1_visible;
    public $attribute_2_name="czy_opakowanie";
    public $attribute_2_value;
    public $attribute_2_visible;
    public $nazwa;
    public $skrot;
    public $attribute_3_name="typ_towaru";
    public $attribute_3_value;
    public $attribute_3_visible;
    public $attribute_4_name="vat_id";
    public $attribute_4_value;
    public $attribute_4_visible;
    public $attribute_5_name="pkwiu";
    public $attribute_5_value;
    public $attribute_5_visible;
    public $attribute_6_name="sww_indeks";
    public $attribute_6_value;
    public $attribute_6_visible;
    public $attribute_7_name="asortyment_id";
    public $attribute_7_value;
    public $attribute_7_visible;
    public $attribute_8_name="jm_id";
    public $attribute_8_value;
    public $attribute_8_visible;
    public $waga;
    public $wysokosc;
    public $szerokosc;
    public $glebokosc;
    public $attribute_9_name="jm_id";
    public $attribute_9_value;
    public $attribute_9_visible;
    public $attribute_10_name="il_w_zgrzewce";
    public $attribute_10_value;
    public $attribute_10_visible;
    public $attribute_11_name="il_paleta";
    public $attribute_11_value;
    public $attribute_11_visible;
    public $attribute_12_name="il_warstwa";
    public $attribute_12_value;
    public $attribute_12_visible;
    public $il_kg_litrow;
    public $kod_CN;
    public $podlega_OO;
    public $podlega_MPP;
    public $status_do_zamowien;
    public $nowosc_od;
    public $nowosc_przez;
    public $koszty_transportu;
    public $koszty_przechowywania;
    public $koszty_inne;
    public $min_cena_sprzedazy_PCPOS;
    public $aktywny_w_SI;
    public $nazwa_w_SI;
    public $cena_zakupu;
    public $cena_detal;
    public $cena_hurtowa;
    public $cena_nocna;
    public $cena_dodatkowa;
    public $cena_detal_przed_prom;
    public $cena_hurtowa_przed_prom;
    public $cena_nocna_przed_prom;
    public $cena_dodatkowa_przed_prom;
    public $marza_suger;
    public $narzut_nocny;
    public $rabat_hurtowy;
    public $rabat_dodatkowy;
    public $status_ceny;
    public $opakowanie_id;
    public $ilosc_w_opakowaniu;
    public $czy_tandem;
    public $czy_karton;
    public $czy_artykul;
    public $artykul_id;
    public $kategoria_id;
    public $producent_id;
    public $dostawca_id;
    public $dost_id;
    public $dost_id2;
    public $opis1;
    public $opis2;
    public $opis3;
    public $opis4;
    public $notatki;
    public $uwagi_do_dostaw;
    public $nr_drukarki;
    public $folder_zdjec;
    public $plik_zdjecia;
    public $magazyn_id2;
    public $stan_magazynu2;
    public $stan_magazynu_min2;
    public $stan_magazynu_max2;
    public $blokada_stanu2;
    public $rezerwacja_ilosci2;
    public $magazyn_id3;
    public $stan_magazynu3;
    public $stan_magazynu_min3;
    public $stan_magazynu_max3;
    public $blokada_stanu3;
    public $rezerwacja_ilosci3;
    public $magazyn_id4;
    public $stan_magazynu4;
    public $stan_magazynu_min4;
    public $stan_magazynu_max4;
    public $blokada_stanu4;
    public $rezerwacja_ilosci4;
    public $magazyn_id;
    public $stan_magazynu;
    public $stan_magazynu_min;
    public $stan_magazynu_max;
    public $blokada_stanu;
    public $rezerwacja_ilosci;
    public $kod2;
    public $ilosc_w_kodzie2;
    public $opis5;
    public $poziom_cen2;
    public $kod3;
    public $ilosc_w_kodzie3;
    public $opis6;
    public $poziom_cen3;
    public $kod4;
    public $ilosc_w_kodzie;
    public $opis;
    public $poziom_cen;
    public $parametry;
    public $data_aktualizacji;
    public $visibility = 1;
    public $type = 'Simple';


    function __construct($columns,$data){
        
        
       
        foreach ($this as $key => &$value) {

            global $skuval;
            

            foreach($columns as $column){



                if(strval($key)=="my_sku"){

                    if($skuval==0){
                        $skuval=1;
                    }
                    $value = $skuval;

                }
                elseif(preg_match('/attribute_._name/', strval($key)) || preg_match('/attribute_.._name/', strval($key))){


                    if(strlen(strval($key))==16){
                        $liczba = substr(strval($key),10,1);
                    }
                    else{
                        $liczba = substr(strval($key),10,2);
                    }

                    

                    $string1 = 'attribute_' . $liczba . '_value';

                    $this->$string1=$data[$value];
                    

                    $this->{'attribute_' . $liczba . '_visible'} = 1;


              
                }
                elseif(str_contains(strval($key),$column)){

                    $value=$data[$column];
                }

            }
        
        }


        $skuval++;

    }

  

}






//rffggff

function createCsv($xml, $f, $lista, &$columns, &$data, &$list, &$stan)
{


  
   global $count;
    
    
    
   
    
    

    foreach ($xml->children() as $item) {
        
        
        
        $hasChild = (count($item->children()) > 0) ? true : false;
        
        if (!$hasChild) {
            
             $string = $item->getName();
          
             $string_data = $item;

           
            
           

         
            
          
         
            
                
               
                
             
            
             
              


                 $columns[] = $string;
                 $data[$string]=$string_data;

              
                 




                 if($string=="data_aktualizacji"){

                     
                    
                   
             
                   $wiersz =  new wiersz($columns,$data);
                   
                   $count++;
                    
                    
                    //fffff
                     //array_push($list,$wiersz);
                   
                     array_push($list,(array)$wiersz);
                    
                        
    
                                       foreach ($list as $pola) {
                                        
                           fputcsv($f, $pola, ',', '"');
                          }
    
                   
                          $wiersz = NULL;
                    
                    $columns=array();
                    
                     $data=array();
                     $list=array();
                       
                 
                     
                  
                   
    
                }

          



             


            

            
           

            
       

          

           
        } else {
            createCsv($item, $f,$lista, $columns, $data, $list, $stan);
        }
        
    }
  
   
}



















$handle = opendir('/home4/smakolyk');

while (false !== ($entry = readdir($handle))) {

    if(str_contains($entry,'exp')){

        $entries[]=$entry;
    
    }
}


for($i=0;$i<count($entries);$i++){

  $csvs[] = fopen('/home4/smakolyk/test'.$i.'.csv', 'w');


  $input = new input();
        
  $ainput = (array)$input;


  foreach($ainput as $input => $in){
    $ar[]= $input;
}


    array_push($kolumny,$ar);

   


    foreach ($kolumny as $pole) {
        fputcsv($csvs[$i], $pole, ',', '"');
        }

        $kolumny=array();
        $ar=array();

}






    for($i=0;$i<count($entries); $i++)
        {
    $file = '/home4/smakolyk/' . $entries[$i];
    
    

    if (file_exists($file)) {
        
        $xml_file = simplexml_load_file($file);
      
       
        
        createCsv($xml_file, $csvs[$i], $fields, $columns, $data, $list, $stan);
    }
        }


fclose($file_csv);

var_dump($count);

//cwd wp_admin
// if (file_exists($filexml)) {
    
//     $xml = simplexml_load_file($filexml);
    
    
//     $f = fopen('/home4/smakolyk/test.csv', 'w');
    
//    // array_push($kolumny,$fields);
//     //var_dump($kolumny);
//     // foreach ($kolumny as $pole) {
//     //     fputcsv($f, $pole, ',', '"');
//     //    }
    
//         $input = new input();
        
//         $ainput = (array)$input;

//         foreach($ainput as $input => $in){
//             $ar[]= $input;
//         }

//      array_push($kolumny,$ar);
        

    
//      foreach ($kolumny as $pole) {
//         fputcsv($f, $pole, ',', '"');
//         }
       
       

//     createCsv($xml, $f,$fields, $columns, $data, $list, $stan);
 
    
    

       


//     fclose($f);
   
   

// }

echo '
<script>
document.querySelector(".accept").style.display="block";
console.log("kuba");
</script>
';






?>