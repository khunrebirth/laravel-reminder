<form method="post" action="/reminder/new">
    <h3>NEW REMINDER</h3>
    <div class="form-group">
        <label>Reminder:</label>
        <textarea 
            name="reminder" 
            rows="8" 
            class="form-control"
            required
        ></textarea>
    </div>
    <div class="form-group">
        <label>Type:</label>
        <select name="type" class="form-control">
            @foreach($types as $type)
                <option value="{{ $type->id }}">{{ $type->type }}</option>
            @endforeach
        </select>
    </div>
    {{ csrf_field() }}
    <input type="submit" class="btn btn-primary" value="CREATE NEW REMINDER">
</form>