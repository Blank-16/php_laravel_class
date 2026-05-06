<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('messages.welcome')</title>
</head>

<body>
    <div class="language-switcher">
        <strong>@lang('messages.language'):</strong>
        <a href="{{ route('set-language', 'en') }}" class="@if(app()->getLocale() === 'en') active @endif">
            @lang('messages.english')
        </a>
        <a href="{{ route('set-language', 'hi') }}" class="@if(app()->getLocale() === 'hi') active @endif">
            @lang('messages.hindi')
        </a>
        <a href="{{ route('set-language', 'bn') }}" class="@if(app()->getLocale() === 'bn') active @endif">
            @lang('messages.bengali')
        </a>
    </div>

    <div class="content">
        <h1>@lang('messages.welcome')</h1>
        <p>@lang('messages.login')</p>
    </div>
</body>

</html>