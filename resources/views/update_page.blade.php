<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<x-app-layout>
    <div>
        <form action="{{url('confirm_update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding-left: 30%;padding-right: 20%" class="mb-4">
                <p class="h1" style="padding-left: 30%">Add Post</p>
                <label for="exampleFormControlTextarea1" class="form-label">Post Description</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$data->description}}</textarea>
            </div>
            <div style="padding-left: 30%;padding-right: 20%" class="mb-4">
                <label for="exampleFormControlTextarea1" class="form-label">Current Image</label>
                <img src="/post/{{$data->image}}" height="400px" width="400px">
            </div>
            <div style="padding-left: 30%;padding-right: 20%"  class="mb-4">
                <label for="formFileLg" class="form-label">Change Image</label>
                <input name="image" class="form-control form-control-lg" id="formFileLg" type="file">

            </div>
            <div style="padding-left: 30%;padding-right: 20%"  class="mb-4">
                <input type="submit" value="Update Post" style="background: skyblue;cursor:pointer; padding-left: 5%;padding-right: 5%;border-radius: 10px;margin-right: 50px">
            </div>
        </form>
    </div>
</x-app-layout>
</body>
</html>
