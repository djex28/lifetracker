<form name='temp' method='post'>
    <input type='hidden' name='action' value='LOGOUT'>
</form>
<div style="width:auto; height:auto; margin:0px; background-image: url('View/Templates/Images/IMG_9211.jpg'); background-size: cover; -webkit-background-size: cover;">
<div class='container'>
    <center>
        
        <?php 
            require '../../Module/ModuleManager.php';
            //$moduleManager = new ModuleManager();
            //$moduleManager->displayActivatedModules();
        ?>
        
        <div style='margin-top:50px; width:auto; max-width:800px; height:auto; background-color:#eee;'><font color='red'><?php /*echo isset($_POST['error']) ? str_replace("+", " ", $_POST['error']) : null;*/ echo isset($_POST['error']) ? urldecode($_POST['error']) : null; ?></font></div>
     <div style='width:auto; height:auto; max-width:800px; text-align:left; background-color:#eee; background: rgba(204, 204, 204, 0.5); margin-top:10px; '>
         <div style='vertical-align: middle; line-height: 50px; text-align:left; padding-left:10px; font-size:28px; color: white; width:100%; height:50px; background-color:#222;'>
             Main View
         </div>
         <!--<input type='date' width='1000px'>
         <div style='padding:10px;'>Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.
To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.
Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.
         </div>!-->
         <div style='padding:10px;'>
    Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.
<br><br>To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.
<br><br>Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.
<br><br>Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.
         </div>
         <script type='text/javascript'>
             function logout() {
                document.forms['temp'].submit();
            }
          </script>
         <a style='cursor: pointer; cursor: hand; ' onclick="logout()">Logout</a>
         </div>
        <br><br>
        <div style='width:auto; height:auto; max-width:800px; text-align:left; background-color:#eee; background: rgba(204, 204, 204, 0.5); margin-top:10px; '>
         <div style='vertical-align: middle; line-height: 50px; text-align:left; padding-left:10px; font-size:28px; color: white; width:100%; height:50px; background-color:#222;'>
             Test View
         </div>
         <!--<input type='date' width='1000px'>
         <div style='padding:10px;'>Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.
To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.
Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.
         </div>!-->
         <div style='padding:10px;'>
    Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.
<br><br>To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.
<br><br>Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.
<br><br>Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.
         </div>
         <script type='text/javascript'>
             function logout() {
                document.forms['temp'].submit();
            }
          </script>
         <a style='cursor: pointer; cursor: hand; ' onclick="logout()">Logout</a>
         </div>
        <br><br>
        
        <div class='signin-response' style='color:red;'></div>
     </center>
  <!-- Example row of columns -->
  <div class='row'>
    <!--<div class='col-md-4'>
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class='btn btn-default' href='#' role='button'>View details &raquo;</a></p>
    </div>
    <div class='col-md-4'>
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class='btn btn-default' href='#' role='button'>View details &raquo;</a></p>
   </div>
    <div class='col-md-4'>
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class='btn btn-default' href='#' role='button'>View details &raquo;</a></p>
    </div>!-->
    <div class='col-md-4'>
        <!--<input data-provide='datepicker'>!-->
        <!--<input type='text' class='datepicker'>!-->
    </div>
  </div>

  <!--<hr>

  <footer>
    <p>&copy; LifeTracker 2015</p>
  </footer>!-->
</div>
    </div>

