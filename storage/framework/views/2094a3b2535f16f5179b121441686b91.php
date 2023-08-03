<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>  
    <title>Edit Project</title>
</head>
<body style="background-color: gray">
    <div class="container ps-5 mt-2 ">
        <div class="row">
            <div class='col-sm-6'>
                <h1>Insertion</h1>
                <form action="" method="POST">
                    <?php echo csrf_field(); ?>
                   
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" value="<?php echo e($project->title); ?>" name="title" id="title" class="form-control">
                    </div>
    
                    <div class="mb-3">
                        <label for="description" class="form-label">Descriptions</label>
                        <input type="text" name="description" value="<?php echo e($project->description); ?>" id="description" class="form-control">
                    </div>
    
                    <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="date" name="deadline" value="<?php echo e($project->deadline); ?>" id="deadline" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="client_id" class="form-label">Client ID</label>
                        <input type="text" name="client_id" value="<?php echo e($project->client_id); ?>" id="client_id" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" name="status" value="<?php echo e($project->status); ?>" id="status" class="form-control">
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\crm\resources\views/frontend/projects/editProject.blade.php ENDPATH**/ ?>