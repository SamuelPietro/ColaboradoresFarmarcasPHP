@if ($message = Session::get('success'))
    <div class="alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif



@if ($message = Session::get('error'))
    <div class="alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif



@if ($message = Session::get('warning'))
    <div class="alert-warning">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($errors->any())
    <div class="alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Verifique se há erros no formulário abaixo
    </div>
@endif
