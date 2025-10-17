@extends('theme.default')

@section('title', 'Settings')

@section('content')

            <div class="content">

                <!-- Breadcrumb -->
                <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Settings</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="#"><i class="ti ti-smart-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Administration
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Settings</li>
                            </ol>
                        </nav>
                    </div>
                   
                </div>
            
                <div class="row">
                    <div class="container">
                        <ul class="nav nav-tabs nav-tabs-solid bg-transparent border-bottom mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                            <button class="nav-link   text-primary fw-semibold active position-relative" 
                            id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" 
                            type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="ti ti-settings me-2"></i>General Settings</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link text-primary fw-semibold position-relative" id="pills-profile-tab" data-bs-toggle="pill" 
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <i class="ti ti-world-cog me-2"></i>Password Settings
                            </button>
                            </li>
                        
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="border-bottom mb-3 pb-3">
                                            <h4>Profile Settings</h4>
                                        </div>
                                        <form action="profile-settings">
                                            <div class="border-bottom mb-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div>
                                                            <h6 class="mb-3">Basic Information</h6>
                                                            <div
                                                                class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
                                                                    <i class="ti ti-photo text-gray-3 fs-16"></i>
                                                                </div>
                                                                <div class="profile-upload">
                                                                    <div class="mb-2">
                                                                        <h6 class="mb-1">Profile Photo</h6>
                                                                        <p class="fs-12">Recommended image size is 40px x 40px</p>
                                                                    </div>
                                                                    <div class="profile-uploader d-flex align-items-center">
                                                                        <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                                                            Upload
                                                                            <input type="file" class="form-control image-sign" multiple="">
                                                                        </div>
                                                                        <a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
                                                                    </div>
                            
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row align-items-center mb-3">
                                                            <div class="col-md-4">
                                                                <label class="form-label mb-md-0">First Name</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="col-md-6">
                                                        <div class="row align-items-center mb-3">
                                                            <div class="col-md-4">
                                                                <label class="form-label mb-md-0">Email</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="row align-items-center mb-3">
                                                            <div class="col-md-4">
                                                                <label class="form-label mb-md-0">Phone</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-bottom mb-3">
                                                <h6 class="mb-3">Address Information</h6>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row align-items-center mb-3">
                                                            <div class="col-md-2">
                                                                <label class="form-label mb-md-0">Address</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row align-items-center mb-3">
                                                            <div class="col-md-4">
                                                                <label class="form-label mb-md-0">City</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row align-items-center mb-3">
                                                            <div class="col-md-4">
                                                                <label class="form-label mb-md-0">State</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                   <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-md-6">
                                                        <div class="row align-items-center mb-3">
                                                            <div class="col-md-4">
                                                                <label class="form-label mb-md-0">Postal Code</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <button type="button" class="btn btn-outline-light border me-3">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                 <div class="col-xl-7">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="border-bottom mb-3 pb-3">
                                                <h4>Password Setting</h4>
                                            </div>
                                            <form action="#">
                                                <div class="border-bottom mb-3">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="row align-items-center mb-3">
                                                                <div class="col-md-4">
                                                                    <label class="form-label mb-md-0">Old Password</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative">
                                                                        <input type="password" class="form-control" id="oldPassword" placeholder="Enter Old Password">
                                                                        <i class="ti ti-eye-off position-absolute top-50 end-0 translate-middle-y me-3" id="toggleOldPassword"
                                                                            style="cursor: pointer;"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="row align-items-center mb-3">
                                                                <div class="col-md-4">
                                                                    <label class="form-label mb-md-0">New Password</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative mb-3">
                                                                        <input type="password" class="form-control" id="newPassword" placeholder="Enter New Password">
                                                                        <i class="ti ti-eye-off position-absolute top-50 end-0 translate-middle-y me-3" id="toggleNewPassword"
                                                                            style="cursor: pointer;"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="row align-items-center mb-3">
                                                                <div class="col-md-4">
                                                                    <label class="form-label mb-md-0">Confirm New Password</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative mb-3">
                                                                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                                                                        <i class="ti ti-eye-off position-absolute top-50 end-0 translate-middle-y me-3" id="toggleConfirmPassword"
                                                                            style="cursor: pointer;"></i>
                                                                    </div>                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                      
                                                    </div>
                                                </div>
                                              
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <button type="button" class="btn btn-outline-light border me-3">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <h2>Contact</h2>
                            <p>Please check our more design @ <a target="_blank" href="#">Codepen</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<script>
    function setupPasswordToggle(toggleId, inputId) {
        const toggleIcon = document.getElementById(toggleId);
        const inputField = document.getElementById(inputId);

        toggleIcon.addEventListener("click", function () {
            const type = inputField.getAttribute("type") === "password" ? "text" : "password";
            inputField.setAttribute("type", type);
            this.classList.toggle("ti-eye");
            this.classList.toggle("ti-eye-off");
        });
    }

    // Apply toggle to each field
    setupPasswordToggle("toggleOldPassword", "oldPassword");
    setupPasswordToggle("toggleNewPassword", "newPassword");
    setupPasswordToggle("toggleConfirmPassword", "confirmPassword");
</script>
@endsection

