@props(['name'])
@error($name)
<p style="font-size: 13px;color: red;margin-top: 3px">{{$message}}</p>
@enderror
