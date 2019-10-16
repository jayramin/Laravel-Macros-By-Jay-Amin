@extends('template_layout.template_layout')
@section('contentTests')
<br>
<br>
<div class="container">
  <div class="row">
  {!! Form::selectWeekDay() !!}
    <div class="col-md-3 col-lg-3"></div>
    <div class="col-md-6 col-lg-6">
      <div class="card border-primary">
        <div class="card-header">Add New Product</div>
        <div class="card-body">
          <!-- <h4 class="card-title">Primary card title</h4> -->
          <form method = "post" action="saveProdData" enctype="multipart/form-data">
            @csrf
            <input type="text" name="Quantity">
            <input type="text" name="Title">
            <input type="text" name="Description">
            <input type="file" name="ProdImage">
            <input type="submit" name="Save">

          </form>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection


@push('customestyle')
<style type="text/css">
    h1{
      color: skyblue;
    }
</style>
@endpush