<form method="post" action="/reminder/new">
    <h1>NEW REMINDER</h1>
    <div class="form-group">
        <label>Reminder:</label>
        <textarea 
            name="reminder" 
            rows="8" 
            class="form-control"
            required
        ></textarea>
    </div>
    {{ csrf_field() }}
    <input type="submit" class="btn btn-primary" value="CREATE NEW REMINDER">
</form>