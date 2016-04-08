<?php

class ModuleTheme {
    
    public function __construct() {
        
    }
    
    public function startDiv($title) {
        $collapse = 'Collapse';
        $content = 'Content';
        echo "<script>
        $(document).ready(function(){
            $('.$title$collapse').click(function(){
                $('.$title$content').slideToggle('slow');
            });
        });
        </script>";
        echo "<br><div style='width:auto; height:auto; max-width:800px; text-align:left; background-color:#eee; background: rgba(204, 204, 204, 0.6); margin-top:10px; '>
         <div class='$title$collapse' style='vertical-align: middle; line-height: 50px; text-align:left; padding-left:10px; font-size:28px; color: white; width:100%; height:50px; background-color:#222;'>
             ".$title."
         </div>
         <div class='$title$content' style='padding:10px;'>";
    }
    
    public function closeDiv() {
        echo "</div></div><br>";
    }
}

