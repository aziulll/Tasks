@extends('layouts.app')
@section('content')
<div class="bg-white rounded-xl shadow-md p-8 max-w-md mx-auto mt-16">
    <div class="container mx-auto m-2">

        <div class="flex justify-between">
            <div>
                <h1 class=" text-center text-3xl font-bold">Tasks</h1>
            </div>
            <div> <a href="{{ route('tasks.create') }}" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">+</a>
            </div>
        </div>

        <ul class="mt-4">
            @foreach ($tasks as $task)
            <li class="flex items-center justify-between border-gray-300 py-2 border p-2 rounded-lg mb-2">
                <div class="flex flex-row items-center ">
                    <label for="is_finished_{{ $task->id }}" class="ml-2 {{ $task->is_finished ? 'text-gray-500 line-through italic ' : '' }}">
                        {{ $task->title }}
                    </label>
                    <span class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded ml-2">{{$task->category}}</span>

                </div>
                <div class="task-actions">
                    <form action="{{ route('tasks.finish', $task->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit">
                            <svg width="20" height="20" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M512 512m-448 0a448 448 0 1 0 896 0 448 448 0 1 0-896 0Z" fill="#4CAF50"></path>
                                    <path d="M738.133333 311.466667L448 601.6l-119.466667-119.466667-59.733333 59.733334 179.2 179.2 349.866667-349.866667z" fill="#CCFF90"></path>
                                </g>
                            </svg>
                        </button>
                    </form>
                    <form action="{{ route('tasks.show')}}" method="GET">
                        <button type="submit"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g id="style=stroke">
                                        <g id="eye-open">
                                            <path id="vector (Stroke)" fill-rule="evenodd" clip-rule="evenodd" d="M12 9.75C10.755 9.75 9.75 10.755 9.75 12C9.75 13.245 10.755 14.25 12 14.25C13.245 14.25 14.25 13.245 14.25 12C14.25 10.755 13.245 9.75 12 9.75ZM8.25 12C8.25 9.92657 9.92657 8.25 12 8.25C14.0734 8.25 15.75 9.92657 15.75 12C15.75 14.0734 14.0734 15.75 12 15.75C9.92657 15.75 8.25 14.0734 8.25 12Z" fill="#000000"></path>
                                            <path id="vector (Stroke)_2" fill-rule="evenodd" clip-rule="evenodd" d="M2.28282 9.27342C4.69299 5.94267 8.19618 3.96997 12.0001 3.96997C15.8042 3.96997 19.3075 5.94286 21.7177 9.27392C22.2793 10.0479 22.5351 11.0421 22.5351 11.995C22.5351 12.948 22.2792 13.9424 21.7174 14.7165C19.3072 18.0473 15.804 20.02 12.0001 20.02C8.19599 20.02 4.69264 18.0471 2.28246 14.716C1.7209 13.942 1.46509 12.9478 1.46509 11.995C1.46509 11.0419 1.721 10.0475 2.28282 9.27342ZM12.0001 5.46997C8.74418 5.46997 5.66753 7.15436 3.49771 10.1532L3.497 10.1542C3.15906 10.6197 2.96509 11.2866 2.96509 11.995C2.96509 12.7033 3.15906 13.3703 3.497 13.8357L3.49771 13.8367C5.66753 16.8356 8.74418 18.52 12.0001 18.52C15.256 18.52 18.3326 16.8356 20.5025 13.8367L20.5032 13.8357C20.8411 13.3703 21.0351 12.7033 21.0351 11.995C21.0351 11.2866 20.8411 10.6197 20.5032 10.1542L20.5025 10.1532C18.3326 7.15436 15.256 5.46997 12.0001 5.46997Z" fill="#000000"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </form>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <svg width="20" height="20" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <polygon fill="var(--ci-primary-color, #ff0000)" points="227.313 363.313 312 278.627 396.687 363.313 419.313 340.687 334.627 256 419.313 171.313 396.687 148.687 312 233.373 227.313 148.687 204.687 171.313 289.373 256 204.687 340.687 227.313 363.313" class="ci-primary"></polygon>
                                    <path fill="var(--ci-primary-color, #ff0000)" d="M472,64H194.644a24.091,24.091,0,0,0-17.42,7.492L16,241.623v28.754L177.224,440.508A24.091,24.091,0,0,0,194.644,448H472a24.028,24.028,0,0,0,24-24V88A24.028,24.028,0,0,0,472,64Zm-8,352H198.084L48,257.623v-3.246L198.084,96H464Z" class="ci-primary"></path>
                                </g>
                            </svg>
                        </button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>


    </div>
</div>