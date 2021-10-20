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

    <section class="donor-list">
        <div class="container">
            <div class="heading">
                <h1>Donor List</h1>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Blood Group</th>
                     
                    </tr>
                  </thead>
                  <tbody>
		<?php foreach($data['posts'] as $post): ?>
                    <tr>
                      <th scope="row"><?php echo $post->id;?></th>
                      <td><?php echo $post->firstname;?></td>
                      <td><?php echo $post->lastname;?></td>
                      <td><?php echo $post->email;?></td>
			            <td><?php echo $post->phone;?></td>
                      <td><?php echo $post->blood;?></td>

                      <?php endforeach; ?>
                    </tr>
                  </tbody>
            </table>
        </div>
    </section>

    <?php else : ?>
        <?php
   require APPROOT . '\views\users\login.php';
?>    
<?php endif; ?>

<?php
   require APPROOT . '\views\includes\footer.php';
?>