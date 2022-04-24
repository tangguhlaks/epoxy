<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Admin;
use App\Mail\AdminMail;
use App\Mail\Message as MailMessage;
use App\Mail\RequestVerification;
use App\Mail\UserMail;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Harga;
use App\Models\Network;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    public function index()
    {
        $data = [
            'whatsapp' => Network::where('network','Whatsapp')->first()->url,
            'facebook' => Network::where('network','Facebook')->first()->url,
            'linkedin' => Network::where('network','Linkedin')->first()->url,
            'instagram' => Network::where('network','Instagram')->first()->url,
            'email' => Network::where('network','Email')->first()->url,
            'slider' => Slider::all(),
            'about' => About::where('selected',1)->first(),
            'galeri' => Gallery::all(),
            'harga' => Harga::all()
        ];
        return view('user.index',$data);
    }
    // public function room()
    // {
    //     $data = [
    //         'rooms' => Room::all(),
    //         'about' =>About::where('selected',1)->first()
    //     ];
    //     return view('user.room.room',$data);
    // }
    // public function roomDetail($id)
    // {
    //     $data = [
    //         'room' => Room::where('id',$id)->first(),
    //         'about' =>About::where('selected',1)->first()
    //     ];
    //     return view('user.room.roomdetail',$data);
    // }
    // public function gallery()
    // {
    //     $data = [
    //         'gallerys' => Gallery::all(),
    //         'about' =>About::where('selected',1)->first()
    //     ];
    //     return view('user.gallery.gallery',$data);
    // }
    // public function bookStep1(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //         'roomtype' => 'required',
    //         'booking_date' => 'required',
    //         'booking_adults' => 'required',
    //     ]);

    //     $book = new Book();
    //     $book->name = Request()->name;
    //     $book->email = Request()->email;
    //     $book->id_room = Request()->roomtype;
    //     $book->booking_date = Request()->booking_date;
    //     $book->booking_adults = Request()->booking_adults;
    //     $book->booking_children = Request()->booking_children;
    //     $book->status = "Order list";


    //     $room = Room::where('id',Request()->roomtype)->first();
    //     $a = explode(' - ',Request()->booking_date);
    //     $df = strtotime($a[1]) - strtotime($a[0]);
    //     $df = $df / (60 * 60 * 24);
    //     $totalpayment = $df*$room->price;

    //     $book->total_payment = $totalpayment;
    //     $book->save();

    //     return redirect(url('book/'.$book->id));
    // }
    // public function bookStep2(Request $request)
    // {
    //     $request->validate([
    //         'phone' => 'required',
    //         'country' => 'required',
    //         'payment_method' => 'required',
    //         'booking_adults' => 'required'
    //     ]);

    //     $puymentnumber = Book::all()->count();
    //     $puymentnumber += 1;
    //     $puymentnumber2 = "HotelNata".$puymentnumber.''.date('Ymd');
    //     $book = Book::where('id',Request()->myid)->first();
    //     $book->phone = Request()->phone;
    //     $book->payment_method = Request()->payment_method;
    //     $book->payment_number = $puymentnumber2;
    //     $book->country = Request()->country;
    //     $book->comment = Request()->comment;
    //     $book->booking_adults = Request()->booking_adults;
    //     $book->booking_children = Request()->booking_children;
    //     $book->status = "Waiting for payment";


    //     $room = Room::where('id',$book->id_room)->first();
    //     $a = explode(' - ',Request()->booking_date);
    //     $df = strtotime($a[1]) - strtotime($a[0]);
    //     $df = $df / (60 * 60 * 24);
    //     $totalpayment = $df*$room->price;

    //     $book->total_payment = $totalpayment;
    //     $book->save();

    //     $this->sendMail('Siennaxaviera@gmail.com',$book,'new reservation admin');
    //     $this->sendMail($book->email,$book,'new reservation');

    //     return redirect(url('mybook'));
    // }
    // public function book($id)
    // {
    //     $data = [
    //         'mybook' => Book::where('id',$id)->first(),
    //         'about' =>About::where('selected',1)->first()
    //     ];
    //     return view('user.book.book',$data);
    // }
    // public function print($id)
    // {
    //     $data = [
    //         'mybook' => Book::where('id',$id)->first(),
    //         'about' =>About::where('selected',1)->first()
    //     ];
    //     return view('user.book.print',$data);
    // }
    // public function mybook()
    // {
    //     $data = [
    //         'mybook' => Book::where('email',auth()->user()->email)->get(),
    //         'about' =>About::where('selected',1)->first()
    //     ];
    //     return view('user.book.mybook',$data);
    // }
    // public function uploadProofPayment(Request $request)
    // {
    //     $request->validate([
    //         'file' =>'required|file|mimes:png,jpg,jpeg|max:2400'
    //     ]);
    //     $book = Book::where('id',Request()->myid)->first();
    //     if ($book->proof_of_payment != "" || $book->proof_of_payment != null) {
    //         unlink(public_path('images/proofs/'.$book->proof_of_payment));
    //     }
    //     $file = Request()->file;
    //     $filename = $book->payment_number.'.'.$file->extension();
    //     $file->move(public_path('images/proofs'),$filename);
    //     $book->proof_of_payment = $filename;
    //     $book->payment_date = date('Y-m-d');
    //     $book->status = "Waiting for verification";
    //     $book->save();

    //     $this->sendMail('Siennaxaviera@gmail.com',$book,'requst verification');
    //     return redirect(url('mybook'))->with('messagebook',"Proof of payment has been uploaded, waiting for verification");
    // }
    // public function deletePayment($id)
    // {
    //     $book = Book::where('id',$id)->first();
    //     if ($book->email == auth()->user()->email) {
    //         if ($book->proof_of_payment != "" || $book->proof_of_payment != null) {
    //             unlink(public_path('images/proofs/'.$book->proof_of_payment));
    //         }
    //         Book::where('id',$id)->delete();
    //         return redirect(url('mybook'))->with('messagebook',"Data Deleted successfully");
    //     }else{
    //         return redirect(url('mybook'))->with('messageerror',"Data Deleted failed");
    //     }
    // }

    // public function sendMail($to,$data,$type)
    // {

    //     switch ($type) {
    //         case 'new reservation admin':
    //             Mail::to($to)->send(new AdminMail($data));
    //             break;
    //         case 'new reservation':
    //             Mail::to($to)->send(new UserMail($data));
    //             break;
    //         case 'requst verification':
    //             Mail::to($to)->send(new RequestVerification($data));
    //             break;
    //         default:
    //             break;
    //     }

    //     return true;
    // }
    // public function addRating(Request $request)
    // {
    //     $request->validate([
    //         'stars' => 'required|max:5',
    //         'text' => 'required'
    //     ]);
    //     $book = Book::where('id',Request()->id_book)->first();
    //     $rating = new Rating();
    //     $rating->id_room = Request()->id_room;
    //     $rating->id_book = Request()->id_book;
    //     $rating->stars = Request()->stars;
    //     $rating->text = Request()->text;
    //     $rating->name = $book->name;
    //     $rating->save();

    //     $book->rating =1;
    //     $book->save();
    //     return redirect(url('mybook'))->with('messagebook',"Rating added successfully");
    // }
    // public function contactMe(Request $request)
    // {
    //     $request->validate([
    //         'email'=>'required',
    //         'name'=>'required',
    //         'text'=>'required'
    //     ]);
    //     $mess = new Message();
    //     $mess->name = Request()->name;
    //     $mess->email = Request()->email;
    //     $mess->text = Request()->text;
    //     $mess->save();
    //     Mail::to('Siennaxaviera@gmail.com')->send(new MailMessage($mess));
    //     return back()->with('message','Your message has been sent to admin, thank you');

    // }
    // public function contactUs()
    // {
    //     $data = [
    //         'about' =>About::where('selected',1)->first()
    //     ];
    //     return view('user.contactme',$data);
    // }
}
