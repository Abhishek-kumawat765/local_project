<?php $__env->startSection('content'); ?>

<div class="app-main flex-column flex-row-fluid " id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid">
        
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 " 
             
                 >
        
                    <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">
                    
            
        
        <!--begin::Page title-->
        <div  class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                Enquiry List
                    </h1>
            <!--end::Title-->
        
                    
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                            <li class="breadcrumb-item text-muted">
                                                            <a href="/metronic8/demo1/index.html" class="text-muted text-hover-primary">
                                        Home                            </a>
                                                    </li>
                                        <!--end::Item-->
                                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                                                
                                    <!--begin::Item-->
                                            <li class="breadcrumb-item text-muted">
                                                            Enquiry Management                                            </li>
                                        <!--end::Item-->
                                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                                                
                                    <!--begin::Item-->
                                            <li class="breadcrumb-item text-muted">
                                                            Enquiry                                            </li>
                                        <!--end::Item-->
                                                
                            </ul>
                <!--end::Breadcrumb-->
            </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Filter menu-->
                <div class="m-0">
                    <!--begin::Menu toggle-->
                    <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-filter fs-6 text-muted me-1"><span class="path1"></span><span class="path2"></span></i>               
                        Filter
                    </a>
                    <!--end::Menu toggle-->
                    
                    
        
        <!--begin::Menu 1-->
        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_668a8650bc1bb">
            <!--begin::Header-->
            <div class="px-7 py-5">
                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
            </div>
            <!--end::Header-->
        
            <!--begin::Menu separator-->
            <div class="separator border-gray-200"></div>
            <!--end::Menu separator-->
            
        
            <!--begin::Form-->
            <div class="px-7 py-5">
                <!--begin::Input group-->
                <div class="mb-10">
                    <!--begin::Label-->
                    <label class="form-label fw-semibold">Status:</label>
                    <!--end::Label-->
        
                    <!--begin::Input-->
                    <div>
                        <select class="form-select form-select-solid" multiple data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_668a8650bc1bb" data-allow-clear="true">
                            <option></option>
                            <option value="1">Approved</option>
                            <option value="2">Pending</option>
                            <option value="2">In Process</option>
                            <option value="2">Rejected</option>
                        </select>
                    </div>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
        
                <!--begin::Input group-->
                <div class="mb-10">
                    <!--begin::Label-->
                    <label class="form-label fw-semibold">Member Type:</label>
                    <!--end::Label-->
        
                    <!--begin::Options-->
                    <div class="d-flex">
                        <!--begin::Options-->    
                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                            <input class="form-check-input" type="checkbox" value="1"/>
                            <span class="form-check-label">
                                Author
                            </span>
                        </label>
                        <!--end::Options-->    
        
                        <!--begin::Options-->    
                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="2" checked="checked"/>
                            <span class="form-check-label">
                                Customer
                            </span>
                        </label>
                        <!--end::Options-->    
                    </div>        
                    <!--end::Options-->    
                </div>
                <!--end::Input group-->
        
                <!--begin::Input group-->
                <div class="mb-10">
                    <!--begin::Label-->
                    <label class="form-label fw-semibold">Notifications:</label>
                    <!--end::Label-->
        
                    <!--begin::Switch-->
                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked />
                        <label class="form-check-label">
                            Enabled
                        </label>
                    </div>
                    <!--end::Switch-->
                </div>
                <!--end::Input group-->
        
                <!--begin::Actions-->
                <div class="d-flex justify-content-end">
                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
        
                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Form-->
        </div>
        <!--end::Menu 1-->        </div>
                <!--end::Filter menu-->
            
            
            <!--begin::Secondary button-->
                <!--end::Secondary button-->
            
            <!--begin::Primary button-->
                    <a href="#" class="btn btn-sm fw-bold btn-primary"  data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">
                    Create        </a>
                <!--end::Primary button-->
        </div>
        <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
        <!--end::Toolbar-->                                        

        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">
            <!--begin::Card-->
