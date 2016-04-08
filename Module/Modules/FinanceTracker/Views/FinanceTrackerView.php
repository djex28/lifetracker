<form name='temp' method='post'>
    <input type='hidden' name='action' value='LOGOUT'>
</form>

<script>
    $(document).ready(function(){
        $( '#collapse' ).accordion({
            collapsible: true,
            active: false
        });
        $('.clickme').click(function(){
            $('.stuff').slideToggle('slow');
        });
    });
</script>

<div id="collapse">
        <h3>Collapse and Expand</h3>
        <div>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</div>
</div>

<div class='clickme' style='width:200px; height:50px; background-color:gray; color:white; cursor: pointer; cursor: hand;'>ClickMe</div>
<div class='stuff' style='display:none; width:200px; height:50px; background-color:white; padding:10px; text-align:left;'>
    Hello how are you today?
</div>

FinanceTracker helps you log and view your finances so you can more easily budget your money.
<br><br>
<form name='record' method="post">
  <fieldset>
    <legend>Budget Money:</legend>
    Minutes Read:<br>
    <input type="text" name="minutes">
    <br>
    Begin Time:<br>
    <input type="time" name="begin">
    <br>
    End Time:<br>
    <input type="time" name="end" >
    <br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form>
<script type='text/javascript'>
    function logout() {
       document.forms['temp'].submit();
    }
</script>
<a style='cursor: pointer; cursor: hand; ' onclick="logout()">Logout</a>
