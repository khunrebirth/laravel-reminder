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
                <td>{{ $file->FileName }}</td>
                <td><a href="" class="btn btn-primary">Download</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
