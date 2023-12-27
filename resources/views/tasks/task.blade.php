@extends('layouts.app')
@section('content')

<div class="bg-white rounded-xl shadow-md p-8 max-w-md mx-auto mt-16">
    <div class="container mx-auto m-2">
        Obrigada por testar até aqui!
        Mas não tem como visualizar completo ainda :D
        <div class="mt-8">
            <a href="{{ route('tasks.index')}}"><svg width="20" height="20" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path>
                        <path fill="#000000" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path>
                    </g>
                </svg></a>
        </div>
    </div>
</div>