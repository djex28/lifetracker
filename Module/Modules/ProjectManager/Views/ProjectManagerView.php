<style>
    td, th {
        padding:5px;
    }
</style>

View and Manage current projects.

<?php 
    //i need elegant way to access database...
    echo var_dump(new DBTable('user'));
?>

<table style="width:100%; border: 1px solid black;">
    <th>Project Name</th>
    <th>Project Description</th>
    <th>Due Date</th>
    <tr>
        <td>Thailand Song Album</td>
        <td>Write a complete album all about Thailand, including the experiences I had and the individual places I served.</td>
        <td>April 2016</td>
    </tr>
    <tr>
        <td>Life Tracker</td>
        <td>Complete the LifeTracker and make sure it's in a stable state.</td>
        <td>April 2016</td>
    </tr>
</table>
