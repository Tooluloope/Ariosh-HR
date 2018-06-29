@extends('layout')

@section('styles')
<link href="/css/custom/home.css" rel="stylesheet">
<link href="/css/custom/custom.css" rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet">

@endsection


@section('content')
<!-- Steps form -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="card width">
        <div class="card-body mb-4">

            <h2 class="text-center font-weight-bold pt-4 pb-5"><strong>Employee's Information</strong></h2>

            <!-- Stepper -->
            <div class="steps-form">
                <div class="steps-row setup-panel">
                    <div class="steps-step">
                        <a href="#step-9" type="button" class="btn btn-indigo btn-circle"><i style="padding-top: 13px; padding-left: 2px;" class="fas fa-folder-open" aria-hidden="true"></i></a>
                        <p>Step 1</p>
                    </div>
                    <div class="steps-step">
                        <a href="#step-10" type="button" class="btn btn-default btn-circle" disabled="disabled"><i style="padding-top: 13px;"  class="fas fa-briefcase"></i></a>
                        <p>Step 2</p>
                    </div>
                    <div class="steps-step">
                        <a href="#step-11" type="button" class="btn btn-default btn-circle" disabled="disabled" ><i style="padding-top: 13px;" class="fas fa-image"></i></a>
                        <p>Step 3</p>
                    </div>
                </div>
            </div>

            <form role="form" action="{{url('/add-employee')}}" id="formStepper" method="post" enctype="multipart/form-data">
                @csrf
                <!-- First Step -->
                <div class=" setup-content"  id="step-9">
                    <h3 class="font-weight-bold pl-0 my-4"><strong>Basic Information</strong></h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label style="width: 100%;" for="firstName" data-error="wrong" data-success="right">First Name <span style="color: tomato" class="text-right pl-3 invalid">* field is Required</span></label> 
                            <input required="required" type="text" class="form-control validate" name="firstname" id="firstName" placeholder="First Name">
                        </div>
                        
                        <div class="form-group col-md-6">
                                <label for="lastName" data-error="wrong" data-success="right">Last Name</label>
                                <input required="required" type="text" class="form-control validate" name="lastname" id="lastName" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="date" data-error="wrong" data-success="right">Date of Birth</label>
                            <input required="required" type="date" class="form-control validate" name="date_of_birth" id="date">
                        </div>
                        <div class="form-group col-md-6">
                            <p>Gender</p>
                                <div class="form-check form-check-inline">
                                    <input required="required" class="form-check-input" type="radio" name="gender"  value="Male" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input required="required" class="form-check-input" type="radio" name="gender"  value="Female" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                               
                        </div>
                    </div>
                    <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email" data-error="wrong" data-success="right">Email Address</label>
                                <input required="required" type="text" class="form-control validate" name="email" id="email" placeholder="Email Address">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phoneNumber" data-error="wrong" data-success="right">Mobile Number</label>
                                <input required="required" type="number" class="form-control validate" name="mobile_number" id="phoneNumber" placeholder="Mobile Number">
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input required="required" type="text" class="form-control validate" name="address" id="inputAddress" placeholder="1234 Main St" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="emergName">Name of Next of Kin</label>
                            <input required="required" type="text" class="form-control validate" name="next_of_kin" id="emergName">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState" data-error="wrong" data-success="right">Relationship</label>
                            <select name="next_of_kin_relationship" id="inputState" class="form-control validate" required="required">
                            <option value="" selected>---Select---</option>
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                            <option value="Brother">Brother</option>
                            <option value="Sister">Sister</option>
                            <option value="Spouse">Spouse</option>
                            <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                                <label for="emergNumb">Phone Number</label>
                                <input required="required" type="text" class="form-control validate" name="next_of_kin_phone_number" id="emergNumb">
                            </div>
                    </div>
                    <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Next</button>
                </div>
                  
                <!-- First Step -->
                <!-- <div class="row setup-content"  id="step-9">
                    
                    <div class="col-md-12">
                        <h3 class="font-weight-bold pl-0 my-4"><strong>Basic Information</strong></h3>
                        <div class="form-group md-form">
                            <label for="yourName" data-error="wrong" data-success="right">First Name</label>
                            <input name="" id="yourName" type="text" required="required" class="form-control validate">
                        </div>
                        <div class="form-group md-form mt-3">
                            <label for="yourLastName" data-error="wrong" data-success="right">Last Name</label>
                            <input name="" id="yourLastName" type="text" required="required" class="form-control validate">
                        </div>
                        <div class="form-group md-form mt-3">
                            <label for="yourAddress" data-error="wrong" data-success="right">Address</label>
                            <textarea name="" id="yourAddress" type="text" required="required" rows="2" class="md-textarea validate form-control"></textarea>
                        </div>
                        <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Next</button>
                    </div>
                </div> -->

                <!-- Second Step -->
                <!-- <div class="row setup-content"  id="step-10">
                    <div class="col-md-12">
                        <h3 class="font-weight-bold pl-0 my-4"><strong>Step 2</strong></h3>
                        <div class="form-group md-form">
                            <label for="companyName" data-error="wrong" data-success="right">Company Name</label>
                            <input name="" id="companyName" type="text" required="required" class="form-control validate">
                        </div>
                        <div class="form-group md-form mt-3">
                            <label for="companyAddress" data-error="wrong" data-success="right">Company Address</label>
                            <input name="" id="companyAddress" type="text" required="required" class="form-control validate">
                        </div>
                        <button class="btn btn-indigo btn-rounded prevBtn float-left" type="button">Previous</button>
                        <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Next</button>
                    </div>
                </div> -->
                <div class=" setup-content"  id="step-10">
                    <h3 class="font-weight-bold pl-0 my-4"><strong>Employee Information</strong></h3>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="employeeNo" data-error="wrong" data-success="right">Employee No.</label>
                            <input required="required" type="number" class="form-control validate" name="employee_number" id="employeeNo" placeholder="Employee Number">
                        </div>
                        <div class="form-group col-md-4">
                                <label for="dateOfJoining" data-error="wrong" data-success="right">Date Of Resumption</label>
                                <input required="required" type="date" class="form-control validate" name="date_of_resumption" id="dateOfJoining" placeholder="Employee Number">
                        </div>
                        <div class="form-group col-md-4">
                                <label for="employmentStatus" data-error="wrong" data-success="right">Employment Status</label>
                                <select required="required" class="form-control validate" name="employment_status" id="employmentStatus">
                                    <option value="" selected>---Select---</option>
                                    <option value="Contract Staff">Contract Staff</option>
                                    <option value="Full Staff">Full Staff</option>
                                </select>                            
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="department" data-error="wrong" data-success="right">Department</label>
                            <select required="required" class="form-control validate" name="department" id="department">
                                <option value="" selected>---Select---</option>
                                <option value="Admin">Admin</option>
                                <option value="Business Development">Business Development</option>
                                <option value="Documnet Control">Documnet Control</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Finance">Finance</option>
                                <option value="Human Resource">Human Resource</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Project Management">Project Management</option>
                                <option value="Procurement">Procurement</option> 
                                <option value="QHSE">QHSE</option>
                                <option value="Logistics">Logistics</option>
                                <option value="Field Services">Field Services</option>
                                <option value="Marine">Marine</option>
                                <option value="Legal">Legal</option>
                            </select>                            
                        </div>  
                        <div class="form-group col-md-4">
                            <label for="supervisor" data-error="wrong" data-success="right">Direct Supervisor</label>
                            <input required="required" type="text" class="form-control" name="supervisor" id="supervisor" placeholder="Olumide Oladosu" required>
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">        
                            <label>Companies Assets</label>
                            <select required="required" name="company_assets[]" size="10" id="multiple" class="form-control form-control-chosen" data-placeholder="Please select all Assets that apply" multiple required>
                                <option value=""></option>
                                <option value="Laptop">Laptop</option>
                                <option value="Mobile Phone">Mobile Phone</option>
                                <option value="Laptop">Laptop</option>
                                <option value="Laptop">Laptop</option>
                                <option value="Laptop">Laptop</option>
                                <option value="Laptop">Laptop</option>
                                <option value="Laptop">Laptop</option>
                                <option value="Laptop">Laptop</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 pb-5">  
                            <label>Position</label>
                            <select required="required" name="position" id="single" class="form-control form-control-chosen" data-placeholder="Please select..." required> 
                                <option value=""></option>
                                <option value="Manager">Manager</option>
                                <option value="Intern">Intern</option>
                                <option value="Graduate Trainee">Graduate Trainee</option>
                                <option value="Project Engineer">Project Engineer</option>
                                <option value="Proposal Engineer">Proposal Engineer</option>
                                <option value="Field Engineer">Field Engineer</option>
                                <option value="Assistant Manager">Assistant Manager</option>
                                <option value="Procurement Engineer">Procurement Engineer</option>
                                <option value="Process Engineer">Process Engineer</option>
                                <option value="Expatriate">Expatriate</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <h4 style="display: inline">Qualifications</h4>
                        <span>
                                <button type="button" style="margin-bottom: 5px;" class="btn btn-default btn-circle1 mt-0 "><i class="fas fa-plus"></i>
                                </button>
                            </span> 
                    </div>
                           
                    <table id="myTable" class="none table order-list pb-5 table1">
                        <thead>
                            <tr>
                                <td class="font-weight-bold" >Name of University</td>
                                <td class="font-weight-bold">Degree Obtained</td>
                                <td class="font-weight-bold">Date Graduated</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">
                                    <input type="text" name="nameOfUniversity" class="form-control" />
                                </td>
                                <td scope="col">
                                    <input type="text" name="degreeObtained"  class="form-control"/>
                                </td>
                                <td scope="col">
                                    <input type="date" name="dateGraduated"  class="form-control"/>
                                </td>
                                <td scope="col"><a class="deleteRow"></a>
                                </td>
                            </tr>
                            

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5" style="text-align: center;">
                                    <a type="button" class="btn btn-default " id="addrow" value="Add Row">Add Row</a>
                                </td>
                            </tr>
                            <tr>
                            </tr>
                        </tfoot>
                    </table>

                    <div class="pt-5">
                            <h4 style="display: inline">Certifications</h4>
                            <span>
                                    <button type="button" style="margin-bottom: 5px;" class="btn btn-default btn-circle2 mt-0 "><i class="fas fa-plus"></i>
                                    </button>
                                </span> 
                        </div>

                    <table id="myTable" class="none1 table order-list1 table2">
                            <thead>
                                <tr>
                                    <td class="font-weight-bold" >Name of Certification</td>
                                    <td class="font-weight-bold">Date Issued</td>
                                    <td class="font-weight-bold">Expiry Date</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="col">
                                        <input type="text" name="nameOfCertification" class="form-control" />
                                    </td>
                                    <td scope="col">
                                        <input type="date" name="dateIssued"  class="form-control"/>
                                    </td>
                                    <td scope="col">
                                        <input type="date" name="expiryDate"  class="form-control"/>
                                    </td>
                                    <td scope="col"><a class="deleteRow"></a>
                                    </td>
                                </tr>
                                
    
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5" style="text-align: center;">
                                        <a type="button" class="btn btn-default " id="addrow1" value="Add Row">Add Row</a>
                                    </td>
                                </tr>
                                <tr>
                                </tr>
                            </tfoot>
                        </table>
                        

                    

                    <button class="btn btn-indigo btn-rounded prevBtn float-left" type="button">Previous</button>
                    <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Next</button>
                </div>

                <!-- Third Step -->
                <div class="setup-content"  id="step-11">
                    <h3 class="font-weight-bold pl-0 my-4"><strong>Step 3</strong></h3>


                    <div class="form-group">
                    <label class="col-sm-2" for="resume">Upload Display <Picture></Picture></label>
                    <div class="col-sm-10">
                        <input required="required" class="form-control" type="file" name="image" id="image" required>                  
                    </div>
                </div>

                    <button class="btn btn-indigo btn-rounded prevBtn float-left" type="button">Previous</button>
                    <button class="btn btn-default btn-rounded float-right" type="submit">Submit</button>
                    </div>
                </div>

            </form>


    </div>

<!-- Steps form -->
@endsection
@section('page_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.6/chosen.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="/js/custom/row.js"></script>

<script>
    $('.form-control-chosen').chosen({
  // Chosen options here
  multiple
});
</script>
@if(session('message') != NULL)
<script type="text/javascript">
    
toastr.success('{{session('message')}}')
</script>

@endif
@endsection

