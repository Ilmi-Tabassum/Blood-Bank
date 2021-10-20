<?php
   require APPROOT . '\views\includes\header.php';
?>
    <?php
       require APPROOT . '\views\includes\menu.php';
    ?>
    <?php if(isset($_SESSION['user_id'])) : ?>

    <div class="home-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="user-info">
                            <ul>
                            
                                <h3>User Information</h3>
                                <li>
                                    <p>Name</p>
                                    <p>:<?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?></p>
                                </li>
                                <li>
                                    <p>Email</p>
                                    <p>: <?php echo $_SESSION['email'] ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4> Search Required Blood Group </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                               
                                   
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","mvcframework");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM reg WHERE CONCAT(blood) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                         
                                            
                                                    <td><?= $items['firstname']; ?></td>
                                                    <td><?= $items['lastname']; ?></td>
                                                    <td><?= $items['email']; ?></td>
                                                    <td><?= $items['phone']; ?></td>
                                                    <td><?= $items['blood']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
    


                    <?php else : ?>
        <?php
   require APPROOT . '\views\users\login.php';
?>    
<?php endif; ?>

<?php
   require APPROOT . '\views\includes\footer.php';
?>