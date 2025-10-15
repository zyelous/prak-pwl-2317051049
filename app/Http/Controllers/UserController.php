<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;
class UserController extends Controller
{

    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser()
        ];

        return view('list_user', $data);
    }
    public function create(){
        $kelasModel = new Kelas();
        $Kelas = $kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => Kelas::all()
        ];

        return view('create_user', $data);
    }

    public function store(Request $request){
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id'),
        ]);
          

        return redirect()->to('/user');
    }

    public function edit($id)
{
    $user = UserModel::findOrFail($id); // ambil user berdasarkan ID
    $kelas = Kelas::all();              // ambil semua kelas untuk dropdown

    return view('edit_user', [
        'title' => 'Edit Pengguna',
        'user' => $user,
        'kelas' => $kelas
    ]);
}

public function update(Request $request, $id)
{
    // validasi input
    $request->validate([
        'nama' => 'required',
        'nim' => 'required|unique:user,nim,' . $id,
        'kelas_id' => 'required',
    ]);

    // update data user
    $user = UserModel::findOrFail($id);
    $user->update([
        'nama' => $request->input('nama'),
        'nim' => $request->input('nim'),
        'kelas_id' => $request->input('kelas_id'),
    ]);

    return redirect()->to('/user')->with('success', 'Pengguna berhasil diperbarui.');
}

    public function destroy($id)
    {   
    $user = UserModel::findOrFail($id);
    $user->delete();

    return redirect()->to('/user')->with('success', 'Pengguna berhasil dihapus.');
    }    
}
