@extends("Admin.layouts.app")
@section("content")
<div class="container py-4" style="background-color: aliceblue;">
    <div class="row">
        <div class="text-end"><a href="{{route('admin.banners.index')}}" class="btn btn-info">Back</a></div>
    </div>
    <div class="row py-4">
        <div class="container" style="background-color: aliceblue;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.banners.update', $data->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="heading" id="heading" placeholder="heading" value="{{$data->heading}}">
                                  </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Primary Button Text</label>
                                        <input type="text" class="form-control" name="primary_btn_text" id="primary_btn_text" placeholder="button text" value="{{$data->primary_btn_text}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Primary Button Link</label>
                                        <input type="text" class="form-control" name="primary_btn_link" id="primary_btn_link" placeholder="button link" value="{{$data->primary_btn_link}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4">
                                   <div class="col-6">
                                    <div class="form-group">
                                        <label>Secondary Button Text</label>
                                        <input type="text" class="form-control" name="secondary_btn_text" id="secondary_btn_text" placeholder="button text" value="{{$data->secondary_btn_text}}">
                                      </div>
                                   </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                        <label>Secondary Button Link</label>
                                        <input type="text" class="form-control" name="secondary_btn_link" id="secondary_btn_link" placeholder="button link" value="{{$data->secondary_btn_link}}">
                                      </div>
                                  </div>
                            </div>
                            <div class="row pt-4 px-2">
                                <div class="card shadow-sm">
                                    <div class="card-header">
                                        Banner Images
                                    </div>
                                    <div class="card-body pt-3">
                                        <div class="admin__content">
                                            <content>
                                                <div class="row mb-2 align-items-center">
                                                    <div class="col-3">
                                                        <label class="col-form-label">Img 50</label>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="file" name="img_50" id="img_50" class="form-control" aria-describedby="img_50">
                                                        @error('img_50') <p class="small text-danger">{{ $message }}</p> @enderror
                                                    </div>
                                                    <div class="col-3">
                                                        <span id="img_50" class="form-text">
                                                        image size.
                                                        </span>
                                                    </div>
                                                    <div class="col-2">
                                                        <label for="img_50"><img width="100%"src="{{ asset($data->img_50) }}"/></label>
                                                    </div>
                                                </div>
                                            </content>
                                        </div>
                                        <div class="admin__content">
                                            <content>
                                                <div class="row mb-2 align-items-center">
                                                    <div class="col-3">
                                                        <label class="col-form-label">Img 200</label>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="file" name="img_200" id="img_200" class="form-control" aria-describedby="img_200">
                                                        @error('img_200') <p class="small text-danger">{{ $message }}</p> @enderror
                                                    </div>
                                                    <div class="col-3">
                                                        <span id="img_200" class="form-text">
                                                        image size.
                                                        </span>
                                                    </div>
                                                    <div class="col-2">
                                                        <label for="img_200"><img width="100%"src="{{ asset($data->img_200) }}"/></label>
                                                    </div>
                                                </div>
                                            </content>
                                        </div>
                                        <div class="admin__content">
                                            <content>
                                                <div class="row mb-2 align-items-center">
                                                    <div class="col-3">
                                                        <label class="col-form-label">Img 500</label>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="file" name="img_500" id="img_500" class="form-control" aria-describedby="img_500">
                                                        @error('img_500') <p class="small text-danger">{{ $message }}</p> @enderror
                                                    </div>
                                                    <div class="col-3">
                                                        <span id="img_500" class="form-text">
                                                        image size.
                                                        </span>
                                                    </div>
                                                    <div class="col-2">
                                                        <label for="img_500"><img width="100%"src="{{ asset($data->img_500) }}"/></label>
                                                    </div>
                                                </div>
                                            </content>
                                        </div>
                                        <div class="admin__content">
                                            <content>
                                                <div class="row mb-2 align-items-center">
                                                    <div class="col-3">
                                                        <label class="col-form-label">Img 1000</label>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="file" name="img_1000" id="img_1000" class="form-control" aria-describedby="img_1000">
                                                        @error('img_1000') <p class="small text-danger">{{ $message }}</p> @enderror
                                                    </div>
                                                    <div class="col-3">
                                                        <span id="img_1000" class="form-text">
                                                            image size.
                                                        </span>
                                                    </div>
                                                    <div class="col-2">
                                                        <label for="img_1000"><img width="100%"src="{{ asset($data->img_1000) }}"/></label>
                                                    </div>
                                                </div>
                                            </content>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="form-group">
                                    <label>Descriptions</label>
                                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                                  </div>
                            </div>
                            <div class="form-group text-end pt-4">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection