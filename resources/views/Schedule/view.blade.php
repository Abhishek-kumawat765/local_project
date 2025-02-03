@extends('common.app')
@section('content')
@if(session('danger'))
    <script>
        toastr.error("{{ session('danger') }}");
    </script>
@endif

<style>

    .container a {
        height: 50px;
        width: 100%;
        margin-top: 10px;
    }

    .container i {
        font-size: 1rem;
        margin-left: 10px;
    }
</style>
<div class="container">
    <div class="row ">
        <div class="col-md-4">
            <a id="night" class="btn {{ $night ? 'btn-success' : 'btn-primary' }}
" data-bs-toggle="modal" data-bs-target="#schedule" data-form="night">Night Schedule <i class="fa fa-moon"></i></a>
            <a id="exercise" class="btn {{ $exercise ? 'btn-success' : 'btn-primary' }}" data-bs-toggle="modal"
                data-bs-target="#schedule" data-form="exercise">Exercise Schedule <i class="fa fa-dumbbell"></i></a>
            <a id="morning" class="btn {{ $morning ? 'btn-success' : 'btn-primary' }}" data-bs-toggle="modal"
                data-bs-target="#schedule" data-form="morning">Morning Schedule <i class="fa fa-sun"></i></a>
        </div>
        <div class="col-md-4">
            <a id="rest" class="btn {{ $rest ? 'btn-success' : 'btn-primary' }}" data-bs-toggle="modal"
                data-bs-target="#schedule" data-form="rest">Rest Schedule <i class="fa fa-bed"></i></a>
            <a id="restTwo" class="btn {{ $restTwo ? 'btn-success' : 'btn-primary' }}" data-bs-toggle="modal"
                data-bs-target="#schedule" data-form="restTwo">Rest Two Schedule <i class="fa fa-bed"></i></a>
            <a id="restThree" class="btn {{ $restThree ? 'btn-success' : 'btn-primary' }}" data-bs-toggle="modal"
                data-bs-target="#schedule" data-form="restThree">Rest Three Schedule <i class="fa fa-bed"></i></a>

        </div>
        <div class="col-md-4">
            <a id="study" class="btn {{ $study ? 'btn-success' : 'btn-primary' }}" data-bs-toggle="modal"
                data-bs-target="#schedule" data-form="study">Study Schedule <i class="fa fa-book-open"></i></a>
            <a id="studyTwo" class="btn {{ $studyTwo ? 'btn-success' : 'btn-primary' }}" data-bs-toggle="modal"
                data-bs-target="#schedule" data-form="studyTwo">Study Two Schedule <i class="fa fa-book-open"></i></a>
            <a id="studyThree" class="btn {{ $studyThree ? 'btn-success' : 'btn-primary' }}" data-bs-toggle="modal"
                data-bs-target="#schedule" data-form="studyThree">Study Three Schedule <i
                    class="fa fa-book-open"></i></a>
            <a id="studyFourth" class="btn {{ $studyFourth ? 'btn-success' : 'btn-primary' }}" data-bs-toggle="modal"
                data-bs-target="#schedule" data-form="studyFourth">Study Fourth Schedule <i
                    class="fa fa-book-open"></i></a>
        </div>

    </div>
</div>






