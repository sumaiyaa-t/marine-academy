@extends('admin.admin-panel.main')

@section('content')
    <h4>Edit Slider Contents</h4>
    <hr>

    <div>
        <form action="{{ route('slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')
            <form>

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title (BN)</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter title" name="title_bn"
                           class="form-control @error('title_bn') is-invalid @enderror" value="{{ $slider->title_bn }}">
                </div>

                @error('title_bn')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter title" name="title_en"
                           class="form-control @error('title_en') is-invalid @enderror" value="{{ $slider->title_en }}">
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
                              placeholder="Enter achievement content">{{ $slider->content_bn }}</textarea>
                </div>

                @error('content_bn')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Content</label>
                    <textarea name="content_en" id="" cols="30" rows="10"
                              class="@error('content_en') is-invalid @enderror form-control"
                              placeholder="Enter achievement content">{{ $slider->content_en }}</textarea>
                </div>

                @error('content_en')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <select class="form-control" aria-label="Default select example" name="location">
                        <option value="home" @if($slider->location =='home') selected @endif>Home</option>
                        <option value="about" @if($slider->location =='about') selected @endif>About</option>
                        <option value="platform" @if($slider->location =='platform') selected @endif>Platforms</option>
                        <option value="contact" @if($slider->location =='contact') selected @endif>Contact Us</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
