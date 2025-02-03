@extends('common.app')
@section('content')
@php
    $classes = DB::table('classes')->whereNull('deleted_at')->get();
    $states = DB::table('states')->get();
@endphp




<div class="container">
    <div class="text-center d-flex justify-content-between mb-3">
        <h1></h1>
        <h1> Student Form</h1>
        <a href="{{ url('viewStudents') }}" class="btn btn-info btn-sm"> <i class="fa fa-eye"> </i> View</a>
    </div>
    <hr>
    <form method="POST" enctype="multipart/form-data" id="addHostelStaffTraining" action="{{ url('addStudents') }}">
        @csrf
        <div class="row">

            <div class="col-md-3">
                <label for="name">Student Name<span style="color:red;">*</span></label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control p-1"
                    autocomplete="off" placeholder="Enter your name" />
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="age">Age<span style="color:red;">*</span></label>
                <input type="text" name="age" id="age" value="{{ old('age') }}" class="form-control p-1"
                    autocomplete="off" placeholder="Enter your age" />
                @error('age')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-3">
                <label for="class">Class<span style="color:red;">*</span></label>
                <select class="form-control p-1" id="class" name="class">
                    <option value="">{{ __('Select') }}</option>
                    @if(!empty($classes))
                        @foreach($classes as $studentClass)
                            <option value="{{ $studentClass->id ?? '' }}" @if(old('class') == $studentClass->id) selected @endif>
                                {{ $studentClass->className ?? '' }}
                            </option>
                        @endforeach
                    @endif
                </select>
                @error('class')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="col-md-3 ">
                <label for="mobile">Mobile<span style="color:red;">*</span></label>
                <input type="tel" name="mobile" id="mobile" value="{{ old('mobile') }}" class="form-control p-1"
                    autocomplete="off" placeholder="Enter your mobile" maxlength="10" minlength="10"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '')" />
                @error('mobile')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-3 mt-5">
                <label for="email">Email<span style="color:red;">*</span></label>
                <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control p-1"
                    autocomplete="off" placeholder="Enter your email" />
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-3 mt-5">
                <label for="date">Date<span style="color:red;">*</span></label>
                <input type="datetime-local" name="date" id="date" value="{{ old('date') }}" class="form-control p-1"
                    autocomplete="off" 
                    max="{{ \Carbon\Carbon::now()->addYear()->format('Y-m-d\TH:i') }}" />
                @error('date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-3 mt-5">
                <label for="fatherName">Father Name<span style="color:red;">*</span></label>
                <input type="text" name="fatherName" id="fatherName" value="{{ old('fatherName') }}"
                    class="form-control p-1" autocomplete="off" placeholder="Enter your father name" />
                @error('fatherName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3 mt-5">
                <label for="motherName">Mother Name<span style="color:red;">*</span></label>
                <input type="text" name="motherName" id="motherName" value="{{ old('motherName') }}"
                    class="form-control p-1" autocomplete="off" placeholder="Enter your mother name" />
                @error('motherName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3 mt-5">
                <label for="address">Address<span style="color:red;">*</span></label>
                <input type="text" name="address" id="address" value="{{ old('address') }}" class="form-control p-1"
                    autocomplete="off" placeholder="Enter your address" />
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3 mt-5">
                <label for="userName">User Name<span style="color:red;">*</span></label>
                <input type="name" name="userName" id="userName" value="{{ old('userName') }}" class="form-control p-1"
                    autocomplete="off" placeholder="Enter your user name" />
                @error('userName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3 mt-5">
                <label for="password">Password<span style="color:red;">*</span></label>
                <input type="password" name="password" id="password" value="{{ old('password') }}"
                    class="form-control p-1" autocomplete="off" placeholder="Enter your password" />
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3 mt-5">
                <label for="state">State<span style="color:red;">*</span></label>
                <select class="form-control p-1" id="state" name="state">
                    <option value="">{{ __('Select') }}</option>
                    @if(!empty($states))
                        @foreach($states as $studentState)
                            <option value="{{ $studentState->id ?? '' }}" @if(old('state') == $studentState->id) selected @endif>
                                {{ $studentState->name ?? '' }}
                            </option>
                        @endforeach
                    @endif
                </select>
                @error('state')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-3 mt-5 ">
                <label for="image">Image<span style="color:red;">*</span></label>
                <input type="file" name="photo" id="photo" class="form-control p-1" value="{{ old('photo') }}" />
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-3 mt-5 ">
                <label for="formFee">Form Fee</label>
                <input type="text" name="formFee" id="formFee" value="200" class="form-control p-1 bg-secondary"
                    readonly />
                <span class="text-success"> Form Fees Amount.</span>

            </div>
            <div class="col-md-3 mt-5 ">
                <label for="totalFee">Total Fee</label>
                <input type="text" name="totalFee" id="totalFee" value="5000" class="form-control p-1 bg-secondary "
                    readonly />
                <span class="text-success"> Total Fees Amount.</span>
            </div>
            <div class="col-md-3 mt-5">
                <label for="totalAmount">Total Amount</label>
                <input type="text" name="totalAmount" id="totalAmount" class="form-control p-1 bg-secondary "
                    placeholder="0.00" readonly />
                <span class="text-success"> Total Amount.</span>
            </div>
        </div>
        <hr>
        <div class="text-center mt-5">
            <button type="submit" class="btn btn-info btn-sm">Submit</button>
        </div>

    </form>
</div>
<script>
    function calculateTotalAmount() {
        let formFee = parseFloat(document.getElementById('formFee').value) || 0;
        let totalFee = parseFloat(document.getElementById('totalFee').value) || 0;
        let totalAmount = formFee + totalFee;
        document.getElementById('totalAmount').value = totalAmount.toFixed(2);
    }

    document.getElementById('formFee').addEventListener('input', calculateTotalAmount);
    document.getElementById('totalFee').addEventListener('input', calculateTotalAmount);

    calculateTotalAmount();

</script>

@endsection