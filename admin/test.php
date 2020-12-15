<?php
include("../config.php");
$no=1;
$product="";
$query = new Query;
$fetch= $query->fetchRecord('tbl_product','',['prod_parent_id'=>1]);
// echo '<pre>';
// print_r ($fetch);
// echo($fetch[0]['prod_name']);
if($fetch){
  foreach ($fetch as $key => $value) {
    $product.="<tr><td>".$no."</td><td>".$value['prod_name']."</td><td>".$value['html']."</td><td>".$value['prod_available']."</td></tr>";
    echo $value['prod_name'];
  }
  $no++;
}
echo($product);



?>
<div class="card-body">
    <form method="post" >
    <h6 class="heading-small text-muted mb-4">Add Category</h6>
    <div class="pl-lg-4">
        <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label" for="input-username">Category</label>
            <select name="cat" id="" class="form-control">
                <option  disabled selected hidden>Select Category ...</option>
                <option value="">Hosting</option>
            </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label" for="input-email">Sub-Category</label>
            <input type="text" id="" name="sub_cat" class="form-control" placeholder="Enter Sub-Category...">
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label" for="input-first-name">Link</label>
            <input type="text" name="link" id="input-first-name" class="form-control" placeholder="Category Page Link..." value="">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label" for="input-last-name">Is Available</label>
            <select name="available" id="" class="form-control">
                <option  disabled selected hidden value="">Is Available ...</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" name="add" value="add" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
    </form>
</div>
</div>
<!-- //Form to add category  -->

<!-- Table to display category -->
<div class="container-fluid mt-5">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Category List</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">S.No.</th>
                    <th scope="col" class="sort" data-sort="budget">Category</th>
                    <th scope="col" class="sort" data-sort="status">Sub-category</th>
                    <th scope="col">Link</th>
                    <th scope="col" class="sort" data-sort="completion">Date</th>
                    <th scope="col" class="sort" data-sort="completion">Product Available</th>
                    <th scope="col" class="sort" data-sort="completion">Action</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list" id="table">
                  <?php
                  if($product){
                    echo $product;
                  }
                  ?>
                </tbody>
              </table>
            </div>