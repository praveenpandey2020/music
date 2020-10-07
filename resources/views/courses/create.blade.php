@extends("layouts.app")
@section("content")
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Create</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{route('courses.store')}}" method="POST">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name">
                    @if($errors->has('fname'))
                        <p style="color:red">{{$errors->first('fname')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name">
                    @if($errors->has('lname'))
                        <p style="color:red">{{$errors->first('lname')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Adress">
                    @if($errors->has('address'))
                        <p style="color:red">{{$errors->first('address')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">DOB</label>
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date Of Birth">
                    @if($errors->has('dob'))
                        <p style="color:red">{{$errors->first('dob')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
                    @if($errors->has('phone'))
                        <p style="color:red">{{$errors->first('phone')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address">
                    @if($errors->has('email'))
                        <p style="color:red">{{$errors->first('email')}}</p>
                    @endif
                </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
