<x-app-layout>
    <div class="max-w-2xl mx-auto bg-white p-8 shadow-md">
        <h1 class="text-2xl font-bold mb-4">Create Topic</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.topic.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">タイトル</label>
                <input type="text" name="title" id="title" required maxlength="256" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="is_publish" class="block text-sm font-medium text-gray-700">公開</label>
                <select name="is_publish" id="is_publish" required class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="category_id" class="block text-sm font-medium text-gray-700">カテゴリー</label>
                <input type="number" name="category_id" id="category_id" required class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="summary" class="block text-sm font-medium text-gray-700">サマリー</label>
                <textarea name="summary" id="summary" required class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
            </div>

            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">本文</label>
                <textarea name="content" id="content" required class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
            </div>

            <div class="mb-4">
                <label for="delivery_at" class="block text-sm font-medium text-gray-700">配信日</label>
                <input type="datetime-local" name="delivery_at" id="delivery_at" required class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="flex items-center justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>