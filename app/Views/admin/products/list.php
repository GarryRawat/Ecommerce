<div class="col-2 mt-4 ms-2">
       
        <a href="<?= base_url('addProductPage') ?>" class="btn btn-warning">ADD Product</a>
        </div>
<div class="container shadow-lg p-5 mt-5 text-center mt-5">
    <div class="row">
       
       b
        <div class="col-lg-10">
        <table id="myTable" class="display" width="100%" style="color:black; background-color:#ffffff;">
    <thead>
        <tr>
            <th>id</th>
            <th>product_category</th>
            <th>product_name</th>
            <th>product_price</th>
            <th>image</th>
            <th>created_at</th>  
        </tr>
    </thead>
    <tbody>
        <?php foreach($products as $data) { ?>
        <tr>
            <td><?= $data['id'];?></td>
            <td><?= $data['product_category'];?></td>
            <td><?= $data['product_name'];?></td>
            <td><?= $data['product_price'];?></td>
            <td><img src="<?= base_url()?>uploads/<?= $data['image']?>" style="width: 100px; height: 100px; border-radius: 50px;"></td>
            <td><?= $data['created_at'];?></td>
          
        </tr>
       <?php  }?>
    </tbody>
</table>

        </div>
    </div>
</div>

<script>
   $(document).ready( function () {
    $('#myTable').DataTable();
} )
</script>