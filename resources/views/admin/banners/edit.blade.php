@extends("Admin.layouts.app")
@section("content")
    <div class="container">
        <div class="row pt-4">
            <div class="text-end"><a href="{{route('admin.banners.index')}}" class="btn btn-info">Back</a></div>
        </div>
        <div class="row justify-content-center py-4">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.banners.update', $data->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="heading" id="heading"
                                        placeholder="heading" value="{{$data->heading}}">
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Primary Button Text</label>
                                        <input type="text" class="form-control" name="primary_btn_text"
                                            id="primary_btn_text" placeholder="button text"
                                            value="{{$data->primary_btn_text}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Primary Button Link</label>
                                        <input type="text" class="form-control" name="primary_btn_link"
                                            id="primary_btn_link" placeholder="button link"
                                            value="{{$data->primary_btn_link}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Secondary Button Text</label>
                                        <input type="text" class="form-control" name="secondary_btn_text"
                                            id="secondary_btn_text" placeholder="button text"
                                            value="{{$data->secondary_btn_text}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Secondary Button Link</label>
                                        <input type="text" class="form-control" name="secondary_btn_link"
                                            id="secondary_btn_link" placeholder="button link"
                                            value="{{$data->secondary_btn_link}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4 px-2">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label>image</label>
                                        <input type="file" name="img_50" id="img_50" class="form-control"
                                            aria-describedby="img_50">
                                        @error('img_50') <p class="small text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <img width="100%" src="{{ asset($data->img_200) }}" />
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="form-group">
                                    <label>Descriptions</label>
                                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group text-end pt-4">
                                <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
