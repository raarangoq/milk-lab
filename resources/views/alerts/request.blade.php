@if (count($errors) > 0)
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" date-dismiss="alert" aria-label="Close"><span aria-hidden="true">&time;</span>
        
    </button>
    <ul>
        @foreach($errors->all() as $error)
        <li>{!!error!!}</li>
        @endforeach
    </ul>
    
</div>
@endif


