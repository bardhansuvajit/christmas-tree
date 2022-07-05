@extends("Admin.layouts.app")
@section("content")
<div class="container py-4" style="background-color: aliceblue;">
    <div class="row pt-4">
        <div class="text-end"><a href="{{route('admin.banners.index')}}" class="btn btn-info">Back</a></div>
    </div>
    <div class="container" style="background-color: aliceblue;">
        <div class="row justify-content-center py-4">
            <div class="col-8">
               <div class="card">
                    <div class="card-body pt-5">
                        <form method="POST" action="{{ route('admin.banners.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group">
                                    <label>Heading <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="heading" id="heading" placeholder="heading"  value="{{old('heading')}}">
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="form-group">
                                    <label>Primary button text *</label>
                                    <input type="text" class="form-control" name="primary_btn_text" id="primary_btn_text" placeholder="button text" value="{{old('primary_btn_text')}}">
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="form-group">
                                    <label>Primary button link *</label>
                                    <input type="text" class="form-control" name="primary_btn_link" id="primary_btn_link" placeholder="button link" value="{{old('primary_btn_link')}}">
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="form-group">
                                    <label>Secondary button text *</label>
                                    <input type="text" class="form-control" name="secondary_btn_text" id="secondary_btn_text" placeholder="button text" value="{{old('secondary_btn_text')}}">
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="form-group">
                                    <label>Secondary button link *</label>
                                    <input type="text" class="form-control" name="secondary_btn_link" id="secondary_btn_link" placeholder="button link" value="{{old('secondary_btn_link')}}">
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="img_1000" id="img_1000" class="form-control" aria-describedby="img_1000" value="{{old('img_1000')}}"> @error('img_1000') <p class="small text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="form-group">
                                    <label>Descriptions</label>
                                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="form-group text-end pt-4">
                                    <button class="btn btn-success" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection
