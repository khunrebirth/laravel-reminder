<form method="post" action="/file/upload">
    <h3>UPLOAD FILE</h3>
    <div class="form-group">
        <label>FILE NAME: </label>
        <input type="text" name="name" class="form-control" placeholder="FILE NAME" required>
    </div>
    <div class="form-group">
        <label>UPLOAD FILE: </label>
        <input type="file" name="upload_file" class="form-control" placeholder="FILE NAME" required>
    </div>
    {{ csrf_field() }}
    <input type="submit" class="btn btn-primary" value="UPLOAD">
</form>