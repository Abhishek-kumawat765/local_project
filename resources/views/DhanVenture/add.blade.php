@extends('common.app')
@section('content')
@php
    $states = DB::table('states')->get();
@endphp

<div class="container">
    <div class="text-center d-flex justify-content-between mb-3">
        <h1>Student Form</h1>
        <a href="{{ url('viewDhanVenture') }}" class="btn btn-info btn-sm"> <i class="fa fa-eye"> </i> View</a>
    </div>
    <hr>
    <form method="POST" enctype="multipart/form-data" id="addHostelStaffTraining" action="{{ url('addDhanVenture') }}">
        @csrf
        <div class="row">

            <!-- Date -->
            <div class="col-md-3 mt-5">
                <label for="date">Date<span style="color:red;">*</span></label>
                <input type="date" name="date" id="date" value="{{ old('date') }}" class="form-control p-1"
                    autocomplete="off" 
                    max="{{ \Carbon\Carbon::now()->addYear()->format('Y-m-d\TH:i') }}" />
                @error('date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Image -->
            <div class="col-md-3 mt-5 ">
                <label for="image">Image<span style="color:red;">*</span></label>
                <input type="file" name="photo" id="photo" class="form-control p-1" value="{{ old('photo') }}" />
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-3 mt-5 ">
                <label for="noteNo">Note No</label>
                <input type="number" name="noteNo"  id="noteNo" >
            </div>
            <!-- Total Amount -->
            <div class="col-md-3 mt-5">
                <label for="totalAmount">Total Amount</label>
                <input type="text" name="totalAmount" id="totalAmount" class="form-control p-1  "/>
                <span class="text-success"> Total Amount.</span>
            </div>
        </div>
        <hr>
        <div class="text-center mt-5">
            <button type="submit" class="btn btn-info btn-sm">Submit</button>
        </div>

    </form>
</div>



@endsection
