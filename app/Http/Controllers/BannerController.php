<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Http\Requests\BannerCreateRequest;
use App\Http\Requests\bannerEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use DOMDocument;
class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::find(Auth::user()->id);
        return view('banners/index')->with('banners', $user->banners);
    }

    public function addPage()
    {
        return view('banners/addPage');
    }

    public function create(BannerCreateRequest $request)
    {

        if ($request->has('banner_image')) {
            $store = $request->banner_image->store('public');
            if (!$store) {
                return abort(500);
            }

            $banner = new Banner([
                'client_name' => $request->client_name,
                'client_email' => $request->client_email,
                'client_phone' => $request->client_phone,
                'banner_name' => $request->banner_name,
                'banner_image' => explode("/", $store)[1],
                'banner_imgage_width' => $request->banner_imgage_width,
                'banner_image_heigth' => $request->banner_image_heigth,
                'banner_alt' => $request->banner_alt,
                'banner_top_text' => $request->banner_top_text,
                'banner_begin' => $request->banner_begin,
                'banner_end' => $request->banner_end,
                'banner_price_model' => $request->banner_price_model,
                'banner_price' => str_replace(',', '.', str_replace('.', '', $request->banner_price)),
                'banner_impressions_limit' => $request->banner_impressions_limit,
                'banner_clicks_limit' => $request->banner_clicks_limit,
                'user_id' => Auth::user()->id,
                'active' => 1,
                'url' => $request->url
            ]);
            $banner->save();
            return redirect()->route('banner.index');
        } else {
            return abort(500);
        }
    }

    public function show($id)
    {
        $banner = Banner::findOrFail(Crypt::decryptString($id));
        return view('banners/show')->with('banner', $banner);
    }

    public function edit(bannerEditRequest $request)
    {
        $banner = Banner::findOrFail(Crypt::decryptString($request->id));
        if ($request->has('banner_image')) {
            $store = $request->banner_image->store('public');
            if (!$store) {
                return abort(500);
            } else {
                $banner->banner_image = explode('/', $store)[1];
            }
        }
        $banner->client_name = $request->client_name;
        $banner->client_email = $request->client_email;
        $banner->client_phone = $request->client_phone;
        $banner->url = $request->url;
        $banner->banner_name = $request->banner_name;
        $banner->banner_imgage_width = $request->banner_imgage_width;
        $banner->banner_image_heigth = $request->banner_image_heigth;
        $banner->banner_alt = $request->banner_alt;
        $banner->banner_top_text = $request->banner_top_text;
        $banner->banner_begin = $request->banner_begin;
        $banner->banner_end = $request->banner_end;
        $banner->banner_price_model = $request->banner_price_model;
        $banner->banner_price = str_replace(',', '.', str_replace('.', '', $request->banner_price));
        $banner->banner_impressions_limit = $request->banner_impressions_limit;
        $banner->banner_clicks_limit = $request->banner_clicks_limit;

        $banner->save();

        return redirect()->back();
    }

    public function delete(Request $request){
        $banner = Banner::findOrFail(Crypt::decryptString($request->id));
        Storage::delete($banner->banner_image);
        $banner->delete();
        return redirect('banners');
    }

    public function generatecode($id){
        $banner = Banner::findOrFail(Crypt::decryptString($id));

        $dom = new DOMDocument('1.0');
        $iframe  = $dom->createElement('iframe');
        $iframeSrc = $dom->createAttribute('src');
        $iframeSrc->value = route('link.generate',[$banner->id]);
        $iframeFrameborder = $dom->createAttribute('frameborder');
        $iframeFrameborder->value = 0;
        $iframeWidth = $dom->createAttribute('width');
        $iframeWidth->value = $banner->banner_imgage_width;
        $iframeHeigth = $dom->createAttribute('height');
        $iframeHeigth->value = $banner->banner_image_heigth;
        $iframeScroll = $dom->createAttribute('scrolling');
        $iframeScroll->value = 'no';
        $iframe->appendChild($iframeSrc);
        $iframe->appendChild($iframeFrameborder);
        $iframe->appendChild($iframeScroll);
        $iframe->appendChild($iframeWidth);
        $iframe->appendChild($iframeHeigth);

//        $html = $dom->createElement('html');
//        $body = $dom->createElement('body');
//
//        $a = $dom->createElement('a');
//        $aHref= $dom->createAttribute('href');
//        $aHref->value = $banner->url;
//        $a->appendChild($aHref);
//
//        $img = $dom->createElement('img');
//        $imgSrc = $dom->createAttribute('src');
//        $imgSrc->value= asset('storage/'.$banner->banner_image);
//        $img->appendChild($imgSrc);
//
//
//
//        $a->appendChild($img);
//        $body->appendChild($a);
//        $html->appendChild($body);
//        $iframe->appendChild($html);
        $dom->appendChild($iframe);
        return  view('banners/code')->with('code', $dom->saveHTML());
    }
}
