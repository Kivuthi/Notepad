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
  <!-- Notes Grid -->
  <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
    
    <!-- Note Card -->
    <article class="bg-white rounded-2xl shadow-lg ring-1 ring-slate-200 overflow-hidden flex flex-col">
      <header class="px-4 py-3 bg-gradient-to-r from-sky-600 to-indigo-600 text-white">
        <h1 class="text-lg font-semibold">Weekly Project Notes</h1>
        <p class="text-sm opacity-90">Sprint planning</p>
      </header>
      <div class="px-4 py-4 text-slate-700 flex-1">
        <p class="mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when
             looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
              as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing 
              packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' 
              will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes 
              by accident, sometimes on purpose (injected humour and the like).<</p>
        <p class="mb-2">• Remove deprecated endpoints.</p>
        <p class="mb-0 text-sm text-slate-500">Last updated: Sep 30, 2025</p>
      </div>
      <div class="px-4 py-3 bg-slate-50 flex items-center justify-between">
        <div class="flex gap-2">
          <a href="#" class="inline-flex items-center gap-1 bg-sky-600 hover:bg-sky-700 text-white px-3 py-1.5 rounded-md text-sm">Cancel</a>
          <a href="#" class="inline-flex items-center gap-1 bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded-md text-sm">Create</a>
        </div>
        <span class="text-xs text-slate-500">Priority: <span class="font-semibold text-sky-600">High</span></span>
      </div>
    </article>

</body>
</html>