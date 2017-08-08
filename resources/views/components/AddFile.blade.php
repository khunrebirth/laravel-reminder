@if(session('UploadFileStatus'))
    <div class="alert alert-success" role="alert">{{ session('UploadFileStatus') }}</div>
@endif
<form method="post" action="/file/upload" enctype="multipart/form-data">
    <h3>UPLOAD FILE</h3>
    <div class="form-group">
        <label>FILE NAME: </label>
        <input type="text" name="name" class="form-control" placeholder="FILE NAME" autofocus="" required>
    </div>
    <div class="form-group">
        <label>UPLOAD FILE: </label>
        <input type="file" name="upload_file" class="form-control">
    </div>
    {{ csrf_field() }}
    <input type="submit" class="btn btn-primary" value="UPLOAD">
</form>