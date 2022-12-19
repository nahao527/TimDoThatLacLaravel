<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\BaiVietController;
use App\Http\Controllers\ThongBaoController;
use App\Http\Controllers\ToCaoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('tai-khoan/dang-ky',[TaiKhoanController::class,'ShowDangKy'])->name('show-dang-ky')->middleware('guest');
Route::post('tai-khoan/dang-ky',[TaiKhoanController::class,'DangKy'])->name('them-moi-tai-khoan')->middleware('guest');

Route::get('tai-khoan/dang-nhap',[TaiKhoanController::class, 'ShowDangNhap'])->name('show-dang-nhap')->middleware('guest');
Route::post('tai-khoan/dang-nhap',[TaiKhoanController::class, 'XuLyDangNhap'])->name('xu-ly-dang-nhap')->middleware('guest');

Route::get('tai-khoan/logout',[TaiKhoanController::class, 'DangXuat'])->name('logout')->middleware('auth');

Route::get('tai-khoan/profile', [TaiKhoanController::class, 'profile'])->name('profile')->middleware('auth');

Route::get('',[BaiVietController::class,'ShowBaiVietTrangChu'])->name('show-trang-chu');
Route::get('bai-viet/lua-dao',[BaiVietController::class,'ShowBaiVietLuaDao'])->name('show-lua-dao');

Route::get('bai-viet/thu-cung',[BaiVietController::class,'ShowBaiVietThuCung'])->name('show-thu-cung');

Route::get('bai-viet/nhat-do',[BaiVietController::class,'ShowBaiVietNhatDo'])->name('show-nhat-do');

Route::get('bai-viet/mat-do',[BaiVietController::class,'ShowBaiVietMatDo'])->name('show-mat-do');

Route::get('bai-viet/xe-may',[BaiVietController::class,'ShowBaiVietXe'])->name('show-xe-may');

Route::get('bai-viet/tips',[BaiVietController::class,'ShowTips'])->name('show-tips');
Route::get('bai-viet/about-us',[BaiVietController::class,'ShowAboutUs'])->name('show-about-us');
Route::get('bai-viet/sua/{id}',[BaiVietController::class,'ShowSuaBaiViet'])->name('show-sua-bai-viet');
Route::post('bai-viet/sua/{id}',[BaiVietController::class,'SuaBaiViet'])->name('xl-sua-bai-viet');


Route::get('bai-viet/chi-tiet-bai-viet/to-cao/{id}',[ToCaoController::class,'ShowToCao'])->name('show-to-cao')->middleware('auth');

Route::post('bai-viet/chi-tiet-bai-viet/binh-luan/{id}',[BaiVietController::class,'BinhLuan'])->name('xl-binh-luan')->middleware('auth');


Route::get('bai-viet/chi-tiet-bai-viet/to-cao/{id}',[ToCaoController::class,'ShowToCao'])->name('show-to-cao')->middleware('auth');
Route::post('bai-viet/chi-tiet-bai-viet/to-cao/{id}',[ToCaoController::class, 'XuLyBaoCao'])->name('xu-ly-bao-cao')->middleware('auth');
Route::get('bai-viet/chi-tiet-bai-viet/luu/{id}',[BaiVietController::class, 'LuuBaiViet'])->name('luu-bai-viet')->middleware('auth');
Route::get('bai-viet/chi-tiet-bai-viet/bo-luu/{id}',[BaiVietController::class, 'BoTheoDoi'])->name('bo-luu-bai-viet')->middleware('auth');


Route::get('quan-tri/danh-sach-tai-khoan',[TaiKhoanController::class,'DanhSachTaiKhoan'])->name('show-ds-tai-khoan')->middleware('auth');
Route::get('quan-tri/danh-sach-bai-viet-duyet',[BaiVietController::class,'DanhSachBaiVietChoDuyet'])->name('show-ds-bai-viet-duyet')->middleware('auth');
Route::get('quan-tri/danh-sach-bai-viet',[BaiVietController::class,'DanhSachBaiViet'])->name('show-ds-bai-viet')->middleware('auth');
Route::get('quan-tri/danh-sach-bai-viet-lua-dao',[BaiVietController::class,'DanhSachBaiVietLuaDao'])->name('show-ds-bai-viet-ld')->middleware('auth');
Route::get('quan-tri/danh-sach-tai-khoan-quan-tri',[TaiKhoanController::class,'DanhSachTaiKhoanQuanTri'])->name('show-ds-tai-khoan-qtv')->middleware('auth');


Route::get('quan-tri/thong-tin-cn/{id}',[TaiKhoanController::class,'ShowSuaThongTin'])->name('show-ttcn')->middleware('auth');

Route::get('quan-tri/danh-sach-tai-khoan/xoa/{id}',[TaiKhoanController::class,'XoaTaiKhoan'])->name('xoa-tai-khoan')->middleware('auth');
Route::get('quan-tri/danh-sach-tai-khoan-quan-tri/xoa/{id}',[TaiKhoanController::class,'XoaTaiKhoanAdm'])->name('xoa-tai-khoan-qtv')->middleware('auth');

