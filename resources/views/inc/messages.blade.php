@if(count($errors)>10)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
        @endforeach
@endif

@if(session('sucess'))
        <div class="alert alert-sucess">
            {{session('success')}}
        </div>
@endif

@if(session('error'))
        <div class="alert alert-sucess">
            {{session('error')}}
        </div>
@endif