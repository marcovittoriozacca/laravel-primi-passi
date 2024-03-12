@extends('../layouts/mainLayout')
@section('pageTitle', 'Laravel Primi Passi')

@section('content')    
    <div class="text-center">
        <h2 class="py-3">Hello world!</h2>
        <h2>Members</h2>
    </div>

    <div class="text-center">
        <ul class="list-unstyled">
            @foreach ($data as $member)
                <li class="py-3">
                    @foreach ($member as $memberData)
                        @if ($loop->first || $loop->iteration == 2)
                            <span>{{$memberData}}</span>
                        @else
                            <p>{{$memberData}}</p>
                        @endif            
                    @endforeach
                </li>
            @endforeach
        </ul>
    </div>    
@endsection
