<?php
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

                $sort = 'ASC';
                $sort_array = array('ASC', 'DESC');
                if (isset($_GET['sort']) && in_array($_GET['sort'], $sort_array)) {
                    $sort = $_GET['sort'];
                }


                $stmt2 = $con->prepare("SELECT * FROM categories WHERE parent = 0 ORDER BY ORDERING $sort ");
                $stmt2->execute();
                $cats = $stmt2->fetchAll(); 


                if (! empty($cats)){
                ?>
                <h1 class="text-center">Manage Categories</h1>
                <div class="container category">
                    <div class="panel panel-default">
                            <div class="panel-heading">
                            Manage Categories
                                <div class="option pull-right">
                                Ordering:[
                                    <a class="<?php if($sort == 'DESC') {echo 'active';} ?>" href="?sort=DESC">DESC</a> |
                                    <a class="<?php if($sort == 'ASC') {echo 'active';} ?>" href="?sort=ASC">ASC</a>]
                                View:[
                                    <span class="active" data-view= "full" >Full</span> |
                                    <span >Classic</span>]

                                </div>
                            </div>
                            <div class="panel-body">
                                <?php
                                    foreach($cats as $cat) {
                                        echo"<div class='cat'>";
                                            echo "<div class='hidden-buttons'>";
                                                echo "<a href='categories.php?do=Edit&catid=" . $cat['ID'] . "' class='btn btn-primary btn-xs'><i class='fa fa-edit'></i>Edit</a>";
                                                echo "<a href='categories.php?do=Delete&catid=" . $cat['ID'] . "' class='confirm btn btn-danger btn-xs'><i class='fa fa-close'></i>Delete</a>";
                                            echo "</div>";
                                            echo "<h3>" . $cat['Name'] . "</h3>";
                                            echo "<div class='full-view'>";
                                                echo "<p>"; if($cat['Description'] == ''){echo 'There is no description for this category';}else{echo $cat['Description'] ; }  echo "</p>";
                                                if($cat['Visibility'] == 1) {echo "<span  style= 'color:#FFF; background-color: red; padding:4px 6px; margin-right: 6px; border-radius: 6px' calss='visibility'><i class='fa fa-eye'></i> Hidden</span>";}
                                                if($cat['Allow_Comment'] == 1) {echo "<span style= 'color:#FFF; background-color: #3498db; padding:4px 6px; margin-right: 6px; border-radius: 6px' calss='commenting'><i class='fa fa-close'></i> Comment Disabled</span>";}   
                                                if($cat['Allow_Ads'] == 1) {echo "<span style= 'color:#FFF; background-color: #2ecc71; padding:4px 6px; margin-right: 6px; border-radius: 6px' calss='advertising'><i class='fa fa-close'></i> Ads Disabled</span>";}
                                            echo "</div>";
                                            //Get Child Categories
                                            $childCats = getAllFromUltimate("*", "categories", "WHERE parent = {$cat['ID']} ", "", "ID", "ASC" );
                                            if (! empty ($childCats)) {

                                                echo "<h4 class='child-head'>Sub Categories</h4>";
                                                echo "<ul class='list-unstyled child-cats'>";
                                                    foreach ($childCats as $c) {
                                                        echo "<li class='child-link'>
                                                            <a href='categories.php?do=Edit&catid=" . $c['ID'] . "'>" . $c['Name'] . "</a>
                                                            <a href='categories.php?do=Delete&catid=" . $c['ID'] . "' class='confirm show-delete'>Delete</a>";
                                                        echo "</li>";
                                                    }
                                                echo "</ul>";
                                            }
                                            echo "<hr>";
                                        echo "</div>";

                                        

                                    }
                                ?>
                            </div>
                    </div>
                    <a href="categories.php?do=Add" class="btn btn-primary"><i class='fa fa-plus'></i> Add New Category</a>
                </div>
                <?php 
                } else {
                    echo '<div class="container">';
                        echo '<div class="alert alert-info">There is no categories to show </div>';    
                        echo '<a href = "categories.php?do=Add" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Add New Category</a>';
                    echo '</div>'; 
                }                              
                ?>



            <?php
            } elseif ($do == 'Add') { 
//Add page And Insert ?>
            <h1 class="text-center">Add New Category</h1>     
            <div class="container">
                <form class="form-horizontal" action="categories.php?do=Insert" method="POST">
                    <!--start name-->
                    <div class="form-group form-group-lg">
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10 col-md-4">
                            <input type="text" name="name" class="form-control"  autocomplete="off" required='required' placeholder='Name of The Category'/>
                        </div>
                    </div>
                    <!--start Description-->
                    <div class="form-group form-group-lg">
                        <label class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10 col-md-4">
                            <input type="text" name="description" class=" form-control"  placeholder="Description of the category" =/>
                        </div>
                    </div>
                    <!--start ordering-->
                    <div class="form-group form-group-lg">
                        <label class="col-sm-2 control-label">Ordering</label>
                        <div class="col-sm-10 col-md-4">
                            <input type="text" name="ordering" class="form-control" placeholder='Number to order the category' />
                        </div>
                    </div>
                    <!--start parent of subcategories-->
                    <div class="form-group form-group-lg">
                        <label class="col-sm-2 control-label">Parent?</label>
                        <div class="col-sm-10 col-md-4">
                            <select name="parent" class="parent">
                                <option value ="0">None</option>
                                <?php 
                                    $allCats = getAllFromUltimate("*", "categories", "WHERE parent = 0", "", "ID", "DESC");
                                    foreach ($allCats as $cat ) {
                                        echo "<option value='" . $cat['ID'] . "'>" . $cat['Name'] . "</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!--start visibility-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Visible</label>
                        <div class="col-sm-10 col-md-4">
                            <div>
                                <input id="vis-yes" type="radio" name="visibility" value="0" checked>
                                <label for="vis-yes">Yes</label>
                            </div>
                            <div>
                                <input id="vis-no" type="radio" name="visibility" value="1" >
                                <label for="vis-no">No</label>
                            </div>
                        </div>
                    </div>

                     <!--start commenting-->
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Allow Commenting</label>
                        <div class="col-sm-10 col-md-4">
                            <div>
                                <input id="com-yes" type="radio" name="commenting" value="0" checked>
                                <label for="com-yes">Yes</label>
                            </div>
                            <div>
                                <input id="com-no" type="radio" name="commenting" value="1" >
                                <label for="com-no">No</label>
                            </div>
                        </div>
                    </div>
                     <!--start Ads-->
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Allow Ads</label>
                        <div class="col-sm-10 col-md-4">
                            <div>
                                <input id="ads-yes" type="radio" name="ads" value="0" checked>
                                <label for="ads-yes">Yes</label>
                            </div>
                            <div>
                                <input id="ads-no" type="radio" name="ads" value="1" >
                                <label for="ads-no">No</label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Add button-->
                    <div class="form-group form-group-lg">
                        <div class="col-sm-offset-2 col-sm-10 ">
                            <input type="submit" value="Add Category" class="btn btn-primary btn-lg" />
                        </div>
                    </div>


                </form>
            </div>

<?php //============================================================
            } else if ($do == 'Insert') { //get data from form and put it into database
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    echo '<h1 class="text-center">Insert Category</h1>';

                    echo '<div class="container">';


                        $name = $_POST['name'];
                        $desc = $_POST['description'];
                        $parent = $_POST['parent'];
                        $order = $_POST['ordering'];
                        $visible = $_POST['visibility'];
                        $comment = $_POST['commenting'];
                        $ads = $_POST['ads'];
                        //validate the form
                        
                            $check = checkItem ("Name", "categories", $name);
                            if ($check == 1) {
                                $theMsg = "<div class='alert alert-danger'> This Category is already existed before</div>";
                                redirectHome($theMsg , 'back');
                            } else {
                        
                                //Insert info from form to  database 
                                $stmt = $con->prepare("INSERT INTO 
                                                            categories(Name, Description, parent, Ordering, Visibility, Allow_Comment , Allow_Ads )
                                                        VALUES (?, ?, ?, ?, ?,? ,?) ");
                                $stmt->execute([$name, $desc, $parent, $order, $visible, $comment, $ads]);
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
/////////////////////////////////////////////////////////////////////////////////////////////////
            } else if ($do == 'Edit') { 
                $catid = isset($_GET['catid']) && is_numeric($_GET['catid']) ? intval($_GET['catid']) : 0; //check the number of userid for the user that i get from database
                                                                                                        // by session['ID'] and echo it in the url and get it by get method
            //select all the data about the catid
            $stmt = $con->prepare("SELECT * FROM categories WHERE ID = ? "); 
            $stmt->execute(array($catid));
        
            //fetch"جلب" all the record from database
            $cat = $stmt->fetch();  //array contain the record data
            $count = $stmt->rowCount(); //check count of records in database

                if($count > 0) { ?>

                    <h1 class="text-center">Edit Category</h1>
                    <div class="container">
                        <form class="form-horizontal" action="categories.php?do=Update" method="POST">
                            <input type = "hidden" name="catid" value="<?php echo $catid; ?>" />
                            <!--start name-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="text" name="name" class="form-control"  required='required' placeholder='Name of The Category' value="<?php echo $cat['Name']; ?> "/>
                                </div>
                            </div>
                            <!--start Description-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="text" name="description" class=" form-control"  placeholder="Description of the category" value="<?php echo $cat['Description']; ?> "/>
                                </div>
                            </div>
                            <!--start ordering-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Ordering</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="text" name="ordering" class="form-control" placeholder='Number to order the category' value="<?php echo $cat['Ordering']; ?> " />
                                </div>
                            </div>
                            <!--start parent of subcategories-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Parent?</label>
                                <div class="col-sm-10 col-md-4">
                                    <select name="parent" class="parent">
                                        <option value ="0">None</option>
                                        <?php 
                                            $allCats = getAllFromUltimate("*", "categories", "WHERE parent = 0", "", "ID", "DESC");
                                            foreach ($allCats as $c ) {
                                                echo "<option value='" . $c['ID'] . "'"; 
                                                    if ($cat['parent'] == $c['ID']) {echo 'selected';}
                                                echo ">" . $c['Name'] . "</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <!--start visibility-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Visible</label>
                                <div class="col-sm-10 col-md-4">
                                    <div>
                                        <input id="vis-yes" type="radio" name="visibility" value="0" <?php if ($cat['Visibility'] == 0) {echo 'checked';} ?> >
                                        <label for="vis-yes">Yes</label>
                                    </div>
                                    <div>
                                        <input id="vis-no" type="radio" name="visibility" value="1" <?php if ($cat['Visibility'] == 1) {echo 'checked';} ?> >
                                        <label for="vis-no">No</label>
                                    </div>
                                </div>
                            </div>

                            <!--start commenting-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Allow Commenting</label>
                                <div class="col-sm-10 col-md-4">
                                    <div>
                                        <input id="com-yes" type="radio" name="commenting" value="0" <?php if ($cat['Allow_Comment'] == 0) {echo 'checked';} ?>>
                                        <label for="com-yes">Yes</label>
                                    </div>
                                    <div>
                                        <input id="com-no" type="radio" name="commenting" value="1" <?php if ($cat['Allow_Comment'] == 1) {echo 'checked';} ?> >
                                        <label for="com-no">No</label>
                                    </div>
                                </div>
                            </div>
                            <!--start Ads-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Allow Ads</label>
                                <div class="col-sm-10 col-md-4">
                                    <div>
                                        <input id="ads-yes" type="radio" name="ads" value="0" <?php if ($cat['Allow_Ads'] == 0) {echo 'checked';} ?> >
                                        <label for="ads-yes">Yes</label>
                                    </div>
                                    <div>
                                        <input id="ads-no" type="radio" name="ads" value="1" <?php if ($cat['Allow_Ads'] == 1) {echo 'checked';} ?> >
                                        <label for="ads-no">No</label>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Add button-->
                            <div class="form-group form-group-lg">
                                <div class="col-sm-offset-2 col-sm-10 ">
                                    <input type="submit" value="Update Category" class="btn btn-primary btn-lg" />
                                </div>
                            </div>


                        </form>
                    </div>

                    
        <?php   } else { //if there is no id 
                    echo '<div class="container">';
                    $theMsg = '<div class="alert alert-danger"> THere is no such id</div>' ;
                    redirectHome ($theMsg);
                    echo '</div>';                
                }
            } elseif ($do == 'Update') {
                echo '<h1 class="text-center">Update Category</h1>';

                echo '<div class="container">';

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $id = $_POST['catid'];
                    $name = $_POST['name'];
                    $desc = $_POST['description'];
                    $order = $_POST['ordering'];  
                    $parent = $_POST['parent'];
                    $visible = $_POST['visibility'];
                    $comment = $_POST['commenting'];
                    $ads = $_POST['ads'];

                    
                        //update database with this info
                        $stmt = $con->prepare("UPDATE categories SET Name = ?, Description = ?, Ordering = ?, parent = ?, Visibility = ?,Allow_Comment = ?,Allow_Ads = ?  WHERE ID = ? ");
                        $stmt->execute(array($name, $desc, $order, $parent, $visible, $comment, $ads, $id));
                        $theMsg = '<div class="alert alert-success">' . $stmt->rowCount() . ' Record Updated</div>';
                        redirectHome($theMsg , 'back');
                    
                    
                } else {
                    $theMsg = '<div class="alert alert-danger">Sorry Cannot Browse Directly</div>' ;
                    redirectHome($theMsg);
                }
                echo '</div>';


            } else if ($do == 'Delete') {
                echo "<h1 class='text-center'>Delete Category</h1>";
                echo "<div class='container'>";
                    $catid = isset($_GET['catid']) && is_numeric($_GET['catid']) ? intval($_GET['catid']) : 0; //check the number of userid for the user that i get from database
                                                                                                            // by session['ID'] and echo it in the url and get it by get method
                    //select all the data about the userid
                    /* We can replace it by the check item function---> 
                    $stmt = $con->prepare("SELECT * FROM users WHERE UserID = ? LIMIT 1 "); 
                    $stmt->execute(array($userid));
                
                    $count = $stmt->rowCount(); //check count of records in database
                    */
                    $check = checkItem('ID','categories' , $catid);
                        if($check > 0) { 
                            $stmt = $con->prepare("DELETE FROM categories WHERE ID = :zid ");
                            $stmt->bindParam(":zid", $catid);
                            $stmt->execute();

                            $theMsg = '<div class="alert alert-success">' . $stmt->rowCount() . ' Record Deleted</div>';
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
    ?>