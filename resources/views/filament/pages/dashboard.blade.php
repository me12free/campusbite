<x-filament-panels::page>
    <div class="relative z-0">
        <div class="absolute inset-0 z-0 pointer-events-none select-none">
            <div class="w-full h-full bg-gradient-to-br from-pink-100 via-yellow-50 to-blue-100 opacity-90"></div>
            <div class="absolute left-0 top-0 w-64 h-64 bg-pink-200 rounded-full blur-3xl opacity-30 animate-pulse"></div>
            <div class="absolute right-0 bottom-0 w-80 h-80 bg-yellow-200 rounded-full blur-3xl opacity-30 animate-pulse"></div>
            <div class="absolute left-1/2 top-1/2 w-96 h-96 bg-blue-200 rounded-full blur-3xl opacity-20 animate-pulse"></div>
        </div>
        <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
            <!-- USERS -->
            <div class="relative bg-white bg-opacity-90 rounded-3xl shadow-2xl p-8 overflow-hidden border-2 border-pink-200 hover:scale-105 transition-transform">
                <div class="absolute right-4 top-4 opacity-10 text-8xl"><i class="fas fa-users text-pink-400"></i></div>
                <div class="flex items-center mb-2">
                    <span class="inline-flex items-center justify-center w-12 h-12 bg-pink-100 bg-opacity-60 rounded-full mr-3 shadow"><i class="fas fa-user-graduate text-pink-500 text-2xl"></i></span>
                    <span class="text-pink-700 text-lg font-bold tracking-wide">Total Users</span>
                </div>
                <div class="text-5xl font-extrabold text-pink-600 mb-1 drop-shadow">{{ \App\Models\User::count() }}</div>
                <div class="text-pink-400 text-xs font-semibold">All registered users</div>
            </div>
            <!-- MENU ITEMS -->
            <div class="relative bg-white bg-opacity-90 rounded-3xl shadow-2xl p-8 overflow-hidden border-2 border-yellow-200 hover:scale-105 transition-transform">
                <div class="absolute right-4 top-4 opacity-10 text-8xl"><i class="fas fa-utensils text-yellow-400"></i></div>
                <div class="flex items-center mb-2">
                    <span class="inline-flex items-center justify-center w-12 h-12 bg-yellow-100 bg-opacity-60 rounded-full mr-3 shadow"><i class="fas fa-hamburger text-yellow-500 text-2xl"></i></span>
                    <span class="text-yellow-700 text-lg font-bold tracking-wide">Menu Items</span>
                </div>
                <div class="text-5xl font-extrabold text-yellow-600 mb-1 drop-shadow">{{ \App\Models\Menu::count() }}</div>
                <div class="text-yellow-400 text-xs font-semibold">Active menu products</div>
            </div>
            <!-- ORDERS -->
            <div class="relative bg-white bg-opacity-90 rounded-3xl shadow-2xl p-8 overflow-hidden border-2 border-green-200 hover:scale-105 transition-transform">
                <div class="absolute right-4 top-4 opacity-10 text-8xl"><i class="fas fa-shopping-cart text-green-400"></i></div>
                <div class="flex items-center mb-2">
                    <span class="inline-flex items-center justify-center w-12 h-12 bg-green-100 bg-opacity-60 rounded-full mr-3 shadow"><i class="fas fa-receipt text-green-500 text-2xl"></i></span>
                    <span class="text-green-700 text-lg font-bold tracking-wide">Orders</span>
                </div>
                <div class="text-5xl font-extrabold text-green-600 mb-1 drop-shadow">{{ \App\Models\Order::count() }}</div>
                <div class="text-green-400 text-xs font-semibold">Total orders placed</div>
            </div>
            <!-- BLOG POSTS -->
            <div class="relative bg-white bg-opacity-90 rounded-3xl shadow-2xl p-8 overflow-hidden border-2 border-blue-200 hover:scale-105 transition-transform">
                <div class="absolute right-4 top-4 opacity-10 text-8xl"><i class="fas fa-blog text-blue-400"></i></div>
                <div class="flex items-center mb-2">
                    <span class="inline-flex items-center justify-center w-12 h-12 bg-blue-100 bg-opacity-60 rounded-full mr-3 shadow"><i class="fas fa-pen-nib text-blue-500 text-2xl"></i></span>
                    <span class="text-blue-700 text-lg font-bold tracking-wide">Blog Posts</span>
                </div>
                <div class="text-5xl font-extrabold text-blue-600 mb-1 drop-shadow">{{ \App\Models\Blog::count() }}</div>
                <div class="text-blue-400 text-xs font-semibold">Published articles</div>
            </div>
        </div>
    </div>
    <div class="relative rounded-3xl shadow-xl p-8 mt-8 bg-gradient-to-br from-pink-50 via-yellow-50 to-blue-100 border border-pink-100 overflow-hidden">
        <div class="absolute right-0 top-0 opacity-10 text-[12rem] pointer-events-none select-none">
            <i class="fas fa-mug-hot text-pink-200"></i>
        </div>
        <div class="flex items-center mb-6">
            <img src="/favicon.ico" alt="CampusBite" class="w-12 h-12 rounded-full shadow-lg mr-4 border-2 border-pink-400">
            <h2 class="text-3xl font-extrabold text-pink-600 tracking-tight drop-shadow">CampusBite Admin Dashboard</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="mb-6">
                <h3 class="text-lg font-bold text-pink-500 mb-4 flex items-center"><i class="fas fa-chart-line mr-2"></i> Key Metrics (Last 2 Months)</h3>
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="bg-white bg-opacity-80 rounded-xl p-4 flex flex-col items-center shadow border-t-4 border-pink-400">
                        <div class="text-2xl font-bold text-pink-500 mb-1">{{ \App\Models\User::where('created_at', '>=', now()->subDays(30))->count() }}</div>
                        <div class="text-xs text-gray-600">New Registrations</div>
                    </div>
                    <div class="bg-white bg-opacity-80 rounded-xl p-4 flex flex-col items-center shadow border-t-4 border-green-400">
                        <div class="text-2xl font-bold text-green-500 mb-1">{{ \App\Models\Order::where('created_at', '>=', now()->subDays(60))->count() }}</div>
                        <div class="text-xs text-gray-600">Orders (2mo)</div>
                    </div>
                    <div class="bg-white bg-opacity-80 rounded-xl p-4 flex flex-col items-center shadow border-t-4 border-blue-400">
                        <div class="text-2xl font-bold text-blue-500 mb-1">{{ \App\Models\User::whereNotNull('email_verified_at')->count() }}</div>
                        <div class="text-xs text-gray-600">Email Subscribers</div>
                    </div>
                    <div class="bg-white bg-opacity-80 rounded-xl p-4 flex flex-col items-center shadow border-t-4 border-yellow-400">
                        @php
                            $repeat = \App\Models\Order::select('user_id')
                                ->groupBy('user_id')
                                ->havingRaw('COUNT(*) >= 2')
                                ->pluck('user_id')->count();
                            $total = \App\Models\User::count();
                        @endphp
                        <div class="text-2xl font-bold text-yellow-500 mb-1">{{ $total > 0 ? round(($repeat / $total) * 100, 1) : 0 }}%</div>
                        <div class="text-xs text-gray-600">Repeat Purchase Rate</div>
                    </div>
                </div>
                <div class="mt-4">
                    <h4 class="font-semibold text-blue-600 mb-2 flex items-center"><i class="fas fa-user-plus mr-2"></i> Recent Registrations</h4>
                    <table class="min-w-full text-xs text-left rounded-xl overflow-hidden shadow">
                        <thead class="bg-pink-100">
                            <tr class="border-b">
                                <th class="py-1 pr-2">Name</th>
                                <th class="py-1 pr-2">Email</th>
                                <th class="py-1 pr-2">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(\App\Models\User::orderBy('created_at', 'desc')->take(5)->get() as $user)
                                <tr class="hover:bg-pink-50">
                                    <td class="py-1 pr-2">{{ $user->name }}</td>
                                    <td class="py-1 pr-2">{{ $user->email }}</td>
                                    <td class="py-1 pr-2">{{ $user->created_at->format('M d, Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mb-6">
                <h3 class="text-lg font-bold text-green-600 mb-4 flex items-center"><i class="fas fa-receipt mr-2"></i> Order Summary</h3>
                <table class="min-w-full text-xs text-left rounded-xl overflow-hidden shadow mb-4">
                    <thead class="bg-green-100">
                        <tr class="border-b">
                            <th class="py-1 pr-2">Order #</th>
                            <th class="py-1 pr-2">User</th>
                            <th class="py-1 pr-2">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(\App\Models\Order::orderBy('created_at', 'desc')->take(5)->get() as $order)
                            <tr class="hover:bg-green-50">
                                <td class="py-1 pr-2">{{ $order->id }}</td>
                                <td class="py-1 pr-2">{{ optional($order->user)->name ?? 'N/A' }}</td>
                                <td class="py-1 pr-2">{{ $order->created_at->format('M d, Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <h4 class="font-semibold text-yellow-600 mb-2 flex items-center"><i class="fas fa-chart-bar mr-2"></i> Order Volume (Last 8 Weeks)</h4>
                <div class="w-full h-36 bg-gradient-to-r from-yellow-100 to-yellow-200 rounded-xl flex items-end px-2 shadow-inner">
                    @php
                        $weeks = collect(range(0, 7))->map(function($i) {
                            $start = now()->startOfWeek()->subWeeks($i);
                            $end = $start->copy()->endOfWeek();
                            return [
                                'label' => $start->format('M d'),
                                'count' => \App\Models\Order::whereBetween('created_at', [$start, $end])->count()
                            ];
                        })->reverse();
                        $max = $weeks->max('count') ?: 1;
                    @endphp
                    @foreach($weeks as $week)
                        <div class="flex-1 mx-1 flex flex-col items-center">
                            <div class="w-6 rounded-t-lg bg-gradient-to-t from-yellow-400 to-yellow-300 shadow-md border border-yellow-300" style="height: {{ 100 * ($week['count']/$max) }}px"></div>
                            <span class="text-[10px] mt-1 text-yellow-700">{{ $week['label'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
            <div class="bg-white bg-opacity-80 rounded-xl p-6 shadow flex flex-col justify-between">
                <h3 class="text-lg font-bold text-blue-600 mb-2 flex items-center"><i class="fas fa-envelope-open-text mr-2"></i> Email Engagement</h3>
                <p class="text-gray-600 text-sm mb-2">Email open/click rates are not tracked in-app. Integrate with your email provider for analytics.</p>
                <div class="flex items-center mt-2">
                    <span class="inline-block w-3 h-3 bg-blue-400 rounded-full mr-2"></span>
                    <span class="text-xs text-blue-700">Connect to Mailchimp, Brevo, or ConvertKit for advanced analytics</span>
                </div>
            </div>
            <div class="bg-white bg-opacity-80 rounded-xl p-6 shadow flex flex-col justify-between">
                <h3 class="text-lg font-bold text-pink-500 mb-2 flex items-center"><i class="fas fa-file-export mr-2"></i> Export & Reports</h3>
                <div class="flex flex-wrap gap-2 mt-2">
                    <a href="#" class="inline-block bg-pink-500 text-white px-4 py-2 rounded shadow hover:bg-pink-600 text-sm"><i class="fas fa-users mr-1"></i> Export Users CSV</a>
                    <a href="#" class="inline-block bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600 text-sm"><i class="fas fa-receipt mr-1"></i> Export Orders CSV</a>
                </div>
            </div>
        </div>
    </div>
</x-filament-panels::page>
