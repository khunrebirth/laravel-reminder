<form method="post" action="/remindertype/new">
    <h1>NEW REMINDER TYPE</h1>
    <div class="form-group">
        <label>Reminder type: </label>
        <input type="text" name="name" class="form-control" placeholder="Reminder Type Name" required>
    </div>
    {{ csrf_field() }}
    <input type="submit" class="btn btn-primary" value="CREATE NEW REMINDER TYPE">
</form>