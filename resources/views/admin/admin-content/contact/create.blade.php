@extends('admin.admin-panel.main')
@section('content')
    <h4>Add Contact Contents</h4>
    <hr>

    <div>
        <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <form>

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Address</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Address" name="address"
                           class="form-control @error('address') is-invalid @enderror">
                </div>


                @error('address')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter Phone" name="phone"
                           class="form-control @error('phone') is-invalid @enderror">
                </div>

                @error('phone')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter Email" name="email"
                           class="form-control @error('email') is-invalid @enderror">
                </div>

                @error('email')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Location Link</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter link" name="link"
                           class="form-control @error('email') is-invalid @enderror">
                </div>

                @error('link')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </form>
    </div>
@endsection
