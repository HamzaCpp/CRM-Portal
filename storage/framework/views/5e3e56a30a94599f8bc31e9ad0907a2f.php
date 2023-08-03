<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>  
    <title>Client record</title>
</head>
<body>
    <div class="container ps-5 mt-2 ">
        <div class="row">
            <div class='col-sm-6'>
                <h1>Insertion</h1>
                <form action="" method="POST">
                    <?php echo csrf_field(); ?>
                   
                    <div class="mb-3">
                        <label for="company" class="form-label">Company</label>
                        <input type="text" value="<?php echo e($client->company); ?>" name="company" id="company" class="form-control">
                    </div>
    
                    <div class="mb-3">
                        <label for="VAT" class="form-label">VAT</label>
                        <input type="text" name="VAT" value="<?php echo e($client->VAT); ?>" id="VAT" class="form-control">
                    </div>
    
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" value="<?php echo e($client->address); ?>" id="address" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\crm\resources\views/frontend/client/editform.blade.php ENDPATH**/ ?>