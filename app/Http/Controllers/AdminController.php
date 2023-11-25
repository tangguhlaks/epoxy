<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gallery;
use App\Models\Harga;
use App\Models\Network;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'user' => User::where('role',1)->count(),
            'gallery' => Gallery::all()->count(),
            'harga' => Harga::all()->count(),
            'slider' => Slider::all()->count()
        ];
        return view('admin.index',$data);
    }
    // public function user()
    // {
    //     $data = [
    //         'user' => User::where('role',1)->get()
    //     ];

    //     return view('admin.user',$data);
    // }
    public function slider()
    {
        $sliderlist = Slider::all();
        $data = [
            'sliderlist' => $sliderlist
        ];

        return view('admin.slider',$data);
    }
    public function addSlider(Request $request)
    {

        $slidercount = Slider::all()->count();
        $slidercount +=1;
        $request->validate([
            'text' => 'required',
            'title' => 'required',
            'file' =>'required|file|mimes:png,jpg,jpeg|max:2400'
        ]);
        $file = Request()->file;
        $filename = 'slider'.$slidercount.'.'.$file->extension();
        $file->move(public_path('images/slider'),$filename);
        $slider = new Slider();
        $slider->title = Request()->title;
        $slider->text = Request()->text;
        $slider->image = $filename;
        $slider->save();
        return redirect(url('slider'))->with('message',"Data Added successfully");
    }
    public function deleteSlider($id)
    {
        $data = Sliders::where('id',$id)->first();
        unlink(public_path('images/slider/'.$data->image));
        Slider::where('id',$id)->delete();
        return redirect(url('slider'))->with('message',"Data Deleted successfully");
    }
    public function about()
    {
        $aboutlist = About::all();
        $data = [
            'aboutlist' => $aboutlist
        ];

        return view('admin.about',$data);
    }
    public function addAbout(Request $request)
    {
        $aboutcount = About::all()->count();
        $aboutcount +=1;
        $request->validate([
            'title' => 'required',
            'title2' => 'required',
            'text' => 'required',
            'file' =>'required|file|mimes:png,jpg,jpeg|max:2400',
            'text2' => 'required'
        ]);
        $file = Request()->file;
        $filename = 'about'.$aboutcount.'.'.$file->extension();
        $file->move(public_path('images/about'),$filename);

        $about = new About();
        $about->title = Request()->title;
        $about->title2 = Request()->title2;
        $about->text = Request()->text;
        $about->text2 = Request()->text2;
        $about->image = $filename;
        $count = About::all()->count();
        if ($count != 0) {
            $about->selected =0;
        }else{
            $about->selected =1;
        }
        $about->save();
        return redirect(url('about'))->with('message',"Data Added successfully");
    }
    public function addAboutList(Request $request)
    {
        $request->validate([
            'list' => 'required',
            'myid' => 'required'
        ]);
        $about = About::where('id',Request()->myid)->first();
        if ($about->list == "") {
            $about->list = Request()->list;
        }else{
            $about->list = $about->list."~".Request()->list;
        }
        $about->save();
        return redirect(url('about'))->with('message',"List Added successfully");
    }
    public function deleteAboutList($id)
    {
        $about = About::where('id',$id)->first();
        $about->list ="";
        $about->save();
        return redirect(url('about'))->with('message',"List deleted successfully");
    }
    public function deleteAbout($id)
    {
        $about = Abouts::where('id',$id)->first();
        if ($about->selected == 1) {
            return redirect(url('about'))->with('errorMessage',"The data cannot be deleted, because the data is selected");
        }
        $data = Abouts::where('id',$id)->first();
        unlink(public_path('images/about/'.$data->image));
        About::where('id',$id)->delete();
        return redirect(url('about'))->with('message',"Data deleted successfully");
    }
    public function selectAbout($id)
    {
        $ca = About::where('selected',1)->count();
        if ($ca > 0) {
        $about = About::where('selected',1)->first();
        $about->selected = 0;
        $about->save();
        $about = About::where('id',$id)->first();
        $about->selected = 1;
        $about->save();
        }else {
            $about = About::where('id',$id)->first();
            $about->selected = 1;
            $about->save();
        }
        return redirect(url('about'))->with('message',"Data selected successfully");
    }

    // public function rating()
    // {
    //     $ratings = Rating::all();
    //     $data = [
    //         'ratings' => $ratings
    //     ];

    //     return view('admin.rating',$data);
    // }
    // public function deleteRating($id)
    // {
    //     $rating = Rating::where('id',$id)->first();
    //     if ($rating->selected == 1) {
    //         return redirect(url('rating'))->with('errorMessage',"The data cannot be deleted, because the data is selected");
    //     }
    //     Rating::where('id',$id)->delete();
    //     return redirect(url('rating'))->with('message',"Data deleted successfully");
    // }
    // public function message()
    // {
    //     $ratings = Message::all();
    //     $data = [
    //         'messages' => $ratings
    //     ];

    //     return view('admin.message',$data);
    // }
    // public function deleteMessage($id)
    // {
    //     Message::where('id',$id)->delete();
    //     return redirect(url('admin-message'))->with('message',"Data deleted successfully");
    // }
    // public function selectRating($id)
    // {
    //     $rating = Rating::where('id',$id)->first();
    //     if ($rating->selected == 1) {
    //     $rating->selected = 0;
    //     $rating->save();
    //     }else {
    //         $rating->selected = 1;
    //         $rating->save();
    //     }
    //     return redirect(url('rating'))->with('message',"Data selected successfully");
    // }
    // public function room()
    // {
    //     $rooms = Room::all();
    //     $data = [
    //         'rooms' => $rooms
    //     ];

    //     return view('admin.room.room',$data);
    // }
    // public function addRoomPage()
    // {
    //     return view('admin.room.addroom');
    // }
    // public function addRoom(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|unique:rooms',
    //         'price' => 'required',
    //         'description' => 'required',
    //         'description2' => 'required'
    //     ]);
    //     $room = new Room();
    //     $room->title = Request()->title;
    //     $room->price = Request()->price;
    //     $room->description = Request()->description;
    //     $room->description2 = Request()->description2;
    //     if (Request()->service != null ||Request()->service != "") {
    //         $room->service = implode(";",Request()->service);
    //     }
    //     $room->save();
    //     return redirect(url('admin-room'))->with('message',"Room added successfully");
    // }
    // public function editRoomPage($id)
    // {
    //     $myroom = Room::where('id',$id)->first();
    //     $data = [
    //         'myroom' => $myroom
    //     ];
    //     return view('admin.room.editroom',$data);
    // }
    // public function editRoom(Request $request)
    // {
    //     $request->validate([
    //         'id' => 'required',
    //         'title' => 'required',
    //         'price' => 'required',
    //         'description' => 'required',
    //         'description2' => 'required'
    //     ]);
    //     $room = Room::where('id',Request()->id)->first();
    //     $room->title = Request()->title;
    //     $room->price = Request()->price;
    //     $room->description = Request()->description;
    //     $room->description2 = Request()->description2;
    //     if (Request()->service != null ||Request()->service != "") {
    //         $room->service = implode(";",Request()->service);
    //     }
    //     $room->save();
    //     return redirect(url('admin-room'))->with('message',"Room updated successfully");
    // }
    // public function addImageRoom(Request $request)
    // {

    //     $request->validate([
    //         'file' => 'required|file|mimes:png,jpg,jpeg|max:2400',
    //         'id' => 'required'
    //     ]);
    //     $rc = RoomImage::where('id_room',Request()->id)->count();
    //     $rc += 1;
    //     $roomdata = Room::where('id',Request()->id)->first();
    //     $file = Request()->file;
    //     $filename = $roomdata->title.$rc.'.'.$file->extension();
    //     $file->move(public_path('images/rooms'),$filename);
    //     $roomimage = new RoomImage();
    //     $roomimage->id_room = Request()->id;
    //     $roomimage->image = $filename;
    //     if ($rc == 1) {
    //         $roomimage->selected = 1;
    //     }
    //     $roomimage->save();
    //     return redirect(url('admin-room'))->with('message',"Image added successfully");
    // }
    // public function deleteImageRoom($id)
    // {
    //     $data = RoomImage::where('id',$id)->first();
    //     unlink(public_path('images/rooms/'.$data->image));
    //     RoomImage::where('id',$id)->delete();
    //     return redirect(url('admin-room'))->with('message',"Image deleted successfully");
    // }
    // public function selectFavRoom($id)
    // {
    //     $room = Room::where('id',$id)->first();
    //     if ($room->favorite == 0) {
    //         $room->favorite = 1;
    //     }else {
    //         $room->favorite = 0;
    //     }
    //     $room->save();
    //     return redirect(url('admin-room'))->with('message',"Room successfully set to favorite room");
    // }
    // public function selectImageRoom($id,$idroom)
    // {
    //     $ca = RoomImage::where('selected',1)->where('id_room',$idroom)->count();
    //     if ($ca > 0) {
    //     $imgroom = RoomImage::where('selected',1)->where('id_room',$idroom)->first();
    //     $imgroom->selected = 0;
    //     $imgroom->save();
    //     $imgroom = RoomImage::where('id',$id)->where('id_room',$idroom)->first();
    //     $imgroom->selected = 1;
    //     $imgroom->save();
    //     }else {
    //         $imgroom = RoomImage::where('id',$id)->first();
    //         $imgroom->selected = 1;
    //         $imgroom->save();
    //     }
    //     return redirect(url('admin-room'))->with('message',"Data selected successfully");
    // }
    public function gallery()
    {
        $gallerys = Gallery::all();
        $data = [
            'gallerys' => $gallerys
        ];

        return view('admin.gallery',$data);
    }
    public function addGallery(Request $request)
    {

        $gc = Gallery::all()->count();
        $gc +=1;
        $request->validate([
            'file' =>'required|file|mimes:png,jpg,jpeg|max:2400'
        ]);
        $file = Request()->file;
        $filename = 'gallery'.$gc.'.'.$file->extension();
        $file->move(public_path('images/gallery'),$filename);
        $gallery = new Gallery();
        $gallery->image = $filename;
        $gallery->save();
        return redirect(url('admin-gallery'))->with('message',"Data Added successfully");
    }
    public function deleteGallery($id)
    {
        $data = Gallery::where('id',$id)->first();
        unlink(public_path('images/gallery/'.$data->image));
        Gallery::where('id',$id)->delete();
        return redirect(url('admin-gallery'))->with('message',"Data Deleted successfully");
    }
    public function harga()
    {
        $hargas = Harga::all();
        $data = [
            'hargas' => $hargas
        ];

        return view('admin.harga',$data);
    }
    public function addHarga(Request $request)
    {

        $gc = Harga::all()->count();
        $gc +=1;
        $request->validate([
            'harga' => 'required',
            'file' =>'required|file|mimes:png,jpg,jpeg|max:2400'
        ]);
        $file = Request()->file;
        $filename = 'harga'.$gc.'.'.$file->extension();
        $file->move(public_path('images/harga'),$filename);
        $harga = new Harga();
        $harga->harga = Request()->harga;
        $harga->image = $filename;
        $harga->save();
        return redirect(url('admin-harga'))->with('message',"Data Added successfully");
    }
    public function deleteHarga($id)
    {
        $data = Hargas::where('id',$id)->first();
        unlink(public_path('images/harga/'.$data->image));
        Harga::where('id',$id)->delete();
        return redirect(url('admin-harga'))->with('message',"Data Deleted successfully");
    }
    public function network()
    {
        $networks = Network::all();
        $data = [
            'networks' => $networks
        ];

        return view('admin.network',$data);
    }
    public function addNetwork()
    {
        $network = new Network();
        $network->network = "Facebook";
        $network->url = "-";
        $network->save();

        $network = new Network();
        $network->network = "Linkedin";
        $network->url = "-";
        $network->save();

        $network = new Network();
        $network->network = "Instagram";
        $network->url = "-";
        $network->save();

        $network = new Network();
        $network->network = "Email";
        $network->url = "-";
        $network->save();

        $network = new Network();
        $network->network = "Whatsapp";
        $network->url = "-";
        $network->save();
        return redirect(url('network'))->with('message',"Data Added successfully");
    }
    public function editNetwork(Request $request)
    {

        $request->validate([
            'url' => 'required'
        ]);
        $network = Network::where('id',Request()->myid)->first();
        $network->url = Request()->url;
        // $network->save();
        return redirect(url('network'))->with('message',"URL Edited successfully");
    }
    public function deleteNetwork($id)
    {
        Network::where('id',$id)->delete();
        return redirect(url('network'))->with('message',"Data Deleted successfully");
    }
    // public function service()
    // {
    //     $services = Service::all();
    //     $data = [
    //         'services' => $services
    //     ];

    //     return view('admin.service',$data);
    // }
    // public function addService(Request $request)
    // {

    //     $servicecount = Service::all()->count();
    //     $servicecount +=1;
    //     $request->validate([
    //         'title' => 'required',
    //         'text' => 'required',
    //         'icon' => 'required',
    //         'file' =>'required|file|mimes:png,jpg,jpeg|max:2400'
    //     ]);
    //     $file = Request()->file;
    //     $filename = 'service'.$servicecount.'.'.$file->extension();
    //     $file->move(public_path('images/services'),$filename);
    //     $service = new Service();
    //     $service->title = Request()->title;
    //     $service->text = Request()->text;
    //     $service->icon = Request()->icon;
    //     $service->image = $filename;
    //     $service->save();
    //     return redirect(url('service'))->with('message',"Data Added successfully");
    // }
    // public function deleteService($id)
    // {
    //     $data = Service::where('id',$id)->first();
    //     unlink(public_path('images/services/'.$data->image));
    //     Service::where('id',$id)->delete();
    //     return redirect(url('service'))->with('message',"Data Deleted successfully");
    // }
    // public function payment()
    // {
    //     $data = [
    //         'mybook' => Book::all()
    //     ];

    //     return view('admin.payment',$data);
    // }
    // public function changeStatusPayment(Request $request)
    // {
    //     $request->validate([
    //         'status' => 'required'
    //     ]);
    //     $book = Book::where('id',Request()->myid)->first();
    //     $book->status = Request()->status;
    //     $book->save();
    //     if (Request()->status == "Finish") {
    //         Mail::to($book->email)->send(new Finish($book));
    //     }else if (Request()->status == "Payment verified") {
    //         Mail::to($book->email)->send(new Verification($book));
    //     }else if(Request()->status == "Proof of payment rejected"){
    //         Mail::to($book->email)->send(new Rejected($book));
    //     }
    //     return redirect(url('admin-payment'))->with('message',"Status changed successfully");
    // }
    // public function deletePayment($id)
    // {
    //     $book = Book::where('id',$id)->first();
    //     if ($book->proof_of_payment != "" || $book->proof_of_payment != null) {
    //         unlink(public_path('images/proofs/'.$book->proof_of_payment));
    //     }
    //     Book::where('id',$id)->delete();
    //     return redirect(url('admin-payment'))->with('message',"Data Deleted successfully");
    // }
}
