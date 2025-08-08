@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Edit User</h3>
                    </div>
                </div>
            </div>
            <form action="{{ route('usermanagement.update'), $userEdit->id }}" method="POST" enctype="multipart/form-data">
                @csrf
<<<<<<< HEAD
                <input type="hidden" class="form-control "name="user_id" value="{{ $userEdit->user_id }}" readonly>
=======
                <input type="hidden" class="form-control form-control-sm  "name="user_id" value="{{ $userEdit->user_id }}" readonly>
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row formtype">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Full Name</label>
<<<<<<< HEAD
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"name="name" value="{{ $userEdit->name }}">
=======
                                    <input type="text" class="form-control form-control-sm  @error('name') is-invalid @enderror"name="name" value="{{ $userEdit->name }}">
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
<<<<<<< HEAD
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"name="email" value="{{ $userEdit->email }}">
=======
                                    <input type="email" class="form-control form-control-sm  @error('email') is-invalid @enderror"name="email" value="{{ $userEdit->email }}">
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone Number</label>
<<<<<<< HEAD
                                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ $userEdit->phone_number }}">
=======
                                    <input type="text" class="form-control form-control-sm  @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ $userEdit->phone_number }}">
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Role Name</label>
<<<<<<< HEAD
                                    <input type="text" class="form-control @error('role_name') is-invalid @enderror" name="role_name" value="{{ $userEdit->role_name }}" readonly>
=======
                                    <input type="text" class="form-control form-control-sm  @error('role_name') is-invalid @enderror" name="role_name" value="{{ $userEdit->role_name }}" readonly>
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Position</label>
<<<<<<< HEAD
                                    <input type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ $userEdit->position }}"> 
=======
                                    <input type="text" class="form-control form-control-sm  @error('position') is-invalid @enderror" name="position" value="{{ $userEdit->position }}"> 
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Department</label>
<<<<<<< HEAD
                                    <input type="text" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ $userEdit->department }}">
=======
                                    <input type="text" class="form-control form-control-sm  @error('department') is-invalid @enderror" name="department" value="{{ $userEdit->department }}">
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Password</label>
<<<<<<< HEAD
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
=======
                                    <input type="password" class="form-control form-control-sm  @error('password') is-invalid @enderror" name="password">
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Confirm Password</label>
<<<<<<< HEAD
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
=======
                                    <input type="password" class="form-control form-control-sm  @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Profile Image</label>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input @error('avatar') is-invalid @enderror" id="customFile" name="avatar" value="{{ old('avatar') }}">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-header">
                    <div class="mb-15 row align-items-center">
                        <div class="col">
                            <div class="">
                                <button type="submit" class="btn btn-primary buttonedit1"><i class="fas fa-check mr-2"></i>Simpan Perubahan</button>
                                <a href="{{ route('users/list/page') }}" class="btn btn-primary float-left veiwbutton ml-3"><i class="fas fa-chevron-left mr-2"></i>Batal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @section('script')
    
    @endsection
    
@endsection