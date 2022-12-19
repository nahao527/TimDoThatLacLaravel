<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaiViet;
use App\Models\BinhLuan;
use App\Models\TheoDoiBaiViet;
use App\Models\ThongBao;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BaiVietController extends Controller
{
    public function DanhSachBaiVietChoDuyet()
    {
        $dsBaiVietCanDuyet=BaiViet::where('trang_thai', '=', '0')->paginate(8);
        return view('quan-tri.ds-bai-viet-cho-duyet',compact('dsBaiVietCanDuyet'))->with('i',(request()->input('page', 1)-1)*8);
    }
    public function DanhSachBaiViet()
    {
        if(Auth::user()->adm == 1)
        {
            $dsBaiViet=BaiViet::where('trang_thai', '=', '1')->paginate(8);
            return view('quan-tri.ds-bai-viet',compact('dsBaiViet'))->with('i',(request()->input('page', 1)-1)*8);
        }
        return redirect()->route('show-trang-chu');
    }
    public function DanhSachBaiVietLuaDao()
    {
            $dsBaiVietLuaDao=BaiViet::where('trang_thai', '=', '1')->where('muc_do',2)->get();
            return view('quan-tri.ds-bai-viet-lua-dao',compact('dsBaiVietLuaDao'));
            return redirect()->route('show-trang-chu');
    }
    public function ShowBaiVietThuCung()
    {
        if(Auth::user())
        {
        $CanhBaoList = ThongBao::where('nguoi_nhan_id',Auth::user()->id)->get();
        $dsBaiVietThuCung=BaiViet::where('tag','=', 'thú cưng')->get();
            return view('bai-viet.thu-cung', ['dsBaiVietThuCung'=>$dsBaiVietThuCung, 'CanhBaoList'=>$CanhBaoList]);
        }
        $dsBaiVietThuCung=BaiViet::where('tag','=', 'thú cưng')->get();
            return view('bai-viet.thu-cung', ['dsBaiVietThuCung'=>$dsBaiVietThuCung]);
        
    }

    public function ShowBaiVietXe()
    {
        if(Auth::user())
        {
        $CanhBaoList = ThongBao::where('nguoi_nhan_id',Auth::user()->id)->get();
        $dsBaiVietXe=BaiViet::where('tag','=', 'xe')->get();
            return view('bai-viet.xe', ['dsBaiVietXe'=>$dsBaiVietXe, 'CanhBaoList'=>$CanhBaoList]);
        }
        $dsBaiVietXe=BaiViet::where('tag','=', 'xe')->get();
            return view('bai-viet.xe', ['dsBaiVietXe'=>$dsBaiVietXe]);
        
    }
    public function ShowBaiVietNhatDo()
    {
        if(Auth::user())
        {
        $CanhBaoList = ThongBao::where('nguoi_nhan_id',Auth::user()->id)->get();
        $dsBaiVietNhatDo=BaiViet::where('tag','=', 'nhặt đồ')->get();
            return view('bai-viet.nhat', ['dsBaiVietNhatDo'=> $dsBaiVietNhatDo, 'CanhBaoList'=> $CanhBaoList]);
        }
        $dsBaiVietNhatDo=BaiViet::where('tag','=', 'nhặt đồ')->get();
            return view('bai-viet.nhat', ['dsBaiVietNhatDo'=> $dsBaiVietNhatDo]);
        
    }
    public function ShowBaiVietMatDo()
    {
        if(Auth::user())
        {
            $CanhBaoList = ThongBao::where('nguoi_nhan_id',Auth::user()->id)->get();
        $dsBaiVietMatDo=BaiViet::where('tag','=', 'mất đồ')->get();
            return view('bai-viet.mat-do', ['dsBaiVietMatDo'=>$dsBaiVietMatDo, 'CanhBaoList' =>$CanhBaoList]);
        }
        $dsBaiVietMatDo=BaiViet::where('tag','=', 'mất đồ')->get();
            return view('bai-viet.mat-do', ['dsBaiVietMatDo'=>$dsBaiVietMatDo]);
        
    
}
    public function ShowBaiVietTrangChu()
    {
        if(Auth::user())
        {
            $dsBaiViet=BaiViet::where('trang_thai', '=', '1')->where('muc_do',0)->orderBy('id','DESC')->get();    
            $dsBaiVietUuTien=BaiViet::where('trang_thai', '=', '1')->where('muc_do',1)->orderBy('id','DESC')->get();    
            $CanhBaoList = ThongBao::where('nguoi_nhan_id',Auth::user()->id)->get();
            return view('bai-viet.trang-chu', ['dsBaiViet'=>$dsBaiViet, 'CanhBaoList' => $CanhBaoList, 'dsBaiVietUuTien' => $dsBaiVietUuTien]);

        };
        $dsBaiViet=BaiViet::where('trang_thai', '=', '1')->where('muc_do',0)->orderBy('id','DESC')->get();    
        $dsBaiVietUuTien=BaiViet::where('trang_thai', '=', '1')->where('muc_do',1)->orderBy('id','DESC')->get();      
        return view('bai-viet.trang-chu', ['dsBaiViet'=>$dsBaiViet, 'dsBaiVietUuTien' => $dsBaiVietUuTien]);
    }
    public function ShowBaiVietLuaDao()
    {
        if(Auth::user())
        {
        $CanhBaoList = ThongBao::where('nguoi_nhan_id',Auth::user()->id)->get();
        $dsBaiVietLuaDao=BaiViet::where('trang_thai', '=', '1')->where('muc_do',2)->get();    
        return view('bai-viet.scamer', ['dsBaiVietLuaDao'=>$dsBaiVietLuaDao, 'CanhBaoList' => $CanhBaoList]);
        }
        $dsBaiVietLuaDao=BaiViet::where('trang_thai', '=', '1')->where('muc_do',2)->get();    
        return view('bai-viet.scamer', ['dsBaiVietLuaDao'=>$dsBaiVietLuaDao]);
    }
    public function ShowDangTin()
    {
        $CanhBaoList = ThongBao::where('nguoi_nhan_id',Auth::user()->id)->get();
        return view('bai-viet.dang-tin', compact('CanhBaoList'));
    }
    
    public function DangBai(Request $request)
    {
        $check= $request->hasFile('images1') ? true: false;
            if ($check == true)
            {
                $file1 = $request->file('images1');
                $destination_Path = public_path('images');
                $file_Name1=$file1->getClientOriginalName();
                $file1->move($destination_Path,$file_Name1);
            }
            else
            {
                $file_Name1 = "";
            }

        $check= $request->hasFile('images2') ? true: false;
            if ($check == true)
            {
                $file2 = $request->file('images2');
                $destination_Path = public_path('images');
                $file_Name2=$file2->getClientOriginalName();
                $file2->move($destination_Path,$file_Name2);
            }
            else
            {
                $file_Name2 = "";
            }
            
            $check= $request->hasFile('images3') ? true: false;
            if ($check == true)
            {
                $file3 = $request->file('images3');
                $destination_Path = public_path('images');
                $file_Name3=$file3->getClientOriginalName();
                $file3->move($destination_Path,$file_Name3);
            }
            else
            {
                $file_Name3 = "";
            }

            $check= $request->hasFile('images4') ? true: false;
            if ($check == true)
            {
                $file4 = $request->file('images4');
                $destination_Path = public_path('images');
                $file_Name4=$file4->getClientOriginalName();
                $file4->move($destination_Path,$file_Name4);
            }
            else
            {
                $file_Name4 = "";
            }

            $check= $request->hasFile('images5') ? true: false;
            if ($check == true)
            {
                $file5 = $request->file('images5');
                $destination_Path = public_path('images');
                $file_Name5=$file5->getClientOriginalName();
                $file5->move($destination_Path,$file_Name5);
            }
            else
            {
                $file_Name5 = "";
            }
            
            if(Auth::user()->adm == 1)
            {
                $BaiViet = new BaiViet;
                $BaiViet->nguoi_dung_id=Auth::user()->id;
                $BaiViet->ten_nguoi_dung=Auth::user()->ho_ten;
                $BaiViet->tieu_de=$request->title;
                $BaiViet->noi_dung=$request->description;
                $BaiViet->loai_do=$request->theloai;
                $BaiViet->so_dien_thoai=$request->phone_number;
                $BaiViet->tag=$request->post_type_id;
                $BaiViet->thanh_pho=$request->thanhpho; 
                $BaiViet->hinh_anh_1=$file_Name1;
                $BaiViet->hinh_anh_2=$file_Name2;
                $BaiViet->hinh_anh_3=$file_Name3;
                $BaiViet->hinh_anh_4=$file_Name4;
                $BaiViet->hinh_anh_5=$file_Name5;
                $BaiViet->vi_tri="";
                $BaiViet->trang_thai= "1";
                $BaiViet->muc_do= "2";
                $BaiViet->save();
            }
            else
            {
                $BaiViet = new BaiViet;
                if($request->post_type_id_stt == '1')
                {
                    $BaiViet->trang_thai= "1";
                }
            $BaiViet->nguoi_dung_id=Auth::user()->id;
            $BaiViet->ten_nguoi_dung=Auth::user()->ho_ten;
            $BaiViet->muc_do=$request->post_type_id_stt;
            $BaiViet->tieu_de=$request->title;
            $BaiViet->loai_do=$request->theloai;
            $BaiViet->so_dien_thoai=$request->phone_number;
            $BaiViet->noi_dung=$request->description;
            $BaiViet->tag=$request->post_type_id;
            $BaiViet->thanh_pho=$request->thanhpho;
            $BaiViet->vi_tri=$request->address;
            $BaiViet->hinh_anh_1=$file_Name1;
            $BaiViet->hinh_anh_2=$file_Name2;
            $BaiViet->hinh_anh_3=$file_Name3;
            $BaiViet->hinh_anh_4=$file_Name4;
            $BaiViet->hinh_anh_5=$file_Name5;
            $BaiViet->save();
            }
            Alert::success('Đăng tin thành công','Vui lòng đợi quản trị viên duyệt bài của bạn');   
        return redirect()->route('show-trang-chu');
        
    }
    public function XoaBai($id)
    {
        $xoaBai = BaiViet::find($id);
        if(empty($xoaBai)){
        Alert::error('Bài viết không còn tồn tại');
        return redirect()->route('show-ds-bai-viet-duyet');
            
        }
        $bvthongbao = new ThongBao;
        $bvthongbao->tieu_de_post = $xoaBai->tieu_de;
        $bvthongbao->nguoi_nhan_id = $xoaBai->nguoi_dung_id;
        $bvthongbao->bai_viet_id = $xoaBai->id;
        $bvthongbao->tieu_de = 'Bài viết của bạn đã bị xóa!';
        $bvthongbao->noi_dung = 'Có vẻ như bài viết của bạn đã vi phạm tiêu chuẩn cộng đồng';
        $bvthongbao->save();
        $xoaBai->delete();
        Alert::success('Bạn đã xóa bài viết' .$xoaBai->tieu_de);
        return redirect()->route('show-ds-bai-viet');
    }
    public function ShowChiTietBaiViet($id)
    {   
        $Binhluan = BinhLuan::where('bai_viet_id',$id)->orderBy('id','DESC')->get();
        $ctBaiViet = BaiViet::find($id);
        if(empty($ctBaiViet)){
            Alert::error('Bài viết không còn tồn tại');
            return view('bai-viet.chi-tiet', compact('ctBaiViet'));
         }
        return view('bai-viet.chi-tiet', ['ctBaiViet' => $ctBaiViet, 'Binhluan' => $Binhluan]);
        
    }
    public function DuyetBai($id)
    {
        $duyetBai = BaiViet::find($id);
        if(empty($duyetBai)){
            Alert::error('Bài viết không tồn tại');
        return redirect()->route('show-ds-bai-viet-duyet');
        }
        $duyetBai->trang_thai ='1';
        $duyetBai->save();
        $thongbaoDuyet = new ThongBao();
        $thongbaoDuyet->tieu_de_post = $duyetBai->tieu_de;
        $thongbaoDuyet->nguoi_nhan_id = $duyetBai->nguoi_dung_id;
        $thongbaoDuyet->bai_viet_id = $duyetBai->id;
        $thongbaoDuyet->tieu_de = "Bài viết của bạn đã được duyệt";
        $thongbaoDuyet->noi_dung = "Hãy theo dõi những thông báo mới nhé!";
        $thongbaoDuyet->save();
        Alert::success('Đã duyệt bài viết');
        return redirect()->route('show-ds-bai-viet-duyet');
    }
    public function ShowCanhBao($id)
    {
        $BaiVietCB = BaiViet::find($id);
        return view('quan-tri.canh-bao', compact('BaiVietCB'));
    }
    public function XuLyCanhBao(Request $request, $id)
    {
        $BaiViet = BaiViet::find($id);
        $id_user = $BaiViet->nguoi_dung_id;
        $tieu_de_post = $BaiViet->tieu_de;
        $CanhBao = new ThongBao;
        $CanhBao->tieu_de_post=$tieu_de_post;
        $CanhBao->nguoi_nhan_id=$id_user;
        $CanhBao->bai_viet_id=$request->id;
        $CanhBao->tieu_de=$request->rp_id_type;
        $CanhBao->noi_dung=$request->rp_id_type_des;
        $CanhBao->save();  
        return redirect()->route('show-ds-bai-viet-duyet');
    }
    public function DSTB()
    {
        $CanhBaoList = ThongBao::where('nguoi_nhan_id',Auth::user()->id)->orderBy('id','DESC')->get();
        return view('layouts.main-layouts-2', compact('CanhBaoList'));
    }
    public function XoaBaiCn($id)
    {
        $xoaBaicn = BaiViet::find($id);
        if(empty($xoaBaicn)){
            Alert::error('Bài viết không còn tồn tại');
            return redirect()->route('thong-tin-user',['id'=>Auth::user()->id]);
        }
        $xoaBaicn->delete();
        Alert::success('Bạn đã xóa bài viết '.$xoaBaicn->tieu_de);
        return redirect()->route('thong-tin-user',['id'=>Auth::user()->id]);
    }
    public function DaNhan($id)
    {
        $xoaBaicn = BaiViet::find($id);
        if(empty($xoaBaicn)){
            Alert::error('Bài viết không còn tồn tại');
            return redirect()->route('thong-tin-user',['id'=>Auth::user()->id]);
        }
        $xoaBaicn->delete();
        Alert::success('Bạn đã đánh dấu đã nhận bài viết! '.$xoaBaicn->tieu_de);
        return redirect()->route('thong-tin-user',['id'=>Auth::user()->id]);
    }
    public function ShowTips()
    {
        return view('about-us.tips');
    }
    public function ShowAboutUs()
    {
        return view('about-us.about-us-layout');
    }
    public function ShowSuaBaiViet($id)
    {
        $CanhBaoList = ThongBao::where('nguoi_nhan_id',Auth::user()->id)->get();
        $SuaBaiViet = BaiViet::find($id);
        if(empty($SuaBaiViet)){
            Alert::error('Bài viết không còn tồn tại');
            return redirect()->route('show-trang-chu');
         }
        return view('tai-khoan.sua-bai-viet',['SuaBaiViet' => $SuaBaiViet, 'CanhBaoList' => $CanhBaoList]);
    }
    public function SuaBaiViet(Request $request, $id)
    {
        $SuaBaiViet = BaiViet::find($id);
        $check= $request->hasFile('images1') ? true: false;
            if ($check == true)
            {
                $file1 = $request->file('images1');
                $destination_Path = public_path('images');
                $file_Name1=$file1->getClientOriginalName();
                $file1->move($destination_Path,$file_Name1);
            }
            else
            {
                $file_Name1 = $SuaBaiViet->hinh_anh_1;
            }

        $check= $request->hasFile('images2') ? true: false;
            if ($check == true)
            {
                $file2 = $request->file('images2');
                $destination_Path = public_path('images');
                $file_Name2=$file2->getClientOriginalName();
                $file2->move($destination_Path,$file_Name2);
            }
            else
            {
                $file_Name2 = $SuaBaiViet->hinh_anh_2;
            }
            
            $check= $request->hasFile('images3') ? true: false;
            if ($check == true)
            {
                $file3 = $request->file('images3');
                $destination_Path = public_path('images');
                $file_Name3=$file3->getClientOriginalName();
                $file3->move($destination_Path,$file_Name3);
            }
            else
            {
                $file_Name3 = $SuaBaiViet->hinh_anh_3;
            }

            $check= $request->hasFile('images4') ? true: false;
            if ($check == true)
            {
                $file4 = $request->file('images4');
                $destination_Path = public_path('images');
                $file_Name4=$file4->getClientOriginalName();
                $file4->move($destination_Path,$file_Name4);
            }
            else
            {
                $file_Name4 = $SuaBaiViet->hinh_anh_4;
            }

            $check= $request->hasFile('images5') ? true: false;
            if ($check == true)
            {
                $file5 = $request->file('images5');
                $destination_Path = public_path('images');
                $file_Name5=$file5->getClientOriginalName();
                $file5->move($destination_Path,$file_Name5);
            }
            else
            {
                $file_Name5 = $SuaBaiViet->hinh_anh_5;
            }
        if(Auth::user()-> adm == 0)
        {
            $SuaBaiViet->tieu_de=$request->title;
        $SuaBaiViet->tag=$request->post_type_id;
        $SuaBaiViet->noi_dung=$request->description;
        $SuaBaiViet->loai_do=$request->theloai;
        $SuaBaiViet->so_dien_thoai=$request->phone_number;
        $SuaBaiViet->vi_tri=$request->address;
        $SuaBaiViet->thanh_pho=$request->thanhpho;
        $SuaBaiViet->hinh_anh_1=$file_Name1;
        $SuaBaiViet->hinh_anh_2=$file_Name2;
        $SuaBaiViet->hinh_anh_3=$file_Name3;
        $SuaBaiViet->hinh_anh_4=$file_Name4;
        $SuaBaiViet->hinh_anh_5=$file_Name5;
        $SuaBaiViet->save();
        Alert::success('Sửa bài viết thành công');
        return redirect()->route('show-sua-bai-viet',['id'=>$SuaBaiViet->id]);
        }
        else
        {
            $BaiViet = new BaiViet;
                $BaiViet->nguoi_dung_id=Auth::user()->id;
                $BaiViet->ten_nguoi_dung=Auth::user()->ho_ten;
                $BaiViet->tieu_de=$request->title;
                $BaiViet->noi_dung=$request->description;
                $BaiViet->loai_do=$request->theloai;
                $BaiViet->so_dien_thoai= Auth::user()->so_dien_thoai;
                $BaiViet->tag=$request->post_type_id;
                $BaiViet->thanh_pho=$request->thanhpho; 
                $BaiViet->hinh_anh_1=$file_Name1;
                $BaiViet->hinh_anh_2=$file_Name2;
                $BaiViet->hinh_anh_3=$file_Name3;
                $BaiViet->hinh_anh_4=$file_Name4;
                $BaiViet->hinh_anh_5=$file_Name5;
                $BaiViet->vi_tri="";
                $BaiViet->trang_thai= "1";
                $BaiViet->muc_do= "2";
                $BaiViet->save();
                Alert::success('Sửa bài viết thành công');
        return redirect()->route('show-ds-bai-viet-ld');
        }
    }
    public function ShowCtBaiViet($id)
    {
        $ctBaiVietQT = BaiViet::find($id);
        return view('quan-tri.chi-tiet-bai-viet', compact('ctBaiVietQT'));
    }

    public function TimKiem(Request $request)
    {  
        if(Auth::user())
        {
            $CanhBaoList = ThongBao::where('nguoi_nhan_id',Auth::user()->id)->get();
        $listTimKiem = BaiViet::where('tieu_de','like','%'.$request->search.'%')->where('trang_thai',1)->get();
        return view('bai-viet.tim-kiem',['listTimKiem'=>$listTimKiem, 'CanhBaoList' =>$CanhBaoList]);
        }
        $listTimKiem = BaiViet::where('tieu_de','like','%'.$request->search.'%')->where('trang_thai',1)->get();
        return view('bai-viet.tim-kiem',['listTimKiem'=>$listTimKiem]);

    }
    public function LuuBaiViet($id)
    {
        $LuuBaiViet = BaiViet::find($id);
        if(empty($LuuBaiViet))
        {
            Alert::error('Bài viết không còn tồn tại');
            return redirect()->route('show-trang-chu');
        }
        $checkBaiVietid = TheoDoiBaiViet::where('bai_viet_id',$id)->where('nguoi_dung_id',Auth::user()->id)->first();
        if(!$checkBaiVietid)
        {
        $Luu = new TheoDoiBaiViet;
        $Luu->bai_viet_id = $id;
        $Luu->nguoi_dung_id = Auth::user()->id;
        $Luu->tieu_de = $LuuBaiViet->tieu_de;
        $Luu->noi_dung = $LuuBaiViet->noi_dung;
        $Luu->save();
        Alert::success('Bạn đã theo dõi bài viết này!');
        return redirect()->route('show-chi-tiet-bv',['id' => $id]);
        }
        else
        {
            Alert::error('Bạn đã theo dõi bài viết này rồi');
            return redirect()->route('show-chi-tiet-bv',['id' => $id]);
        }

    }
    public function BoTheoDoi($id)
    {
        $boTheoDoi = TheoDoiBaiViet::find($id);
        if(empty($boTheoDoi)){
            Alert::error('Bài viết không còn tồn tại');
            return redirect()->route('thong-tin-user',['id'=>Auth::user()->id]);
        }
        $boTheoDoi->delete();
        Alert::success('Bạn đã bỏ theo dõi bài viết này');
        return redirect()->route('thong-tin-user',['id'=>Auth::user()->id]);
    }
    public function BinhLuan(Request $request, $id)
    {
        $request->validate([
            'comment_content' => ['required','min:3'],
        ],[
            'comment_content.required' => 'Vui lòng nhập nội dung bình luận',
            'comment_content.min' => 'Bình luận phải trên 3 ký tự',
        ]
         );
        $BaiViet = BaiViet::find($id);
        $BinhLuan = new BinhLuan();
        $BinhLuan->anh_dai_dien = Auth::user()->avatar;
        $BinhLuan->ten_nguoi_dung = Auth::user()->ho_ten;
        $BinhLuan->bai_viet_id = $id;
        $BinhLuan->nguoi_dung_id = Auth::user()->id;
        $BinhLuan->noi_dung = $request->comment_content;
        $BinhLuan->save();
        return redirect()->route('show-chi-tiet-bv', ['id' => $BaiViet->id]);
    }
    
}
