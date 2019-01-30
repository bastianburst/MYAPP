@if ($errors->any())
<div class="alert alert-dangers">
  @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
  @endforeach
</div>
@endif