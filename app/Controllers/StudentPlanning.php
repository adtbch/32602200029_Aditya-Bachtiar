<?php 
namespace App\Controllers;
use CodeIgniter\Controller;

class StudentPlanning extends BaseController {
    public function index()
    {
        $data['projects'] = [
            [
                'status' => 'Not Started',
                'project' => 'Project A',
                'deadline' => '2024-07-01',
            ],
            [
                'status' => 'In Progress',
                'project' => 'Project B',
                'deadline' => '2024-07-15',
            ],
            [
                'status' => 'Done',
                'project' => 'Project C',
                'deadline' => '2024-08-01',
            ],
        ];

        return view('Pages/homepage',$data);
    }
    public function profile()
    {
        return view('Pages/profile');
    }
    public function login()
    {
        return view('Pages/login');
    }
    public function register()
    {
        return view('Pages/register');
    }
}
?>