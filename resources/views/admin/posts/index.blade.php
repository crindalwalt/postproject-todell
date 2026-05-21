<x-layouts.admin>
    <div class="space-y-6">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
            <div>
                <p class="text-sm font-medium uppercase tracking-[0.25em] text-brand-600">Admin Posts</p>
                <h2 class="mt-2 text-2xl font-semibold tracking-tight text-slate-900">Posts</h2>
                <p class="mt-2 text-sm text-slate-500">A simple overview of posts using the actual table fields from the migration.</p>
            </div>

            <a href="{{ route('posts.create') }}" class="inline-flex items-center justify-center rounded-xl bg-brand-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-brand-500">
                Create Post
            </a>
        </div>

        <div class="grid gap-4 sm:grid-cols-3">
            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                <p class="text-sm text-slate-500">Total posts</p>
                <p class="mt-2 text-2xl font-semibold text-slate-900">{{ $posts->count() }}</p>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                <p class="text-sm text-slate-500">Published</p>
                <p class="mt-2 text-2xl font-semibold text-slate-900">{{ $posts->where('status', 'published')->count() }}</p>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                <p class="text-sm text-slate-500">Drafts</p>
                <p class="mt-2 text-2xl font-semibold text-slate-900">{{ $posts->where('status', 'draft')->count() }}</p>
            </div>
        </div>

        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-slate-200 text-sm">
                    <thead class="bg-slate-50 text-left text-slate-500">
                        <tr>
                            <th class="px-5 py-4 font-medium">Image</th>
                            <th class="px-5 py-4 font-medium">Title</th>
                            <th class="px-5 py-4 font-medium">Slug</th>
                            <th class="px-5 py-4 font-medium">Description</th>
                            <th class="px-5 py-4 font-medium">User</th>
                            <th class="px-5 py-4 font-medium">Status</th>
                            <th class="px-5 py-4 font-medium">Image</th>
                            <th class="px-5 py-4 font-medium">Created</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse ($posts as $post)
                            <tr class="hover:bg-slate-50/80">
                                <td>
                                    <div style="width: 100px; height: 100px ; border-radius: 1rem;">
                                        @if($post->image)
                                            <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover rounded-lg">
                                        @else
                                            <span class="text-slate-500">No image</span>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-5 py-4 font-medium text-slate-900">{{ $post->title }}</td>
                                <td class="px-5 py-4 text-slate-600">{{ $post->slug }}</td>
                                <td class="px-5 py-4 text-slate-600">
                                    <p class="max-w-xs truncate">{{ $post->description }}</p>
                                </td>
                                <td class="px-5 py-4 text-slate-600">{{ $post->user->name }}</td>
                                <td class="px-5 py-4">
                                    <span class="inline-flex rounded-full px-2.5 py-1 text-xs font-medium {{ $post->status === 'published' ? 'bg-emerald-100 text-emerald-700' : 'bg-amber-100 text-amber-700' }}">
                                        {{ ucfirst($post->status) }}
                                    </span>
                                </td>
                                <td class="px-5 py-4 text-slate-600">{{ $post->image ?: 'No image' }}</td>
                                <td class="px-5 py-4 text-slate-600">{{ $post->created_at?->format('M d, Y') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-5 py-10 text-center text-sm text-slate-500">No posts found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.admin>
