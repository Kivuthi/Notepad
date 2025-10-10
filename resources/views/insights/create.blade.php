<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Blog Post</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

  <form method="POST" action="{{ route('insights.store') }}" enctype="multipart/form-data"
        class="bg-white rounded-2xl shadow-md overflow-hidden max-w-md w-full hover:shadow-lg transition duration-300">
    @csrf

    <!-- Image upload preview section -->
    <div class="relative">
      <label for="image" class="cursor-pointer block">
        <img id="preview" 
             src="{{ asset('images/blogs/car-financing.jpg') }}" 
             alt="Blog image preview" 
             class="w-full h-48 object-cover">
        <div class="absolute inset-0 bg-black/30 flex items-center justify-center text-white text-sm opacity-0 hover:opacity-100 transition">
          Click to upload image
        </div>
      </label>
      <input type="file" name="image" id="image" accept="image/*" class="hidden" onchange="previewImage(event)">
    </div>

    <!-- Form fields -->
    <div class="p-6 text-left space-y-4">
      <h2 class="text-xl font-semibold text-gray-900">Add New Blog</h2>

      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1">Title</label>
        <input type="text" name="title" placeholder="Enter blog title"
               class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
      </div>

      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1">Body / Description</label>
        <textarea name="body" rows="4" placeholder="Write something..."
                  class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none"></textarea>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-1">Author</label>
          <input type="text" name="author" placeholder="Author name"
                 class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
        </div>

        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-1">Date</label>
          <input type="date" name="published_at"
                 class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
        </div>
      </div>

      <div class="flex items-center justify-between pt-4 border-t">
        <a href="{{ route('insights.index') }}"
           class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium transition">
          Cancel
        </a>
        <button type="submit"
                class="px-6 py-2 rounded-lg bg-blue-900 hover:bg-blue-800 text-white font-semibold shadow transition">
          Publish
        </button>
      </div>
    </div>
  </form>

  <script>
    function previewImage(event) {
      const [file] = event.target.files;
      if (file) {
        document.getElementById('preview').src = URL.createObjectURL(file);
      }
    }
  </script>

</body>
</html>
