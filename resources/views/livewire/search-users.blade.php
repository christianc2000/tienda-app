<div>
    <input wire:model="search" type="text" placeholder="Search users..."/>
 
    <ul>
        <li>1</li>
        <li>2</li>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>