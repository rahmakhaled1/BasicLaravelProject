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
<div style="padding-left: 20% ; padding-right: 10%">
<table  class="table table-bordered border-primary">
    <thead>
    <tr>
        <th scope="col">Post Description</th>
        <th scope="col">Image</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
    @foreach($post as $post)
    <tr>
        <th scope="row">{{$post->description}}</th>
        <td>
           <img src="post/{{$post->image}}" height="400px" width="400px">
        </td>
        <td><a href="{{url('update_post',$post->id)}}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Update</a></td>
        <td><a onclick="return confirm('are you sure to delete this')" href="{{url('delete_post',$post->id)}}" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Delete</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
</x-app-layout>
</body>
</html>
