<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel primi passi</title>
</head>
<body>

    <h1>Hello world!</h1>
    <h2>Members:</h2>
    
    <ul>
        @foreach ($data as $member)
            <li>
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
    {{-- Dump and Die - visualizzo l'array multidimensionale passato dalla route come se fosse un var_dump. Messo alla fine in quanto interrompe tutto il codice che si trofa sotte il dd. --}}
    {{dd($data)}}
</body>
</html>