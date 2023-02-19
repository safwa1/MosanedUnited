<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{

   public function form()
   {

   }


   public function Callbok()
   {

   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $peyment=$_SERVER['REQUEST_URI'];
        $urk=explode("/", $peyment);

     if($request->status=="paid"){

        $user=User::find($urk[2]);

        $pay=new Payment();
        $pay->idfatoorah=$request->id;
        $pay->status =1;
        $pay->amount=$request->amount;
        $pay->iduser= $user->id;
        $pay->save();

        flash()->addSuccess('لقد تم تسجيلكم بنجاح
        سيتم التواصل معكم من قبل فريق عمل منصة مساند المتحدة لإنشاء متجركم الإلكتروني خلال 30 يوم بحد أقصى');

     }else{

        flash()->addError('فشلت المحاولة يمكنك اعادة المحاولة');

        $user=User::find($urk[2]);
        $user->delete();


     }


        return redirect()->route('thanks');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
