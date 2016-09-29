<form class="" action="{{ route('confirm.token') }}" method="post">
    {{ csrf_field() }}
    Change post request to call get route
    <input type="hidden" name="token" value="{{$token}}">
    <button type="submit" name="button">Confirm</button>
</form>
