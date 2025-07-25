@if($errors)
   @foreach ($errors->all() as $error)
      <div class="alert alert-danger text-center alert-block">
         <button type="button" class="close" data-dismiss="alert">×</button>
         <strong class="text-dark">{{ $error }}</strong>
      </div>
   @endforeach
@endif

@foreach (['success', 'danger', 'warning', 'info'] as $alert)
   @if ($message = Session::get($alert))
      <div class="alert alert-{{$alert}} text-center alert-block">
         <button type="button" class="close text-dark" data-dismiss="alert">×</button>
         <strong class="text-dark">{{ $message }}</strong>
      </div>
   @endif
@endforeach