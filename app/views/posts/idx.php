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
