@extends('common.app')
@section('content')
@php
    $classes = DB::table('classes')->whereNull('deleted_at')->get();
    $states =  DB::table('states')->get();
@endphp
<div class="container">
    <div class="text-center d-flex justify-content-between">
        <h1></h1>
        <h1>Edit Student Form</h1>
        <a href="{{ url('viewStudents') }}" class="btn btn-info btn-sm"> <i class="fa fa-eye"> </i> View</a>
    </div>
    <hr>
    <form action="{{ url('editStudents', $editStudents->id) }}" enctype="multipart/form-data" method="POST"
        id="editStudents">
        @csrf
        @php
        @endphp
        <div class="row">
            <div class="col-md-3">
                <label for="name">Name<span style="color:red;">*</span></label>
                <input type="text" name="name" id="name" value="{{ $editStudents->name  }}" class="form-control p-2" />
                @error('class')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="age">Age<span style="color:red;">*</span></label>
                <input type="text" name="age" id="age" value="{{ $editStudents->age }}" class="form-control p-1"
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
                            <option value="{{ $studentClass->id ?? ''  }}" {{  $studentClass->id == $editStudents->class ? 'selected' : '' }} >
                                {{ $studentClass->className ?? '' }}
                            </option>
                        @endforeach
                    @endif
                </select>
                @error('class')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="mobile">Mobile<span style="color:red;">*</span></label>
                <input type="tel" name="mobile" id="mobile" value="{{ $editStudents->mobile }}" class="form-control p-2"
                    maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')" />
                @error('mobile')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-3 mt-5">
                <label for="email">Email<span style="color:red;">*</span></label>
                <input type="text" name="email" id="email" value="{{ $editStudents->email }}"
                    class="form-control p-2" />
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-3 mt-5 ">
                <label for="date">Date<span style="color:red;">*</span></label>
                <input type="datetime-local" name="date" id="date" value="{{ $editStudents->date }}"
                    class="form-control p-2" />
                @error('date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3 mt-5">
                <label for="fatherName">Father Name<span style="color:red;">*</span></label>
                <input type="text" name="fatherName" id="fatherName" value="{{ $editStudents->fatherName }}"
                    class="form-control p-2" />
                @error('fatherName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3 mt-5">
                <label for="motherName">Mother Name<span style="color:red;">*</span></label>
                <input type="text" name="motherName" id="motherName" value="{{ $editStudents->motherName }}"
                    class="form-control p-2" />
                @error('motherName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3 mt-5">
                <label for="address">Address<span style="color:red;">*</span></label>
                <input type="text" name="address" id="address" value="{{ $editStudents->address }}"
                    class="form-control p-2" />
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3 mt-5">
                <label for="userName">User Name<span style="color:red;">*</span></label>
                <input type="name" name="userName" id="userName" value="{{ $editStudents->userName  }}"
                    class="form-control p-1" autocomplete="off" placeholder="Enter your user name" />
                @error('userName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- <div class="col-md-3 mt-5">
                <label for="password">Password<span style="color:red;">*</span></label>
                <input type="password" name="password" id="password" value="{{ $editStudents->password  }}"
                    class="form-control p-1" autocomplete="off" placeholder="Enter your password" />
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div> -->
            <div class="col-md-3 mt-5">
                <label for="state">State<span style="color:red;">*</span></label>
                <select class="form-control p-1" id="state" name="state" value="{{ old('state') }}">
                    <option value="">{{ __('Select') }}</option>
                    @if(!empty($states))
                        @foreach($states as $studentState)
                            <option value="{{ $studentState->id ?? ''  }}" {{  $studentState->id == $editStudents->state ? 'selected' : '' }}>
                                {{ $studentState->name ?? '' }}
                            </option>
                        @endforeach
                    @endif
                </select>
                @error('class')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3 mt-5 ">
                <label for="image">Image<span style="color:red;">*</span></label>
                <input type="file" name="photo" id="photo" class="form-control p-1" />
                <img src="{{ env('IMAGE_SHOW_PATH') .'students/' . $editStudents->photo }}" alt="Image Preview" style="max-width: 100%; margin-top: 10px;">

                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>


            <div class="col-md-3 mt-5">
                <label for="formFee">Form Fee</label>
                <input type="text" name="formFee" id="formFee" value="{{ $editStudents->formFee }}"
                    class="form-control p-1 bg-secondary" readonly />
                @error('formFee')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3 mt-5">
                <label for="totalFee">Total Fee</label>
                <input type="text" name="totalFee" id="totalFee" value="{{ $editStudents->totalFee }}"
                    class="form-control p-1 bg-secondary" readonly />
                @error('totalFee')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3 mt-5">
                <label for="totalAmount">Total Amount</label>
                <input type="text" name="totalAmount" id="totalAmount" value="{{ $editStudents->totalAmount }}"
                    class="form-control p-1 bg-secondary " readonly />
                @error('totalAmount')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <hr>
        <div class="text-center mt-5">
            <button type="submit" class="btn btn-info btn-sm">Update</button>
        </div>
    </form>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        function calculateTotalAmount() {
            let formFee = parseFloat(document.getElementById('formFee').value) || 0;
            let totalFee = parseFloat(document.getElementById('totalFee').value) || 0;
            let totalAmount = formFee + totalFee;
            document.getElementById('totalAmount').value = totalAmount.toFixed(2);
        }

        document.getElementById('formFee').addEventListener('input', calculateTotalAmount);
        document.getElementById('totalFee').addEventListener('input', calculateTotalAmount);

        calculateTotalAmount();
    });
</script>
@endsection