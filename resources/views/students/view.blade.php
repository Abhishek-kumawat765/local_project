@extends('common.app')
@section('content')
@if(session('danger'))
    <script>
        toastr.error("{{ session('danger') }}");
    </script>
@endif


<div class="container">
    <div class="d-flex justify-content-between  mb-3">
        <h1></h1>
        <h1>View Student Data</h1>
        <a href="{{ url('addStudents') }}" class="btn btn-info btn-sm"> <i class="fa fa-plus"> </i> Add</a>

    </div>
    <div id="" class="table-responsive">
        <table class="table table-hover table-responsive table-striped table-bordered ">
            <thead>
                <tr>
                    <th>Action</th>
                    <th>Sr. No.</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Mobile</th>
                    <th>Age</th>
                    <th>Email </th>
                    <th>Date </th>
                    <th>Father Name</th>
                    <th>Mother Name</th>
                    <th>Address</th>
                    <th>User Name</th>
                    <th>State</th>
                    <th>Form Fee</th>
                    <th>Total Fee</th>
                    <th>Total Amount</th>

                </tr>
            </thead>
            <tbody>
                @if (!empty($studentsData))
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($studentsData as $studentDetail)
                                    <tr data-id="{{ $studentDetail->id ?? '' }}">
                                        <td class="d-flex">
                                            <a href="{{ url('editStudents', $studentDetail->id) }}" class="btn btn-info btn-sm"
                                                style="height:30px; width:30px; display: flex; justify-content: center; align-items: center; padding: 0;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            &nbsp;
                                            <a href="{{ url('deleteStudents', $studentDetail->id) }}" class="btn btn-danger btn-sm"
                                                style="height:30px; width:30px; display: flex; justify-content: center; align-items: center; padding: 0;">
                                                <i class="fa fa-trash"></i>
                                            </a>

                                           
                                           
                                        </td>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $studentDetail->name }}</td>
                                        <td>{{ $studentDetail->class_name ?? '' }}</td>
                                        <td>{{ $studentDetail->mobile }}</td>
                                        <td>{{ $studentDetail->age }}</td>
                                        <td>{{ $studentDetail->email }}</td>
                                        <td>{{ $studentDetail->date }}</td>
                                        <td>{{ $studentDetail->fatherName }}</td>
                                        <td>{{ $studentDetail->motherName }}</td>
                                        <td>{{ $studentDetail->address }}</td>
                                        <td>{{ $studentDetail->userName }}</td>
                                        <!-- <td>{{ $studentDetail->password }}</td> -->
                                        <!-- <td>{{ $studentDetail->photo }}</td> -->
                                        <td>{{ $studentDetail->state_name ?? '' }}</td>
                                        <td>{{ number_format($studentDetail->formFee, 2) }}</td>
                                        <td>{{ number_format($studentDetail->totalFee, 2) }}</td>
                                        <td>{{ $studentDetail->totalAmount }}</td>

                                    </tr>

                                @endforeach
                @endif
            </tbody>

        </table>
    </div>
</div>
@endsection