@extends('Main_layout.HederAndFooter')


@section('content')

        <div class="modal-dialog modal-dialog-zoom modal-dialog-centered">
            <div class="modal-content" style="background-color:#ffffff;

                     background-repeat:no-repeat;
                     background-position:100% 100%;
                     background-size: cover">
                <div class="modal-header border-0">


                </div>
                <div class="modal-body">
                    <h6 class="modal-title fw-600 text-center">login</h6>
                    <div style="display: none; " class="alert  login_result"></div>
                    <div class="p-3">
                        <form id="sendForm" class="form-default" role="form" autocomplete="on">
                            @csrf

                            <div class="form-group phone-form-group">
                                <label for="phone-code">Email</label>
                                <div class="iti iti--allow-dropdown iti--separate-dial-code">
                                    <div class="iti__flag-container">
                                        <div class="iti__selected-flag" role="combobox" aria-owns="country-listbox" aria-expanded="false" tabindex="0" title="email" aria-activedescendant="iti-item-ps">

                                        </div>

                                    </div>
                                    <input required=""  type="email" class="form-control" placeholder="email"  name="email" >
                                </div>
                            </div>



                            <div class="form-group" style="margin-top: 10px;">
                                <label for="password">password</label>
                                <input type="password" required="" class="form-control " placeholder="password" name="password" id="password">
                            </div>

                            <div  class="row mb-2" style="margin-top: 10px;">
                                <div class="col-6">
                                    <label class="aiz-checkbox">
                                        <input type="checkbox" name="remember">
                                        <span class="opacity-60">remember me</span>
                                        <span class="aiz-square-check"></span>
                                    </label>
                                </div>
                                <div class="col-6 text-right" style="text-align: right;">
                                    <a href="{{ route('resetPasswordPage') }}"  class="text-reset opacity-60 fs-14">forget password ?</a>
                                </div>
                            </div>

                            <div class="mb-5">
                                <button id="sendButton" style="margin-top: 10px;width: 100%;margin-bottom: -20px" class="btn btn-danger btn-block fw-600">login</button>
                            </div>
                        </form>

                    </div>
                    <div class="text-center mb-3">
                        <p class="text-muted mb-0">do you have account ?</p>
                        <a href="{{ route('Route_register') }}" style="color:red;text-decoration: none" >register now</a>
                    </div>
                </div>
            </div>
        </div>



@endsection

