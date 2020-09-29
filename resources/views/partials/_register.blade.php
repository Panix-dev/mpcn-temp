<div class="modal fade frontend_sign_modal" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content signup-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModal">{{ __('Sign Up') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="registerForm">
                    @csrf

                    <div class="form-group row">
                        <input id="nameInput" type="text" class="form-input form-control" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus placeholder="{{ __('Name') }}">

                        <span class="invalid-feedback" role="alert" id="nameError">
                            <strong></strong>
                        </span>
                    </div>

                    <div class="form-group row">
                        <input id="emailInput" type="email" class="form-input form-control" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="{{ __('E-Mail Address') }}">

                        <span class="invalid-feedback" role="alert" id="emailError">
                            <strong></strong>
                        </span>
                    </div>

                    <div class="form-group row">
                        <input id="passwordInput" type="password" class="form-input form-control" name="password" autocomplete="new-password" placeholder="{{ __('Password') }}">

                        <span class="invalid-feedback" role="alert" id="passwordError">
                            <strong></strong>
                        </span>
                    </div>

                    <div class="form-group row">
                        <input id="password-confirm" type="password" class="form-input form-control" name="password_confirmation" autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                    </div>

                    <div class="form-group row mb-0">
                        <button type="submit" class="form-submit btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('scripts')
@parent

<script>
$(function () {
    $('#registerForm').submit(function (e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
        $(".invalid-feedback").children("strong").text("");
        $("#registerForm input").removeClass("is-invalid");
        $.ajax({
            method: "POST",
            headers: {
                Accept: "application/json"
            },
            url: "{{ route('register') }}",
            data: formData,
            success: () => window.location.assign("/"),
            error: (response) => {
                if(response.status === 422) {
                    let errors = response.responseJSON.errors;
                    Object.keys(errors).forEach(function (key) {
                        $("#" + key + "Input").addClass("is-invalid");
                        $("#" + key + "Error").children("strong").text(errors[key][0]);
                    });
                } else {
                    window.location.reload();
                }
            }
        })
    });
})
</script>
@endsection