<h1>YOUR REMINDER(S)</h1>
@foreach($reminders as $reminder)
    <div class="well">
        <span>{{ $reminder->body }} <b>({{ $reminder->getType->type }})</b></span>
        {{--  <a class="btn btn-success pull-right" href="/reminder/delete">Finish</a>  --}}
        <form method="post" action="/reminder/delete" style="display: inline;">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="reminderID" value="{{ $reminder->id }}">
            <input type="submit" class="btn btn-success pull-right" value="FINISH">
        </form>
    </div>
@endforeach