<div class="card">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"><span class="path1"></span><span class="path2"></span></i>                <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search enquiry" />
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
    <!--begin::Filter-->
    <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
        <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span class="path2"></span></i>        Filter
    </button>
    <!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
    <!--begin::Header-->
    <div class="px-7 py-5">
        <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
    </div>
    <!--end::Header-->

    <!--begin::Separator-->
    <div class="separator border-gray-200"></div>
    <!--end::Separator-->

    <!--begin::Content-->
    <div class="px-7 py-5" data-kt-user-table-filter="form">
        <!--begin::Input group-->
        <div class="mb-10">
            <label class="form-label fs-6 fw-semibold">Role:</label>
            <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                <option></option>
                <option value="Administrator">Administrator</option>
                <option value="Analyst">Analyst</option>
                <option value="Developer">Developer</option>
                <option value="Support">Support</option>
                <option value="Trial">Trial</option>
            </select>
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="mb-10">
            <label class="form-label fs-6 fw-semibold">Two Step Verification:</label>
            <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="two-step" data-hide-search="true">
                <option></option>
                <option value="Enabled">Enabled</option>
            </select>
        </div>
        <!--end::Input group-->

        <!--begin::Actions-->
        <div class="d-flex justify-content-end">
            <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
            <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Content-->
</div>
<!--end::Menu 1-->    <!--end::Filter-->

    <!--begin::Export-->
    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
        <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span class="path2"></span></i>        Export
    </button>
    <!--end::Export-->

    <!--begin::Add user-->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
        <i class="ki-duotone ki-plus fs-2"></i>        Add Enquiry
    </button>
    <!--end::Add user-->
</div>
<!--end::Toolbar-->

<!--begin::Group actions-->
<div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
    <div class="fw-bold me-5">
        <span class="me-2" data-kt-user-table-select="selected_count"></span> Selected
    </div>

    <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">
        Delete Selected
    </button>
</div>
<!--end::Group actions-->

<!--begin::Modal - Adjust Balance-->
<div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Export Enquiry</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form id="kt_modal_export_users_form" class="form" action="#">
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mb-2">Select Roles:</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <select name="role" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bold">
                            <option></option>
                            <option value="Administrator">Administrator</option>
                            <option value="Analyst">Analyst</option>
                            <option value="Developer">Developer</option>
                            <option value="Support">Support</option>
                            <option value="Trial">Trial</option>
                        </select>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold form-label mb-2">Select Export Format:</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <select name="format" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                            <option></option>
                            <option value="excel">Excel</option>
                            <option value="pdf">PDF</option>
                            <option value="cvs">CVS</option>
                            <option value="zip">ZIP</option>
                        </select>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">
                            Discard
                        </button>

                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Card-->

<!--begin::Modal - Add task-->
<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_user_header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Add Enquiry</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body px-5 my-7">
                <!--begin::Form-->
                <form id="kt_modal_add_user_form" class="form" action="#" enctype="multipart/form-data">
                    <!--begin::Scroll-->
                    <div 
                        class="d-flex flex-column scroll-y px-5 px-lg-10" 
                        id="kt_modal_add_user_scroll" 
                        data-kt-scroll="true" 
                        data-kt-scroll-activate="true" 
                        data-kt-scroll-max-height="auto" 
                        data-kt-scroll-dependencies="#kt_modal_add_user_header" 
                        data-kt-scroll-wrappers="#kt_modal_add_user_scroll" 
                        data-kt-scroll-offset="300px"
                    >
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="d-block fw-semibold fs-6 mb-5">Avatar</label>
                            <!--end::Label-->

                            
<!--begin::Image placeholder-->
<style>
	.image-input-placeholder {
		background-image: url("<?php echo e(env('IMAGE_SHOW_PATH') . 'assets/media/svg/files/blank-image.svg'); ?>");
	}

			[data-bs-theme="dark"] .image-input-placeholder {
			background-image: url("<?php echo e(env('IMAGE_SHOW_PATH') . 'assets/media/svg/files/blank-image-dark.svg'); ?>");
		}               
	</style>
