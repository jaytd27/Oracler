
<?php
$dbhost = 'localhost:3036';
$dbuser = 'jxm6478';
$dbpass = 't7-pjCA3';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$quest;
$sql = 'SELECT answer FROM Datasets where question='.$quest.'and id=.'$id;

mysql_select_db('test_db');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "EMP ID :{$row['answer']}  <br> ".
        
         "--------------------------------<br>";
} 
echo "Fetched data successfully\n";
mysql_close($conn);
?>