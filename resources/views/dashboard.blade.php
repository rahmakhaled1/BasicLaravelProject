<x-app-layout>
    <div>
<form action="{{url('upload_post')}} " method="Post" enctype="multipart/form-data">
    @csrf
    <div style="padding-left: 30%;padding-right: 20%" class="mb-4">
        <p class="h1" style="padding-left: 30%">Add Post</p>
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div style="padding-left: 30%;padding-right: 20%"  class="mb-4">
        <label for="formFileLg" class="form-label">Upload a Image</label>
        <input name="image" class="form-control form-control-lg" id="formFileLg" type="file">

    </div>
    <div style="padding-left: 30%;padding-right: 20%"  class="mb-4">
            <input type="submit" name="submit" style="background: skyblue;cursor:pointer; padding-left: 5%;padding-right: 5%;border-radius: 10px;margin-right: 50px">
    </div>
</form>
        <form action="{{url('view_post')}} " method="Get">
            @csrf
            <div style="padding-left: 30%;padding-right: 20%"  class="mb-4">
                <input type="submit" value="Show" style="background: skyblue;cursor:pointer; padding-left: 5%;padding-right: 5%;border-radius: 10px;margin-right: 50px">
            </div>
        </form>
    </div>
</x-app-layout>
