<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Notes Grid — Tailwind</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen p-10">

<div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
    <div class="w-full max-w-lg bg-white rounded-xl shadow-lg p-8">
        <!-- Header -->
        <h1 class="text-3xl font-extrabold text-gray-800 mb-6 text-center">✏️ Create New Post</h1>

        <!-- Form -->
        <form method="POST" action="{{ route('note.store') }}" class="space-y-6">
            @csrf

            <!-- Title -->
            <div>
                <label class="block font-semibold text-gray-700 mb-2">Title</label>
                <input type="text" name="title" value="{{ old('title') }}"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition @error('title') border-red-500 @enderror"
                    placeholder="Enter your post title">

                    <label class="block font-semibold text-gray-700 mb-2">Subitle</label>
                     <input type="text" name="subtitle" value="{{ old('title') }}"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition @error('title') border-red-500 @enderror"
                    placeholder="Enter your post title">
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Content -->
            <div>
                <label class="block font-semibold text-gray-700 mb-2">Message</label>
                <textarea name="content" rows="5"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                    placeholder="Write something interesting...">{{ old('message') }}</textarea>
            </div>

            {{-- footer --}}
            <label for="">Priority</label>

            <!-- Buttons -->
            <div class="flex items-center justify-between">
                <a href="{{ route('note.index') }}" 
                   class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium transition">
                   Cancel
                </a>
                <button type="submit" 
                    class="px-6 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white font-semibold shadow transition">
                    Save Post
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>