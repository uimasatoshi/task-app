<p>Hello2</p>


@extends('layouts.app')

@section('content')


@if (Auth::check())

{{--
<p>USER: {{user->name . ' (' . $user->email . ')'}}</p>
--}}
@else
<p>※ログインしていません。（<a href="/login">ログイン</a>｜<a href="/register">登録</a>）</p>
@endif

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
@endsection

