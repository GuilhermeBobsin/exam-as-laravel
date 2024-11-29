<!-- <form action="{{ url('workshops/'.$workshop->id) }}" method="POST" enctype="multipart/form-data" >
    @csrf
    @method('PUT')
    <input type="text" name="title" placeholder="Title" value="{{ $workshop->title}}" required>
    <input type="text" name="location" placeholder="Location" value="{{ $workshop->location}}" required>
    <input type="text" name="description" placeholder="Description" value="{{ $workshop->description}}" required>
    <img src="{{ asset($workshop->image) }}" alt="{{ $workshop->name }}">
    <label for="image">Image:</label>
    <input type="file" name="image" id="image">
    <button type="submit">Edit Workshop</button>
</form> -->

@extends('layouts.base')
@section('content')
<form class="max-w-sm mx-auto" action="{{ url('workshops/'.$workshop->id) }}" method="POST" enctype="multipart/form-data" >
    @csrf
    @method('PUT')
  <div class="mb-5">
      <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
      <input type="text" id="title" name="title" value="{{ $workshop->title}}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  <div class="mb-5">
      <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
      <input type="text" id="location" name="location" value="{{ $workshop->location}}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  <div class="mb-5">
      <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
      <input type="text" id="description" name="description" value="{{ $workshop->description}}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  <div class="mb-5">
      <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
      <img src="{{ asset($workshop->image) }}" alt="{{ $workshop->name }}" class="w-52 mx-auto">
      <br>
      <input type="file" id="image" name="image" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  <button type="submit" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" >Edit Workshop</button>
</form>
@endsection
