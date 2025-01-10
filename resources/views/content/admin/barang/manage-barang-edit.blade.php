@extends('layout.admin.main')

@section('content')
    <!--app-content open-->
    <div class="mt-0 main-content app-content">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Edit Profile</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->
                <div class="row">
                    <div class="col-xl-4">
                        <form action="{{ route('user-update', $users->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Edit User</div>
                                </div>

                                <div class="card-body">
                                    <div class="mb-5 text-center chat-image">
                                        <div class="mb-3 avatar avatar-xxl chat-profile brround">
                                            <a class="" href="profile.html"><img alt="avatar"
                                                    src="../assets/images/users/7.jpg" class="brround"></a>
                                        </div>

                                        <div class="main-chat-msg-name">
                                            <a href="profile.html">
                                                <h5 class="mb-1 text-dark fw-semibold">{{ $users->username }}</h5>
                                            </a>

                                            <p class="pt-0 mt-0 mb-0 text-muted fs-13">{{ $users->email }}</p>
                                        </div>
                                    </div>
                                    @if (Session::has('success'))
                                        <div class="alert alert-icon alert-success alert-dismissible" role="alert">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label class="form-label">Username</label>
                                        <div class="wrap-input100 validate-input input-group">
                                            <a href="javascript:void(0)" class="bg-white input-group-text text-muted">
                                                <i class="zmdi zmdi-account text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 form-control" type="text" name="username"
                                                value="{{ $users->username }}" placeholder="Username">
                                        </div>



                                        <!-- <input type="password" class="form-control" value="password"> -->
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <div class="wrap-input100 validate-input input-group">
                                            <a href="javascript:void(0)" class="bg-white input-group-text text-muted">
                                                <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 form-control" name="email" type="email"
                                                value="{{ $users->email }}" placeholder="Email">
                                        </div>
                                        <!-- <input type="password" class="form-control" value="password"> -->
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Curent Password</label>
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle1">
                                            <a href="javascript:void(0)" class="bg-white input-group-text text-muted">
                                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 form-control" name="password" type="password"
                                                placeholder="Current Password">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">New Password</label>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle1">
                                                <a href="javascript:void(0)" class="bg-white input-group-text text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 form-control" name="new_password" type="password"
                                                    placeholder="New Password">
                                            </div>
                                            <!-- <input type="password" class="form-control" value="password"> -->
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Confirm Password</label>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle2">
                                                <a href="javascript:void(0)" class="bg-white input-group-text text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 form-control" name="confirm_password" type="password"
                                                    placeholder="Confirm Password">
                                            </div>
                                            <!-- <input type="password" class="form-control" value="password"> -->
                                        </div>
                                    </div>
                                    <div class="card-footer text-end">
                                        <button class="btn btn-outline-primary">Update</button>
                                        <button class="btn btn-outline-danger">Cancel</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>

                </div>
                <!-- CONTAINER END -->
            </div>
        </div>
        <!-- app-content closed -->
    @endsection

    @section('scripts')
        <script src="assets/js/show-password.min.js"></script>
    @endsection
