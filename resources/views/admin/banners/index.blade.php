@extends("Admin.layouts.app")
@section("content")
    <div class="container pt-4 px-4" style="background-color: aliceblue;">
        <div class="row">
            <div class="text-end"><a href="{{route('admin.banners.create')}}" class="btn btn-info">Add Banner</a></div>
        </div>
        <div class="row px-2">
            <table id="banner_table" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Heading</th>
                        <th>Button Text</th>
                        <th>Position</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $index => $item)
                    <tr>
                        <td width="20"><img class="w-100" src="{{ asset($item->img_1000) }}"></td>
                        <td width="30" >{{$item->heading}}</td>
                        <td width="10"> <span class="text-light badge bg-primary">{{$item->primary_btn_text}}</span>
                            <span class="text-light badge bg-secondary">{{$item->secondary_btn_text}}</span></td>
                        <td width="10"><span class="text-light badge bg-danger">{{$item->position}}</span></td>
                        <td width="10"><a class=" text-decoration-none text-light badge bg-{{($item->status == 1) ? 'success' : 'danger'}}" href="{{ route('admin.banners.status', $item->id) }}">{{($item->status == 1) ? 'Active' : 'Inactive'}}</a></td>
                        <td width="20"> <a href="{{ route('admin.banners.show', $item->id) }}" class="text-dark btn btn-outline-success">View</a>
                            <a href="{{ route('admin.banners.edit', $item->id) }}" class="text-dark btn btn-outline-primary">Edit</a>
                            <a href="{{ route('admin.banners.delete', $item->id) }}" class="text-dark btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection