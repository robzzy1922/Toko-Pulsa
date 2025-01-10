@extends('layout.admin.main')

@section('content')
    <div class="mt-0 main-content app-content">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Form Advanced</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Advanced</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-4 col-md-4">
                        <form method="post" class="card">
                            <div class="card-header">
                                <h3 class="card-title">File Upload</h3>
                            </div>
                            <div class=" card-body">
                                <div class="mb-5 row">
                                    <div class="mb-4 col-lg-12 col-sm-12 mb-lg-0">
                                        <input type="file" name="image" class="dropify" data-bs-height="180" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-8 col-md-8">
                        <form method="post" class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Data Product</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input class="form-control" name="name" type="text"
                                        placeholder="Input product name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Price</label>
                                    <input class="form-control" name="price" type="text" placeholder="Input price">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="description" type="text" placeholder="Input description"></textarea>
                                </div>
                            </div>

                    </div>
                    </form>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Time Picker</h3>
                        </div>
                        <div class=" card-body">
                            <label>Default Time Picker:</label>
                            <div class="wd-150 mg-b-30">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                    </div>
                                    <!-- input-group-text -->
                                    <input class="form-control" id="tpBasic" placeholder="Set time" type="text">
                                </div>
                            </div>
                            <!-- wd-150 -->
                            <label class="mt-4">Set the scroll position to local time if no value selected:</label>
                            <div class="wd-150 mg-b-30">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                    </div>
                                    <!-- input-group-text -->
                                    <input class="form-control" id="tp2" placeholder="Set time" type="text">
                                </div>
                            </div>
                            <!-- wd-150 -->
                            <label class="mt-4 ">Dynamically set the time using a Javascript Date object:</label>
                            <div class="d-flex">
                                <div class="input-group wd-150">
                                    <div class="input-group-text">
                                        <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                    </div>
                                    <!-- input-group-text -->
                                    <input class="form-control br-0" id="tp3" placeholder="Set time" type="text">
                                    <button class="btn btn-primary br-ts-0 br-bs-0" id="setTimeButton">Set Current
                                        Time</button>
                                </div>
                                <!-- input-group -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Color Picker</h3>
                        </div>
                        <div class=" card-body">
                            <p class="mb-1 ">Same way you select color in Adobe Photoshop.</p><input id="colorpicker"
                                type="text">
                            <p class="mt-3 mb-1">You can allow alpha transparency selection.</p><input id="showAlpha"
                                type="text">
                            <p class="mt-4 mb-1">Show pallete only. If you'd like, spectrum can show the palettes you
                                specify, and nothing else.</p><input id="showPaletteOnly" type="text">
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Color Picker Style1</h3>
                        </div>
                        <div class="container">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <div class="theme-container"></div>
                                        <div class="pickr-container"></div>
                                    </div>
                                    <div>
                                        <div class="theme-container1"></div>
                                        <div class="pickr-container1"></div>
                                    </div>
                                    <div>
                                        <div class="theme-container2"></div>
                                        <div class="pickr-container2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Date, Month, Year Range Picker</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                        </div>
                                        <input class="form-control" id="datepicker-date" placeholder="Date Range"
                                            type="text">
                                    </div>
                                </div>
                                <div class="mt-4 col-md-4 mt-md-0">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <span class="fa fa-clock-o tx-16 lh-0 op-6"></span>
                                        </div>
                                        <input class="form-control" id="datepicker-month" placeholder="Month Range"
                                            type="text">
                                    </div>
                                </div>
                                <div class="mt-4 col-md-4 mt-md-0">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <span class="fa fa-clock-o tx-16 lh-0 op-6"></span>
                                        </div>
                                        <input class="form-control" id="datepicker-year" placeholder="Year Range"
                                            type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Default Date picker</div>
                        </div>
                        <div class="card-body">
                            <p class="mg-b-20 mg-sm-b-40">The datepicker is tied to a standard form input field. Click
                                on the input to open an interactive calendar in a small overlay. If a date is chosen,
                                feedback is shown as the input's value.</p>
                            <div class="wd-200 mg-b-30">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                    </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY"
                                        type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Multiple Months </div>
                        </div>
                        <div class="card-body">
                            <p class="mg-b-20 mg-sm-b-40">The datepicker is tied to a standard form input field. Click
                                on the input to open an interactive calendar in a small overlay. If a date is chosen,
                                feedback is shown as the input's value.</p>
                            <div class="wd-200 mg-b-30">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <span class="fa fa-calendar tx-16 lh-0 op-6"></span>
                                    </div><input class="form-control" id="datepickerNoOfMonths" placeholder="MM/DD/YYYY"
                                        type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Multiple Select Styles</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Basic MutipleSelect</label>
                                        <select multiple="multiple" class="multi-select">
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Disabled MutipleSelect</label>
                                        <select multiple="multiple" class="multi-select" disabled="disabled">
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Single Group Disabled MutipleSelect</label>
                                        <select multiple="multiple" class="multi-select">
                                            <optgroup label="Group 1" disabled="disabled">
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                            </optgroup>
                                            <optgroup label="Group 2">
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                                <option value="6">Option 6</option>
                                                <option value="7">Option 7</option>
                                                <option value="8">Option 8</option>
                                            </optgroup>
                                            <optgroup label="Group 3">
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                                <option value="6">Option 6</option>
                                                <option value="7">Option 7</option>
                                                <option value="8">Option 8</option>
                                                <option value="9">Option 9</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Multiple Items With Group-Option</label>
                                        <select multiple="multiple" class="optmulti-select">
                                            <optgroup label="Group 1">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </optgroup>
                                            <optgroup label="Group 2">
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </optgroup>
                                            <optgroup label="Group 3">
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Single Row</label>
                                        <select multiple="multiple" class="single-select">
                                            <option value="1">First</option>
                                            <option value="2">Second</option>
                                            <option value="3">Third</option>
                                            <option value="4" selected="selected">Fourth</option>
                                        </select>
                                    </div>
                                    <div class="mb-0 form-group">
                                        <label class="form-label">Group-Option Filter</label>
                                        <select multiple="multiple" class="group-filter">
                                            <optgroup label="Group 1">
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                            </optgroup>
                                            <optgroup label="Group 2">
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                                <option value="6">Option 6</option>
                                                <option value="7">Option 7</option>
                                                <option value="8">Option 8</option>
                                            </optgroup>
                                            <optgroup label="Group 3">
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                                <option value="6">Option 6</option>
                                                <option value="7">Option 7</option>
                                                <option value="8">Option 8</option>
                                                <option value="9">Option 9</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">MutipleSelect</label>
                                        <select multiple="multiple" class="multi-select">
                                            <option value="1" selected="selected">January</option>
                                            <option value="2" disabled="disabled">February</option>
                                            <option value="3" selected="selected" disabled="disabled">March
                                            </option>
                                            <option value="4" disabled="disabled">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Group-Option MutipleSelect</label>
                                        <select multiple="multiple" class="multi-select">
                                            <optgroup label="Group 1">
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                            </optgroup>
                                            <optgroup label="Group 2">
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                                <option value="6">Option 6</option>
                                                <option value="7">Option 7</option>
                                                <option value="8">Option 8</option>
                                            </optgroup>
                                            <optgroup label="Group 3">
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                                <option value="6">Option 6</option>
                                                <option value="7">Option 7</option>
                                                <option value="8">Option 8</option>
                                                <option value="9">Option 9</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Multiple Items</label>
                                        <select multiple="multiple" class="multiselect">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Hide SelectAll</label>
                                        <select multiple="multiple" class="hide-select">
                                            <option value="1">First</option>
                                            <option value="2">Second</option>
                                            <option value="3">Third</option>
                                            <option value="4">Fourth</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Select Filter</label>
                                        <select multiple="multiple" class="filter-multi">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                        </select>
                                    </div>
                                    <div class="mb-0 form-group">
                                        <label class="form-label">Custom Style</label>
                                        <select multiple="multiple" class="custom-multiselect">
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Dual List Box</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="border shadow-none card">
                                        <div class="card-body">
                                            <div class="transfer"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Select Box</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-5 from-group mb-lg-0">
                                        <select multiple="multiple" name="favorite_fruits" id="fruit_select">
                                            <option selected="selected" disabled="disabled">HTML5</option>
                                            <option>CSS3</option>
                                            <option>PHP</option>
                                            <option>Jquery</option>
                                            <option>.Net</option>
                                            <option>Java</option>
                                            <option>Android</option>
                                            <option>AngularJS</option>
                                            <option>Photoshop</option>
                                            <option>Python</option>
                                            <option>SQL</option>
                                            <option>Java Script</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="from-group">
                                        <select multiple="multiple" name="favorite_fruits" id="fruit_select1">
                                            <optgroup label="Software Side">
                                                <option>Web designer</option>
                                                <option>Web Developer</option>
                                                <option>Application Developer</option>
                                                <option>App Designer</option>
                                            </optgroup>
                                            <optgroup label="Voice Side">
                                                <option>Tell Caller</option>
                                                <option>Recruiter</option>
                                                <option>HR</option>
                                                <option>Data Entry</option>
                                                <option>Mapping</option>
                                                <option>US Recruiter</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row-->

            <!-- Row -->
            <div class="row ">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Country selector</div>
                        </div>
                        <div class="card-body">
                            <form>
                                <input id="phone" name="phone" type="tel">
                                <button class="px-4 py-1 mb-1 btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>
        <!-- CONTAINER CLOSED -->

    </div>
    </div>
@endsection

@section('scripts')
    <!-- FILE UPLOADES JS -->
    <script src="assets/plugins/fileuploads/js/fileupload.js"></script>
    <script src="assets/plugins/fileuploads/js/file-upload.js"></script>
    <!-- SELECT2 JS -->
    <script src="assets/plugins/select2/select2.full.min.js"></script>
    <script src="assets/js/select2.js"></script>
    <!-- COLOR PICKER JS -->
    <script src="assets/plugins/pickr-master/pickr.es5.min.js"></script>
    <script src="assets/js/picker.js"></script>

    <!-- MULTI SELECT JS-->
    <script src="assets/plugins/multipleselect/multiple-select.js"></script>
    <script src="assets/plugins/multipleselect/multi-select.js"></script>

    <!-- FORMELEMENTS JS -->
    <script src="assets/js/formelementadvnced.js"></script>
    <script src="assets/js/form-elements.js"></script>
@endsection
