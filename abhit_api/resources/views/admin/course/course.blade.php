@extends('layout.admin.layoout.admin')


@section('content')

    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-book"></i>
            </span> Course
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('admin.create.course') }}" class="btn btn-gradient-primary btn-fw">Add Course</a>
                    {{-- <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i> --}}
                </li>
            </ul>
        </nav>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Course List</h4>
                </p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> First name </th>
                            <th> Image </th>
                            <th> Status </th>
                            <th>Publish Date & Time</th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($course as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <img src="{{ asset($item->course_pic) }}" alt="" srcset="">
                                </td>
                                <td>
                                    @if ($item->is_activate == 1)
                                        <label class="switch">
                                            <input type="checkbox" id="testingUpdate" data-id="{{ $item->id }}" checked>
                                            <span class="slider round"></span>
                                        </label>
                                    @else
                                        <label class="switch">
                                            <input type="checkbox" id="testingUpdate" data-id="{{ $item->id }}">
                                            <span class="slider round"></span>
                                        </label>
                                    @endif
                                </td>
                                <td>
                                    {{\Carbon\Carbon::parse($item->publish_date)->format('Y-m-d H:i:s')}}
                                </td>
                                <td class="d-flex">

                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Edit Course" class="btn mr-2 btn-gradient-primary btn-rounded btn-icon anchor_rounded">
                                        <i class="mdi mdi-pencil-outline"></i>
                                    </a>

                                    <a href="{{route('admin.get.chapter',['id'=>\Crypt::encrypt($item->id)])}}" data-toggle="tooltip" data-placement="top" title="Add Chapter" class="btn mr-2 btn-gradient-primary btn-rounded btn-icon anchor_rounded">
                                        <i class="mdi mdi-plus-outline"></i>
                                    </a>

                                    <a href="#" data-toggle="tooltip" data-placement="top" title="View Details of Course" class="btn btn-gradient-primary btn-rounded btn-icon anchor_rounded">
                                        <i class="mdi mdi-eye-outline"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection