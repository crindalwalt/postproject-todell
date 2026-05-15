        <aside class="sidebar-glow hidden w-72 shrink-0 flex-col border-r border-white/[0.06] text-white lg:flex">

            {{-- Logo / Brand --}}
            <div class="px-6 py-7">
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-brand-500 to-brand-700 text-sm font-black tracking-tight shadow-lg shadow-brand-900/50">
                        AC
                    </div>
                    <div>
                        <p class="text-[10px] font-semibold uppercase tracking-[0.4em] text-slate-500">Control Center</p>
                        <h2 class="text-base font-semibold leading-none tracking-tight text-white">AppCore Admin</h2>
                    </div>
                </div>
            </div>

            {{-- Divider --}}
            <div class="mx-6 h-px bg-white/[0.06]"></div>

            {{-- Navigation --}}
            <div class="flex-1 overflow-y-auto px-4 py-5">

                <p class="mb-3 px-3 text-[10px] font-semibold uppercase tracking-[0.35em] text-slate-600">Main Menu</p>

                <nav class="space-y-1">

                    {{-- All Users --}}
                    <a href="{{ route("users.index") }}"
                       class="{{ request()->is('admin/users*') ? 'nav-active text-white' : 'border-transparent text-slate-400 hover:bg-white/[0.05] hover:text-white' }} group flex items-center gap-3.5 rounded-2xl border px-3 py-3 transition-all duration-200">
                        <span class="{{ request()->is('admin/users*') ? 'nav-icon-active' : 'bg-white/[0.07] group-hover:bg-white/[0.12]' }} flex h-9 w-9 shrink-0 items-center justify-center rounded-xl transition-all duration-200">
                            <svg class="h-[18px] w-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                      d="M17 20h5v-1a4 4 0 00-5.874-3.514M17 20H7m10 0v-1c0-1.657-1.343-3-3-3H10c-1.657 0-3 1.343-3 3v1m0 0H2v-1a4 4 0 015.874-3.514M15 7a3 3 0 11-6 0 3 3 0 016 0zm-9 3a2.5 2.5 0 115 0 2.5 2.5 0 01-5 0zm10 0a2.5 2.5 0 115 0 2.5 2.5 0 01-5 0z"/>
                            </svg>
                        </span>
                        <span class="min-w-0 flex-1">
                            <span class="block text-sm font-semibold leading-none">All Users</span>
                            <span class="mt-1 block text-[11px] leading-none text-slate-500">Manage accounts &amp; access</span>
                        </span>
                        @if(request()->is('admin/users*'))
                            <span class="h-1.5 w-1.5 shrink-0 rounded-full bg-brand-400"></span>
                        @endif
                    </a>

                    {{-- All Posts --}}
                    <a href="{{ route("posts.index") }}"
                       class="{{ request()->is('admin/posts*') && !request()->is('admin/posts/my*') ? 'nav-active text-white' : 'border-transparent text-slate-400 hover:bg-white/[0.05] hover:text-white' }} group flex items-center gap-3.5 rounded-2xl border px-3 py-3 transition-all duration-200">
                        <span class="{{ request()->is('admin/posts*') && !request()->is('admin/posts/my*') ? 'nav-icon-active' : 'bg-white/[0.07] group-hover:bg-white/[0.12]' }} flex h-9 w-9 shrink-0 items-center justify-center rounded-xl transition-all duration-200">
                            <svg class="h-[18px] w-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                      d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-8 5h6m-6 4h8M7 8h6v4H7V8z"/>
                            </svg>
                        </span>
                        <span class="min-w-0 flex-1">
                            <span class="block text-sm font-semibold leading-none">All Posts</span>
                            <span class="mt-1 block text-[11px] leading-none text-slate-500">Browse &amp; moderate content</span>
                        </span>
                        @if(request()->is('admin/posts*') && !request()->is('admin/posts/my*'))
                            <span class="h-1.5 w-1.5 shrink-0 rounded-full bg-brand-400"></span>
                        @endif
                    </a>

                    {{-- My Posts --}}
                    <a href="{{ route("myposts.index") }}"
                       class="{{ request()->is('admin/posts/my*') ? 'nav-active text-white' : 'border-transparent text-slate-400 hover:bg-white/[0.05] hover:text-white' }} group flex items-center gap-3.5 rounded-2xl border px-3 py-3 transition-all duration-200">
                        <span class="{{ request()->is('admin/posts/my*') ? 'nav-icon-active' : 'bg-white/[0.07] group-hover:bg-white/[0.12]' }} flex h-9 w-9 shrink-0 items-center justify-center rounded-xl transition-all duration-200">
                            <svg class="h-[18px] w-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </span>
                        <span class="min-w-0 flex-1">
                            <span class="block text-sm font-semibold leading-none">My Posts</span>
                            <span class="mt-1 block text-[11px] leading-none text-slate-500">Your drafts &amp; published articles</span>
                        </span>
                        @if(request()->is('admin/posts/my*'))
                            <span class="h-1.5 w-1.5 shrink-0 rounded-full bg-brand-400"></span>
                        @endif
                    </a>

                </nav>

                <div class="my-5 h-px bg-white/[0.06]"></div>

                <p class="mb-3 px-3 text-[10px] font-semibold uppercase tracking-[0.35em] text-slate-600">Account</p>

                <nav class="space-y-1">

                    {{-- Profile --}}
                    <a href="/admin/profile"
                       class="{{ request()->is('admin/profile*') ? 'nav-active text-white' : 'border-transparent text-slate-400 hover:bg-white/[0.05] hover:text-white' }} group flex items-center gap-3.5 rounded-2xl border px-3 py-3 transition-all duration-200">
                        <span class="{{ request()->is('admin/profile*') ? 'nav-icon-active' : 'bg-white/[0.07] group-hover:bg-white/[0.12]' }} flex h-9 w-9 shrink-0 items-center justify-center rounded-xl transition-all duration-200">
                            <svg class="h-[18px] w-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                      d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><circle cx="12" cy="12" r="3" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"/>
                            </svg>
                        </span>
                        <span class="min-w-0 flex-1">
                            <span class="block text-sm font-semibold leading-none">Settings</span>
                            <span class="mt-1 block text-[11px] leading-none text-slate-500">Profile &amp; preferences</span>
                        </span>
                        @if(request()->is('admin/profile*'))
                            <span class="h-1.5 w-1.5 shrink-0 rounded-full bg-brand-400"></span>
                        @endif
                    </a>

                </nav>
            </div>

            {{-- ── User Card ────────────────────────────────────────── --}}
            <div class="border-t border-white/[0.06] p-4">
                <div class="flex items-center gap-3 rounded-2xl border border-white/[0.08] bg-white/[0.04] px-4 py-3.5 transition hover:bg-white/[0.07]">

                    {{-- Avatar --}}
                    <div class="avatar-ring flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-brand-500 to-brand-700 text-sm font-bold text-white">
                        {{ $userInitials }}
                    </div>

                    {{-- Info --}}
                    <div class="min-w-0 flex-1">
                        <p class="truncate text-sm font-semibold leading-none text-white">{{ $userName }}</p>
                        <p class="mt-1 truncate text-[11px] leading-none text-slate-500">{{ $userEmail }}</p>
                    </div>

                    {{-- Login / Logout button --}}
                    @if($isGuest)
                        <a href="{{ route('login') }}"
                           class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-xl bg-brand-600 text-white shadow-md shadow-brand-900/40 transition hover:bg-brand-500"
                           title="Login">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                            </svg>
                        </a>
                    @else
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                    class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-xl bg-white/[0.08] text-slate-400 transition hover:bg-red-500/20 hover:text-red-400"
                                    title="Log out">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                </svg>
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </aside>
