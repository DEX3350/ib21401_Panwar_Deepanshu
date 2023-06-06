<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>つぶやきを編集する</h1>
    <div>
        <a href="{{ route('tweet.index') }}"> 戻る </a>
        <p>投稿フォーム</p>
        @if (session('feedback.success'))
            <p style="color:green">{{ session('feedback.success') }}</p>
        @endif
        <form action="{{ route('tweet.update.put', ['tweetId' => $tweets->id]) }}" method="post">
            @csrf
            <label for="tweet-content">つぶやき</label>
            <span>140文字まで</span>
            <textarea name="tweet" id="tweet-content" type="text" placeholder="つぶやきを入力">{{ $tweets->content }}</textarea>
            @error('tweet')
                <p style= "color:red">{{ $message }}</p>
            @enderror
            <button type="submit">投稿</button>
        </form>    
    </div>
    
 
</body>
</html>