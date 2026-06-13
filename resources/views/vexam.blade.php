@extends('components/flayout')


@section('content')



            <th>Id</th>
            <th>SR.NO</th>
            <th>Exam Name</th>
            <th>Name</th>
            <th>Enrollment</th>
            <th>Semester</th>
            <th>Division</th>
            <th>Exam Complaint</th>
            <th>Date</th>
            <th>Update</th>
            <th>Delete</th>

             @foreach($data as $d)
        <tr>
           <td>{{$d->id}}</td>
           <td>{{$loop->iteration}}</td>
           <td>{{$d->examname}}</td>
           <td>{{$d->name}}</td>
           <td>{{$d->en}}</td>
           <td>{{$d->semname}}</td>
           <td>{{$d->division}}</td>
           <td>{{$d->complaintdetails}}</td>
           <td>{{$d->createdt}}</td>
           <td><a href="/updateexam/{{$d->id}}">Update</a></td>
           <td><a href="/deleteexam/{{$d->id}}">Delete</a></td>
        </tr>
        @endforeach()

@endsection()


@section('form')

<form action="{{url('/searchexam')}}" method="post" class="search-box">
        @csrf
        <input type="text" name="name" placeholder="Enter the Search Name">
        <button type="submit">Search</button>
    </form>

@endsection