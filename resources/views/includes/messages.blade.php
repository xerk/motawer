<div class="container">
@if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="col-sm-6">
        <div class="alert alert-dismissible alert-danger">
            {{$error}}
        </div>
    </div>
    @endforeach
@endif

@if(session('success'))
<div class="col-sm-6">
    <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{session('success')}}.
    </div>
</div>
@endif

@if(session('error'))
<div class="col-sm-6">
    <div class="alert alert-dismissible alert-danger">
        {{session('error')}}
    </div>
</div>
@endif
</div>

