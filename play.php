<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
    $about_banner = $row['about_banner'];}?>
<?php echo $about_banner; 

$sql="SELECT about_banner FROM tbl_page WHERE id=1";
