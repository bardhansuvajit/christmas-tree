@extends("Admin.layouts.app")
@section("content")
<div class="container pt-4 px-4">
    <div class="row pb-4 admin">
        <div class="text-end"><a href="{{route('admin.banners.create')}}" class="btn btn-primary">Add Banner</a></div>
    </div>
    <div class="row px-2">
        <div class="table-responsive admin-table">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>#Id</th>
                        <th>Image</th>
                        <th>Heading</th>
                        <th>Primary button</th>
                        <th>Secondary button</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $sl = 1;
                    @endphp
                    @foreach ($data as $index => $item)
                <tr>
                    <td width="5">{{$sl}}</td>
                    <td width="20"><img class="w-100" src="{{ asset($item->img_1000) }}"></td>
                    <td width="30">{{$item->heading}}</td>
                    <td width="10">{{$item->primary_btn_text}}</td>
                    <td width="10">{{$item->secondary_btn_text}}</td>
                    <td width="5">{{$item->position}}</td>
                    <td width="5"> <a class=" text-decoration-none text-light badge bg-{{($item->status == 1) ? 'success' : 'danger'}}"
                        href="{{ route('admin.banners.status', $item->id) }}">{{($item->status == 1) ? 'Active' : 'Inactive'}}</a></td>
                    <td width="20"> 
                        <a href="{{ route('admin.banners.show', $item->id) }}"
                            class="badge bg-success text-decoration-none text-light">View</a>
                        <a href="{{ route('admin.banners.edit', $item->id) }}"
                            class="badge bg-primary text-decoration-none text-light">Edit</a>
                        <a href="{{ route('admin.banners.delete', $item->id) }}"
                            class="badge bg-danger text-decoration-none text-light">Delete</a>
                    </td>
                </tr>
                @php
                $sl++;
                @endphp
                @endforeach
                </tbody>
            </table>
            {!! $data->links() !!}
        </div>
    </div>
</div>
@endsection
