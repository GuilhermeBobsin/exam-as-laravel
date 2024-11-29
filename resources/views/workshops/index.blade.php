@extends('layouts.base')
@section('content')
<div class="flex items-start">
        <div class="py-8 mb-5">
            <a href="{{ url('workshops/create')}}" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ml-4" >Create workshop</a>
        </div>
    </div>
    @foreach($workshops as $workshop)
    <div class="flex flex-wrap justify-center mt-10">
    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex justify-center px-4 pt-4">
            <div class="flex flex-col items-center pb-10">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset($workshop->image) }}" alt="{{ $workshop->name }}" alt="image"/>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"><span>Title: </span>{{ $workshop->title}}</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400"><span>Location: </span>{{ $workshop->location }}</span>
                <span class="text-sm text-gray-500 dark:text-gray-400"><span>Description: </span>{{ $workshop->description }}</span>
                <div class="flex mt-4 md:mt-6">
                    <a href="{{ url('workshops/'.$workshop->id.'/edit') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
                    <form action="{{ url('workshops/'.$workshop->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Delet</button>
                    </form>
                </div>
            </div>
    </div>
@endforeach
</div>
@endsection