<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function middleware(): array
    {
        return [
            'user' => \App\Http\Middleware\UserMiddleware::class,
        ];
    }
    public function index(Request $request)
    {
        // Filters
        $filters = collect($request->only(['search', 'type']))
            ->filter()
            ->all();

        $query = Vehicle::with('vehicle_category', 'vehicle_brand')
            ->orderBy('id', 'desc');

        // Search Filter
        if (!empty($filters['search'])) {
            $query->where('name', 'like', '%' . $filters['search'] . '%');
        }

        // Type Filter
        if (!empty($filters['type'])) {
            $query->whereHas('vehicle_category', function ($q) use ($filters) {
                $q->whereRaw('LOWER(name) = ?', [strtolower($filters['type'])]);
            });
        }

        $vehicles = $query->paginate(6)->withQueryString();

        return view('user.dashboard-user', compact('vehicles'));
    }
}
