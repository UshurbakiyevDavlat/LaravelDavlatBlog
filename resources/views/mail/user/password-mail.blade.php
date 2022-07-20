@component('mail::message')
# Introduction

Your password is : {{$password}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
