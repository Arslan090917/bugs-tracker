@component('mail::message')
# Фидбэк

Ну и дермовое приложение

@component('mail::button', ['url' => '','color' => 'red'])
Открыть
@endcomponent

@component('mail::panel')
    Какойто текст 1.2.3.4.5
@endcomponent

@component('mail::table')
    | Laravel       | Table         | Example  |
    | ------------- |:-------------:| --------:|
    | Col 2 is      | Centered      | $10      |
    | Col 3 is      | Right-Aligned | $20      |
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
