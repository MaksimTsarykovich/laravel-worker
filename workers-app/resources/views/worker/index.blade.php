<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

Index page
<div>
    <hr>
        <div>
            <a href="{{ route("worker.create") }}">Добавить</a>
        </div>
    <hr>
    <form action="{{ route('worker.index') }}">
        <input type="text" name="name" placeholder="name" >
        <input type="text" name="surname" placeholder="surname">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="from" placeholder="from">
        <input type="text" name="to" placeholder="to">
        <input type="text" name="description" placeholder="description">
        <input id="isMarried" type="checkbox" name="is_married">
        <label for="isMarried">Is Married</label>
        <input type="submit">
    </form>


    @foreach($workers as $worker)
        <div>
            <div>Name: {{ $worker->name }}</div>
            <div>Surname: {{ $worker->surname }}</div>
            <div>Email: {{ $worker->email }}</div>
            <div>Age: {{ $worker->age }}</div>
            <div>Description: {{ $worker->description }}</div>
            <div>Is married: {{ $worker->is_married }}</div>
            <div>
                <a href="{{ route('worker.show', $worker->id) }}">Просмотреть</a>
            </div>
            <div>
                <a href="{{ route('worker.edit', $worker->id) }}">Редактировать</a>
            </div>
            <div>
                <form action="{{ route('worker.delete', $worker->id) }}" method="post">
                    @csrf
                    @method('Delete')
                    <input type="submit" value="удалить">
                </form>
            </div>
        </div>
        <hr>
    @endforeach
</div>

<div class="my-nav">
    {{ $workers->links() }}
</div>

<style>
    .my-nav svg {
        width: 20px;
    }
</style>

</body>
</html>
