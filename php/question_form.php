<?php
function filter($int){
        if($int==0){
            echo'
            <div class="radio">
            <input type="radio" id="0" name="filter" value="0" checked><label for="0">بلا فلتر</label><br>
            </div>
            <div class="radio"> 
            <input type="radio" id="1" name="filter" value="1"><label for="1">قسم الأسئلة فقط</label><br>
            </div>                       
            <div class="radio">
                    <input type="radio" id="2" name="filter" value="2"><label for="2">قسم النصائح فقط</label><br>
            </div>';
        }
        elseif($int==1){
            echo'
            <div class="radio">
            <input type="radio" id="0" name="filter" value="0" ><label for="0">بلا فلتر</label><br>
            </div>
            <div class="radio"> 
            <input type="radio" id="1" name="filter" value="1" checked><label for="1">قسم الأسئلة فقط</label><br>
            </div>                       
            <div class="radio">
                    <input type="radio" id="2" name="filter" value="2"><label for="2">قسم النصائح فقط</label><br>
            </div>';
        }
        elseif($int==2){
            echo'
            <div class="radio">
            <input type="radio" id="0" name="filter" value="0" ><label for="0">بلا فلتر</label><br>
            </div>
            <div class="radio"> 
            <input type="radio" id="1" name="filter" value="1"><label for="1">قسم الأسئلة فقط</label><br>
            </div>                       
            <div class="radio">
                    <input type="radio" id="2" name="filter" value="2" checked><label for="2">قسم النصائح فقط</label><br>
            </div>';
        }
    }

?>