<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function dummyList()
    {
        // Add dummy data representing [[studentid, stream, rollno], ...]
        $dummyData = [
            [101, 'Science', 1],
            [102, 'Commerce', 2],
            [103, 'Arts', 3],
            [104, 'Science', 4],
        ];

        // We can simulate processing this data by calling processList manually
        $request = new Request(['list' => $dummyData]);
        return $this->processList($request);
    }

    public function processList(Request $request)
    {
        // Expecting a parameter 'list' in the format: [[studentid, stream, rollno], [...], ...]
        $list = $request->input('list', []);

        $processedStudents = [];

        foreach ($list as $item) {
            if (is_array($item) && count($item) >= 3) {
                $processedStudents[] = [
                    'student_id' => $item[0],
                    'stream'     => $item[1],
                    'roll_no'    => $item[2],
                ];
            }
        }

        return response()->json([
            'message' => 'Student list processed successfully',
            'data'    => $processedStudents
        ]);
    }

    // Demonstrate asset() and url() helpers
    public function showUrls()
    {
        return response()->json([
            'description' => 'Demonstrating Laravel URL and Asset helpers',
            'asset_path'  => asset('css/style.css'),        // typically http://localhost/css/style.css
            'secure_asset'=> secure_asset('css/style.css'), // typically https://localhost/css/style.css
            'basic_url'   => url('/students/dummy'),        // typically http://localhost/students/dummy
            'url_params'  => url('/students/dummy', ['sort' => 'desc']), // typically http://localhost/students/dummy/desc
        ]);
    }

    // API Endpoint 1: Different API, different result
    public function apiEndpointOne()
    {
        return response()->json([
            'api_version' => 'v1',
            'status'      => 'success',
            'data'        => [
                'type' => 'student_details',
                'info' => 'This is the detailed result from API 1'
            ]
        ]);
    }

    // API Endpoint 2: Different API, different result
    public function apiEndpointTwo()
    {
        return response()->json([
            'api_version' => 'v2',
            'status'      => 'ok',
            'result'      => 'This is a completely different minimal result from API 2',
            'timestamp'   => now()->toDateTimeString()
        ]);
    }
}

// Route::post('/students/process-list', [StudentController::class, 'processList']);
