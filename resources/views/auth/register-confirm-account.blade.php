<form class="" action="{{ route('confirm.token') }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="token" value="{{$token}}">
    <button type="submit" name="button">Confirm</button>
</form>
