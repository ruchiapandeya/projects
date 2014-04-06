<?php 
$fa=$_GET['fa'];
$link = mysql_connect('localhost','root',''); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('monster_job');
$query="SELECT * FROM role WHERE functional_area='$fa'";
$result=mysql_query($query);

?>
<select name="role" class="headings" style="width:215px;">
<option>Select Role</option>
<?php while($row=mysql_fetch_array($result)) { ?>

<option value="<?php echo $row[role];?>"><?php echo $row[role];?></option>

<?php } ?>
</select>
