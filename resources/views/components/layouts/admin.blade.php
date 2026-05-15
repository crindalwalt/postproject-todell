<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Workspace</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme {
            --color-brand-50:  #eff6ff;
            --color-brand-100: #dbeafe;
            --color-brand-200: #bfdbfe;
            --color-brand-300: #93c5fd;
            --color-brand-400: #60a5fa;
            --color-brand-500: #3b82f6;
            --color-brand-600: #2563eb;
            --color-brand-700: #1d4ed8;
            --color-brand-800: #1e40af;
            --color-brand-900: #1e3a8a;
        }

        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #334155; border-radius: 999px; }

        .sidebar-glow {
            background:
                radial-gradient(ellipse 80% 40% at 50% 0%, rgba(59,130,246,0.18) 0%, transparent 70%),
                linear-gradient(160deg, #0f172a 0%, #0d1526 100%);
        }

        .nav-active {
            background: linear-gradient(135deg, rgba(59,130,246,0.22) 0%, rgba(37,99,235,0.12) 100%);
            border-color: rgba(59,130,246,0.4);
            box-shadow: 0 4px 24px -4px rgba(37,99,235,0.25), inset 0 1px 0 rgba(255,255,255,0.06);
        }

        .nav-icon-active {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            box-shadow: 0 4px 12px rgba(37,99,235,0.45);
        }

        .main-bg {
            background-image:
                radial-gradient(circle at 20% 0%, rgba(59,130,246,0.06) 0%, transparent 50%),
                radial-gradient(circle at 80% 100%, rgba(37,99,235,0.04) 0%, transparent 50%);
            background-color: #f8fafc;
        }

        .avatar-ring {
            box-shadow: 0 0 0 3px rgba(59,130,246,0.35), 0 0 0 6px rgba(59,130,246,0.1);
        }
    </style>
</head>
<body class="min-h-screen bg-slate-950 font-sans antialiased">
    @php
        $user        = auth()->user();
        $userName    = $user?->name  ?? 'Guest User';
        $userEmail   = $user?->email ?? 'guest@example.com';
        $isGuest     = $user === null;
        $parts       = preg_split('/\s+/', trim($userName)) ?: [];
        $userInitials = '';
        foreach (array_slice(array_values(array_filter($parts)), 0, 2) as $part) {
            $userInitials .= strtoupper(substr($part, 0, 1));
        }
        $userInitials = $userInitials ?: 'GU';
    @endphp

    {{-- ─── App Shell ─────────────────────────────────────────────── --}}
    <div class="flex h-screen overflow-hidden">

        {{-- ══════════════════════════════════════════════════════════
             SIDEBAR
        ══════════════════════════════════════════════════════════ --}}
        <x-utils.sidebar :userName="$userName" :userEmail="$userEmail" :userInitials="$userInitials" :isGuest="$isGuest"/>

        {{-- ══════════════════════════════════════════════════════════
             MAIN CONTENT
        ══════════════════════════════════════════════════════════ --}}
        <div class="main-bg flex min-w-0 flex-1 flex-col overflow-hidden">

            {{-- Top Header --}}
            <header class="shrink-0 border-b border-slate-200/60 bg-white/80 backdrop-blur-xl">
                <div class="flex items-center gap-4 px-6 py-4 sm:px-8 lg:px-10">

                    {{-- Page title area --}}
                    <div class="min-w-0 flex-1">
                        <p class="text-[10px] font-semibold uppercase tracking-[0.4em] text-brand-600">Admin Workspace</p>
                        <h1 id="page-title" class="mt-1 truncate text-xl font-semibold tracking-tight text-slate-900 sm:text-2xl">Dashboard</h1>
                    </div>

                    {{-- Search --}}
                    <label class="relative hidden sm:block">
                        <span class="pointer-events-none absolute inset-y-0 left-3.5 flex items-center text-slate-400">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                      d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </span>
                        <input type="text"
                               placeholder="Search…"
                               class="h-10 w-52 rounded-xl border border-slate-200 bg-slate-50 pl-10 pr-4 text-sm text-slate-700 outline-none transition focus:border-brand-300 focus:bg-white focus:ring-4 focus:ring-brand-50 lg:w-64">
                    </label>

                    {{-- Notification bell --}}
                    <button aria-label="Notifications"
                            class="relative inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-500 transition hover:border-brand-200 hover:text-brand-600">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                        <span class="absolute right-2.5 top-2.5 h-2 w-2 rounded-full bg-emerald-400 ring-2 ring-white"></span>
                    </button>

                    {{-- Create New --}}
                    <button id="add-btn"
                            class="inline-flex h-10 items-center gap-2 rounded-xl bg-gradient-to-r from-brand-600 to-brand-700 px-4 text-sm font-semibold text-white shadow-md shadow-brand-700/25 transition hover:from-brand-500 hover:to-brand-600 active:scale-95">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m7-7H5"/>
                        </svg>
                        Create New
                    </button>
                </div>
            </header>

            {{-- Scrollable content area --}}
            <div class="flex-1 overflow-y-auto">
                <div class="px-6 py-6 sm:px-8 lg:px-10 lg:py-8">
                    <div class="rounded-2xl border border-slate-200/60 bg-white p-6 shadow-sm shadow-slate-200/50 lg:p-8">
                        {{ $slot }}
                    </div>
                </div>
            </div>

        </div>{{-- /main --}}
    </div>{{-- /shell --}}
</body>
</html>
