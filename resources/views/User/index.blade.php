@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3>User</h3>
                        <a href="{{route('user.allData')}}" class="btn btn-success">All User</a>
                    </div>
                    <div class="card-body">
                        @foreach($errors->all() as $error)
                            {{$error}}
                        @endforeach
                        <form action="{{route('user.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input value="{{old('name')??''}}" type="text" name="name" class="form-control">
                                        @if($errors->has('name'))
                                            <code>{{$errors->first('name')}}</code>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="gender">Gender</label>
                                    <div class="form-check">
                                        <input class="form-check-input" value="male" type="radio" name="gender" checked>
                                        <label class="form-check-label" for="gender">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="female" type="radio" name="gender">
                                        <label class="form-check-label" for="gender">Female</label>
                                    </div>
                                    @if($errors->has('gender'))
                                        <code>{{$errors->first('gender')}}</code>
                                    @endif
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input value="{{old('email')??''}}" type="email" name="email"
                                               class="form-control">
                                        @if($errors->has('email'))
                                            <code>{{$errors->first('email')}}</code>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="date_of_birth">Date of Birth</label>
                                        <input value="{{old('date_of_birth')??''}}" type="date" name="date_of_birth"
                                               class="form-control">
                                        @if($errors->has('date_of_birth'))
                                            <code>{{$errors->first('date_of_birth')}}</code>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input value="{{old('phone')??''}}" type="text" name="phone"
                                               class="form-control">
                                        @if($errors->has('phone'))
                                            <code>{{$errors->first('phone')}}</code>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input value="{{old('address')??''}}" type="text" name="address"
                                               class="form-control">
                                        @if($errors->has('address'))
                                            <code>{{$errors->first('address')}}</code>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nationality">Nationality</label>
                                        <input value="{{old('nationality')??''}}" type="text" name="nationality"
                                               class="form-control">
                                        @if($errors->has('nationality'))
                                            <code>{{$errors->first('nationality')}}</code>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="preferred_mode_of_contact">Preferred mode of contact <code
                                                class="text-primary">(Optional)</code></label>
                                        <select class="form-control" name="preferred_mode_of_contact">
                                            <option value="-">Choose</option>
                                            <option value="email">Email</option>
                                            <option value="phone">Phone</option>
                                        </select>
                                        @if($errors->has('preferred_mode_of_contact'))
                                            <code>{{$errors->first('preferred_mode_of_contact')}}</code>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="education_background">Education Background</label>
                                        <input value="{{old('education_background')??''}}" type="text"
                                               name="education_background" class="form-control">
                                        @if($errors->has('education_background'))
                                            <code>{{$errors->first('education_background')}}</code>
                                        @endif
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success btn-block">Submit</button>
                                <input type="reset" class="btn btn-warning btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
