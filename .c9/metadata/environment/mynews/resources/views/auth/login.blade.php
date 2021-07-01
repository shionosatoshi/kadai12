{"filter":false,"title":"login.blade.php","tooltip":"/mynews/resources/views/auth/login.blade.php","undoManager":{"mark":12,"position":12,"stack":[[{"start":{"row":0,"column":1},"end":{"row":73,"column":0},"action":"remove","lines":["extends('layouts.app')","","@section('content')","<div class=\"container\">","    <div class=\"row justify-content-center\">","        <div class=\"col-md-8\">","            <div class=\"card\">","                <div class=\"card-header\">{{ __('Login') }}</div>","","                <div class=\"card-body\">","                    <form method=\"POST\" action=\"{{ route('login') }}\">","                        @csrf","","                        <div class=\"form-group row\">","                            <label for=\"email\" class=\"col-md-4 col-form-label text-md-right\">{{ __('E-Mail Address') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"email\" type=\"email\" class=\"form-control @error('email') is-invalid @enderror\" name=\"email\" value=\"{{ old('email') }}\" required autocomplete=\"email\" autofocus>","","                                @error('email')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row\">","                            <label for=\"password\" class=\"col-md-4 col-form-label text-md-right\">{{ __('Password') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"password\" type=\"password\" class=\"form-control @error('password') is-invalid @enderror\" name=\"password\" required autocomplete=\"current-password\">","","                                @error('password')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row\">","                            <div class=\"col-md-6 offset-md-4\">","                                <div class=\"form-check\">","                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"remember\" id=\"remember\" {{ old('remember') ? 'checked' : '' }}>","","                                    <label class=\"form-check-label\" for=\"remember\">","                                        {{ __('Remember Me') }}","                                    </label>","                                </div>","                            </div>","                        </div>","","                        <div class=\"form-group row mb-0\">","                            <div class=\"col-md-8 offset-md-4\">","                                <button type=\"submit\" class=\"btn btn-primary\">","                                    {{ __('Login') }}","                                </button>","","                                @if (Route::has('password.request'))","                                    <a class=\"btn btn-link\" href=\"{{ route('password.request') }}\">","                                        {{ __('Forgot Your Password?') }}","                                    </a>","                                @endif","                            </div>","                        </div>","                    </form>","                </div>","            </div>","        </div>","    </div>","</div>","@endsection",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"remove","lines":["@"]},{"start":{"row":0,"column":0},"end":{"row":64,"column":11},"action":"insert","lines":["@extends('layouts.admin')","","@section('content')","    <div class=\"container\">","        <div class=\"row justify-content-center\">","            <div class=\"col-md-8\">","                <div class=\"login-box card\">","                    <div class=\"login-header card-header mx-auto\">{{ __('Login') }}</div>","","                    <div class=\"login-body card-body\">","                        <form method=\"POST\" action=\"{{ route('login') }}\">","                            @csrf","","                            <div class=\"form-group row\">","                                <label for=\"email\" class=\"col-sm-4 col-form-label text-md-right\">{{ __('E-Mail Address') }}</label>","","                                <div class=\"col-md-6\">","                                    <input id=\"email\" type=\"email\" class=\"form-control{{ $errors->has('email') ? ' is-invalid' : '' }}\" name=\"email\" value=\"{{ old('email') }}\" required autofocus>","","                                    @if ($errors->has('email'))","                                        <span class=\"invalid-feedback\">","                                            <strong>{{ $errors->first('email') }}</strong>","                                        </span>","                                    @endif","                                </div>","                            </div>","","                            <div class=\"form-group row\">","                                <label for=\"password\" class=\"col-md-4 col-form-label text-md-right\">{{ __('Password') }}</label>","","                                <div class=\"col-md-6\">","                                    <input id=\"password\" type=\"password\" class=\"form-control{{ $errors->has('password') ? ' is-invalid' : '' }}\" name=\"password\" required>","","                                    @if ($errors->has('password'))","                                        <span class=\"invalid-feedback\">","                                            <strong>{{ $errors->first('password') }}</strong>","                                        </span>","                                    @endif","                                </div>","                            </div>","","                            <div class=\"form-group row\">","                                <div class=\"col-md-6 offset-md-4\">","                                    <div class=\"checkbox\">","                                        <label>","                                            <input type=\"checkbox\" name=\"remember\" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}","                                        </label>","                                    </div>","                                </div>","                            </div>","","                            <div class=\"form-group row mb-0\">","                                <div class=\"col-md-8 offset-md-4\">","                                    <button type=\"submit\" class=\"btn btn-primary\">","                                        {{ __('Login') }}","                                    </button>","                                </div>","                            </div>","                        </form>","                    </div>","                </div>","            </div>","        </div>","    </div>","@endsection"]}],[{"start":{"row":7,"column":73},"end":{"row":7,"column":74},"action":"insert","lines":["m"],"id":3},{"start":{"row":7,"column":74},"end":{"row":7,"column":75},"action":"insert","lines":["e"]},{"start":{"row":7,"column":75},"end":{"row":7,"column":76},"action":"insert","lines":["s"]},{"start":{"row":7,"column":76},"end":{"row":7,"column":77},"action":"insert","lines":["s"]},{"start":{"row":7,"column":77},"end":{"row":7,"column":78},"action":"insert","lines":["a"]},{"start":{"row":7,"column":78},"end":{"row":7,"column":79},"action":"insert","lines":["g"]},{"start":{"row":7,"column":79},"end":{"row":7,"column":80},"action":"insert","lines":["e"]}],[{"start":{"row":7,"column":73},"end":{"row":7,"column":80},"action":"remove","lines":["message"],"id":4},{"start":{"row":7,"column":73},"end":{"row":7,"column":81},"action":"insert","lines":["messages"]}],[{"start":{"row":7,"column":81},"end":{"row":7,"column":82},"action":"insert","lines":["."],"id":5}],[{"start":{"row":10,"column":62},"end":{"row":10,"column":63},"action":"insert","lines":["m"],"id":6},{"start":{"row":10,"column":63},"end":{"row":10,"column":64},"action":"insert","lines":["e"]},{"start":{"row":10,"column":64},"end":{"row":10,"column":65},"action":"insert","lines":["s"]},{"start":{"row":10,"column":65},"end":{"row":10,"column":66},"action":"insert","lines":["a"]},{"start":{"row":10,"column":66},"end":{"row":10,"column":67},"action":"insert","lines":["g"]},{"start":{"row":10,"column":67},"end":{"row":10,"column":68},"action":"insert","lines":["e"]},{"start":{"row":10,"column":68},"end":{"row":10,"column":69},"action":"insert","lines":["s"]}],[{"start":{"row":10,"column":69},"end":{"row":10,"column":70},"action":"insert","lines":["."],"id":7}],[{"start":{"row":10,"column":65},"end":{"row":10,"column":66},"action":"insert","lines":["s"],"id":8}],[{"start":{"row":10,"column":62},"end":{"row":10,"column":70},"action":"remove","lines":["messages"],"id":9},{"start":{"row":10,"column":62},"end":{"row":10,"column":70},"action":"insert","lines":["messages"]}],[{"start":{"row":14,"column":104},"end":{"row":14,"column":113},"action":"insert","lines":["messages."],"id":10}],[{"start":{"row":28,"column":107},"end":{"row":28,"column":116},"action":"insert","lines":["messages."],"id":11}],[{"start":{"row":10,"column":62},"end":{"row":10,"column":71},"action":"remove","lines":["messages."],"id":12}],[{"start":{"row":45,"column":130},"end":{"row":45,"column":139},"action":"insert","lines":["messages."],"id":13}],[{"start":{"row":54,"column":47},"end":{"row":54,"column":56},"action":"insert","lines":["messages."],"id":14}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":54,"column":56},"end":{"row":54,"column":56},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1625038531867,"hash":"43e831ede49735a61ea271091b393f5142b76019"}