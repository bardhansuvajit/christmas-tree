@extends("Admin.layouts.app")
@section("content")
<div class="container" style="background-color: aliceblue;">
    <div class="row justify-content-center py-4">
        <div class="col-12">
            <div class="text-end pb-4"><a href="{{route('admin.banners.index')}}" class="btn btn-info">Back</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h3>Header : {{$data->heading}}</h3>
                            <p><span class="fw-bolder">Primary Button :</span> {{$data->primary_btn_text}}</p>
                            <p><span class="fw-bolder">Primary Link :</span> <a href="{{$data->primary_btn_link}}"
                                    target="_blank">{{$data->primary_btn_link}}</a></p>
                            <p><span class="fw-bolder">Secondary Button :</span> {{$data->secondary_btn_text}}</p>
                            <p><span class="fw-bolder">Secondary Link :</span> <a href="{{$data->secondary_btn_link}}"
                                    target="_blank">{{$data->secondary_btn_link}}</a></p>
                            <p><span class="fw-bolder">Descriptions</span> : {{$data->desc}}</p>
                        </div>
                        <div class="col-4">
                            <img width="300" src="{{asset($data->img_1000)}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
