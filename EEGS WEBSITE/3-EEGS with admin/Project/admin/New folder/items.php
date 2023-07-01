<?php
    ob_start();
    $pageTitle = 'Categories';

    session_start(); //continue session of logging in
    //main if condition must be true to continue
    if(isset($_SESSION['Username'])) { //if the user logged in already 

    include 'init.php'; //init has header and navbar
            // Check for get method
            $do = '' ;
            if(isset($_GET['do'])) {
                $do = $_GET['do'] ;
            } else {
                $do = 'Manage' ; 
            }
//-------------------------------------------------------------------------------
            if($do == 'Manage') { 

                
                $stmt = $con->prepare("SELECT items.*, categories.Name AS Category_Name, users.Username FROM items
                                        INNER JOIN
                                            categories 
                                        ON
                                            categories.ID = items.Cat_ID 
                                        INNER JOIN
                                            users 
                                        ON
                                            users.UserID = items.Member_ID
                                        ORDER BY Item_ID DESC
                                        "); //join query
                //execute the statement
                $stmt->execute();
                //assign all the data to avariable
                $items = $stmt->fetchAll();

                if (! empty($items)) {
                ?>
                <h1 class="text-center">Manage Items</h1>
                    <div class="container">
                        <div class="table-responsive">
                            <table class="main-table text-center table table-bordered">
                                <tr>
                                    <td>#ID</td>
                                    <td>Name</td>
                                    <td>Drescription</td>
                                    <td>Price</td>
                                    <td>Adding Date</td>
                                    <td>Category</td>
                                    <td>User</td>
                                    <td>control</td>
                                </tr>
                                <?php
                                    foreach($items as $item) {
                                        echo "<tr>";
                                            echo "<td>" . $item['Item_ID'] . "</td>";
                                            echo "<td>" . $item['Name'] ."</td>";
                                            echo "<td>" . $item['Description'] ."</td>";
                                            echo "<td>" . $item['Price'] ."</td>";
                                            echo "<td>" . $item['Add_Date'] . "</td>";
                                            echo "<td>" . $item['Category_Name'] . "</td>";
                                            echo "<td>" . $item['Username'] . "</td>";
                                            echo  "<td>
                                                    <a href='items.php?do=Edit&itemid=" . $item['Item_ID'] . "' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
                                                    <a href='items.php?do=Delete&itemid=" . $item['Item_ID'] . "' class='btn btn-danger confirmation'><i class='fa fa-close'></i> Delete</a>";
                                                    if ($item['Approve'] == 0) {
                                                        echo "<a href='items.php?do=Approve&itemid=" . $item['Item_ID'] . "' class='btn btn-info activate'><i class='fa fa-check'></i> Approve</a>";          
                                                    }                                                            

                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                ?>
                                
                            </table>
                        </div>
                        <a href = "items.php?do=Add" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Add New Item</a>
                    </div>
            <?php } else {
                        echo '<div class="container">';
                            echo '<div class="alert alert-info">There is no items to show </div>';    
                            echo '<a href = "items.php?do=Add" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Add New Item</a>';
                        echo '</div>';           
                         } ?>
<?php ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            } elseif ($do == 'Add') { ?>
                <h1 class="text-center">Add New Item</h1>     
                <div class="container">
                    <form class="form-horizontal" action="items.php?do=Insert" method="POST">
                        <!--start name-->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label ">Name</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="text" name="name" class="form-control"  required='required' placeholder='Name of The Item'/>
                            </div>
                        </div>
                        <!--start description-->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="text" name="description" class="form-control" required='required' placeholder='Description of The Item'/>
                            </div>
                        </div>
                        <!--start Price-->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">Price</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="text" name="price" class="form-control" required='required' placeholder='Price of The Item'/>
                            </div>
                        </div>
                        <!--start country-->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">Country</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="text" name="country" class="form-control" required='required' placeholder='Country Of Made'/>
                            </div>
                        </div>
                        <!--start status-->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-10 col-md-4">
                                <select class="form-control" name="status">
                                    <option value="0">...</option>
                                    <option value="1">New</option>
                                    <option value="2">Like New</option>
                                    <option value="3">Used</option>
                                    <option value="4">Old</option>
                                </select>
                            </div>
                        </div>
                        <!--start member-->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">Member</label>
                            <div class="col-sm-10 col-md-4">
                                <select class="form-control" name="member">
                                    <option value="0">...</option>
                                    <?php
                                        $stmt = $con->prepare("SELECT * FROM users");
                                        $stmt->execute();
                                        $users = $stmt->fetchAll();
                                        foreach ($users as $user) {
                                            echo "<option value='" . $user['UserID'] . "'>" . $user['Username'] . "</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <!--start category-->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">Category</label>
                            <div class="col-sm-10 col-md-4">
                                <select class="form-control" name="category">
                                    <option value="0">...</option>
                                    <?php
                                        $allCats = getAllFromUltimate("*", "categories", "WHERE parent = 0" , "", "ID");
                                        
                                        foreach ($allCats as $cat) {
                                            echo "<option value='" . $cat['ID'] . "'>" . $cat['Name'] . "</option>"; 
                                            $childCats = getAllFromUltimate("*", "categories", "WHERE parent = {$cat['ID']}", "", "ID" );
                                            foreach($childCats as $child) {
                                                echo "<option value='" . $child['ID'] . "'>---" . $child['Name'] . "</option>";
                                            }
                                            
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <!--start tags-->
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">Tags</label>
                            <div class="col-sm-10 col-md-4">
                                <input type="text" name="tags" class="form-control"  placeholder='Seperate tags with Comma'/>
                            </div>
                        </div>

                        
                        <!-- Add button-->
                        <div class="form-group form-group-lg">
                            <div class="col-sm-offset-2 col-sm-10 ">
                                <input type="submit" value="Add Item" class="btn btn-primary btn-sm" />
                            </div>
                        </div>


                    </form>
                </div>
<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            } else if ($do == 'Insert') { 

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    echo '<h1 class="text-center">Insert New Item</h1>';

                    echo '<div class="container">';


                        $name = $_POST['name'];
                        $desc = $_POST['description'];
                        $price = $_POST['price'];
                        $country = $_POST['country'];
                        $status =  $_POST['status'];
                        $member =  $_POST['member'];
                        $category =  $_POST['category'];
                        $tags =  $_POST['tags'];

                        //validate the form
                        $formErrors = array();
                        
                        if(empty($name) ) {
                            $formErrors[] = '<div class="alert alert-danger"> name Cant Be empty</div>';
                        }
                        if(empty($desc) ) {
                            $formErrors[] = '<div class="alert alert-danger"> decription Cant Be empty</div>';
                        }
                        if(empty($price) ) {
                            $formErrors[] = '<div class="alert alert-danger"> price Cant Be empty</div>';
                        }
                        if(empty($country) ) {
                            $formErrors[] = '<div class="alert alert-danger"> Country Cant Be empty</div>';
                        }
                        if($status === 0 ) {
                            $formErrors[] = '<div class="alert alert-danger"> status must Be chosen</div>';
                        }
                        if($member === 0 ) {
                            $formErrors[] = '<div class="alert alert-danger"> member must Be chosen</div>';
                        }
                        if($category === 0 ) {
                            $formErrors[] = '<div class="alert alert-danger"> category must Be chosen</div>';
                        }


                        foreach ($formErrors as $error) {
                            echo $error ;
                        }

                        //check if no errors proceed the update
                        if (empty($formErrors)) {
                            
                                //Insert info from form to  database 
                                $stmt = $con->prepare("INSERT INTO 
                                                            items(Name, Description, Price, Country_Made, Status ,Add_Date, Cat_ID, Member_ID, tags )
                                                        VALUES (?, ?, ?, ?, ?, now(), ?, ?, ? ) ");
                                $stmt->execute([$name, $desc, $price, $country , $status, $category, $member, $tags]);
                                $theMsg = '<div class="alert alert-success">' . $stmt->rowCount() . ' Record Inserted</div>';
                                redirectHome($theMsg, 'back');
                            
                        }
                        
                } else {
                    echo '<div class="container">';
                    $theMsg = '<div class="alert alert-danger"> Sorry Cannot Browse Directly</div>' ;
                    redirectHome ($theMsg);
                    echo '</div>';
                }
                echo '</div>';
//8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888                
            } else if ($do == 'Edit') { 
            
                $itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ? intval($_GET['itemid']) : 0; //check the number of userid for the user that i get from database
                                                                                                        // by session['ID'] and echo it in the url and get it by get method
                //select all the data about the userid
                $stmt = $con->prepare("SELECT * FROM items WHERE Item_ID = ?  "); 
                $stmt->execute(array($itemid));
            
                //fetch"جلب" all the record from database
                $item = $stmt->fetch();  //array contain the record data
                $count = $stmt->rowCount(); //check count of records in database

                if($count > 0) { ?>

                    <h1 class="text-center">Edit Item</h1>
                    <div class="container">
                        <form class="form-horizontal" action="items.php?do=Update" method="POST">
                            <input type = "hidden" name="itemid" value="<?php echo $itemid; ?>" />  
                            <!--start name-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label ">Name</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="text" name="name" class="form-control"  required='required' placeholder='Name of The Item' value='<?php echo $item["Name"] ?>'/>
                                </div>
                            </div>
                            <!--start description-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="text" name="description" class="form-control" required='required' placeholder='Description of The Item' value='<?php echo $item["Description"] ?>'/>
                                </div>
                            </div>
                            <!--start Price-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Price</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="text" name="price" class="form-control" required='required' placeholder='Price of The Item' value='<?php echo $item["Price"] ?>'/>
                                </div>
                            </div>
                            <!--start country-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Country</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="text" name="country" class="form-control" required='required' placeholder='Country Of Made' value='<?php echo $item["Country_Made"] ?>'/>
                                </div>
                            </div>
                            <!--start status-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10 col-md-4">
                                    <select class="form-control" name="status">
                                        <option value="1" <?php if($item['Status'] == 1) {echo 'selected';} ?>>New</option>
                                        <option value="2" <?php if($item['Status'] == 2) {echo 'selected';} ?>>Like New</option>
                                        <option value="3" <?php if($item['Status'] == 3) {echo 'selected';} ?>>Used</option>
                                        <option value="4" <?php if($item['Status'] == 4) {echo 'selected';} ?>>Old</option>
                                    </select>
                                </div>
                            </div>
                            <!--start member-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Member</label>
                                <div class="col-sm-10 col-md-4">
                                    <select class="form-control" name="member">
                                        <?php
                                            $stmt = $con->prepare("SELECT * FROM users");
                                            $stmt->execute();
                                            $users = $stmt->fetchAll();
                                            foreach ($users as $user) {
                                                echo "<option value='" . $user['UserID'] . "'" ;
                                                if($item['Member_ID'] == $user['UserID']) {echo 'selected';}
                                                echo ">" . $user['Username'] . "</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <!--start category-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Category</label>
                                <div class="col-sm-10 col-md-4">
                                    <select class="form-control" name="category">
                                        <?php
                                            $stmt2 = $con->prepare("SELECT * FROM categories");
                                            $stmt2->execute();
                                            $cats = $stmt2->fetchAll();
                                            foreach ($cats as $cat) {
                                                echo "<option value='" . $cat['ID'] . "'";
                                                if($item['Cat_ID'] == $cat['ID']) {echo 'selected';}
                                                echo ">" . $cat['Name'] . "</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <!--start tags-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Tags</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="text" name="tags" class="form-control"  placeholder='Seperate tags with Comma' value = "<?php echo $item['tags'] ?>"/>
                                </div>
                            </div>


                            
                            <!-- Add button-->
                            <div class="form-group form-group-lg">
                                <div class="col-sm-offset-2 col-sm-10 ">
                                    <input type="submit" value="Save" class="btn btn-primary btn-sm" />
                                </div>
                            </div>


                        </form>
                        <?php
                        $stmt = $con->prepare("SELECT
                                            comments.*,  users.Username AS Member
                                        FROM
                                            comments
                                        INNER JOIN
                                            users
                                        ON
                                            users.UserID = comments.user_id
                                        WHERE 
                                        item_id = ?");
                //execute the statement
                $stmt->execute(array($itemid));
                //assign all the data to avariable
                $rows = $stmt->fetchAll();

                
                if(!empty($rows)) {
                ?>
                <h1 class="text-center">Manage <?php echo $item['Name'] ?> Comments </h1>
                        <div class="table-responsive">
                            <table class="main-table text-center table table-bordered">
                                <tr>
                                    <td>Comment</td>
                                    <td>User Name</td>
                                    <td>Added Date</td>
                                    <td>Control</td>
                                </tr>
                                <?php
                                    foreach($rows as $row) {
                                        echo "<tr>";
                                            echo "<td>" . $row['comment'] ."</td>";
                                            
                                            echo "<td>" . $row['Member'] ."</td>";
                                            echo "<td>" . $row['comment_date'] . "</td>";
                                        echo  "<td>
                                                    <a href='comments.php?do=Edit&comid=" . $row['c_id'] . "' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
                                                    <a href='comments.php?do=Delete&comid=" . $row['c_id'] . "' class='btn btn-danger confirmation'><i class='fa fa-close'></i> Delete</a>";
                                                    if ($row['status'] == 0) {
                                                       echo "<a href='comments.php?do=Approve&comid=" . $row['c_id'] . "' class='btn btn-info activate'><i class='fa fa-check'></i> Approve</a>";          
                                                    }                                                             

                                                echo "</td>";
                                        echo "</tr>";
                                    }
                                ?>
                                
                            </table>
                <?php } ?>
                            </div>
                    
                        </div>
                    
        <?php   } else { //if there is no id 
                    echo '<div class="container">';
                    $theMsg = '<div class="alert alert-danger"> THere is no such id</div>' ;
                    redirectHome ($theMsg);
                    echo '</div>';                
                }

//===============================================================================================================================================
            } elseif ($do == 'Update') {
                echo '<h1 class="text-center">Update Item</h1>';

                echo '<div class="container">';

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $id = $_POST['itemid'];
                    $name = $_POST['name'];
                    $desc = $_POST['description'];
                    $price = $_POST['price'];
                    $country = $_POST['country'];
                    $status = $_POST['status'];
                    $member = $_POST['member'];
                    $cat = $_POST['category'];
                    $tags = $_POST['tags'];
                    //validate the form
                    $formErrors = array();
                        
                    if(empty($name) ) {
                        $formErrors[] = '<div class="alert alert-danger"> name Cant Be empty</div>';
                    }
                    if(empty($desc) ) {
                        $formErrors[] = '<div class="alert alert-danger"> decription Cant Be empty</div>';
                    }
                    if(empty($price) ) {
                        $formErrors[] = '<div class="alert alert-danger"> price Cant Be empty</div>';
                    }
                    if(empty($country) ) {
                        $formErrors[] = '<div class="alert alert-danger"> Country Cant Be empty</div>';
                    }
                    if($status === 0 ) {
                        $formErrors[] = '<div class="alert alert-danger"> status must Be chosen</div>';
                    }
                    if($member === 0 ) {
                        $formErrors[] = '<div class="alert alert-danger"> member must Be chosen</div>';
                    }
                    if($cat === 0 ) {
                        $formErrors[] = '<div class="alert alert-danger"> category must Be chosen</div>';
                    }


                    foreach ($formErrors as $error) {
                        echo $error ;
                    }

                    //check if no errors proceed the update
                    if (empty($formErrors)) {
                        //update database with this info
                        $stmt = $con->prepare("UPDATE items SET Name = ?, Description = ?, Price = ?, Country_Made = ?, Status = ?, Cat_ID = ? , Member_ID = ?, tags = ?  WHERE Item_ID = ? ");
                        $stmt->execute(array($name, $desc, $price, $country, $status, $cat, $member, $tags , $id));
                        $theMsg = '<div class="alert alert-success">' . $stmt->rowCount() . ' Record Updated</div>';
                        redirectHome($theMsg , 'back');
                    }
                    
                } else {
                    $theMsg = '<div class="alert alert-danger">Sorry Cannot Browse Directly</div>' ;
                    redirectHome($theMsg);
                }
                echo '</div>';
            } else if ($do == 'Delete') {
                echo "<h1 class='text-center'>Delete Item</h1>";
                echo "<div class='container'>";
                    $itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ? intval($_GET['itemid']) : 0; //check the number of userid for the user that i get from database
                                                                                                            // by session['ID'] and echo it in the url and get it by get method
                    //select all the data about the userid
                    /* We can replace it by the check item function---> 
                    $stmt = $con->prepare("SELECT * FROM users WHERE UserID = ? LIMIT 1 "); 
                    $stmt->execute(array($userid));
                
                    $count = $stmt->rowCount(); //check count of records in database
                    */
                    $check = checkItem('Item_ID','items' , $itemid);
                        if($check > 0) { 
                            $stmt = $con->prepare("DELETE FROM items WHERE Item_ID = :zitem ");
                            $stmt->bindParam(":zitem", $itemid);
                            $stmt->execute();

                            $theMsg = '<div class="alert alert-success">' . $stmt->rowCount() . ' Record Deleted</div>';
                            redirectHome($theMsg);
                        }else {
                            $theMsg = '<div class="alert alert-danger">This Id Is Not Exist</div>';
                            redirectHome($theMsg);
                        }
                echo "</div>";
            }else if ($do == 'Approve') {
                echo "<h1 class='text-center'>Approve Item</h1>";
                echo "<div class='container'>";
                    $itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ? intval($_GET['itemid']) : 0; //check the number of userid for the user that i get from database
                                                                                                            // by session['ID'] and echo it in the url and get it by get method
                    //select all the data about the userid
                    /* We can replace it by the check item function---> 
                    $stmt = $con->prepare("SELECT * FROM users WHERE UserID = ? LIMIT 1 "); 
                    $stmt->execute(array($userid));
                
                    $count = $stmt->rowCount(); //check count of records in database
                    */
                    $check = checkItem('Item_ID','items' , $itemid);
                        if($check > 0) { 
                            $stmt = $con->prepare("UPDATE items SET Approve= 1 WHERE Item_ID = ?");
                            $stmt->execute(array($itemid));

                            $theMsg = '<div class="alert alert-success">' . $stmt->rowCount() . ' Record Approved</div>';
                            redirectHome($theMsg, 'back');
                        }else {
                            $theMsg = '<div class="alert alert-danger">This Id Is Not Exist</div>';
                            redirectHome($theMsg);
                        }
                echo "</div>";
            }
//----------------------------------------------------------------------------------
    include $tpl . 'footer.php'; //include footer

    } else{
        header('Location: index.php'); //if he has not logged in redirect to log in page
        exit();
    }
    ob_end_flush();
?>