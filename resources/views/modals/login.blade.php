<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                        <!--Body-->
                        <div class="modal-body mb-1">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email" id="modalLRInput10" name="identity" class="form-control form-control-sm" value="{{ old('identity') }}">
                                <label data-error="wrong" data-success="right" for="modalLRInput10">Username or Email</label>
                                @if ($errors->has('identity'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('identity') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="modalLRInput11" name="password" class="form-control form-control-sm">
                                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="text-center mt-2">
                                <button class="btn btn-info" type="submit">Log in <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">

                        <!--Body-->
                        <div class="modal-body">
                            <form method="POST" action="{{ route('register') }}">
                                    @csrf
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="modalLRInput12" name="firstName" class="form-control form-control-sm validate">
                                <label for="modalLRInput12">First Name</label>
                            </div>
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="modalLRInput12" name="middleName" class="form-control form-control-sm">
                                <label for="modalLRInput12">Middle Name</label>
                            </div>
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="modalLRInput12" name="lastName" class="form-control form-control-sm">
                                <label for="modalLRInput12">Last Name</label>
                            </div>
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email" id="modalLRInput12" name="email" class="form-control form-control-sm">
                                <label for="modalLRInput12">Your email</label>
                            </div>
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="modalLRInput12" name="username" class="form-control form-control-sm">
                                <label for="modalLRInput12">Username</label>
                            </div>
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="number" id="modalLRInput12" name="phone" class="form-control form-control-sm">
                                <label for="modalLRInput12">Phone#</label>
                            </div>
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="modalLRInput13" name="password" class="form-control form-control-sm">
                                <label for="modalLRInput13">Your password</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="modalLRInput14" name="password_confirmation" class="form-control form-control-sm">
                                <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
                            </div>

                            <div class="text-center form-sm mt-2">
                                <button class="btn btn-info" type="submit">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
                            </form>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-right">
                                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
    </div>
</div>
<!--Modal: Login / Register Form-->
