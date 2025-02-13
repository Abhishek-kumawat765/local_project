 
<?php $__env->startSection('content'); ?>
<?php
$attendanceType = Helper::attendanceType();
  $classType = Helper::classType();
  $getPermission = Helper::getPermission();
?>
<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">


 <div class="content-wrapper">

   <section class="content pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-md-12">
            <div class="card card-outline card-orange">
                     <div class="card-header bg-primary">
                    <h3 class="card-title"><i class="fa fa-calendar-minus-o"></i> &nbsp;<?php echo e(__('student.View Students Attendance')); ?></h3>
                    <div class="card-tools">
                        <?php if(Session::get('role_id') !== 3): ?>
                    <a href="<?php echo e(url('studentsAttendanceAdd')); ?>" class="btn btn-primary <?php echo e(($getPermission->add == 1) ? '' : 'd-none'); ?> btn-sm" ><i class="fa fa-plus"></i><?php echo e(__('common.Add')); ?>  </a>
                 
                   <a href="<?php echo e(url('studentsDashboard')); ?>" class="btn btn-primary  btn-sm" ><i class="fa fa-arrow-left"></i><?php echo e(__('common.Back')); ?>  </a>
                      <?php endif; ?>
                    </div>
                    
                    </div>      
                    
                    <?php if(count($classType) > 0): ?>
                <form id="quickForm" action="<?php echo e(url('studentsAttendanceView')); ?>"  method="post">
                        <?php echo csrf_field(); ?> 
                    <div class="row m-2">
                    <?php if(Session::get('role_id') == 1): ?>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="State" class="required"><?php echo e(__('student.Admission No.')); ?></label>
                             <input type="text" class="form-control" id="admissionNo" name="admissionNo" placeholder="<?php echo e(__('student.Admission No.')); ?>" value="<?php echo e($search['admissionNo'] ?? ''); ?>">
                          </div>
                        </div>
                    <?php endif; ?>
                        <div class="col-md-2">
            			<div class="form-group">
            				<label><?php echo e(__('common.Month')); ?> </label>
            				<select class="form-control select2" id='date__' name="date">
                                <option value=''>--<?php echo e(__('student.Select Month')); ?>--</option>
                                <option <?php echo e($search['date'] == 1 ? "selected" : ""); ?> value='01'>Janaury</option>
                                <option <?php echo e($search['date'] == 2 ? "selected" : ""); ?> value='02'>February</option>
                                <option <?php echo e($search['date'] == 3 ? "selected" : ""); ?> value='03'>March</option>
                                <option <?php echo e($search['date'] == 4 ? "selected" : ""); ?> value='04'>April</option>
                                <option <?php echo e($search['date'] == 5 ? "selected" : ""); ?> value='05'>May</option>
                                <option <?php echo e($search['date'] == 6 ? "selected" : ""); ?> value='06'>June</option>
                                <option <?php echo e($search['date'] == 7 ? "selected" : ""); ?> value='07'>July</option>
                                <option <?php echo e($search['date'] == 8 ? "selected" : ""); ?> value='08'>August</option>
                                <option <?php echo e($search['date'] == 9 ? "selected" : ""); ?> value='09'>September</option>
                                <option <?php echo e($search['date'] == 10 ? "selected" : ""); ?> value='10'>October</option>
                                <option <?php echo e($search['date'] == 11 ? "selected" : ""); ?> value='11'>November</option>
                                <option <?php echo e($search['date'] == 12 ? "selected" : ""); ?> value='12'>December</option>
                                </select> 
            		    </div>
            		</div>       
            		<?php if(Session::get('role_id') == 3): ?>
                <input type='hidden' class="form-control" id="class_type_id" name="class_type_id"  value="<?php echo e(Session::get('class_type_id')); ?>"/>
                
                    	<?php else: ?>
                      <div class="col-md-2">
                    		<div class="form-group">
                    			<label><?php echo e(__('common.Class')); ?></label>
                    			<select class="form-control select2" id="class_type_id" name="class_type_id" >
                    			    <?php if(Session::get('role_id') != 2): ?>
                    			    
                    			<option value=""><?php echo e(__('common.Select')); ?></option>
                                 <?php endif; ?>
                                 <?php if(!empty($classType)): ?> 
                                      <?php $__currentLoopData = $classType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <option value="<?php echo e($type->id ?? ''); ?>" <?php echo e(($type->id == $search['class_type_id']) ? 'selected' : ''); ?>><?php echo e($type->name ?? ''); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  <?php endif; ?>
                                </select>
                    	    </div>
                    	</div> 	
                    		
                    
                    		
                    <?php endif; ?>
                <?php if(Session::get('role_id') == 1): ?>
                    <div class="col-md-4">
            			<div class="form-group">
            				<label><?php echo e(__('common.Search By Keywords')); ?></label>
            				<input type="text" class="form-control" id="name" name="name"  value="<?php echo e($search['name'] ?? ''); ?>" placeholder="<?php echo e(__('common.Ex. Name, Mobile, Email, Aadhaar etc.')); ?>">
            		    </div>
            		</div> 
            	<?php endif; ?>	
                        <div class="col-md-1 ">
                             <label for="" class="text-white"><?php echo e(__('common.Search')); ?></label>
                    	    <button type="submit" class="btn btn-primary"><?php echo e(__('common.Search')); ?></button>
                    	</div>
	
                    </div>
                </form>
                <?php else: ?>
                <p class="text-center text-danger mt-2">You are not yet authorized for viewing attendance .... please contact your administrator</p>
                  <?php endif; ?>
 

                  <table id="table" class="table table-bordered table-striped border table-responsive dataTable paddingTable">
                  <thead>
                    <tr id='days'role="row">
                     
                    </tr>
                  </thead>
                <tbody id='student_list'>
                    
                                                                         
                       
                         <tr>
                        
                                                
                       
              </tr>
                                              
                       
                  
                                           
                      
                      </tbody>
                      
                  </table>
  
                <div class="col-md-12 text-right">
                    <span class="btn btn-xs btn-success">&nbsp;P&nbsp;</span> <?php echo e(__('student.Present')); ?>  &nbsp; <span class="btn btn-xs btn-danger">&nbsp;A&nbsp;</span> <?php echo e(__('student.Absent')); ?>  &nbsp;
                    <span class="btn btn-xs btn-dark">&nbsp;H&nbsp;</span> Holiday &nbsp;<span class="btn btn-xs btn-info">&nbsp;L&nbsp;</span> Leave &nbsp;<span class="btn btn-xs btn-secondary">&nbsp;E&nbsp;</span> Event &nbsp;
                </div>                  
