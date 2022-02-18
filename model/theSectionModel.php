<?php
$tab = []
try{
$db = $theSectionSelectAllNav -> qurey 
    ("SELECT * idthesection,thesectiontitle 
      FROM thesection
      ORDER BY thesectiontitle ASC") -> fetchall();
}catch (Exception $e){
    echo $tab. $e->getCode();
}


?>