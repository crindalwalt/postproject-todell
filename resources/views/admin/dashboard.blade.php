<x-layouts.admin>
    <div class="container mx-auto px-4 py-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
            <p class="text-gray-600">Welcome to the admin dashboard</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Total Posts</p>
                        <p class="text-3xl font-bold text-gray-800">1,245</p>
                    </div>
                    <div class="bg-blue-100 rounded-full p-3">
                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Total Users</p>
                        <p class="text-3xl font-bold text-gray-800">834</p>
                    </div>
                    <div class="bg-green-100 rounded-full p-3">
                        <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM9 12a6 6 0 11-12 0 6 6 0 0112 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Active Posts</p>
                        <p class="text-3xl font-bold text-gray-800">892</p>
                    </div>
                    <div class="bg-purple-100 rounded-full p-3">
                        <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zm6-1a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H9a1 1 0 01-1-1v-5zm6-1a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Active Users</p>
                        <p class="text-3xl font-bold text-gray-800">612</p>
                    </div>
                    <div class="bg-yellow-100 rounded-full p-3">
                        <svg class="w-6 h-6 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Posts -->
        <div class="bg-white rounded-lg shadow mb-8">
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-xl font-bold text-gray-800">Recent Posts</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Title</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Author</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-800">Getting Started with Laravel</td>
                            <td class="px-6 py-4 text-sm text-gray-600">John Doe</td>
                            <td class="px-6 py-4 text-sm">
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Published</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">2024-01-15</td>
                            <td class="px-6 py-4 text-sm">
                                <a href="#" class="text-blue-600 hover:text-blue-800 mr-3">Edit</a>
                                <a href="#" class="text-red-600 hover:text-red-800">Delete</a>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-800">Advanced Blade Templating</td>
                            <td class="px-6 py-4 text-sm text-gray-600">Jane Smith</td>
                            <td class="px-6 py-4 text-sm">
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-medium">Draft</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">2024-01-14</td>
                            <td class="px-6 py-4 text-sm">
                                <a href="#" class="text-blue-600 hover:text-blue-800 mr-3">Edit</a>
                                <a href="#" class="text-red-600 hover:text-red-800">Delete</a>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-800">Database Design Patterns</td>
                            <td class="px-6 py-4 text-sm text-gray-600">Mike Johnson</td>
                            <td class="px-6 py-4 text-sm">
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Published</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">2024-01-13</td>
                            <td class="px-6 py-4 text-sm">
                                <a href="#" class="text-blue-600 hover:text-blue-800 mr-3">Edit</a>
                                <a href="#" class="text-red-600 hover:text-red-800">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Recent Users -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-xl font-bold text-gray-800">Recent Users</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Joined</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-800">John Doe</td>
                            <td class="px-6 py-4 text-sm text-gray-600">john@example.com</td>
                            <td class="px-6 py-4 text-sm">
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Active</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">2024-01-10</td>
                            <td class="px-6 py-4 text-sm">
                                <a href="#" class="text-blue-600 hover:text-blue-800 mr-3">Edit</a>
                                <a href="#" class="text-red-600 hover:text-red-800">Delete</a>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-800">Jane Smith</td>
                            <td class="px-6 py-4 text-sm text-gray-600">jane@example.com</td>
                            <td class="px-6 py-4 text-sm">
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Active</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">2024-01-09</td>
                            <td class="px-6 py-4 text-sm">
                                <a href="#" class="text-blue-600 hover:text-blue-800 mr-3">Edit</a>
                                <a href="#" class="text-red-600 hover:text-red-800">Delete</a>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-800">Mike Johnson</td>
                            <td class="px-6 py-4 text-sm text-gray-600">mike@example.com</td>
                            <td class="px-6 py-4 text-sm">
                                <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-xs font-medium">Inactive</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">2024-01-08</td>
                            <td class="px-6 py-4 text-sm">
                                <a href="#" class="text-blue-600 hover:text-blue-800 mr-3">Edit</a>
                                <a href="#" class="text-red-600 hover:text-red-800">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.admin>
