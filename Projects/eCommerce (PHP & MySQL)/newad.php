<?php
ob_start();
    session_start();
    $pageTitle = 'Create New Item';
    include 'init.php';

    if(isset($_SESSION['user'])) {
      
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $formErrors = array();

            $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $desc = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
            $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);
            $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
            $status = filter_var($_POST['status'], FILTER_SANITIZE_NUMBER_INT);
            $category = filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT);
            $tags = filter_var($_POST['tags'], FILTER_SANITIZE_STRING);
            if(strlen($name) < 4) {
                $formErrors[] = 'Item title must be at least 4 characters';
            }
            if(strlen($desc) < 10) {
                $formErrors[] = 'Item description must be at least 10 characters';
            }
            if(strlen($country) < 3) {
                $formErrors[] = 'Item made country must be at least 3 characters';
            }
            if(empty($price)) {
                $formErrors[] = 'Item price cant be empty';
            }
            if(empty($status)) {
                $formErrors[] = 'Item status cant be empty';
            }
            if(empty($category)) {
                $formErrors[] = 'Item category cant be empty';
            }
            if (empty($formErrors)) {
                $id = $_SESSION['uid'];
                //Insert info from form to  database 
                $stmt = $con->prepare("INSERT INTO 
                                            items(Name, Description, Price, Country_Made, Status , Add_Date , Cat_ID, Member_ID , tags)
                                        VALUES (:zname, :zdesc, :zprice, :zcountry, :zstatus , now(), :zcat, :zmember, :ztags ) ");
                $stmt->execute(array(
                'zname' => $name,
                'zdesc' => $desc, 
                'zprice' => $price, 
                'zcountry' =>  $country ,
                'zstatus' => $status,
                'zcat' => $category,
                'zmember' => $id,
                'ztags' => $tags
                ));
                if ($stmt){
                    $succesMsg = 'Item Added Succesfully';
                }
            }
            

        }


?>
    <h1 class="text-center">Create New Item</h1>
    <div class="create-ad block">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">Create New Item</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                                <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                    <!--start name-->
                                    <div class="form-group form-group-lg">
                                        <label class="col-sm-2 control-label ">Name</label>
                                        <div class="col-sm-10 col-md-10">
                                            <input type="text" name="name" class="form-control live"  required='required' placeholder='Name of The Item' data-class=".live-title"/>
                                        </div>
                                    </div>
                                    <!--start description-->
                                    <div class="form-group form-group-lg">
                                        <label class="col-sm-2 control-label">Description</label>
                                        <div class="col-sm-10 col-md-10">
                                            <input type="text" name="description" class="form-control live " required='required' placeholder='Description of The Item' data-class=".live-desc"/>
                                        </div>
                                    </div>
                                    <!--start Price-->
                                    <div class="form-group form-group-lg">
                                        <label class="col-sm-2 control-label">Price</label>
                                        <div class="col-sm-10 col-md-10">
                                            <input type="text" name="price" class="form-control live" required='required' placeholder='Price of The Item' data-class=".live-price"/>
                                        </div>
                                    </div>
                                    <!--start country-->
                                    <div class="form-group form-group-lg">
                                        <label class="col-sm-2 control-label">Country</label>
                                        <div class="col-sm-10 col-md-10">
                                            <input type="text" name="country" class="form-control" required='required' placeholder='Country Of Made'/>
                                        </div>
                                    </div>
                                    <!--start status-->
                                    <div class="form-group form-group-lg">
                                        <label class="col-sm-2 control-label">Status</label>
                                        <div class="col-sm-10 col-md-10">
                                            <select class="form-control" name="status">
                                                <option value="0">...</option>
                                                <option value="1">New</option>
                                                <option value="2">Like New</option>
                                                <option value="3">Used</option>
                                                <option value="4">Old</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <!--start category-->
                                    <div class="form-group form-group-lg">
                                        <label class="col-sm-2 control-label">Category</label>
                                        <div class="col-sm-10 col-md-10">
                                            <select class="form-control" name="category">
                                                <option value="0">...</option>
                                                <?php
                                                $cats = getAllFromUltimate('*', 'categories', 'WHERE parent = 0', '' , 'ID');
                                                    foreach ($cats as $cat) {
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
                                        <div class="col-sm-10 col-md-10">
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

                        <div class="col-md-4">
                            <div class="thumbnail item-box live-preview">
                                <span class="price-tag ">
                                        $<span class="live-price">0</span>
                                </span>
                                <img class='img-responsive' src="img.jpg"/>
                                <div class="caption">
                                    <h3 class="live-title">Title</h3>
                                    <p class="live-desc">Description</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--start looping errors-->
                    <?php
                        if(!empty($formErrors)) {
                            foreach ($formErrors as $error) {
                                echo $error ;
                            }
                            
                        }
                        if (isset($succesMsg)) {
                            echo '<div class="alert alert-success">'.  $succesMsg .'</div>' ;
                        }
                    ?>
                    <!--end looping errors-->
                </div>
            </div>
        </div>
    </div>
    

<?php
    } else {
        header('Location: login.php');
        exit();
    }
    include $tpl . 'footer.php';    
    ob_end_flush();
?>