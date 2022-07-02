@extends("Admin.layouts.app")
@section("content")
<div class="container py-4" style="background-color: aliceblue;">
    <div class="row">
        <div class="text-end"><a href="{{route('admin.banners.index')}}" class="btn btn-info">Back</a></div>
    </div>
    <div class="row py-4">
        <div class="container">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Header > {{$data->heading}}</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <p>Primary Button ><span class="badge bg-primary"> {{$data->primary_btn_text}}</span></p>
                                <p>Primary Link ><a href="{{$data->primary_btn_link}}" class="badge bg-primary text-light" target="_blank">Link</a></p>
                                <p>Secondary Button ><span class="badge bg-secondary"> {{$data->secondary_btn_text}}</span></p>
                                <p>Secondary Link ><a href="{{$data->secondary_btn_link}}" class="badge bg-secondary text-light" target="_blank">Link</a></p>
                                <p>Descriptions : {{$data->desc}}</p>
                            </div>
                            <div class="col-7">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card">
                                            <img width="300" src="{{asset($data->img_50)}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card">
                                            <img width="300" src="{{asset($data->img_200)}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card">
                                            <img width="300" src="{{asset($data->img_500)}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card">
                                            <img width="300" src="{{asset($data->img_1000)}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
