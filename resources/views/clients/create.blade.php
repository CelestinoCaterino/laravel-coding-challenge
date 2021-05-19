@extends('layout')

@section('content')
<div class="container mt-5 w-50">
    <h1>Create client</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('clients.store')}}" method="post" id="create_client_form">
        @csrf
        <div class="form-group">
            <label for="first_name">First name</label>
            <input type="text" class="form-control" name="first_name" id="first_name" value="{{old('first_name')}}" placeholder="First name">
        </div>
        <div class="form-group">
            <label for="last_name">Last name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" value="{{old('last_name')}}" placeholder="Last name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Email address">
        </div>
        <div class="form-group">
            <label for="phone_number">Phone number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{old('phone_number')}}" placeholder="Phone number">
        </div>
        <div class="form-group">
            <label for="date_of_birth">Date of birth</label>
            <input class="form-control" name="date_of_birth" type="date" id="date_of_birth" value="{{old('date_of_birth')}}">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}" placeholder="Address">
        </div>
        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" class="form-control" id="nationality" name="nationality" value="{{old('nationality')}}" placeholder="Nationality">
        </div>
        <div class="form-group">
            <label for="education_background">Education background</label>
            <textarea class="form-control" id="education_background" name="education_background" placeholder="Education background">{{old('education_background')}}</textarea>
        </div>
        <div class="form-group">
            <label for="preferred_contact_method">Preferred contact method</label>
            <select class="form-control" id="preferred_contact_method" name="preferred_contact_method">
                <option value="email">Email</option>
                <option value="phone_number">Phone number</option>
                <option value="none">None</option>
            </select>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    $(function(){
        jQuery.validator.setDefaults({
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });

        jQuery("#create_client_form").validate(
            {
                rules: {
                    first_name: {
                        required: true,
                        maxlength: 255
                    },
                    last_name: {
                        required: true,
                        maxlength: 255
                    },
                    email: {
                        required: true,
                        email: true,
                        maxlength: 255
                    },
                    phone_number: {
                        required: true
                    },
                    date_of_birth: {
                        required: true,
                        date: true
                    },
                    gender: {
                        required: true,
                    },
                    address: {
                        required: true,
                        maxlength: 255
                    },
                    nationality: {
                        required: true,
                        maxlength: 255 
                    },
                    education_background: {
                        required: true,
                        maxlength: 255
                    },
                    preferred_contact_method:{
                        required: true,
                    }
                }
            }
        );

    })
</script>
@endsection

