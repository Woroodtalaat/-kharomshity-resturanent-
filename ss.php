//فى صفحة السين اب
<?php  if (count($errors) >0) : ?>
                <div class= "alert alert-danger">
                    <?php foreach($errors as $errors): ?>
                        <li><?php echo $errors ; ?></li>
                        <?php endforeach;?>
                </div>
                <?php endif; ?>


                //index.php
                if(!isset($_SESSION['username']))
header('location: login.php');