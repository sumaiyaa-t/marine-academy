@extends('admin.admin-panel.main')

@section('content')
    <h4>View All Counter Info</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Link</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($contacts as $testimonial)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $testimonial->address }}</td>
                <td>{{ $testimonial->phone }}</td>
                <td>{{ $testimonial->email }}</td>
                <td>{{ $testimonial->link }}</td>
                {{--                <td><img src="{{ asset('storage/'.$testimonial->image) }}" alt="" style="width: 100px"></td>--}}
                <td><a href="{{ route('contact.edit',$testimonial->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('contact.destroy',$testimonial->id) }}" method="post">
                        {{ csrf_field() }}
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
