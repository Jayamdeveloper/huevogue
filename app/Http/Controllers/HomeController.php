<?php

namespace App\Http\Controllers;

use App\Http\Controllers\user_interface\Modals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\HomeSlider;
use App\Models\HomeInfo;
use App\Models\Admin;
use App\Models\HomeCollection;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = HomeSlider::all();
        return view("admin.slider", compact('sliders'));
    }
    public function home()
    {
        $home = HomeInfo::all();
        return view("admin.logo", compact('home'));
    }
    public function collection()
    {
        $collection = HomeCollection::all();
        return view("admin.collection", compact("collection"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function uploadSlider(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title1' => 'required',
                'title2' => 'required',
            ],
            [
                'title1.required' => 'Title 1 is required.',
                'title2.required' => 'Title 2 is required.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Validation failed. Please check the form inputs.');
        }

        $title1 = $request->title1;
        $title2 = $request->title2;

        $imagePath = public_path() . '/admin/upload/banner';
        if (!file_exists($imagePath)) {
            mkdir($imagePath, 0755, true);
        }
        $data = [];

        $slider1 = HomeSlider::find(1);
        $slider2 = HomeSlider::find(2);

        if ($request->hasFile('slider1')) {
            $image1 = $request->file('slider1');
            $imageName1 = uniqid() . '.' . $image1->extension();
            $image1->move($imagePath, $imageName1);
            $data['slider1_image'] = '/admin/upload/banner/' . $imageName1;
        }

        if ($request->hasFile('slider2')) {
            $image2 = $request->file('slider2');
            $imageName2 = uniqid() . '.' . $image2->extension();
            $image2->move($imagePath, $imageName2);
            $data['slider2_image'] = '/admin/upload/banner/' . $imageName2;
        }

        if ($slider1 && $slider2) {
            if (isset($data['slider1_image'])) {
                $slider1->update([
                    'title' => $title1,
                    'image' => $data['slider1_image'],
                ]);
            } else {
                $slider1->update([
                    'title' => $title1,
                ]);
            }

            if (isset($data['slider2_image'])) {
                $slider2->update([
                    'title' => $title2,
                    'image' => $data['slider2_image'],
                ]);
            } else {
                $slider2->update([
                    'title' => $title2,
                ]);
            }

            return redirect()->back()->with('success', 'Sliders updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Could not find sliders to update.');
        }

        return redirect()->back()->with('error', 'Banner update failed!.');
    }
    public function uploadCollection(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ],
            [
                'title.required' => 'Title is required.',
                'image.image' => 'The file must be an image.',
                'image.mimes' => 'Supported image formats are: jpeg, png, jpg, gif.',
                'image.max' => 'The maximum file size allowed is 2MB.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Validation failed. Please check the form inputs.');
        }

        $title = $request->title;

        $imagePath = public_path() . '/admin/upload/collection';
        if (!file_exists($imagePath)) {
            mkdir($imagePath, 0755, true);
        }

        $image = HomeCollection::find(1) ?? new HomeCollection();

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = uniqid() . '.' . $imageFile->getClientOriginalExtension();

            $imageFile->move($imagePath, $imageName);
            $image->image = '/admin/upload/collection/' . $imageName;
        }

        $image->title = $title;
        $image->save();

        return redirect()->back()->with('success', 'Collection updated successfully.');
    }
    public function saveAbout(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'about' => 'required',
            ],
            [
                'about.required' => 'About is required.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Validation failed. Please check the form inputs.');
        }

        $about = $request->input('about');

        $home = HomeInfo::find(1) ?? new HomeInfo();

        $home->about = $about;
        if ($home->save()) {
            return response()->json([
                'status' => 'success',
                'message' => 'About updated successfully.'
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update the About. Please try again.'
            ], 500);
        }
    }

    public function saveContact(Request $request)
    {
        $data = $request->all();
        $home = HomeInfo::find(1) ?? new HomeInfo();

        if (isset($data['title'])) {
            $home->contenTitle = $data['title'];
        }
        if (isset($data['contact'])) {
            $home->phone = $data['contact'];
        }
        if (isset($data['email'])) {
            $home->email = $data['email'];
        }

        if ($home->save()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Contact Us field updated successfully.'
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update the field. Please try again.'
            ], 500);
        }
    }
    public function saveHeader(Request $request)
    {
        try {
            $home = HomeInfo::find(1) ?? new HomeInfo();
            if ($request->title != "") {
                $home->title = $request->title;
            }
            $imagePath = public_path() . '/admin/upload/sideImages';
            if (!file_exists($imagePath)) {
                mkdir($imagePath, 0755, true);
            }

            if ($request->hasFile('favicon')) {
                $favicon = $request->file('favicon');
                $faviconName = 'favicon_' . time() . '.' . $favicon->getClientOriginalExtension();
                $favicon->move($imagePath, $faviconName);
                $home->favicon = 'admin/upload/sideImages/' . $faviconName;
            }

            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $logoName = 'logo_' . time() . '.' . $logo->getClientOriginalExtension();
                $logo->move($imagePath, $logoName);
                $home->logo = 'admin/upload/sideImages/' . $logoName;
            }

            if ($home->save()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Site information updated successfully.'
                ], 200);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Failed to update site information. Please try again.'
                ], 500);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred: ' . $e->getMessage()
            ], 500);
        }
    }




    /**
     * Store a newly created resource in storage.
     */
    public function changePassword(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'newPassword' => 'required|min:8',
                'confirmPassword' => 'required|min:8',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first()]);
        }
        if ($request->newPassword != $request->confirmPassword) {
            return response()->json(['message' => 'The new password field confirmation does not match.']);
        }

        // $user = Admin::where('email', 'jayamweb.developer2@gmail.com') ?? new Admin();
        $user = Admin::find(1) ?? new Admin();
        $user->password = Hash::make($request->newPassword);
        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Password updated successfully.'
        ], 200);
    }
    public function changeProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = Admin::find(1) ?? new Admin();
        $user->username = $request->name;
        $user->email = $request->email;

        $imagePath = public_path() . '/admin/upload/AdminImages';
        if (!file_exists($imagePath)) {
            mkdir($imagePath, 0755, true);
        }
        if ($request->hasFile('image')) {
            $profileImage = $request->file('image');
            $logoName = 'profile_' . time() . '.' . $profileImage->getClientOriginalExtension();
            $profileImage->move($imagePath, $logoName);
            $user->profileImage = 'admin/upload/AdminImages/' . $logoName;
        }
        $user->save();

        return response()->json(['success' => 'Profile updated successfully']);
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