</div>
<div class="modal fade" id="schedule" tabindex="-1" aria-labelledby="scheduleLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="modalTilte">Add Night Schedule</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Form -->
            <form method="POST" action="{{ url('addSchedule') }}">
                @csrf

                <!-- Hidden Input -->
                <input type="hidden" name="form_type" value="night" class="hiddenInput">

                <!-- Date Input -->
                <div class="mb-3 px-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" name="date" id="date" class="form-control" required>
                </div>

                <!-- Night Status Select -->
                <div class="mb-3 px-3">
                    <label for="status" class="form-label status">Status</label>
                    <select name="status" id="status" class="form-select" required>
                        <option value="">-- Select --</option>
                        <option value="1">Complete</option>
                        <option value="2">Incomplete</option>
                    </select>
                </div>

                <!-- Save Button -->
                <div class="text-center mb-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('date').value = new Date().toISOString().split('T')[0];
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>

    $(document).ready(function () {
        $('#night').click(function () {
            $('#schedule').modal('show');
            $('#modalTilte').html('Night Schedule <strong>(10pm-5am)</strong>');
            $('.status').html('Night Status');
            $('#status').attr('name', 'night');
            $('.hiddenInput').val('night');
        });

        $('#exercise').click(function () {
            $('#schedule').modal('show');
            $('#modalTilte').html('Exercise Schedule <strong>(5am-7am)</strong> ');
            $('.hiddenInput').val('exercise');
            $('.status').html('Exercise Status');
            $('#status').attr('name', 'exercise');
            $('.hiddenInput').attr('id', 'exercise');
        });

        $('#morning').click(function () {
            $('#schedule').modal('show');
            $('#modalTilte').html('Morning Schedule <strong>(7am-9am)</strong> ');
            $('.hiddenInput').val('morning');
            $('.status').html('Morning Status');
            $('#status').attr('name', 'morning');
            $('.hiddenInput').attr('id', 'morning');
        });

        $('#study').click(function () {
            $('#schedule').modal('show');
            $('#modalTilte').html('Study Schedule <strong>(9am-12pm)</strong> ');
            $('.hiddenInput').val('study');
            $('.status').html('Study Status');
            $('#status').attr('name', 'study');
            $('.hiddenInput').attr('id', 'study');
        });

        $('#studyTwo').click(function () {
            $('#schedule').modal('show');
            $('.hiddenInput').val('studyTwo');
            $('#status').attr('name', 'studyTwo');
            $('.hiddenInput').attr('id', 'studyTwo');
            $('#modalTilte').html('Study Two Schedule <strong>(1pm-3pm)</strong> ');
            $('.status').html('StudyTwo Status');
        });

        $('#studyThree').click(function () {
            $('#schedule').modal('show');
            $('.hiddenInput').val('studyThree');
            $('#status').attr('name', 'studyThree');
            $('.hiddenInput').attr('id', 'studyThree');
            $('#modalTilte').html('Study Three Schedule <strong>(4pm-6pm)</strong> ');
            $('.status').html('Study Three Status');
        });

        $('#studyFourth').click(function () {
            $('#schedule').modal('show');
            $('.hiddenInput').val('studyFourth');
            $('#status').attr('name', 'studyFourth');
            $('.hiddenInput').attr('id', 'studyFourth');
            $('#modalTilte').html('Study Fourth Schedule <strong>(8pm-10pm)</strong> ');
            $('.status').html('Study Fourth Status');
        });

        $('#rest').click(function () {
            $('#schedule').modal('show');
            $('.hiddenInput').val('rest');
            $('#status').attr('name', 'rest');
            $('.hiddenInput').attr('id', 'rest');
            $('#modalTilte').html('Rest Schedule <strong>(12pm-1pm)</strong> ');
            $('.status').html('Rest Status');
        });

        $('#restTwo').click(function () {
            $('#schedule').modal('show');
            $('.hiddenInput').val('restTwo');
            $('#status').attr('name', 'restTwo');
            $('.hiddenInput').attr('id', 'restTwo');
            $('#modalTilte').html('Rest Two Schedule <strong>(3pm-4pm)</strong> ');
            $('.status').html('Rest Two Status');
        });

        $('#restThree').click(function () {
            $('#schedule').modal('show');
            $('.hiddenInput').val('restThree');
            $('#status').attr('name', 'restThree');
            $('.hiddenInput').attr('id', 'restThree');
            $('#modalTilte').html('Rest Three Schedule <strong>(6pm-8pm)</strong> ');
            $('.status').html('Rest Three Status');
        });
    });

</script>
@endsection