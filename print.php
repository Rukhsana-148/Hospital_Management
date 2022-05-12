<?php
$name = $age = $test = "";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $test = $_POST['test'];
    $dis = $_POST['dis'];
}
/*header("Content-Type:application/octet-stream");
$file = $_GET["file"].".pdf";
header("Content-Disposition : attachment;filename=".urlencode($file));
header("Content-Type:application/print");
header("Content-Description: File Transfer");
header("Content Length : ".filesize($file));
flush();
$fp = fopen($file, "r");
while(!feof($fp)){
    echo fread($fp, 65536);
    flush();
}
fclose($fp);*/
?>
<?php include 'head.html'?>
<div class="contain">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
        <h4 class="text-center">Medical Test</h4>
            <h5 class="text-center">Nova Medical Hospital, Jashore</h5>
            <h6 class="text-center">Call:014567890, 01345678923</h6>
            <div class="form">   
                    <ul>
                        <li>Name : <?php echo $name;?></li>
                        <li>Age : <?php echo $age;?></li>
                        <li>Disease : <?php echo $dis;?></li>
                        <li>Test and Taka : <?php echo $test;?></li>
                       
                      </ul>
            </div>
            <div class="col-sm-4">
                <a href="d.php?file=gfgfgf" class="btn btn-primary text-white">Download Pdf</a>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.html'?>