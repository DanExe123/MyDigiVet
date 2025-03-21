    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Digi Vet') }}
            </h2>
        </x-slot>

            

        <div class="py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-md">
                    <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                        <div class="form-horizontal mx-4 my-5">
                            <h4 class="text-lg font-semibold">Add New Pet Information</h4>
                            <hr class="my-2">
                             <!-- Slide Animation -->
                    <div id="content" class="slide-up">
                            <form action="{{ route('MyPets.store') }}" method="POST"  enctype="multipart/form-data">
                                @csrf
                            
                            <div class="mt-4">
                                <label for="name" class="block text-sm font-medium text-gray-700">Pet Name</label>
                                <input type="text" id="name" name="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
        
                            <div class="mt-4">
                                <label for="breed" class="block text-sm font-medium text-gray-700">Breed</label>
                                <input type="text" id="breed" name="breed" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('breed') is-invalid @enderror" value="{{ old('breed') }}">
                                @error('breed')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>


                                <!-- Select gender---!-->
                            <div class="mt-4">
                                <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                                <select 
                                    id="gender" 
                                    name="gender" 
                                    class="mt-2 select select-bordered w-full max-w-xs border-gray-300 rounded-md @error('gender') is-invalid @enderror">
                                    <option value="" disabled selected>Select a gender</option>
                                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                    <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('gender')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mt-4">
                                <label for="birthdate" class="block text-sm font-medium text-gray-700">Birthdate</label>
                                <input type="date" id="birthdate" name="birthdate" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('birthdate') is-invalid @enderror" value="{{ old('birthdate') }}">
                                @error('birthdate')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
        
                            <div class="mt-4">
                                <label for="color" class="block text-sm font-medium text-gray-700">Color</label>
                                <input type="text" id="color" name="color" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('color') is-invalid @enderror" value="{{ old('color') }}">
                                @error('color')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
        
                            <div class="mt-4">
                                <label for="fur_type" class="block text-sm font-medium text-gray-700">Fur Type</label>
                                <input type="text" id="fur_type" name="fur_type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('fur_type') is-invalid @enderror" value="{{ old('fur_type') }}">
                                @error('fur_type')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
        
                            <div class="mt-4">
                                <label for="weight" class="block text-sm font-medium text-gray-700">Weight</label>
                                <input type="number" step="0.01" id="weight" name="weight" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('weight') is-invalid @enderror" value="{{ old('weight') }}">
                                @error('weight')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
        
                            <div class="mt-4">
                                <label for="height" class="block text-sm font-medium text-gray-700">Height</label>
                                <input type="number" step="0.01" id="height" name="height" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('height') is-invalid @enderror" value="{{ old('height') }}">
                                @error('height')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
        
                            <div class="mt-4">
                                <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
                                <input type="file" id="image" name="image" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('image') is-invalid @enderror">
                                @error('image')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
        
                            <div class="mt-6">
                            <button type="submit" class="custom-bg-357D7F hover:bg-gray-700 text-white py-2 px-4 rounded"><a href="{{ route('MyPets.index') }}" >Back to List</a></button>
                        <button type="submit" class="custom-bg-357D7F hover:bg-gray-700 text-white py-2 px-4 rounded">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
            </div>
    </x-app-layout>
