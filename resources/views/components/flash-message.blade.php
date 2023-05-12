@if(session()->has('message'))
<p class="flash-message">{{session('message')}}</p>
@endif