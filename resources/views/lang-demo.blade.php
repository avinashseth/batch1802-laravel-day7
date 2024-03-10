<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Demo</title>
</head>
<body>
    <h1>@lang('messages.welcome')</h1>
    <h2>@lang('messages.about')</h2>
    <p>@lang('greetings.hello')</p>
    <p>Change Language to 
        <a href="{{ route('language-switch', ['language' => 'english']) }}">English</a> / 
        <a href="{{ route('language-switch', ['language' => 'de']) }}">German</a> /
        <a href="{{ route('language-switch', ['language' => 'spanish']) }}">Spanish</a>
    </p>
</body>
</html>