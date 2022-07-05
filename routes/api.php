<?php

use App\Http\Controllers\API\AbsensiController;
use App\Http\Controllers\API\DataGajiController;
use App\Http\Controllers\API\DataPegawaiController;
use App\Http\Controllers\API\GajiController;
use App\Http\Controllers\API\JabatanController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\IzinController;
use App\Http\Controllers\API\GolonganController;
use App\Http\Controllers\API\SuperAdminController;
use App\Http\Controllers\API\JamAbsenController;
use App\Http\Controllers\API\ReqAbsenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login', [UserController::class, 'login']);
Route::post('loginpegawai', [UserController::class, 'loginpegawai']);
Route::post('register', [UserController::class, 'register']);
Route::post('logout', [UserController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware(['auth:sanctum'])->group(function () {
   
    Route::post('addAkunPegawai', [UserController::class, 'addAkunPegawai'])->middleware('role:Manager,Admin');
    Route::get('allUser', [UserController::class, 'allUser'])->middleware('role:Manager,Admin');
    Route::get('editUser/{id}', [UserController::class, 'editUser'])->middleware('role:Manager,Admin');
    Route::post('updateUser', [UserController::class, 'updateUser'])->middleware('role:Manager,Admin');
    Route::delete('hapusUser/{id}', [UserController::class, 'hapusUser'])->middleware('role:Manager,Admin');
    Route::get('getakun', [UserController::class, 'getakun'])->middleware('role:Admin,Pegawai');

    Route::get('tampilsuperadmin', [SuperAdminController::class, 'tampilsuperadmin'])->middleware('role:Manager');

    Route::get('infopt', [UserController::class, 'infopt'])->middleware('role:Admin,Pegawai');
    Route::get('getakunAdmin', [UserController::class, 'getakunAdmin'])->middleware('role:Admin,Pegawai');

    Route::get('jabatan',[JabatanController::class, 'jabatan'])->middleware('role:Manager,Admin,Pegawai');
    Route::get('alljabatan',[JabatanController::class, 'alljabatan'])->middleware('role:Manager,Admin,Pegawai');
    Route::get('jabatanpegawai',[JabatanController::class, 'jabatanpegawai'])->middleware('role:Manager,Admin,Pegawai');
    Route::post('tambahjabatan', [JabatanController::class, 'tambahjabatan'])->middleware('role:Manager,Admin');
    Route::get('editjabatan/{id}',[JabatanController::class, 'editjabatan'])->middleware('role:Manager,Admin');
    Route::post('updatejabatan',[JabatanController::class, 'updatejabatan'])->middleware('role:Manager,Admin');
    Route::delete('hapusjabatan/{id}', [JabatanController::class, 'hapusjabatan'])->middleware('role:Manager,Admin');

    Route::get('alltunjangan',[GajiController::class, 'alltunjangan'])->middleware('role:Manager,Admin,Pegawai');
    Route::get('allgaji',[DataGajiController::class, 'allgaji'])->middleware('role:Manager,Admin,Pegawai');
    Route::post('buatgaji',[DataGajiController::class, 'buatgaji'])->middleware('role:Manager,Admin,Pegawai');

    Route::post('tambahtunjangan', [GajiController::class, 'tambahtunjangan'])->middleware('role:Manager,Admin');
    Route::post('updatetunjangan',[GajiController::class, 'updatetunjangan'])->middleware('role:Manager,Admin');
    Route::delete('hapustunjangan/{id}', [GajiController::class, 'hapustunjangan'])->middleware('role:Manager,Admin');
    
    Route::get('allbonus',[GajiController::class, 'allbonus'])->middleware('role:Manager,Admin,Pegawai');
    Route::post('tambahbonus', [GajiController::class, 'tambahbonus'])->middleware('role:Manager,Admin');
    Route::post('updatebonus',[GajiController::class, 'updatebonus'])->middleware('role:Manager,Admin');
    Route::delete('hapusbonus/{id}', [GajiController::class, 'hapusbonus'])->middleware('role:Manager,Admin');

    Route::get('allpotongan',[GajiController::class, 'allpotongan'])->middleware('role:Manager,Admin,Pegawai');
    Route::post('tambahpotongan', [GajiController::class, 'tambahpotongan'])->middleware('role:Manager,Admin');
    Route::post('updatepotongan',[GajiController::class, 'updatepotongan'])->middleware('role:Manager,Admin');
    Route::delete('hapuspotongan/{id}', [GajiController::class, 'hapuspotongan'])->middleware('role:Manager,Admin');

    Route::get('golonganpegawai',[GolonganController::class, 'golonganpegawai'])->middleware('role:Manager,Admin,Pegawai'); 
    Route::get('allgolongan',[GolonganController::class, 'allgolongan'])->middleware('role:Manager,Admin,Pegawai');
    Route::post('tambahgolongan', [GolonganController::class, 'tambahgolongan'])->middleware('role:Manager,Admin');
    Route::post('updategolongan',[GolonganController::class, 'updategolongan'])->middleware('role:Manager,Admin');
    Route::delete('hapusgolongan/{id}', [GolonganController::class, 'hapusgolongan'])->middleware('role:Manager,Admin');

    Route::post('isibiodata', [DataPegawaiController::class, 'isibiodata'])->middleware('role:Pegawai');
    Route::get('getprofile', [DataPegawaiController::class, 'getprofile'])->middleware('role:Pegawai');
    Route::post('updatedata', [DataPegawaiController::class, 'updatedata'])->middleware('role:Pegawai');

    Route::get('datapegawai', [DataPegawaiController::class, 'datapegawai'])->middleware('role:Manager,Admin');
    Route::get('detailpegawai/{id}', [DataPegawaiController::class, 'detailpegawai'])->middleware('role:Manager,Admin');
    Route::get('editpegawai/{id}', [DataPegawaiController::class, 'editpegawai'])->middleware('role:Admin, Pegawai');
    Route::post('updatepegawai', [DataPegawaiController::class, 'updatepegawai'])->middleware('role:Admin,Pegawai');
    Route::delete('hapuspegawai/{id}' , [DataPegawaiController::class, 'hapuspegawai'])->middleware('role:Admin, Pegawai');
    Route::post('absenmasuk', [AbsensiController::class, 'absenmasuk'])->middleware('role:Pegawai');
    Route::post('absenpulang/{uid}', [AbsensiController::class, 'absenpulang'])->middleware('role:Pegawai');

    Route::get('tampilabsen', [AbsensiController::class, 'tampilabsen'])->middleware('role:Admin');
    Route::get('tampilpegawai', [AbsensiController::class, 'tampilpegawai'])->middleware('role:Pegawai');
    Route::get('detailabsen/{uid}', [AbsensiController::class, 'detailabsen'])->middleware('role:Manager,Admin');

    Route::post('aturjamabsen', [JamAbsenController::class, 'aturjamabsen'])->middleware('role:Admin');
    Route::post('updateabsen', [JamAbsenController::class, 'updateabsen'])->middleware('role:Admin');
    Route::get('tampil', [JamAbsenController::class, 'tampil'])->middleware('role:Admin,Pegawai');
    Route::get('tampiljampeg', [JamAbsenController::class, 'tampiljampeg'])->middleware('role:Admin,Pegawai');

    Route::get('absendashboard', [AbsensiController::class, 'absendashboard'])->middleware('role:Admin');
    Route::get('counthadir', [AbsensiController::class, 'counthadir'])->middleware('role:Admin');
    Route::get('counttidakhadir', [AbsensiController::class, 'counttidakhadir'])->middleware('role:Admin');

    Route::get('allizin', [IzinController::class, 'allizin'])->middleware('role:Admin');
    Route::get('allizinpegawai', [IzinController::class, 'allizinpegawai'])->middleware('role:Admin,Pegawai');
    Route::post('ajukanizin', [IzinController::class, 'ajukanizin'])->middleware('role:Admin,Pegawai');
    Route::post('approveizin', [IzinController::class, 'approveizin'])->middleware('role:Admin,Pegawai');
    Route::post('updateizin', [IzinController::class, 'updateizin'])->middleware('role:Admin,Pegawai');
    Route::delete('hapusizin/{id}', [IzinController::class, 'hapusizin'])->middleware('role:Admin,Pegawai');

    Route::get('allreq', [ReqAbsenController::class, 'allreq'])->middleware('role:Admin');
    Route::get('allreqpegawai', [ReqAbsenController::class, 'allreqpegawai'])->middleware('role:Admin,Pegawai');
    Route::post('ajukanreqabsen', [ReqAbsenController::class, 'ajukanreqabsen'])->middleware('role:Admin,Pegawai');
    Route::post('approvereqabsen', [ReqAbsenController::class, 'approvereqabsen'])->middleware('role:Admin,Pegawai');
    Route::post('updatereqabsen', [ReqAbsenController::class, 'updatereqabsen'])->middleware('role:Admin,Pegawai');
    Route::delete('hapusreqabsen/{uid}', [ReqAbsenController::class, 'hapusreqabsen'])->middleware('role:Admin,Pegawai');

});
