<form name='temp' method='post'>
    <input type='hidden' name='action' value='LOGOUT'>
</form>

The ScriptureTracker module helps you be accountable to yourself and others on your personal study of the scriptures. Here, you can keep a daily record of when you read and what you read. It merely is a simple way to remind yourself to read and to track how much time you really spend in the standard works each day.
<br><br> The purpose of this module is improvement in scripture study. It is not intended to be merely a checklist, but rather a way for us to improve the amount of time and the way we study.
<br><br>
<form name='record' method="post">
  <fieldset>
    <legend>Accountability:</legend>
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
