<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="/upload" method="post" autocomplete='off' enctype="multipart/form-data">        
        @csrf
        <div class="mb-4">
            <label for="name" class="sr-only">name</label>
            <input type="text" name="name" id="name" value="">
        </div>
        <div>
             <input type="file" id="image" name="image">            
        </div>
        <input type="submit" name="upload">
        </form>
    </div>
</body>
</html>