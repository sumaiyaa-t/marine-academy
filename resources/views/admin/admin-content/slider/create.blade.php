@extends('admin.admin-panel.main')
@section('content')
    <h4>Add Slider Contents</h4>
    <hr>

    <div>
        <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <form>

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title (BN)</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter title" name="title_bn"
                           class="form-control @error('title_bn') is-invalid @enderror">
                </div>


                @error('title_bn')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter title" name="title_en"
                           class="form-control @error('title_en') is-invalid @enderror">
                </div>

                @error('title_en')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleFormControlFile1">Enter image [1920x1080]</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                           id="exampleFormControlFile1" name="image">
                </div>

                @error('image')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Content (BN)</label>
                    <textarea name="content_bn" id="" cols="30" rows="10"
                              class="@error('content_bn') is-invalid @enderror form-control"
                              placeholder="Enter achievement content"></textarea>
                </div>

                @error('content_bn')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Content</label>
                    <textarea name="content_en" id="" cols="30" rows="10"
                              class="@error('content_en') is-invalid @enderror form-control"
                              placeholder="Enter achievement content"></textarea>
                </div>

                @error('content_en')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

{{--                <div class="form-group">--}}
{{--                    <select class="form-control" aria-label="Default select example" name="location">--}}
{{--                        <option value="home" selected>Home</option>--}}
{{--                        <option value="ecosystem">Ecosystems</option>--}}
{{--                        <option value="platform">Platforms</option>--}}
{{--                        <option value="contact">Contact Us</option>--}}
{{--                    </select>--}}
{{--                </div>--}}

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter url location</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter url location" name="location"
                           class="form-control @error('location') is-invalid @enderror">
                </div>

                @error('location')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </form>
    </div>
@endsection
