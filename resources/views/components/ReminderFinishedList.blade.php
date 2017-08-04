<table class="table table-striped table-hover">
    <thead>
        <tr>
            <td>#</td>
            <td>Reminder Name</td>
            <td>Finished At</td>
        </tr>
    </thead>
    <tbody>
        @foreach($reminders as $reminder)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $reminder->body }}</td>
                <td>{{ $reminder->deleted_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
