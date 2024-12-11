@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="sm:pl-6">
 
            <div>
                    <label for="caption" class="block text-sm font-medium text-gray-900">Caption</label>
                    <input id="caption" type="text" name="caption" value="{{ old('caption') }}" class="mt-2 p-2 w-full border border-gray-300 rounded-md" required>
                </div>
            <div>
                <label for="image_path" class="block text-sm font-medium text-gray-900">Upload an image as content</label>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                    <div class="text-center">
                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2">
                            <span>Upload a file</span>
                            <input id="file-upload" name="image_path" type="file" class="sr-only" required>
                        </label>
                        <p class="pl-1">or drag and drop</p>
                        <p class="text-xs text-gray-600">PNG, JPG, GIF up to 10MB</p>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="mt-4">
                <button type="submit" class="px-4 py-2 bg-blue-800 text-white rounded-md">Submit</button>
                <a href="{{ route('posts.index') }}" class="text-sm font-semibold text-gray-900">Cancel</a>

            </div>
        </div>
    </form>
@endsection