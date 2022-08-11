{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>livewire</title>
    @livewireStyles 
</head>
<body> --}}
    {{-- @livewireStyles --}}
    <div>
        <input wire:model="search" type="text" placeholder="Search users..."/>
    
        <ul>
            @foreach($users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>

    </div>
    {{-- @livewireScripts --}}
{{--     
    @livewireScripts
</body>
</html> --}}