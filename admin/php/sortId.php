<?php

function sortId ($tableName){
    require "../php/config.php";
    
        // remove auto increament
        $remove_auto_increament=$data_base->prepare("ALTER TABLE `$tableName` CHANGE `id` `id` INT(11) NOT NULL;");
        $remove_auto_increament->execute();
    
        // remove auto primaryKey
        $remove_auto_primaryKey=$data_base->prepare("ALTER TABLE `$tableName` DROP PRIMARY KEY;");
        $remove_auto_primaryKey->execute();
    
         // remove id column
         $remove_id_column=$data_base->prepare("ALTER TABLE `$tableName` DROP `id`;");
         $remove_id_column->execute();
     
           // add id column
           $add_id_column=$data_base->prepare("ALTER TABLE `$tableName` ADD `id` INT(11) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`);");
           $add_id_column->execute();
       
    }
if(isset($_GET["sortId"])){
$tables = ["firstYearFiles","secondYearFiles","thirdYearFiles","fourthYearFiles","fifthYearFiles"];
for($i = 0 ; $i<5 ;$i++){
    sortId($tables[$i]);
}

}
?>