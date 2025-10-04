<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Notes Grid — Tailwind</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen p-10">

  <a href="{{ route('note.create') }}" class="inline-flex items-center gap-1 bg-green-600 hover:bg-green-700 text-white px-4 py-2.5 rounded-md text-sm">Add items</a>
  
    @if(session('success'))
        <p class="mt-4 text-green-600">{{ session('success') }}</p>
    @endif

  <!-- Notes Grid -->
  <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
    
    <!-- Note Card -->
    <article class="bg-white rounded-2xl shadow-lg ring-1 ring-slate-200 overflow-hidden flex flex-col">
      <header class="px-4 py-3 bg-gradient-to-r from-sky-600 to-indigo-600 text-white">

        @forelse($notes as $note)
            <h1 class="text-lg font-semibold">{{ $note->title }}</h1>
                <p class="text-sm opacity-90">{{ $note->subtitle }}</p>
            </header>
            <div class="px-4 py-4 text-slate-700 flex-1">
                <p class="mb-2">{{ $note->message }}</p>
                <p class="mb-0 text-sm text-slate-500">Last updated: {{  $note->created_at->diffForHumans() }}</p>
            </div>
            <div class="px-4 py-3 bg-slate-50 flex items-center justify-between">
                <div class="flex gap-2">
                <a href="#" class="inline-flex items-center gap-1 bg-sky-600 hover:bg-sky-700 text-white px-3 py-1.5 rounded-md text-sm">Edit</a>
                <a href="#" class="inline-flex items-center gap-1 bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded-md text-sm">Delete</a>
                </div>
                <span class="text-xs text-slate-500">Priority: <span class="font-semibold text-sky-600">{{ $note->priority}}</span></span>
            </div>
    </article>
        @empty
            No posts yet
        @endforelse
 </section>

</body>
</html>
