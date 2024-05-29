@extends('layout')

@section('title')
<br><br>
@endsection

@section('content')
    <div class="busqueda">
        <input type="text" placeholder="Qué desea buscar" id="busqueda" value="{{ request('search') }}" oninput="handleInput()">
    </div>

    <div id="search-results">
        <span id="loader" class="loader" style="display: none;"></span>
        @if($searchTerm)
            <br>
            @if($users->isEmpty())
                <br>
                <h2>No se encontraron resultados de búsqueda para "{{ $searchTerm }}"</h2>
            @else
                <div id="plist" class="people-list">
                    <ul id="user-results" class="list-unstyled chat-list mt-2 mb-0">
                        @foreach($users as $user)
                            <li class="clearfix">
                                <a href="{{ route('account', $user->id) }}" class="user-link">
                                    <img src="{{ $user->image_user }}" alt="avatar">
                                    <div class="about">
                                        <div class="name"><strong>{{ $user->name }}</strong></div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @else

        @endif
    </div>
@vite(['resources/js/search.js','resources/css/search.css'])
@endsection
