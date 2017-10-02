<ul>
    @foreach ($tasks as $task)
        <li>{!! link_to_route('tasks.show', $task->id,['id' => $task->id]) !!} : 【{{ $task->status }}】 {{ $task->content }}</li>
    @endforeach
</ul>
