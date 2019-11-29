

<div>
    <h1>
<!-- {{--        <form action="{{url('/index')}}" method="post">--}} -->
        @foreach($pages as $page)

        <td>{{$page->id}}</td>
            <td>{{$page->name}}</td>
            <td>{{$page->password}}</td>
            <!-- <td>{{$page->created_at}}</td><br> -->

<!-- {{--                 <a class="btn btn-sm btn-success" href="{{url('edit', $page->id)}}">Update</a><br>--}} -->

            <a class="btn btn-sm btn-success" href="{{url('/up'.$page->id)}}">Update</a>
            <a href="{{url('/del/'.$page->id)}}" value="{{$page->id}}" name="del">delete</a>
            <a href="/create" class="btn btn-primary">Go Back</a><br>





        @endforeach


{{--                 <a class="btn btn-sm btn-warning" href="{{route('biodata.edit',$biodata->id)}}">Edit</a>--}}

{{--             </form>--}}

    </h1>
</div>

