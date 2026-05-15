<x-layouts.admin>
    <div class="mx-auto max-w-4xl space-y-6">
        <div>
            <p class="text-sm font-medium uppercase tracking-[0.25em] text-brand-600">Admin Posts</p>
            <h2 class="mt-2 text-2xl font-semibold tracking-tight text-slate-900">Update Post</h2>
            <p class="mt-2 text-sm text-slate-500">Fill in the post fields defined in the migration: title, slug,
                description, user ID, status, and optional image path.</p>
        </div>
        <style>
            .box{
                width: 130px;
                height: 130px;
                border-radius: 1rem;
                margin-bottom: 1rem;
                overflow: hidden;
            }

            .box img{
                width: inherit;
                height: inherit;
                object-fit: cover;
            }
        </style>
        <form method="POST" action="{{ route('posts.update', $post->slug) }}" enctype="multipart/form-data"
            class="space-y-6 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            @csrf
            @method('PUT')

            <div class="grid gap-5 md:grid-cols-2">
                <div class="md:col-span-2">
                    <label for="title" class="mb-2 block text-sm font-medium text-slate-700">Title</label>
                    <input id="title" name="title" type="text" value="{{ old('title', $post->title) }}"
                        placeholder="Enter post title"
                        class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-brand-300 focus:ring-4 focus:ring-brand-50">
                    @error('title')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>



                <div class="md:col-span-2">
                    <label for="description" class="mb-2 block text-sm font-medium text-slate-700">Description</label>
                    <textarea id="description" name="description" rows="6" placeholder="Write the post description"
                        class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-brand-300 focus:ring-4 focus:ring-brand-50">{{ old('description', $post->description) }}</textarea>
                    @error('description')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>



                <div>
                    <label for="status" class="mb-2 block text-sm font-medium text-slate-700">Status</label>
                    <select id="status" name="status"
                        class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-brand-300 focus:ring-4 focus:ring-brand-50">
                        <option value="draft" @if($post->status === 'draft') selected @endif>Draft</option>
                        <option value="published" @if($post->status === 'published') selected @endif>Published</option>
                    </select>
                    @error('status')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md:col-span-2">

                    @if($post->image)
                    <div class="box">
                        <img src="{{ asset($post->image) }}" alt="Post Image">
                    </div>

                    @endif
                    <label for="image" class="mb-2 block text-sm font-medium text-slate-700">Image</label>
                    <input id="image" name="image" type="file"
                        class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-brand-300 focus:ring-4 focus:ring-brand-50">
                    <p class="mt-2 text-xs text-slate-500">Optional image path or filename.</p>
                    @error('image')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex items-center justify-end gap-3 border-t border-slate-200 pt-4">
                <button type="reset"
                    class="rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 transition hover:bg-slate-50">
                    Reset
                </button>
                <button type="submit"
                    class="rounded-xl bg-gradient-to-r from-brand-600 to-brand-700 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:from-brand-500 hover:to-brand-600">
                    Update Post
                </button>
            </div>
        </form>
    </div>
</x-layouts.admin>
