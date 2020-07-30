<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\NewsletterSubscribed;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function show(Subscriber $subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscriber $subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscriber $subscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscriber $subscriber)
    {
        //
    }

    /**
     *  Process Newsletter Subscription
     *
     */
    public function subscribe (Request $request) {
        $request->validate(['email' => 'required|email|unique:subscribers,email']);
        $data = Subscriber::create(["email" => $request->email, "verification_token" => Str::random(64)]);
        if($data)
        {
            Mail::to($data)->send(new NewsletterSubscribed($data));
            return redirect()->back()->with(['successMsg' => "Please check your email for verifying your subscription."]);
        }
        else
            return redirect()->back()->with(['errorMsg' => "An unknow error occured. Please try again later."]);
    }
    /**
     *  Verify Newsletter subscription
     *
     */
    public function verify($token) {
        $data = Subscriber::where('verification_token', $token)->first();
        if($data)
        {
            $data->verified = 1;
            $data->save();
            return redirect()->back()->with(['successMsg' => "Thanks for verifying your email subscription."]);
        }
        else
            return redirect()->back()->with(['errorMsg' => "An unknow error occured. Please try again later."]);


    }
}
