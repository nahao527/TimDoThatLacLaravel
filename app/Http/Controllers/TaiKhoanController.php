<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use App\Models\BaiViet;
use App\Models\ThongBao;
use App\Models\TheoDoiBaiViet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class TaiKhoanController extends Controller
{
    public function DanhSachTaiKhoan()
    {
        $dsTaiKhoan=TaiKhoan::where('adm',0)->paginate(8);  
        return view('quan-tri.ds-tai-khoan',compact('dsTaiKhoan'))->with('i',(request()->input('page', 1)-1)*8);
    }
    public function DanhSachTaiKhoanQuanTri()
    {
        $dsTaiKhoan=TaiKhoan::where('adm',1)->paginate(8);  
        return view('quan-tri.ds-tai-khoan-qtv',compact('dsTaiKhoan'))->with('i',(request()->input('page', 1)-1)*8);
    }
    public function ShowDangKy()
    {
        return view('tai-khoan.register');
    }
    public function DangKy(Request $request)
    {
        $request->validate([
            'hoten' => ['required','min:3','max:20'],
            'sodienthoai' => 'required|min:10',
            'email' =>'email|:@gmail.com',
            'username' => 'required|min:6',
            'password' => 'required|min:6',
            're_password' => 'same:password'
        ],[
            'hoten.required' => 'Họ tên phải trên 3 ký tự',
            'sodienthoai.required' => 'Số điện thoại phải 10 ký tự',
            'email' => 'Email phải có @gmail.com',
            'username.required' => 'Tên đăng nhập phải có ít nhất 6 ký tự',
            'username.min' => 'Tên đăng nhập phải có ít nhất 6 ký tự',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'password.required' => 'Mật khẩu phải có ít nhất 6 ký tự',
            're_password.same' => 'Mật khẩu không trùng khớp',
        ]
         );
         
         $username = TaiKhoan::where('ten_dang_nhap',$request->username)->first();
         $email = TaiKhoan::where('email',$request->email)->first();
         if(!$username && !$email)
         {
            $taiKhoan = new TaiKhoan;
            $taiKhoan->ho_ten = $request->hoten;
            $taiKhoan->so_dien_thoai = $request->sodienthoai;
            $taiKhoan->email = $request->email;
            $taiKhoan->ten_dang_nhap = $request->username;
            $taiKhoan->mat_khau = Hash::make($request->password);
            $taiKhoan->avatar = "noavt.jpg";
            $taiKhoan->save();
            Alert::success('Tạo tài khoản thành công','Hãy đăng nhập để cùng tìm đồ của mình nhé!');   
            return redirect()->route('show-dang-nhap');
         }
         else
         {
            Alert::error('Tạo tài khoản thất bại', 'Có vẻ như tên đăng nhập hoặc email đã tồn tại!');  
        return redirect()->back();
         }
         
        
    }
    public function ShowDangNhap()
    {
        return view('tai-khoan.login');
    }
    
   public function DangXuat()
   {
    Auth::logout();
        return redirect()->route('show-dang-nhap');
   }
   public function XuLyDangNhap(Request $request)
    { 
        $request->validate([
            'ten_dang_nhap' => 'required|min:6',
            'password' => 'required|min:6',
        ],[
            'ten_dang_nhap.required' => 'Vui lòng nhập tên đăng nhập',
            'ten_dang_nhap.min' => 'Vui lòng nhập tên đăng nhập',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu không được để trống',
        ]
         );
         $remenber = $request->has('remember_me') ? true : false;
        $credentials = $request->only('ten_dang_nhap', 'password');
        if(Auth::attempt($credentials)){
            if(Auth::User()->adm == 1)
            {
                Alert::success('Đăng nhập thành công','Xin chào '.Auth::user()->ho_ten);   
                return redirect()->route('show-ds-tai-khoan');

            }else
            {
                alert()->image('Xin chào! '.Auth::user()->ho_ten,'Chúc bạn một ngày vui vẻ',asset('images\111.jpg'),'250px','250px');
                //Alert::success('Đăng nhập thành công','Xin chào '.Auth::user()->ho_ten);     
                return redirect()->route('show-trang-chu');
            }
        }
        else
        {
            Alert::error('Tài khoản hoặc mật khẩu không đúng');  
            return redirect()->back(); 
            
        }
    }
    public function XoaTaiKhoan($id)
    {
        $taiKhoanXoa = TaiKhoan::find($id);
        if(empty($taiKhoanXoa)){
            return "Không có user {$id}";
        }
        $taiKhoanXoa->delete();
        Alert::success('Bạn đã xóa tài khoản '. $taiKhoanXoa->ho_ten);
        return redirect()->route('show-ds-tai-khoan');
    }
    public function XoaTaiKhoanAdm($id)
    {
        $taiKhoanXoa = TaiKhoan::find($id);
        if(empty($taiKhoanXoa)){
            return "Không có user {$id}";
        }
        $taiKhoanXoa->delete();
        Alert::success('Bạn đã xóa tài khoản '. $taiKhoanXoa->ho_ten);
        return redirect()->route('show-ds-tai-khoan-qtv');
    }

    public function ThongTinUser($id)
    {
        $tttaiKhoan = TaiKhoan::find($id);
        $listBaiViet = BaiViet::where('nguoi_dung_id', '=', $tttaiKhoan->id) ->where('trang_thai','1')->get();
        $listBaiVietcd = BaiViet::where('nguoi_dung_id', '=', $tttaiKhoan->id) ->where('trang_thai','0')->get();
        $baiVietluu = TheoDoiBaiViet::where('nguoi_dung_id', Auth::user()->id)->get();
        return view('tai-khoan.chi-tiet-tai-khoan', ['tttaikhoan' => $tttaiKhoan, 'listBaiViet'=>$listBaiViet, 'listBaiVietcd'=>$listBaiVietcd, 'baiVietluu' => $baiVietluu]);                                                                                                                                        
    } 
    public function ShowSuaThongTin($id)
    {
        $thongtinTaiKhoan = TaiKhoan::find($id);
        return view('quan-tri.thong-tin-cn', compact('thongtinTaiKhoan'));
    }
    public function CapNhatThongTinADM(Request $request, $id)
    {
        $request->validate([
            'hoten' => 'required|min:6',
            'email' => 'email|ends_with:@gmail.com',
            'sodienthoai' => 'required'
        ],[
            'hoten.required' => 'Họ tên không được để trống!',
            'hoten.min' => 'Họ tên phải trên 6 ký tự!',
            'email.email' => 'Email không được để trống',
            'email.ends_with' => 'Email sai định dạng',
            'sodienthoai.required' => 'Số điện thoại không được để trống',
        ]
         );
        $thongtinTaiKhoan = TaiKhoan::find($id);
         $email = TaiKhoan::where('email',$request->email)->first();
         if(!$email)
         {
        $thongtinTaiKhoan = TaiKhoan::find($id);
        $thongtinTaiKhoan->ho_ten=$request->hoten;
        $thongtinTaiKhoan->email=$request->email;
        $thongtinTaiKhoan->so_dien_thoai=$request->sodienthoai;
        $thongtinTaiKhoan->save();
        Alert::success('Cập nhật thông tin thành công!');
        return redirect()->route('show-ttcn',['id'=>Auth::user()->id]);
    }
    else
    {
        Alert::error('Email đã tồn tại!','Vui lòng chọn email khác!');
            return redirect()->route('show-ttcn',['id'=>Auth::user()->id]);
    }

    }
    public function ShowSuaThongTinUser($id)
    {
        $thongtinTaiKhoanuser = TaiKhoan::find($id);
        return view('tai-khoan.edit-thong-tin', compact('thongtinTaiKhoanuser'));
    }
    public function CapNhatThongTinUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'sodienthoai' => 'required|min:10|max:10',
        ],[
            'name.required' => 'Họ tên không được bỏ trống',
            'name.min' => 'Họ tên phải trên 3 ký tự',
            'sodienthoai.required' => 'Số điện thoại không được để trống',
            'sodienthoai.min' => 'Số điện thoại phải bằng 10 ký tự',
            'sodienthoai.max' => 'Số điện thoại phải bằng 10 ký tự',
        ]
         );
        $check= $request->hasFile('avatar') ? true: false;
            if ($check == true)
            {
                $file1 = $request->file('avatar');
                $destination_Path = public_path('images');
                $file_Name1=$file1->getClientOriginalName();
                $file1->move($destination_Path,$file_Name1);
            }
            else
            {
                $file_Name1 = Auth::user()->avatar;
            }
        $thongtinTaiKhoan = TaiKhoan::find($id);
        $thongtinTaiKhoan->ho_ten=$request->name;
        $thongtinTaiKhoan->so_dien_thoai=$request->sodienthoai;
        $thongtinTaiKhoan->avatar=$file_Name1;
        $thongtinTaiKhoan->save();
        Alert::success('Cập nhật thông tin thành công!');
        return redirect()->route('sua-thong-tin-user',['id'=>Auth::user()->id]);
    }
    public function ctThongBao($id)
    {
        $ctThongBao = ThongBao::find($id);
        $ctThongBao->delete();
        return view('tai-khoan.thong-bao-chi-tiet',  ['ctThongBao' => $ctThongBao]);
    }
    public function showDoiMatKhau($id)
    {
        $doiMatKhau = TaiKhoan::find($id);
        return view('tai-khoan.doi-mat-khau', ['doiMatKhau' => $doiMatKhau]);
    }
    public function CapNhatMatKhau(Request $request, $id)
    {
        if ($request->isMethod('post'))
        {
            $request->validate([
                'password_old' => 'required|min:6',
                'password_new' => 'required|min:6',
                'password_re' => 'min:6|same:password_new'
            ],[
                'password_old.required' => 'Mật khẩu phải có ít nhất 6 ký tự',
                'password_old.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
                'password_new.required' => 'Mật khẩu phải có ít nhất 6 ký tự',
                'password_new.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
                'password_re.same' => 'Mật khẩu không trùng khớp',
                'password_re.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            ]
             );
            $doiMatKhau = TaiKhoan::find($id);
            if (Hash::check($request->password_old,$doiMatKhau->mat_khau))
            {
            $doiMatKhau->mat_khau=Hash::make($request->password_new);
            $doiMatKhau->save();
            Alert::success('Đổi mật khẩu thành công!');   
            return  redirect()->route('show-doi-mat-khau',[Auth::user()->id]);
            }
            else
            {
            Alert::error('Đổi mật khẩu thất bại','Mật khẩu cũ không đúng!');   
            return redirect()->route('show-doi-mat-khau',[Auth::user()->id]);
            }
        
        }

    }
    public function ShowThemTaiKhoan()
    {
        return view('quan-tri.them-tai-khoan-quan-tri');
    }
    public function ThemTaiKhoanQuanTri(Request $request)
    {
        $request->validate([
            'hoten' => ['required','min:3','max:20'],
            'sodienthoai' => 'required|min:10',
            'email' =>'email|:@gmail.com',
            'username' => 'required|min:6',
            'password' => 'required|min:6',
            're_password' => 'same:password'
        ],[
            'hoten.required' => 'Họ tên phải trên 3 ký tự',
            'sodienthoai.required' => 'Số điện thoại phải 10 ký tự',
            'email' => 'Email phải có @gmail.com',
            'username.required' => 'Tên đăng nhập phải có ít nhất 6 ký tự',
            'username.min' => 'Tên đăng nhập phải có ít nhất 6 ký tự',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'password.required' => 'Mật khẩu phải có ít nhất 6 ký tự',
            're_password.same' => 'Mật khẩu không trùng khớp',
        ]
         );
         
         $username = TaiKhoan::where('ten_dang_nhap',$request->username)->first();
         $email = TaiKhoan::where('email',$request->email)->first();
         if(!$username && !$email)
         {
            $taiKhoan = new TaiKhoan;
            $taiKhoan->ho_ten = $request->hoten;
            $taiKhoan->so_dien_thoai = $request->sodienthoai;
            $taiKhoan->email = $request->email;
            $taiKhoan->ten_dang_nhap = $request->username;
            $taiKhoan->mat_khau = Hash::make($request->password);
            $taiKhoan->avatar = "noavt.jpg";
            $taiKhoan->adm = '1';
            $taiKhoan->save();
            Alert::success('Tạo tài khoản thành công Quản trị viên thành công!');   
            return redirect()->route('show-ds-tai-khoan-qtv');
         }
         else
         {
            Alert::error('Tạo tài khoản thất bại', 'Có vẻ như tên đăng nhập hoặc email đã tồn tại!');  
        return redirect()->back();
         }
         
        
    }
}
