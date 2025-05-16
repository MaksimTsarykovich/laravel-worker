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

Create page
<div>
    <hr>
    <div>
        <form action="{{ route('worker.store') }}" method="post">
            @csrf
            <div style="margin-bottom: 15px;"><input type="text" name="name" placeholder="John"
                                                     value="{{ old('name') }}">
                @error('name')
                <div>
                    {{ $message}}
                </div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;"><input type="text" name="surname" placeholder="Doe"
                                                     value="{{ old('surname') }}">
                @error('surname')
                <div>
                    {{ $message}}
                </div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;"><input type="text" name="email" placeholder="johndoe@example.com"
                                                     value="{{ old('email') }}">
                @error('email')
                <div>
                    {{ $message}}
                </div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;"><input type="number" name="age" placeholder="25" value="{{ old('age') }}">
                @error('age')
                <div>
                    {{ $message}}
                </div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;"><textarea name="description"
                                                        placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet cum, esse laboriosam numquam ut voluptate.">

                    {{ old('description') }}
                </textarea>
                @error('description')
                <div>
                    {{ $message}}
                </div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;">
                <input
                    {{ old('is_married') == 'on' ? 'checked' : '' }}
                    id="is_married" type="checkbox" name="is_married">
                <label for="is_married">Is married</label>

                @error('is_married')
                <div>
                    {{ $message}}
                </div>
                @enderror

            </div>
            <div style="margin-bottom: 15px;"><input type="submit" value="Добавить"></div>
        </form>
    </div>
    <hr>
</div>


</body>
</html>
