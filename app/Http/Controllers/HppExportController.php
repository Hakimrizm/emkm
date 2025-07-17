<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

class HppExportController extends Controller
{
    public function exportPdf()
    {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'activity' => 'Melakukan ekspor HPP ke PDF'
        ]);

        return true;
    }

    public function exportExcel()
    {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'activity' => 'Melakukan ekspor HPP ke Excel'
        ]);

        return true;
    }
}
