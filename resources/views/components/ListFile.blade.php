<h3>Files</h3>
@if(count($files) != 0)
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>#</td>
                <td>File Name</td>
                <td>Download</td>
            </tr>
        </thead>
        <tbody>
            @foreach($files as $file)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $file->FileName . '.' . $file->FileExtension }}</td>
                    <td><a href="/file/{{ $file->FileName }}.{{ $file->FileExtension }}" class="btn btn-danger">Download</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <strong>There's no file right now</strong>
@endif
