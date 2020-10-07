@extends("layouts.app")
@section("content")
    <section class="content">
        <div class="row">
    <div class="col-xs-12">
        @include('flash::message')
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Course List <a href="{{route('courses.create')}}"class="btn btn-primary float-right"><i class="fa fa-plus"></i>Create</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>Address</th>
                                    <th>DOB</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($courses as $course)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$course->fname}}</td>
                                        <td>{{$course->lname}}</td>
                                        <td>{{$course->address}}</td>
                                        <td>{{$course->dob}}</td>
                                        <td>{{$course->phone}}</td>
                                        <td>{{$course->email}}</td>
                                        <td><a href="{{route('course.edit',$course->id)}}" class="btn btn-primary float-right"><i class="fa fa-edit"></i></i></a>
                                            <a href="{{ route('course.delete', $course->id) }}" class="btn btn-danger float-right" onclick="confirm('Are you sure ???')"><i class="fa fa-trash"></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </section>
@endsection