Route::get('bai-viet/dang-tin',[BaiVietController::class,'ShowDangTin'])->name('show-dang-tin')->middleware('auth');
Route::post('bai-viet/dang-tin',[BaiVietController::class,'DangBai'])->name('xu-ly-dang-tin')->middleware('auth');

Route::get('bai-viet/chi-tiet-bai-viet/{id}',[BaiVietController::class,'ShowChiTietBaiViet'])->name('show-chi-tiet-bv');
Route::get('bai-viet/tim-kiem',[BaiVietController::class,'TimKiem'])->name('xl-tim-kiem');

Route::get('tai-khoan/thong-tin-cn/{id}',[TaiKhoanController::class,'ShowSuaThongTin'])->name('show-ttcn')->middleware('auth');

//quan-tri
Route::get('quan-tri/danh-sach-bai-viet/xoa/{id}',[BaiVietController::class,'XoaBai'])->name('xoa-bai-viet')->middleware('auth');
Route::get('quan-tri/danh-sach-bai-viet/chi-tiet/{id}',[BaiVietController::class,'ShowCtBaiViet'])->name('show-ct-bai-viet')->middleware('auth');
Route::get('quan-tri/danh-sach-bai-viet/duyet-bai/{id}',[BaiVietController::class,'DuyetBai'])->name('duyet-bai')->middleware('auth');

Route::get('quan-tri/danh-sach-bai-viet/canh-bao/{id}',[BaiVietController::class,'ShowCanhBao'])->name('show-canh-bao')->middleware('auth');
Route::post('quan-tri/danh-sach-bai-viet/canh-bao/{id}',[BaiVietController::class,'XuLyCanhBao'])->name('xu-ly-canh-bao')->middleware('auth');

Route::get('quan-tri/cap-nhat-tai-khoan/{id}',[TaiKhoanController::class,'ShowSuaThongTin'])->middleware('auth');
Route::post('quan-tri/cap-nhat-tai-khoan/{id}',[TaiKhoanController::class,'CapNhatThongTinADM'])->name('xu-li-cap-nhat-tai-khoan')->middleware('auth');

Route::get('quan-tri/danh-sach-tai-khoan/them-tai-khoan',[TaiKhoanController::class,'ShowThemTaiKhoan'])->name('show-them-tai-khoan-qt')->middleware('auth');
Route::post('quan-tri/danh-sach-tai-khoan/them-tai-khoan',[TaiKhoanController::class,'ThemTaiKhoanQuanTri'])->name('xl-them-tai-khoan-qt')->middleware('auth');


Route::get('tai-khoan/thong-tin-tai-khoan/{id}',[TaiKhoanController::class,'ThongTinUser'])->name('thong-tin-user')->middleware('auth');
Route::get('tai-khoan/thong-tin-tai-khoan/sua-thong-tin-ca-nhan/{id}',[TaiKhoanController::class,'ShowSuaThongTinUser'])->name('sua-thong-tin-user')->middleware('auth');
Route::post('tai-khoan/thong-tin-tai-khoan/sua-thong-tin-ca-nhan/sua/{id}',[TaiKhoanController::class,'CapNhatThongTinUser'])->name('xl-cap-nhat-thong-tin-user')->middleware('auth');
Route::get('tai-khoan/thong-tin-tai-khoan/bai-viet-ca-nhan/{id}',[BaiVietController::class,'XoaBaiCn'])->name('xoa-bai-viet-cn')->middleware('auth');
Route::get('tai-khoan/thong-tin-tai-khoan/bai-viet-ca-nhan/da-nhan/{id}',[BaiVietController::class,'DaNhan'])->name('danh-dau-da-nhan')->middleware('auth');



Route::get('quan-tri/danh-sach-to-cao',[ToCaoController::class,'DanhSachBaiVietToCao'])->name('show-ds-bai-viet-tc')->middleware('auth');
Route::get('quan-tri/danh-sach-tb',[BaiVietController::class,'DSTB']);

Route::get('quan-tri/danh-sach-to-cao/chi-tiet/{id}',[ToCaoController::class,'ShowCTTC'])->name('show-ct-tc')->middleware('auth');
Route::get('quan-tri/danh-sach-to-cao/chi-tiet/xoa-bv/{id}',[ToCaoController::class,'XoaBaiVietTC'])->name('xoa-bai-viet-tc')->middleware('auth');
Route::get('quan-tri/danh-sach-to-cao/chi-tiet/xoa-bc/{id}',[ToCaoController::class,'XoaBaiTC'])->name('xoa-bai-tc')->middleware('auth');

Route::get('tai-khoan/thong-bao/{id}',[TaiKhoanController::class,'ctThongBao'])->name('ct-thong-bao')->middleware('auth');

Route::get('tai-khoan/doi-mat-khau/{id}',[TaiKhoanController::class,'showDoiMatKhau'])->name('show-doi-mat-khau')->middleware('auth');
Route::post('tai-khoan/doi-mat-khau/{id}',[TaiKhoanController::class,'CapNhatMatKhau'])->name('xl-doi-mat-khau')->middleware('auth');













