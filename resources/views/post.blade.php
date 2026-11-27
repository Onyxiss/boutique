<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>
    <h1> Mes Postes </h1>
    <ul>
        @forelse ( $posts as $post )
            <li>
                <h3 style="color: blue">{{ $post['content'] }}</h3>
                <ul>
                    @forelse ( $post->comments()->get() as $comment )
                        <li>
                            <h4>{{$comment['commentaire']}} </h4>
                        </li>
                    @empty

                    @endforelse
                </ul>
            </li>

        @empty

        @endforelse
    </ul>
</body>
</html>
