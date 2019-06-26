<option></option>
<?php 
                        $db = mysqli_connect('localhost', 'root', '', 'logistic');
                        $query = "SELECT sku_code FROM supplies WHERE supplier = '".$_POST['value']."'";
                        $result = mysqli_query($db, $query);

                        while($row1 = mysqli_fetch_array($result)):;
                      ?>
                      <option value ="<?php echo $row1['sku_code'];?>"><?php echo $row1['sku_code'];?></option>
                    <?php endwhile;?>