<button onclick="downloadCSV()">Download CSV</button>
    

                  </div>
                    
              </div>
            </div>
        </div>
      </div>
    </section>
</div>

<script>
     $('#quickForm').submit(function(event) {
        var date_array =[];
        var allStudents = <?php echo json_encode($allStudents, 15, 512) ?>;

       
        $('#student_list').html('');
        event.preventDefault();
         $('#loadingModal').modal('show');
        var name = $('#name').val();
        var class_type_id = $('#class_type_id').val();
        var date = parseInt($('#date__').val());
      
        var admissionNo = $('#admissionNo').val();
        var URL = "<?php echo e(url('/')); ?>";
        var year = 2024; // Example year
        // Example month (0-indexed, so 3 represents April)
        var daysInMonth = new Date(year, date, 0).getDate();
        var days = $('#days');
        days.html('');
        days.append('<th>Admission No</th>');
        days.append('<th >Name</th>');
        row_days = '';
        for(var i= 1; i<=daysInMonth; i++)
        {
             var date = new Date(year, (month-1), i);
             var dayOfWeek = date.toLocaleString('en', { weekday: 'short' }); 
             row_days += '<th class="days_">' +i+ ' ' + dayOfWeek+ '</th>';
        }
        days.append(row_days);
        var container = $('#student_list');
        var count =0;    
        allStudents.forEach(function(item,index) {

                if(parseInt(item.class_type_id) == parseInt(class_type_id))
                {


                    var row ='<tr><td>' +item.id + '</td><td>'+(item.first_name != null ? item.first_name : "") + (item.last_name != null ? item.last_name : "") +' / '+(item.mobile != null ? item.mobile : "")+ '</td>';

                    var row2='';

                    var array_d = [];
                    for(var i= 1; i<=daysInMonth; i++)
        {
          var newclass =  year+'-'+$('#date__').val()+'-'+(i<10 ? '0'+i : i);
            array_d.push(newclass) ;
          
             row2 += '<td class='+newclass+'_'+item.id+'></td>';
        }                           
                container.append(row +row2+'</tr>');
                date_array[count]  ={'id':item.id , 'date':array_d}
                count++;
                }
              
            });


          

            var result = [];
            function divideIntoSlots(number) {
   
    var slots = Math.ceil(number / 15);
    var start =0;
    var end =0;

  
    for (var i = 0; i < slots; i++) {
        var slotValue = Math.min(15, number); 
        var end = start + slotValue - 1; // Subtract 1 to ensure end is inclusive
        result.push({ 'from': start, 'to': end });
        start = end + 1;
        number -= slotValue;
    }
    
   
    
    return result;
}



var slots = divideIntoSlots(date_array.length);


var loop =0;

fetchData();
            function fetchData() {

            //  console.log(date_array)
                if(loop < result.length)
                {
        $.ajax({
                 headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
            type:'post',
            url: URL+'/studentsAttendanceView',
            data: {data:JSON.stringify(date_array),loop:result[loop]},
            success: function (response) {
                $.each(response.data, function(index, item) {

              
                    $.each(item, function(index2, item2) {

                  var span_row = '';
                  var time24h = item2.time+'';
        var time12h = convertTo12HrFormat(time24h);
                          if(item2.attendance_status_id == 1)
                          {
                            span_row = '<span class="btn btn-success"style="font-size: 10px;"> P </span>'
                          }
                          else if(item2.attendance_status_id == 3){
                            span_row = '<span class="btn btn-danger" style="font-size: 10px;">A</span>'
                          }
                          else if(item2.attendance_status_id == 5){
                            span_row = '<span class="btn btn-dark" style="font-size: 10px;">H</span>'
                          }
                          else if(item2.attendance_status_id == 9){
                            span_row = '<span class="btn btn-info" style="font-size: 10px;">L</span>'
                          }
                          else if(item2.attendance_status_id == 10){
                            span_row = '<span class="btn btn-secondary" style="font-size: 10px;">E</span>'
                          }
                         
                    
                $('.'+item2.date+'_'+item2.admission_id).append(span_row);
           
               
            });
            });

            loop++;
            fetchData();
            }
          });
        }

        }
        });


        function convertTo12HrFormat(time24h) {
        var timeArray = time24h.split(':');
        var hours = parseInt(timeArray[0]);
        var minutes = parseInt(timeArray[1]);
        var period = hours < 12 ? 'AM' : 'PM';

        if (hours === 0) {
            hours = 12;
        } else if (hours > 12) {
            hours = hours - 12;
        }

        return hours + ':' + (minutes < 10 ? '0' : '') + minutes + ' ' + period;
    }

</script>

<script>



  
function downloadCSV() {
  let csv = [];
  const rows = document.querySelectorAll("table tr");

  for (const row of rows.values()) {
    const cells = row.querySelectorAll("td, th");
    const rowText = Array.from(cells).map((cell) => cell.innerText);
    csv.push(rowText.join(","));
  }
  const csvFile = new Blob([csv.join("\n")], {
    type: "text/csv;charset=utf-8;"
  });
  saveAs(csvFile, "Students Attendance.csv");
}

</script>        
<style>
    .view {
  margin: auto;
  width: 100%;
}

.wrapper {
  position: relative;
  overflow: auto;
  border: 1px solid black;
  white-space: nowrap;
}

.sticky-col {
  position: -webkit-sticky;
  position: sticky;
  background-color: white;
}

.first-col {
  width: 100px;
  min-width: 100px;
  max-width: 100px;
  left: 0px;
}

.second-col {
  width: 150px;
  min-width: 150px;
  max-width: 150px;
  left: 100px;
}

.paddingTable{
    padding-bottom:20px;    
}
.paddingTable th,td{
    padding:10px;
}
</style>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eplanetacademy/public_html/erp/resources/views/students/attendance/attendance_view.blade.php ENDPATH**/ ?>