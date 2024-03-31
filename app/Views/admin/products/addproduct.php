<div class="container">
    <h1>Add product</h1>
    <div class="row">
        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                    <form action="<?= base_url('addproduct')?>" method="POST" enctype="multipart/form-data">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">

                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="product_category">
                                    <label for="floatingInput">product_category</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" name="product_name" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">product_name</label>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <!-- Text input -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"  placeholder="name@example.com" name="product_price">
                                <label for="floatingInput">product_price</label>
                            </div>

                            <div class="col">
                                <label class="form-label" for="form6Example7">product-description</label>
                                <!-- Text input -->
                                <div class="form-floating mb-3">
                                    <!-- <textarea class="form-control" name="product_description" id="summernote" style="height: 300px;" rows="10" placeholder="product-description"></textarea> -->
                                    <textarea id="summernote" name="product_description"></textarea>
                                </div>
                            </div>

                            <label for="floatingInput">Choose a file...</label>
                            <div class="form-floating mb-3">
                           
                                <input type="file" name="image" class="form-control" id="floatingInput" name="fileUpload">
                               
                            </div>
                            <input data-mdb-ripple-init type="submit" name="submit" class="btn btn-primary btn-block mb-4">Add Product</input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
  $('#summernote').summernote({
    height: 300
  });
});
</script>