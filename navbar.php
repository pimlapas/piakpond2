<?php
$query = "SELECT * FROM tbl_prd_type ORDER BY t_id ASC" or die("Error:" . mysqli_error($conn));
$result = mysqli_query($conn, $query);
?>

<!--start  menu -->
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f8bb3c;">
                <a class="navbar-brand" href="index.php">อาหารทั้งหมด</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">ล็อคอิน</a>
                        </li>

                    </ul>



                    <form class="form-inline my-2 my-lg-0" method="get" action="index.php">
                        <input class="form-control mr-sm-2" type="search" placeholder="ค้นหาอาหาร" aria-label="Search" name="search" required>
                        <button class="btn btn-sm btn-outline-secondary" type="submit" >ค้นหา</button>
                    </form>

                </div>
            </nav>
        </div>
    </div>
</div>
<!--end  menu -->