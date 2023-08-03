<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>  
    <title>Create Project</title>
</head>
<body style="background-color: gray">
    <div class="container ps-5 mt-2 ">
        <div class="row">
            <div class='col-sm-6'>
                <h1>Insertion</h1>
                <form action="{{route('createProject')}}" method="POST">
                    @csrf
                   
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
    
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" name="description" id="description" class="form-control">
                    </div>
    
                    <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="date" name="deadline" id="deadline" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="client_id" class="form-label">Existing entries</label>
                        <select name="client_id" id="client_id">
                            @foreach ($client as $client)
                            <option value="{{$client->id}}">{{$client->company}} -- {{$client->id}}</option>
                            @endforeach
                        </select>
                        <label for="client_id" class="form-label">ID</label>
                       <input type="text" name="client_id" id="client_id"   {{-- value="{{$client->id}}"--}}> 
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" name="status" id="status" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
</body>
</html>