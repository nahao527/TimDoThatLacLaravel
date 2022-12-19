<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaiViet;
use App\Models\ThongBao;
use App\Models\ToCao;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ToCaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ShowToCao($id)
    {
        $CanhBaoList = ThongBao::where('nguoi_nhan_id',Auth::user()->id)->get();
        $tcBaiViet = BaiViet::find($id);
        return view('bai-viet.to-cao', ['tcBaiViet' => $tcBaiViet, 'CanhBaoList' => $CanhBaoList]);
    }
    public function XuLyBaoCao(Request $request)
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
                $dsToCao = new ToCao;
                $dsToCao->nguoi_to_cao_id=Auth::user()->id;
                $dsToCao->bai_viet_to_cao_id=$request->id;
                $dsToCao->tieu_de=$request->rp_id_type;
                $dsToCao->noi_dung=$request->description; 
                $dsToCao->hinh_anh_1=$file_Name1;
                $dsToCao->hinh_anh_2=$file_Name2;
                $dsToCao->save();

        Alert::success('Tố cáo thành công', 'Cám ơn bạn đã báo cáo');
        return redirect()->route('show-trang-chu');
    }
    public function DanhSachBaiVietToCao()
    {
        $dsToCao=ToCao::all();
        return view('quan-tri.ds-to-cao',compact('dsToCao'));
    }

    public function ShowCTTC($id)
    {
        $ctToCao = ToCao::find($id);
        return view('quan-tri.ct-bai-viet-bc', compact('ctToCao'));
    }

    public function XoaBaiVietTC($id)
    {
        $xoaBai = BaiViet::find($id);
        if(empty($xoaBai)){
           Alert::error('Bài viết không còn tồn tại');
        return redirect()->route('show-ds-bai-viet-tc');
        }
        $xoaToCao = ToCao::where('bai_viet_to_cao_id', $xoaBai->id);
        $xoaToCao->delete();
        $xoaBai->delete();
        Alert::success('Đã xóa báo cáo thành công');
        return redirect()->route('show-ds-bai-viet-tc');
    }
    public function XoaBaiTC($id)
    {
        $xoaBaiTC = ToCao::find($id);
        if(empty($xoaBaiTC)){
            return "Không bài viết id: {$id}";
        }
        $xoaBaiTC->delete();
        return redirect()->route('show-ds-bai-viet-tc');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
