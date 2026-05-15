<x-layouts.admin>
    <div class="space-y-6">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
            <div>
                <p class="text-sm font-medium uppercase tracking-[0.25em] text-brand-600">Users</p>
                <h2 class="mt-2 text-2xl font-semibold tracking-tight text-slate-900">All Users</h2>
                <p class="mt-2 text-sm text-slate-500">A simple overview of users using the actual table fields from the migration.</p>
            </div>

            <a href="{{ route('posts.create') }}" class="inline-flex items-center justify-center rounded-xl bg-brand-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-brand-500">
                Create Post
            </a>
        </div>

        <div class="grid gap-4 sm:grid-cols-3">
            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                <p class="text-sm text-slate-500">Total users</p>
                <p class="mt-2 text-2xl font-semibold text-slate-900">{{ $users->count() }}</p>
            </div>
            {{-- <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                <p class="text-sm text-slate-500"></p>
                <p class="mt-2 text-2xl font-semibold text-slate-900">{{ $posts->where('status', 'published')->count() }}</p>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                <p class="text-sm text-slate-500">Drafts</p>
                <p class="mt-2 text-2xl font-semibold text-slate-900">{{ $posts->where('status', 'draft')->count() }}</p>
            </div> --}}
        </div>

        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-slate-200 text-sm">
                    <thead class="bg-slate-50 text-left text-slate-500">
                        <tr>
                            <th class="px-5 py-4 font-medium">Id</th>
                            <th class="px-5 py-4 font-medium">Name</th>
                            <th class="px-5 py-4 font-medium">Email</th>
                            <th class="px-5 py-4 font-medium">Posts</th>
                            <th class="px-5 py-4 font-medium">Joined at</th>
                            <th class="px-5 py-4 font-medium">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse ($users as $user)
                            <tr class="hover:bg-slate-50/80">

                                <td class="px-5 py-4 font-medium text-slate-900">{{ $user->id }}</td>
                                <td class="px-5 py-4 text-slate-600">{{ $user->name }}</td>
                                <td class="px-5 py-4 text-slate-600">{{ $user->email }}</td>
                                <td class="px-5 py-4 text-slate-600">{{ $user->posts->count() }}</td>
                                <td class="px-5 py-4 text-slate-600">{{ $user->created_at?->format('M d, Y') }}</td>
                                <td class="px-5 py-4 text-slate-600">
                                    <a href="" class="btn">View</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-5 py-10 text-center text-sm text-slate-500">No users found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.admin>
