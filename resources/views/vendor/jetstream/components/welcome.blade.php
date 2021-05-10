@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
<form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">Import data</button>
</form>