<!--end::Image placeholder-->
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?php echo e(env('IMAGE_SHOW_PATH') . 'assets/media/avatars/300-6.jpg'); ?>);"></div>
                                <!--end::Preview existing avatar-->

                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="image" id="image" accept="" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->

                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>                                </span>
                                <!--end::Cancel-->

                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->

                            <!--begin::Hint-->
                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Enquiry Type</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <select id="type" class="form-control form-control-solid mb-3 mb-lg-0" name="type">
                                <option value="1">Client</option>
                                <option value="2">Interview</option>
                                <option value="3">Office Visit</option>
                                <option value="4">Other</option>
                            </select>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Full Name</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" name="name" id="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Mobile</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" name="mobile" id="mobile" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Mobile" value="" />
                            <!--end::Input-->
                        </div>
                        
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class=" fw-semibold fs-6 mb-2">Mobile 2</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" name="mobile2" id="mobile2" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Mobile 2" value="" />
                            <!--end::Input-->
                        </div>
                        
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class=" fw-semibold fs-6 mb-2">Email</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="email" name="email" id="email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class=" fw-semibold fs-6 mb-2">Address</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <textarea name="address" id="address" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Address" value="" /></textarea>
                            <!--end::Input-->
                        </div>
                        
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class=" fw-semibold fs-6 mb-2">Remark</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" name="remark" id="remark" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Remark" value="" />
                            <!--end::Input-->
                        </div>
                       
                    </div>
                    <!--end::Scroll-->

                    <!--begin::Actions-->
                    <div class="text-center pt-10">
                        <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">
                            Discard
                        </button>

                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Add task-->        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body py-4">
        
<!--begin::Table-->
<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users" >
    <thead>
        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
            <th class="w-10px pe-2">
                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                </div>
            </th>
            <th class="min-w-125px">Updated</th>
            <th class="min-w-125px">Name</th>
            <th class="min-w-125px">Mobile</th>
            <th class="min-w-125px">Two-step </th>
            <th class="min-w-125px">Address</th>
            <th class="min-w-125px">Reminder</th>
            <th class="min-w-125px">Status</th>
            <th class="text-end min-w-100px">Actions</th>
        </tr>
    </thead>
    <tbody class="text-gray-600 fw-semibold" id="appendRow"></tbody>
</table>
<!--end::Table-->    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->        </div>
        <!--end::Content container-->

    </div>
</div>


<script>
$(document).ready(function(){
    var enquiry = <?php echo json_encode($enquiry, 15, 512) ?>;
    var enquiryRaw = '';
    $(enquiry).each(function(index, value){
enquiryRaw = enquiryRaw + '<tr class="odd"> <td> <div class="form-check form-check-sm form-check-custom form-check-solid"><input class="form-check-input" type="checkbox" value="1"></div> </td> <td>Coming Soon</td><td class="d-flex align-items-center"> <div class="symbol symbol-circle symbol-50px overflow-hidden me-3"><a href="/metronic8/demo1/apps/user-management/users/view.html"> <div class="symbol-label fs-3 bg-light-danger text-danger">V</div> </a></div> <div class="d-flex flex-column"><a href="/metronic8/demo1/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">' + value.name + '</a><span></span></div> </td> <td>Analyst </td> <td data-order="2024-07-11T18:32:04+05:30"> <div class="badge badge-light fw-bold">20 mins ago</div> </td> <td> <div class="badge badge-light-success fw-bold">Enabled</div> </td> <td data-order="2024-10-25T10:30:00+05:30">25 Oct 2024, 10:30 am</td> <td class="text-end"><a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions<i class="ki-duotone ki-down fs-5 ms-1"></i></a> <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true"> <div class="menu-item px-3"><a href="/metronic8/demo1/apps/user-management/users/view.html" class="menu-link px-3">Edit</a></div> <div class="menu-item px-3"><a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a></div> </div> </td></tr>';    });
    $('#appendRow').html(enquiryRaw);
})
</script>        
                    <!--begin::Vendors Javascript(used for this page only)-->
                            <script src="<?php echo e(URL::asset('public/assets/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>
                        <!--end::Vendors Javascript-->
        
                    <!--begin::Custom Javascript(used for this page only)-->
                            <script src="<?php echo e(URL::asset('public/assets/js/custom/apps/user-management/users/list/table.js')); ?>"></script>
                            <script src="<?php echo e(URL::asset('public/assets/js/custom/apps/user-management/users/list/export-users.js')); ?>"></script>
                            <script src="<?php echo e(URL::asset('public/assets/js/custom/apps/user-management/users/list/add.js')); ?>"></script>
                            <script src="<?php echo e(URL::asset('public/assets/js/custom/utilities/modals/users-search.js')); ?>"></script>
                        <!--end::Custom Javascript-->

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('common.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rukmanisoftware/public_html/web/resources/views/esh2/enquiry/list.blade.php ENDPATH**/ ?>