@if(session()->has('message'))
<p x-data="{show: true}" x-init="setTimeout(() => show = false, 2000)" x-show="show"
    class="flash-message">{{session('message')}}</p>
@endif