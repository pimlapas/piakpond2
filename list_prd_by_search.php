<?php
@$search = $_GET['search'];
$query = "SELECT * FROM `tbl_prd` 
WHERE `p_name` 
LIKE '%$search%' 
ORDER BY `p_id` DESC"
    or die("Error:" . mysqli_error());
$result = mysqli_query($conn, $query);
//echo $query;

?>
<body background="img/bg.jpg">

<!-- start prd -->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <h3> :: รายการอาหาร::</h3><br>
        </div>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <div class="col-sm-6 col-md-3" >
            <div class="card" style="width: 100%;" >
                    <img src="pimg/<?php echo $row['p_img']; ?>" width="100%">
                    <div class="card-body">
                        <h5>
                            <?php echo $row['p_name']; ?>


                        </h5>
                        <p>
                            <?php echo $row['p_intro']; ?>
                        </p>

                        ราคา <?php echo number_format($row["p_price"]); ?> บาท
                        <?php if($row["p_price2"]==0.00){
                            }else {                               ?>
                        <br>พิเศษ <?php echo number_format($row["p_price2"]); ?> บาท
                        <?php }?>
                        <p>

                            <a href="detail.php?p_id=<?php echo $row['p_id']; ?>" class="btn btn-info" role="button">รายละเอียด</a>
                        
                        </p>

                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!-- end prd -->