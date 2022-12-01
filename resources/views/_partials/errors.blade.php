@if ($errors->any())
<div class="error-notice">
    <ul class="oaerror danger">
        @foreach ($errors->all() as $error)
            <strong>Error </strong>- {{ $error }} <br>
        @endforeach
    </ul>
</div>
@endif